<?php

namespace PortalApp\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Domain\Lead;

class SupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $Lead;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        $this->Lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('portal::pt.mail.palpite-premiado.index')
            ->subject('Palpite Premiado: ' . $this->Lead->name)
            ->replyTo('comercialsite@leigado.com.br', 'Leigado')
            ->to('comercialsite@leigado.com.br', 'Leigado')
            ->to('jeffe.giovani@gmail.com', 'Jeffe');
    }
}
