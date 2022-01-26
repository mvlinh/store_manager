<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\employee;
use PhpParser\Node\Expr\Cast\String_;

class transferMail extends Mailable
{
    use Queueable, SerializesModels;

        private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(employee $user)
    {
        $this->user = $user;
        $this->queue = "email";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.transfer')
                    ->subject('Chuyển khách hàng')
                    ->with([
                        'user' => $this->user
                    ]);
    }
}
