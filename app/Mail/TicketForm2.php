<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;



class TicketForm2 extends Mailable

{

    use Queueable, SerializesModels;

    public $ticket;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($ticket)

    {

        $this->ticket=$ticket;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        //return $this->subject('Notification: Contact Us ')->markdown('email.contactUs');

        return $this->from('contact@stop-retour.com', 'stop-retour')->subject('[Ticket ID: '.$this->ticket->id.'] '.$this->ticket->objet)->markdown('email.ticketAdd', ['request' => $this->ticket]);





    }

}

