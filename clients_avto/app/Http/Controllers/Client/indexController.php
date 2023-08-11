<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Requests\Avto\UpdateRequestAvto;
use App\Http\Requests\Avto\StoreRequestAvto;
use Illuminate\Support\Facades\DB;

class indexController extends ClientController
{
    public function __invoke()
    {

        $clients = DB::table('clients')->get();
        $avtos = DB::table('avtos')->orderBy('marka')->paginate(8);


        return view('client.index', compact('clients', 'avtos'));
    }
}
