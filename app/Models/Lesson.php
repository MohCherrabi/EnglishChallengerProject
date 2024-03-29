<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Course;


class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['title','video_link','description','duration','priview','order','curriculum_id'];
    public function curricula(){
        return $this->belongsTo(
            Curriculum::class
        );
    }
}
