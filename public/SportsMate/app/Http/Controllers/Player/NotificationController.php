<?php

namespace App\Http\Controllers\Player;

use Illuminate\Support\Facades\Auth;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /*
    * to get real time noti
    */
    public function newNotiCount(Request $request){
        $allNoti = Auth::user()->notifications->count() ;
        $unreadNoti = Auth::user()->unreadNotifications->count() ;
        if ($allNoti > $request->count) {
            $data=['status' => 'true',
                    'count' => $allNoti,
                    'unreadNoti' => $unreadNoti,
            ];
        }else{
           $data=['status' => 'false',
                    'count' => $allNoti,
            ]; 
        }
        return $data ;
    }

    /*
    * to delete one noti
    */
    public function deleteNoti(Request $request){

        $notification = Auth::user()->notifications()->where('id', $request->noti)->first();
        
        if ($notification) {
            //$notification->markAsRead();
            $notification->delete();
            $allNoti = Auth::user()->notifications->count() ;
            $unreadNoti = Auth::user()->unreadNotifications->count() ;
            $data=['status' => 'deleted',
                    'count' => $allNoti,
                    'unreadNoti' => $unreadNoti,
            ];
        }else{
            $allNoti = Auth::user()->notifications->count() ;
            $data=['status' => 'false',
                    'count' => $allNoti,
            ]; 
        }
        return $data ;
    }

    /*
    * to delete all noti
    */
    public function deleteAllNoti(Request $request){

        $notifications = Auth::user()->notifications()->delete();
        
        if ($notifications) {
            //$notification->markAsRead();
            //$notifications->delete();
            $allNoti = Auth::user()->notifications->count() ;
            $unreadNoti = Auth::user()->unreadNotifications->count() ;
            $data=['status' => 'deleted',
                    'count' => $allNoti,
                    'unreadNoti' => $unreadNoti,
            ];
        }else{
            $allNoti = Auth::user()->notifications->count() ;
            $data=['status' => 'false',
                    'count' => $allNoti,
            ]; 
        }
        return $data ;
    }

    /*
    * to mark one noti as read
    */
    public function markAsReadNoti(Request $request){

        $notification = Auth::user()->notifications()->where('id', $request->noti)->first();
        $allNoti = Auth::user()->notifications->count() ;
        if ($notification) {
            $notification->markAsRead();
            $unreadNoti = Auth::user()->unreadNotifications->count() ;
            $data=['status' => 'marked_as_read',
                    'count' => $allNoti,
                    'unreadNoti' => $unreadNoti,
            ];
        }else{
           $data=['status' => 'false',
                    'count' => $allNoti,
            ]; 
        }
        return $data ;
    }

    /*
    * to mark all noti as read
    */
    public function markAllAsReadNoti(Request $request){

        $notifications = Auth::user()->unreadNotifications;
        $allNoti = Auth::user()->notifications->count() ;
        if ($notifications) {
            $notifications->markAsRead();
            $unreadNoti = Auth::user()->unreadNotifications->count() ;
            $data=['status' => 'all_marked_as_read',
                    'count' => $allNoti,
                    'unreadNoti' => $unreadNoti,
            ];
        }else{
           $data=['status' => 'false',
                    'count' => $allNoti,
            ]; 
        }
        return $data ;
    }


    /*
    * to get all noti view [ site.layouts.nav.notiLoop ] => to reload it
    */
    public function getNoti(){
        $user = Auth::user() ;
        return view('site.layouts.nav.noti') ;
    }
}
