<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller ;
use App\Model\User;
use App\Model\playerProfile;
use App\Model\Event ;
use App\Model\Challenge ;
use App\Notifications\player\AddRate;
//use willvincent\Rateable\Rating ;
use App\Model\Rate ;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RateController extends Controller
{
    public function AddPlayerRate(Request $request)
    {
        $request = $request ;
        //return $request ;
        switch ($request->EventType) {
            case 'event':
                $Event = Event::find($request->Event);
                $sport = $Event->E_sport_id ;
                $rateablein_type = 'App\Model\Event';
                $rateablein_id = $Event->id ;
                $ratable_id = Auth::id() == $Event->creator->id ? $Event->candidate->playerProfile->id : $Event->creator->playerProfile->id ;

                $eventId = $Event->id ;
                $event = $Event ;
                $eventType = ($request->EventType) ;
                $users = Auth::id() == $event->E_creator_id ?  User::find($event->E_candidate_id) : User::find($event->E_creator_id) ;
			
                break;
            case 'challenge':
                $Event = Challenge::find($request->Event);
                $sport = $Event->C_sport_id ;
                $rateablein_type = 'App\Model\Challenge' ;
                $rateablein_id = $Event->id ;
                $ratable_id = Auth::id() == $Event->creator->id ? $Event->candidate->playerProfile->id : $Event->creator->playerProfile->id ;
                
                $eventId = $Event->id ;
                $event = $Event ;
                $eventType = ($request->EventType) ;
                $users = Auth::id() == $event->C_creator_id ?  User::find($event->C_candidate_id) : User::find($event->C_creator_id) ;
			

                break;
        }
        $totalRating = round( (intval($request->q_1) + intval($request->q_2) + intval($request->q_3) + intval($request->q_4) + intval($request->q_5)) / 5 ) ;
        $playerProfile = playerProfile::find($ratable_id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating  = $totalRating ;
        $rating->rating1 = $request->q_1 ;
        $rating->rating2 = $request->q_2 ;
        $rating->rating3 = $request->q_3 ;
        $rating->rating4 = $request->q_4 ;
        $rating->rating5 = $request->q_5 ;
        $rating->comment = $request->has(['comment']) ? $request->comment : null;
        $rating->sport_id = $sport ;
        $rating->rateablein_id = $rateablein_id ;
        $rating->rateablein_type = $rateablein_type ;
        $rating->user_id = \Auth::id();

        $addRateRecord = $playerProfile->ratings()->save($rating);
        if ($addRateRecord) {
            //return $res;
            $creator = Auth::user() ;
			//$users->notify(new newEvent($creator, $event));
			\Notification::send($users, new AddRate($creator,$eventId, $eventType, $users ));
            return 'true' ;
        }else{
            return 'false' ;
        }



        /////////////////////////////////////////////
        /* if ($request->EventType == 'event') {
            //$res = self::AddSubEventToEvent($request, $id) ;
            $eventId = $Event->id ;
            $event = $Event ;
			$eventType = ($request->EventType) ;
            $users = Auth::id() == $event->E_creator_id ?  User::find($event->E_candidate_id) : User::find($event->E_creator_id) ;
			
        } elseif($request->EventType == 'challenge') {
            //$res = self::AddSubEventToChallenge($request, $id) ;
            $eventId = $Event->id ;
            $event = $Event ;
			$eventType = ($request->EventType) ;
            $users = Auth::id() == $event->C_creator_id ?  User::find($event->C_candidate_id) : User::find($event->C_creator_id) ;
			
        }
		if ($res == 'true') {
            //return $res;
            $creator = Auth::user() ;
			//$users->notify(new newEvent($creator, $event));
			\Notification::send($users, new SuggestResult($creator,$eventId, $eventType, $users ));
        } */
        /////////////////////////////////////////////



    }

    /*
    * function to load patrial view after A player give A rate to Ather player
    */
    public function EventResult($Event)
    {
        $Event = Event::with('Applicants')
							->with('creator.playerProfile')
							->with('eventSport')->find($Event) ;
        //return $Event ;

        return view('event.parts.EventPart_1', compact('Event')) ;
    }















}
