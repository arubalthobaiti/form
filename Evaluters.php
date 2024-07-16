<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluters extends Model
{
    use HasFactory;
    protected $table = 'evaluter';
    protected $fillable = ['name','hackathon_id' ];
}
