<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz_question extends Model
{
    use HasFactory;
    protected $fillable = ['quiz_id','question_id'];
}
