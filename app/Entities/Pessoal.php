<?php
/**
 * Created by PhpStorm.
 * User: Nen S2 Gra
 * Date: 17/10/2015
 * Time: 17:05
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoal extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones ()
    {
        //
    }
}