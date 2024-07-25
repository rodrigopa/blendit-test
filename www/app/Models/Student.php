<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'birth_date',
        'address_type',
        'address_street',
        'address_cep',
        'address_number',
        'address_complement',
        'father_name',
        'mother_name',
        'grade',
        'segment'
    ];
}
