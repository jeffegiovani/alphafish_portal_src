<?php

namespace App\Livewire;

use Livewire\Component;

use Domain\Lead;
use Illuminate\Support\Facades\Mail;
use PortalApp\Mail\SupportMail;

class Support extends Component
{
    public $formSended = false;
    public $name = '';
    public $sobrenome = '';
    public $fone = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'fone' => 'required|numeric|digits_between:9,12',
        'email' => 'required|email:dns,rfc',
    ];

    protected $messages = [
        'name.required' => 'Qual seu nome completo?',
        'fone.numeric' => 'Informe somente números',
        'fone.digits_between' => 'Parece que faltou algo ein',
        'fone.required' => 'Qual seu telefone com DDD?',
        'email.required' => 'Qual seu e-mail?',
        'email.email' => 'Qual seu e-mail?',
    ];

    public function submitForm()
    {
        $validatedData = $this->validate();

        if ($this->sobrenome) {
            return response()->json([
                'status' => 'success'
            ]);
        }

        $validatedData['page_uri'] = url()->previous();

        $finalData = [
            'name' => $validatedData['name'],
            'email' => 'emailpremiado@leigado.com.br',
            'channel' => 'landing_page',
            'locale' => 'pt',
            'extra_info' => $validatedData,
        ];

        /**
         * Cadastrando no banco
         */
        $lead = new Lead();
        $lead->fill($finalData);
        $lead->save();

        /**
         * Enviando o email
         */
        Mail::send(new SupportMail($lead));

        /**
         * Marcar o pixel do Facebook
         */
        $this->dispatchBrowserEvent('marcar-pixel-fb', $finalData);

        $this->formSended = true;
    }
    public function render()
    {
        return view('livewire.support');
    }
}
