<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $nombre_materia;
    public $id_materia;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre_materia, $id_materia)
    {
      $this->nombre_materia = $nombre_materia;
      $this->id_materia = $id_materia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NotificationMail')->with([
            'nombre' => $this->nombre_materia,
            'id' => $this->id_materia,
        ])->subject('Nueva calificación en '.$this->nombre_materia);
    }
}
