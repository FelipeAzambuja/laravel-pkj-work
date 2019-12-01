<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    //
    function index()
    {
        return view('teste');
    }
    function teste(Request $form)
    {
        async($this, 'teste_async', [
            'nome' => $form->nome
        ]);
        js()->alert('Teste');
    }

    function teste_async(Request $form)
    {
        sleep(10);
        file_put_contents('dump.json', json_encode($form->all()));
    }
}
