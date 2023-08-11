<?php

namespace App\Http\Controllers\Avto;

use App\Http\Controllers\AvtoController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Requests\Avto\UpdateRequestAvto;
use App\Http\Requests\Avto\StoreRequestAvto;
use Illuminate\Support\Facades\DB;

class StoreController extends AvtoController
{
    public function __invoke(StoreRequestAvto $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('client.index');
    }
}
