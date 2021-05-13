<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CrearUsuarioPorFacturacionAnonima extends Mailable
{
    use Queueable, SerializesModels;

    public $dataToView;
    /**
     * Create a new message instance.
     * @param array $data
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
        return $this->view('store.mailer.UsuarioPorFacturacionAnonima')
        ->subject("El Escaparate de Lolita - Usuario Asignado")
        ->with($this->dataToView);
    }
}
