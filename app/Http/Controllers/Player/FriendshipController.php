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




////////////////////////Start Function to return json for vue//////////////////////////////
    public function ApiFriendRequests() 
	{      
       // return $users = User::with('playerProfile')->get();  
       $friendRequests = Auth::user()->getFriendRequests();
       $title = 'Friendship Requests' ;
       foreach($friendRequests as $friend){

           $all_requests = $friend->sender->load(['playerProfile.country', 'playerProfile.governorate', 'playerProfile.area']);
           //return $all_requests->playerProfile->averageRating;
           $items['sender'][] = $all_requests;
       }  
       
       $pendingRequests = Auth::user()->getPendingFriendships();
       foreach($pendingRequests as $friend){
           if($friend->recipient_id != Auth::id())
            $id = $friend->recipient_id;
            $recipient = User::find($id);
            $all_pendings = $recipient->load(['playerProfile.country', 'playerProfile.governorate', 'playerProfile.area']);
            $items['pending'][] = $all_pendings;

       }
       $items['pending']= array_unique($items['pending']);
       $items['dir'] = direction();

       return $items;
    }
////////////////////////End Function to return json for vue////////////////////
}

