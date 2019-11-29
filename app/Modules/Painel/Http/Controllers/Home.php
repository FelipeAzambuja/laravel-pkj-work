<?php

namespace App\Modules\Painel\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller {

    function index () {
        return view('painel::login');
    }

}
