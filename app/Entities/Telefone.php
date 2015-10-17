<?php
/**
 * Created by PhpStorm.
 * User: Nen S2 Gra
 * Date: 17/10/2015
 * Time: 17:08
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descriзгo',
        'codpaнs',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}