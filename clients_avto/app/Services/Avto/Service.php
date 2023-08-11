<?php

namespace App\Services\Avto;

use App\Models\Avto;
use Illuminate\Support\Facades\DB;

class Service
{
    public function update($data, $id){
        $query = DB::table('avtos')->where('id', $id);
        $query->update($data);
    }

    public function store($data){
        $query = DB::table('avtos');
        $query->insert($data);
    }

    public function delete($client_id, $id){
        DB::table('avtos')->where('id', $id)->delete();

        $avtos = DB::table('avtos')->where('client_id', $client_id)->get();

        if ($avtos->isEmpty()){
            DB::table('clients')->where('id', $client_id)->delete();
        }
    }
}
