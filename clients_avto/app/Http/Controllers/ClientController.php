<?php

namespace App\Http\Controllers;

use App\Services\Client\Service;
use Illuminate\Http\Request;
class ClientController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
