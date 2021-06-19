<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CambioEstadoPedido extends Mailable
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
        return $this->view('store.mailer.UsuarioEstadoPedido')
        ->subject("Pedido #".$this->dataToView["numeroPedido"]." [".$this->dataToView["nuevoEstadoAsunto"]."] - El Escaparate de Lolita")
        ->with($this->dataToView);
    }
}
