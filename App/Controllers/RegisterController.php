<?php

namespace App\Controllers;

use Core\Database;
use Core\Validacao;

class RegisterController
{
    public function index()
    {
        return view('registrar', template: 'guest');
    }

    public function register()
    {
        $validacao = Validacao::validar([
            'nome' => ['required'],
            'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
            'senha' => ['required', 'min:8', 'max:30', 'strong']
        ],  request()->all());

        if ($validacao->naoPassou()) {
            return view('registrar', template: 'guest');
        }

        $database = new Database(config('database'));

        $database->query(
            query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
            params: [
                'nome' => request()->post('email'),
                'email' => request()->post('senha'),
                'senha' => password_hash(request()->post('senha'), PASSWORD_BCRYPT)
            ]
        );

        flash()->push('mensagem', request()->post('nome') . ' registrado com sucesso!');

        return redirect('/login');
    }
}
