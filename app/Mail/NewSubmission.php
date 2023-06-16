<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class NewSubmission extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $lien;
    public $start_date;
    public $end_date;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($name,$lien,$start_date,$end_date,$email_id,$id)
    {
        $this->name = $name;
        $this->start_date = $start_date;
        $this->lien = $lien;
        $this->end_date = $end_date;
        $this->email_id = $email_id;
        $this->id = $id;
    }
    

    public function build()
    {
        return $this->view('email/send-email')
                    ->with([
                        'name' => $this->name,
                        'lien'=> $this->lien,
                        'start_date'=>$this->start_date,   
                       'end_date'=> $this->end_date,
                       'email_id'=> $this->email_id,
                       'id'=> $this->id,
                       
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nouvelle réunion',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email/send-email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
