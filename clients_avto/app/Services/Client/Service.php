<?php

namespace App\Services\Client;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data, $dataAvto){
        $query = DB::table('clients');
        $query->insert($data);

        $last = DB::table('clients')->latest()->value('id');
        $dataAvto['client_id'] = $last;

        $queryAvto = DB::table('avtos');
        $queryAvto->insert($dataAvto);
    }

    public function update($data, $id){
        $query = DB::table('clients')->where('id', $id);
        $query->update($data);
    }

    public function delete($client_id){
        $avtos = DB::table('avtos')->get();
        foreach ($avtos as $avto){
            if ($avto->client_id == $client_id){
                DB::table('avtos')->where('id', $avto->id)->delete();
            }
        }
        DB::table('clients')->where('id', $client_id)->delete();
    }
}
