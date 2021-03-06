<?php

namespace App\Notifications\player;

use App\Model\User ;
use App\Model\Event ;
use App\Model\Challenge ;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class AcceptRejectResult extends Notification
{
    use Queueable;

    public $eventId;
    public $eventType;
    public $event;
    public $creator;
    public $users;
    public $status;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $creator, $eventId, $eventType, User $users, $status)
    {
        $this->status = $status;
        $this->eventType = $eventType ;
        $this->creator = $creator ;
        $this->users = $users ;
        switch ($eventType) {
            case 'event':
               $this->event = Event::find($eventId);
                break;
            case 'challenge':
                $this->event = Challenge::find($eventId);
                break;
        }
        

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
        //return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view('player.emails.pages.AcceptRejectResult', 
                                        ['creator' => $this->creator,
                                         'eventType' => $this->eventType,
                                         'event' => $this->event,
                                         'users' => $this->users,
                                         'status' => $this->status,
                                     ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {   
        switch ($this->eventType) {
            case 'event':
                return [
                    'ar'                    => $this->status == 'accept' ? "وافق على النتيجه المقترحه لجوله في الحدث الخاص برياضة " . $this->event->eventSport->ar_sport_name : "رفض النتيجه المقترحه لجوله في الحدث الخاص برياضة " . $this->event->eventSport->ar_sport_name,
                    'en'                    => $this->status == 'accept' ? 'accept the result of a match for the event of ' . $this->event->eventSport->en_sport_name : 'refuse the result of a match for the event of ' . $this->event->eventSport->en_sport_name,
                    'user_url'              => '/profile/' . sm_crypt($this->creator->id),
                    'user_img'              => !empty($this->creator->user_img) ? $this->creator->user_img : ''  ,
                    'user_name'             => $this->creator->name ,
                    'taraget_url'           => '/Event/Show/' . sm_crypt($this->event->id),
                ];
                break;
            case 'challenge':
                return [
                    'ar'                    => $this->status == 'accept' ? "وافق على النتيجه المقترحه لجوله في التحدي الخاص برياضة " . $this->event->challengeSport->ar_sport_name : "رفض النتيجه المقترحه لجوله في التحدي الخاص برياضة " . $this->event->challengeSport->ar_sport_name,
                    'en'                    => $this->status == 'accept' ? 'accept the result of a match for the challenge of ' . $this->event->challengeSport->en_sport_name : 'refuse the result of a match for the challenge of ' . $this->event->challengeSport->en_sport_name,
                    'user_url'              => '/profile/' . sm_crypt($this->creator->id),
                    'user_img'              => !empty($this->creator->user_img) ? $this->creator->user_img : ''  ,
                    'user_name'             => $this->creator->name ,
                    'taraget_url'           => '/Challenge/Show/' . sm_crypt($this->event->id),
                ];
                break;
        }
    }

    /**
     * Get the broadcastable representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {

        switch ($this->eventType) {
            case 'event':
                return new BroadcastMessage([
                    'ar'                    => $this->status == 'accept' ? "وافق على النتيجه المقترحه لجوله في الحدث الخاص برياضة " . $this->event->eventSport->ar_sport_name : "رفض النتيجه المقترحه لجوله في الحدث الخاص برياضة " . $this->event->eventSport->ar_sport_name,
                    'en'                    => $this->status == 'accept' ? 'accept the result of a match for the event of ' . $this->event->eventSport->en_sport_name : 'refuse the result of a match for the event of ' . $this->event->eventSport->en_sport_name,
                    'user_url'              => '/profile/' . sm_crypt($this->creator->id),
                    'user_img'              => !empty($this->creator->user_img) ? $this->creator->user_img : ''  ,
                    'user_name'             => $this->creator->name ,
                    'taraget_url'           => '/Event/Show/' . sm_crypt($this->event->id),
                ]);
                break;
            case 'challenge':
                return new BroadcastMessage([
                    'ar'                    => $this->status == 'accept' ? "وافق على النتيجه المقترحه لجوله في التحدي الخاص برياضة " . $this->event->challengeSport->ar_sport_name : "رفض النتيجه المقترحه لجوله في التحدي الخاص برياضة " . $this->event->challengeSport->ar_sport_name,
                    'en'                    => $this->status == 'accept' ? 'accept the result of a match for the challenge of ' . $this->event->challengeSport->en_sport_name : 'refuse the result of a match for the challenge of ' . $this->event->challengeSport->en_sport_name,
                    'user_url'              => '/profile/' . sm_crypt($this->creator->id),
                    'user_img'              => !empty($this->creator->user_img) ? $this->creator->user_img : ''  ,
                    'user_name'             => $this->creator->name ,
                    'taraget_url'           => '/Challenge/Show/' . sm_crypt($this->event->id),
                ]);
                break;
        }
    }
}
