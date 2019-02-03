<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
class FriendshipController extends Controller
{
    public function addFriend($id) 
	{
       $recipient = User::find($id);
        Auth::user()->befriend($recipient);
        return back();
    }
    public function unFriend($id) 
	{
        $friend = User::find($id);
        Auth::user()->unfriend($friend);
        return back();
    }
    public function rejectFriend($id) 
	{
        $sender = User::find($id);
        Auth::user()->denyFriendRequest($sender);
        return back();
    }
    public function blockFriend($friend) 
	{
        Auth::user()->blockFriend($friend);
    }
    public function unblockFriend($friend) 
	{
        Auth::user()->unblockFriend($friend);
    }
    public function acceptRequests($id) 
	{
        $sender = User::find($id);
        Auth::user()->acceptFriendRequest($sender);
        return back();
    }
    public function PendingFriendships() 
	{
        Auth::user()->getPendingFriendships();
    }
    public function FriendRequests() 
	{        
       $friends = Auth::user()->getFriendRequests();
       $title = 'Friendship Requests' ;
       return view('player/friends/friendsRequests',compact('title','friends'));
      
    }
    public function BlockedFriendships($recipient) 
	{
        Auth::user()->getBlockedFriendships();
    }
    public function MutualFriendsCount($anotherUser) 
	{
        Auth::user()->getMutualFriendsCount($anotherUser);
    }
    public function IsFriendwith($friend) 
	{
        $friend_id = $friend;
        $friend = User::find($friend);
       // $friend
        $user_status = Auth::user()->isFriendWith($friend);
        $pending = Auth::user()->hasSentFriendRequestTo($friend);
        $respond = Auth::user()->hasFriendRequestFrom($friend);
        if($pending){
            $status['friend_status'] = 'pending';
        }
        elseif($user_status){
            $status['friend_status'] = 'un';
        }elseif($respond){
            $status['friend_status'] = 'respond';
        }else{
            $status['friend_status'] = 'add';
        }
        $status['dir'] = direction();
        $status['friend_id'] = $friend_id;
        return $status;
    }





////////////////////////Start Function to return json for vue//////////////////////////////
    public function ApiFriendRequests() 
	{      
       // return $users = User::with('playerProfile')->get();  
       $friendRequests = Auth::user()->getFriendRequests();     
       if($friendRequests){
           foreach($friendRequests as $friend){

                $all_requests = $friend->sender->load(['playerProfile.country', 'playerProfile.governorate', 'playerProfile.area']);
                //return $all_requests->playerProfile->averageRating;
                $items['sender'][] = $all_requests;
            }  
       }
       
         
        $allFiendships = Auth::user()->getFriends();   
        if($allFiendships)  {
            foreach($allFiendships as $friend){
               
                $all_friends = $friend->load(['playerProfile.country', 'playerProfile.governorate', 'playerProfile.area']);
                
                $items['all'][] = $all_friends;
            }
        }     
         
       $pendingRequests = Auth::user()->getPendingFriendships();
       if(!empty($pendingRequests)){
           foreach($pendingRequests as $friend){
                if($friend->recipient_id != Auth::id())
                    $id = $friend->recipient_id;
                    if(!empty($id)){
                        $recipient = User::find($id); 
                        $all_pendings = $recipient->load(['playerProfile.country', 'playerProfile.governorate', 'playerProfile.area']);
                        $items['pending'][] = $all_pendings;
                    }
                    
                   
            }
            if(!empty($items['pending'])){
                $items['pending']= array_unique($items['pending']);  
            }
              
       }
       
                
       $items['dir'] = direction();

       return $items;
    }
////////////////////////End Function to return json for vue////////////////////
////////////////////////Start Encrypt Player ID for vue////////////////////
    public function encryptID($id) { 
        return sm_crypt($id);
    }
////////////////////////End Encrypt Player ID for vue////////////////////
}

