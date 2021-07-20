<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgendaAprobadaParaCliente extends Mailable
{
    use Queueable, SerializesModels;
    public $dataToView;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->dataToView = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('store.mailer.AgendaAprobadaParaCliente')
        ->subject("Su agenda #".$this->dataToView["numeroAgenda"]." ha sido Aceptada - El Escaparate de Lolita")
        ->with($this->dataToView);
    }
}
