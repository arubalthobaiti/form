<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Questions extends Model
{
    use HasFactory;
    protected $table = 'question'; // تحديد اسم الجدول
    protected $fillable = ['question_id	','weight' ,'question','hackathon_id'];
    /// نحدد الحقول اللي يتعامل معاها الكنترولر 
    

}
