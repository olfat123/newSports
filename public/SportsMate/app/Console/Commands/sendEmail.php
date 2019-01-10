<?php

namespace App\Console\Commands;

use App\Model\contactus;
use App\Mail\ContactUsEmail;
use Mail;
use Illuminate\Console\Command;

class sendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = [
            'name'              => 'name',
            'email'             => 'email',
            'subject'           => 'subject',
            'E_message'         => 'E_message',
        ];
        $contactus = contactus::create([
                   'name'        => $data['name'],
                   'email'       => $data['tahamostfa@gmail'],
                   'subject'     => $data['subject'],
                   'message'     => $data['E_message'],

                ]);
        Mail::send('admin.emails.contactUs', $data, function ($message) use($data) {
            $message->from($data['email'], $data['name']);
            $message->to('tahamostfa588@gmail.com', 'John Doe');
            $message->subject($data['subject']);
        });
    }
}
