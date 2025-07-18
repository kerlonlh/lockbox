<?php

namespace App\Controllers\Notas;

use App\Models\Nota;
use Core\Database;
use Core\Validacao;

class AtualizarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar([
            'titulo' => ['required', 'min:3', 'max:255'],
            'nota' => ['required'],
            'id' => ['required']
        ], request()->All());

        if ($validacao->naoPassou()) {
            return redirect('/notas?id=' . request()->post('id'));
        }

        Nota::update(
            request()->post('id'),
            request()->post('titulo'),
            request()->post('nota')
        );

        flash()->push('mensagem', 'Registro atualizado com sucesso!');
        return redirect('/notas');
    }
}
