<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;



class Paie extends Mailable

{

    use Queueable, SerializesModels;

    public $request;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($request)

    {

        $this->request=$request;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        //return $this->subject('Notification: Contact Us ')->markdown('email.contactUs');

        return $this->from('contact@stop-retour.com', 'stop-retour')->subject('Notification: Paiement effectué!')->markdown('email.paie', ['request' => $this->request]);





    }

}

