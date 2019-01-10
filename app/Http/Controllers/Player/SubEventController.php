<?php

namespace App\Http\Controllers\Player;
use App\Http\Controllers\Controller ;
use DB ;

use App\Notifications\player\SuggestResult;
use App\Notifications\player\AcceptRejectResult;

use App\Model\Event;
use App\Model\Challenge;
use App\Model\SubEvent;
use App\Model\Result ;
use App\Model\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubEventController extends Controller
{
    
    public function AddSubEvent($id)
    {

        $request = request() ;
        if ($request->EventType == 'event') {
            $res = self::AddSubEventToEvent($request, $id) ;
            $eventId = $id ;
            $event = Event::find($eventId) ;
			$eventType = 'event' ;
            $users = Auth::id() == $event->E_creator_id ?  User::find($event->E_candidate_id) : User::find($event->E_creator_id) ;
			
        } elseif($request->EventType == 'challenge') {
            $res = self::AddSubEventToChallenge($request, $id) ;
            $eventId = $id ;
            $event = Challenge::find($eventId) ;
			$eventType = 'challenge' ;
            $users = Auth::id() == $event->C_creator_id ?  User::find($event->C_candidate_id) : User::find($event->C_creator_id) ;
			
        }
		if ($res == 'true') {
            //return $res;
            $creator = Auth::user() ;
			//$users->notify(new newEvent($creator, $event));
			\Notification::send($users, new SuggestResult($creator,$eventId, $eventType, $users ));
        }
    }

    /*
    * function to delete A Suggested Game
    */
    public function deleteSuggestedGame(SubEvent $SubEvent)
    {
        //return $SubEvent ;

        $DeleteResult = Result::destroy($SubEvent->SubEventResult->id);

        $DeleteSubEvent = SubEvent::destroy($SubEvent->id);

        if ($DeleteResult && $DeleteSubEvent) {
            return 'true' ;
        }else {
            return 'false' ;
        }
    }

    /*
    * function to load patrial view after A player suggest A game to his event
    */
    public function refuseSuggestedGame(SubEvent $SubEvent)
    {
        //return $SubEvent ;

        $SubEventResult = Result::where('E_R_EventId', '=', $SubEvent->id)->first();

        $SubEventResult->E_R_YesOrNo = 1 ;

        $SubEventResult->save();

        if ($SubEventResult) {
            if ($SubEvent->mainEvent_type == 'event') {
                $eventId = $SubEvent->mainEvent_id ;
                $event = Event::find($eventId) ;
                $eventType = 'event' ;
                $users = Auth::id() == $event->E_creator_id ?  User::find($event->E_candidate_id) : User::find($event->E_creator_id) ;
			
            } elseif($SubEvent->mainEvent_type == 'challenge') {
                $eventId = $SubEvent->mainEvent_id ;
                $event = Challenge::find($eventId) ;
                $eventType = 'challenge' ;
                $users = Auth::id() == $event->C_creator_id ?  User::find($event->C_candidate_id) : User::find($event->C_creator_id) ;
                
            }
            $status = 'refuse' ;
            $creator = Auth::user() ;
			//$users->notify(new newEvent($creator, $event));
			\Notification::send($users, new AcceptRejectResult($creator,$eventId, $eventType, $users, $status ));
            return 'true' ;

        }else {
            return 'false' ;
        }
    }

    /*
    * function to Accept a Game suggested and update Game Result
    * and create Main Event Result Or Update it if exist
    */
    public function acceptSuggestedGame(SubEvent $SubEvent)
    {       
        $type = $SubEvent->mainEvent_type ;
        if ($type == 'event') {
            
            self::acceptSuggestedGameEvent($SubEvent) ;
            $eventId = $SubEvent->mainEvent_id ;
            $event = Event::find($eventId) ;
            $eventType = 'event' ;
            $users = Auth::id() == $event->E_creator_id ?  User::find($event->E_candidate_id) : User::find($event->E_creator_id) ;
        } elseif ($type == 'challenge') {

            self::acceptSuggestedGameChallenge($SubEvent) ;
            $eventId = $SubEvent->mainEvent_id ;
            $event = Challenge::find($eventId) ;
            $eventType = 'challenge' ;
            $users = Auth::id() == $event->C_creator_id ?  User::find($event->C_candidate_id) : User::find($event->C_creator_id) ;      
        } 
        
        $status = 'accept' ;
        $creator = Auth::user() ;
        //$users->notify(new newEvent($creator, $event));
        \Notification::send($users, new AcceptRejectResult($creator,$eventId, $eventType, $users, $status ));
        //return 'true' ;
        
    }


    /*
    * function to load patrial view after A player suggest A game to his event
    */
    public function EventGames($Event)
    {
        $Event = Event::with('Applicants')
							->with('creator.playerProfile')
							->with('eventSport')->find($Event) ;
        //return $Event ;

        return view('event.parts.EventGames', compact('Event')) ;
    }


    public static function acceptSuggestedGameEvent(SubEvent $SubEvent)
    {
        $SubEventResult = Result::where('E_R_EventId', '=', $SubEvent->id)->first();

        $SubEventResult->E_R_YesOrNo = 2 ;

        $SubEventResult->E_R_IsFinalResult = 2 ;

        $SubEventResult->save();


        // End PART Of Update who is SubEvent WINER
        //////////////////////////////
        // Start PART Of Update MAIN EVENT WINER ID AND Upate if Exist Or Create MAIN EVENT RESULT
        $CreatorGames =  SubEvent::where('mainEvent_id', '=', $SubEvent->mainEvent_id)
                                    ->where('mainEvent_type', '=', 'event')
                                    ->where('S_E_winer_id', '=', $SubEvent->S_E_creator_id)
                                    ->count();

        $CandidateGames =  SubEvent::where('mainEvent_id', '=', $SubEvent->mainEvent_id)
                                    ->where('mainEvent_type', '=', 'event')
                                    ->where('S_E_winer_id', '=', $SubEvent->S_E_candidate_id)
                                    ->count();

        if ($CreatorGames > $CandidateGames) {
            $MAinEventWiner = $SubEvent->S_E_creator_id ;
        }elseif ($CandidateGames > $CreatorGames) {
            $MAinEventWiner = $SubEvent->S_E_candidate_id ;
        }else {
            $MAinEventWiner = -10 ;
        }

        $MainEvent = Event::find($SubEvent->mainEvent_id);

        $MainEvent->E_winer_id = $MAinEventWiner ;

        $MainEvent->save();


        $MainEventResult =  Result::where('E_R_EventId', '=', $SubEvent->mainEvent_id)
                                    ->where('E_R_event_type', 2 )
                                    ->first();
        if ($MainEventResult) {
            $MainEventResult->E_R_CreatorScore      = $CreatorGames ;
            $MainEventResult->E_R_CandidateScore    = $CandidateGames ;
            $MainEventResult->E_R_IsFinalResult     =  2 ;
            $MainEventResult->E_R_YesOrNo           =  2 ;

            $MainEventResult->save();
        }else {
            $MainEventResult = Result::create([
                            'E_R_OpinionBy'         =>  $SubEvent->S_E_creator_id ,
                            'E_R_ConfirmBy'         =>  $SubEvent->S_E_candidate_id ,
                            'E_R_EventId'           =>  $SubEvent->mainEvent_id ,
                            'Sport_id'              =>  $SubEvent->S_E_sport_id ,
                            'E_R_CreatorScore'      =>  $CreatorGames ,
                            'E_R_CandidateScore'    =>  $CandidateGames ,
                            'E_R_IsFinalResult'     =>  2 ,
                            //'E_R_WinerId'           =>  '' ,
                            'E_R_event_type'        =>  1 ,
                            'E_R_YesOrNo'           =>  2 ,
                            ]);
        }


        // End PART Of Update MAIN EVENT WINER ID AND Upate if Exist Or Create MAIN EVENT RESULT

        if ($SubEventResult) {
            $returned = 'true   '  . $MAinEventWiner. '  ' . $CreatorGames . '  ' .$CandidateGames ;
            return  $returned ;
        }else {
            return 'false' ;
        }
    }

     public static function acceptSuggestedGameChallenge(SubEvent $SubEvent)
    {
        $SubEventResult = Result::where('E_R_EventId', '=', $SubEvent->id)->first();

        $SubEventResult->E_R_YesOrNo = 2 ;

        $SubEventResult->E_R_IsFinalResult = 2 ;

        $SubEventResult->save();


        // End PART Of Update who is SubEvent WINER
        //////////////////////////////
        // Start PART Of Update MAIN EVENT WINER ID AND Upate if Exist Or Create MAIN EVENT RESULT
        $CreatorGames =  SubEvent::where('mainEvent_id', '=', $SubEvent->mainEvent_id)
                                    ->where('mainEvent_type', '=', 'challenge')
                                    ->where('S_E_winer_id', '=', $SubEvent->S_E_creator_id)
                                    ->whereHas('SubEventResult', function ($lquery) {
                                            $lquery->where('E_R_IsFinalResult', '=', 2);
                                        })
                                    ->count();

        $CandidateGames =  SubEvent::where('mainEvent_id', '=', $SubEvent->mainEvent_id)
                                    ->where('mainEvent_type', '=', 'challenge')
                                    ->where('S_E_winer_id', '=', $SubEvent->S_E_candidate_id)
                                    ->whereHas('SubEventResult', function ($lquery) {
                                            $lquery->where('E_R_IsFinalResult', '=', 2);
                                        })
                                    ->count();

        if ($CreatorGames > $CandidateGames) {
            $MAinEventWiner = $SubEvent->S_E_creator_id ;
        }elseif ($CandidateGames > $CreatorGames) {
            $MAinEventWiner = $SubEvent->S_E_candidate_id ;
        }else {
            $MAinEventWiner = -10 ;
        }

        $MainEvent = Challenge::find($SubEvent->mainEvent_id);

        $MainEvent->C_winer_id = $MAinEventWiner ;

        $MainEvent->save();


        $MainEventResult =  Result::where('E_R_EventId', '=', $SubEvent->mainEvent_id)
                                    ->where('E_R_event_type', 3 )
                                    ->first();
        if ($MainEventResult) {
            $MainEventResult->E_R_CreatorScore      = $CreatorGames ;
            $MainEventResult->E_R_CandidateScore    = $CandidateGames ;
            $MainEventResult->E_R_IsFinalResult     =  2 ;
            $MainEventResult->E_R_YesOrNo           =  2 ;

            $MainEventResult->save();
        }else {
            $MainEventResult = Result::create([
                            'E_R_OpinionBy'         =>  $SubEvent->S_E_creator_id ,
                            'E_R_ConfirmBy'         =>  $SubEvent->S_E_candidate_id ,
                            'E_R_EventId'           =>  $SubEvent->mainEvent_id ,
                            'Sport_id'              =>  $SubEvent->S_E_sport_id ,
                            'E_R_CreatorScore'      =>  $CreatorGames ,
                            'E_R_CandidateScore'    =>  $CandidateGames ,
                            'E_R_IsFinalResult'     =>  2 ,
                            //'E_R_WinerId'           =>  '' ,
                            'E_R_event_type'        =>  3 ,
                            'E_R_YesOrNo'           =>  2 ,
                            ]);
        }


        // End PART Of Update MAIN EVENT WINER ID AND Upate if Exist Or Create MAIN EVENT RESULT

        if ($SubEventResult) {
            $returned = 'true   '  . $MAinEventWiner. '  ' . $CreatorGames . '  ' .$CandidateGames ;
            return  $returned ;
        }else {
            return 'false' ;
        }
    }

    /*
    * add subevent for Event
    */
    public static function AddSubEventToEvent(Request $request, $id)
    {
        $Event = Event::find($id) ;
        if ($request->CreatorScore > $request->CandidateScore) {

            $Winer = $Event->E_creator_id ;

        }elseif ($request->CandidateScore > $request->CreatorScore) {

            $Winer = $Event->E_candidate_id ;

        }else {

            $Winer = -10 ;

        }

        $SPORT = $Event->E_sport_id ;
        $Game = SubEvent::create([
            'mainEvent_id'              => $Event->id ,// id for the event contain that SubEvent
            'mainEvent_type'            => $request->EventType,
            'S_E_creator_id'            => $Event->E_creator_id , // SubEvent Creator ID
            'S_E_candidate_id'          => $Event->E_candidate_id , // SubEvent Candidate ID
            'S_E_creator_team'          => $Event->E_creator_team_id ,
            'S_E_candidate_team'        => $Event->E_candidate_team_id ,
            'S_E_sport_id'              => $Event->E_sport_id , // SubEvent Sport ID
            'S_E_playground_id'         => $Event->E_playground_id , // SubEvent Playground ID
            'S_E_R_CreatorScore'        => $request->CreatorScore , // SubEvent Creator Score ID
            'S_E_R_CandidateScore'      => $request->CandidateScore ,
            'S_E_date'                  => $Event->E_date ,
            'S_E_day'                   => $Event->E_day ,
            'S_E_from'                  => $Event->E_from ,
            'S_E_to'                    => $Event->E_to ,
            'S_E_JQueryFrom'            => $Event->E_JQueryFrom ,
            'S_E_JQueryTo'              => $Event->E_JQueryTo ,
            'S_E_winer_id'              => $Winer ,

           ]);

           if ($request->OpinionBy == $Event->E_creator_id) {
               $E_R_ConfirmBy = $Event->E_candidate_id ;
           }elseif ($request->OpinionBy == $Event->E_candidate_id) {
               $E_R_ConfirmBy = $Event->E_creator_id ;
           }
        $GameResult = Result::create([
            'E_R_OpinionBy'         =>  $request->OpinionBy ,
            'E_R_ConfirmBy'         =>  $E_R_ConfirmBy ,
            'E_R_EventId'           =>  $Game->id ,
            'Sport_id'              =>  $SPORT ,
            'E_R_CreatorScore'      =>  $request->CreatorScore ,
            'E_R_CandidateScore'    =>  $request->CandidateScore ,
            'E_R_IsFinalResult'     =>  0 ,
            //'E_R_WinerId'           =>  '' ,
            'E_R_event_type'        =>  2 ,
            'E_R_YesOrNo'           =>  0 ,
            ]);

            if ($Game && $GameResult) {
                return 'true' ;
            }else {
                return 'false' ;
            }
    }


    /*
    * add subevent for Challenge
    */
    public static function AddSubEventToChallenge(Request $request, $id)
    {
        $Challenge = Challenge::find($id) ;
        if ($request->CreatorScore > $request->CandidateScore) {

            $Winer = $Challenge->C_creator_id ;

        }elseif ($request->CandidateScore > $request->CreatorScore) {

            $Winer = $Challenge->C_candidate_id ;

        }else {

            $Winer = -10 ;

        }

        $SPORT = $Challenge->C_sport_id ;
        $Game = SubEvent::create([
            'mainEvent_id'              => $Challenge->id ,// id for the event contain that SubEvent
            'mainEvent_type'            => $request->EventType,
            'S_E_creator_id'            => $Challenge->C_creator_id , // SubEvent Creator ID
            'S_E_candidate_id'          => $Challenge->C_candidate_id , // SubEvent Candidate ID
            'S_E_creator_team'          => $Challenge->C_creator_team_id ,
            'S_E_candidate_team'        => $Challenge->C_candidate_team_id ,
            'S_E_sport_id'              => $Challenge->C_sport_id , // SubEvent Sport ID
            'S_E_playground_id'         => $Challenge->C_playground_id , // SubEvent Playground ID
            'S_E_R_CreatorScore'        => $request->CreatorScore , // SubEvent Creator Score ID
            'S_E_R_CandidateScore'      => $request->CandidateScore ,
            'S_E_date'                  => $Challenge->C_date ,
            'S_E_day'                   => $Challenge->C_day ,
            'S_E_from'                  => $Challenge->C_from ,
            'S_E_to'                    => $Challenge->C_to ,
            'S_E_JQueryFrom'            => $Challenge->C_JQueryFrom ,
            'S_E_JQueryTo'              => $Challenge->C_JQueryTo ,
            'S_E_winer_id'              => $Winer ,

           ]);

           if ($request->OpinionBy == $Challenge->C_creator_id) {
               $E_R_ConfirmBy = $Challenge->C_candidate_id ;
           }elseif ($request->OpinionBy == $Challenge->C_candidate_id) {
               $E_R_ConfirmBy = $Challenge->C_creator_id ;
           }
        $GameResult = Result::create([
            'E_R_OpinionBy'         =>  $request->OpinionBy ,
            'E_R_ConfirmBy'         =>  $E_R_ConfirmBy ,
            'E_R_EventId'           =>  $Game->id ,
            'Sport_id'              =>  $SPORT ,
            'E_R_CreatorScore'      =>  $request->CreatorScore ,
            'E_R_CandidateScore'    =>  $request->CandidateScore ,
            'E_R_IsFinalResult'     =>  0 ,
            //'E_R_WinerId'           =>  '' ,
            'E_R_event_type'        =>  2 ,
            'E_R_YesOrNo'           =>  0 ,
            ]);

            if ($Game && $GameResult) {
                return 'true' ;
            }else {
                return 'false' ;
            }
    }

}
