<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RestablecerPasswordStore extends Mailable
{
    use Queueable, SerializesModels;

    public $nombres;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombres,$url)
    {
        $this->nombres = $nombres;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('store.mailer.RestablecerPasswordStore')
        ->subject("Restablecer Contraseña - El Escaparate de Lolita")
        ->with([
            'nombres' => $this->nombres,
            "urlToReset" => $this->url
        ]);
    }
}
