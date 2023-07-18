<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id', 'question', 'correct_answer','incorrect1','incorrect2','incorrect3','status'];

    protected $guarded = [];
    public function fieldquestion(){
        return $this->belongsTo(FieldQuestion::class);
    }
}
