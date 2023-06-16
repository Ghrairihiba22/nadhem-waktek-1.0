<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class updateEmail extends Mailable
{
    use Queueable, SerializesModels;

   public $name;
    public $lien;
    public $start_date;
    public $end_date;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $lien
     * @param string $start_date
     * @param string $Durée
     * @return void
     */
    public function __construct($name, $lien, $start_date, $end_date)
    {
        $this->name = $name;
        $this->lien = $lien;
        $this->start_date = $start_date;
          $this->end_date = $end_date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {return $this->subject('Réunion modifiée')
                    ->view('email/update-event')
                    ->with([
                        'name' => $this->name,
                        'lien' => $this->lien,
                        'start_date' => $this->start_date,
                      'end_date' => $this->end_date,
                    ]);
    }
}
