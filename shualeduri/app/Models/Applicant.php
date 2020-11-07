<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    public function getPosts(){
        return Applicant::all();
    }
    protected $fillable=[
        'name',
        'surname',
        'position',
        'phone',
        'is_hired'
    ];
}
