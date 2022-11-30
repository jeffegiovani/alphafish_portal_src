<?php

namespace PortalApp\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        $data = new \stdClass();
        $data->name = 'Nome usuário';

        return $this->view('portal::emails.test-mail', compact('data'));
    }
}
