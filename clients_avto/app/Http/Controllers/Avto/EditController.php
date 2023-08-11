<?php

namespace App\Http\Controllers\Avto;

use App\Http\Controllers\AvtoController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Requests\Avto\UpdateRequestAvto;
use App\Http\Requests\Avto\StoreRequestAvto;
use Illuminate\Support\Facades\DB;

class EditController extends AvtoController
{
    public function __invoke($client_id, $id){
        $client = DB::table('clients')->find($client_id);
        $avto = DB::table('avtos')->find($id);

        return view('avto.edit', compact('client', 'avto'));
    }
}
