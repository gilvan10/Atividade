<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Livro extends Model
{
    public static function listaLivros($paginate){
        $listaLivros = DB::table('livros')
            ->join('users','users.id','=','livros.user_id')
            ->select('livros.id','livros.ds_livro','users.name')
            ->paginate($paginate);

        return $listaLivros;
    }
}
