<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses_users';
    protected $fillable = ['user_id', 'rua', 'numero', 'complemento', 'cep', 'uf', 'bairro', 'cidade'];
}
