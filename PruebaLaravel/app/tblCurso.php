<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblCurso extends Model
{
    protected $fillable  = ['nombreCurso','descripcionCurso'];
    protected $primaryKey='idCurso';
    protected $table = 'tbl_cursos';
}