<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produto extends Model
{
    protected $fillable = [
        'nomeProduto','descricaoProduto',
    ];
}
