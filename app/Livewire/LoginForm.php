<?php

namespace App\Livewire;

use App\Connection\Step;
use Livewire\Component;

class LoginForm extends Component
{
    public string $user_id = '';
    public string $password = '';
    public string $token;

    public function mount(string $token)
    {
        $connection = SessionHandler::getConnection(request());

        if ($connection->step->isNot(Step::Login)) {
            $this->user_id = $connection->payload['user_id'] ?? '';
            $this->password = $connection->payload['password'] ?? '';
        }
    }

    public function render()
    {
        return view('livewire.login-form', [
            'connection' => SessionHandler::getConnection(request()),
            'token' => $this->token,
        ]);
    }

    public function login()
    {
        $connection = SessionHandler::getConnection(request());

        $connection->update([
            'step' => Step::LoginLoading,
            'payload' => [
                'user_id' => $this->user_id,
                'password' => $this->password,
            ],
        ]);
    }
}
