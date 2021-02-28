<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificaTuCuenta extends Mailable
{
    use Queueable, SerializesModels;

    public $nombres;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('store.mailer.VerificaTuCuenta')
            ->with([
                'nombres' => $this->nombres
            ]);
    }
}
