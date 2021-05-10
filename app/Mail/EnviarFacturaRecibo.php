<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarFacturaRecibo extends Mailable
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
        return $this->view('store.factura')
        ->subject("Factura #".$this->dataToView["numero_factura"]." - El Escaparate de Lolita")
        ->with($this->dataToView);
    }
}
