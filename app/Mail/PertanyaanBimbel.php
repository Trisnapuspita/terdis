<?php

namespace App\Mail;

use App\Pertanyaan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PertanyaanBimbel extends Mailable
{
    use Queueable, SerializesModels;
    public $pertanyaan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pertanyaan $pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
                    ->from('info@terasdiskusi.com')
                    ->subject($this->pertanyaan->subject);
    }
}
