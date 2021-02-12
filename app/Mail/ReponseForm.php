<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReponseForm extends Mailable
{
    use Queueable, SerializesModels;

    public $reponse ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reponse)
    {
        $this->reponse = $reponse ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@stop-retour.com', 'stop-retour')->subject('[Ticket ID: '.$this->reponse->ticket->id.'] '.$this->reponse->ticket->objet)->markdown('email.reponseForm');
    }
}
