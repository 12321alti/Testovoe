<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Requests\Avto\UpdateRequestAvto;
use App\Http\Requests\Avto\StoreRequestAvto;
use Illuminate\Support\Facades\DB;

class deleteController extends ClientController
{
    public function __invoke($client_id)
    {
        $this->service->delete($client_id);
        return redirect()->route('client.index');
    }
}
