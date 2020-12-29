<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMember extends Mailable
{
    use Queueable, SerializesModels;

    public $param1 = 'Value1';

    public $param2 = 'Value2';

    public $username = 'Banashree';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Mail::to($this->email)->send(new ForgotPassword());

        return $this->from('support@privacy24.com')->view('maileclipse::templates.welcomeMember')
            ->text('maileclipse::templates.welcomeMember_plain_text');
    }
}
