<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Throwable;

#[Title('.::Register::.')]
class Register extends Component
{
    /**
     * User's name
     *
     * @var string
     */
    public string $name = '';

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
            'name'     => ['required', 'string', 'min:3', 'max:32'],
            'email'    => ['required', 'email', 'unique:users,email'],
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
            User::create(
                [
                    'name'     => $this->name,
                    'email'    => $this->email,
                    'password' => bcrypt($this->password),
                ]
            );

            $this->redirectRoute('login');
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
        return view('livewire.auth.register');
    }
}
