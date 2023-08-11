<?php

namespace App\Http\Controllers;

use App\Services\Avto\Service;
use App\Http\Controllers\Controller;
class AvtoController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
