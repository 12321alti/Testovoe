<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Requests\Avto\UpdateRequestAvto;
use App\Http\Requests\Avto\StoreRequestAvto;
use Illuminate\Support\Facades\DB;

class ShowController extends ClientController
{
    public function __invoke($id)
    {
        $client = DB::table('clients')->find($id);
        $avtos = DB::table('avtos')->get();

        return view('client.show', compact('client', 'avtos'));
    }
}
