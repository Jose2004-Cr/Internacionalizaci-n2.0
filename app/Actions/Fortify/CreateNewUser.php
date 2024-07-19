<?php

namespace App\Actions\Fortify;

use App\Models\Documento;
use App\Models\Genero;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tipo_documento' => ['required'],
            'genero' => ['required'],
            'numero_documento' => ['required'],
            'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'documento' => $input['numero_documento'],
            'password' => Hash::make($input['password']),
        ]);

        Genero::create([
            'user_id' => $user->id,
            'Nombre' => $input['genero']
        ]);

        Documento::create([
            'user_id' => $user->id,
            'Tipo' => $input['tipo_documento'],
            'Numero' => $input['numero_documento']
        ]);

        return $user;
    }
}
