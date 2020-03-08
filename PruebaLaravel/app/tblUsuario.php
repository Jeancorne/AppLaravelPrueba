<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblUsuario extends Model
{
    protected $fillable  = ['usuario','password'];
    protected $primaryKey='idUsuario';
    protected $table = 'tbl_usuarios';
}
