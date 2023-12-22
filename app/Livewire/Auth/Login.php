<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Hash;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Throwable;

#[Title('.::Login Page::.')]
class Login extends Component
{
    /**
     * User's email
     *
     * @var string
     */
    public string $email = '';

    /**
     * User's password
     *
     * @var string
     */
    public string $password = '';

    /**
     * Get the validation rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'    => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'max:48'],
        ];
    }

    /**
     * Register a user
     *
     * @return void
     */
    public function submit(): void
    {
        $this->validate();

        try
        {
            $user = User::where('email', $this->email)->first();

            if (!$user || !Hash::check($this->password, $user->password))
            {
                $this->addError('password', __('Your credentials does not match our records'));
                return;
            }

            auth()->login($user);
            $this->redirectRoute('user.dashboard');
        }
        catch (Throwable $exception)
        {
            // log-me: $exception
            $this->addError('password', __('Ops! something went wrong...'));
        }
    }

    /**
     * Render the component view
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
