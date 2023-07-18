<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldQuestion extends Model
{
    use HasFactory;
    protected $table = 'field_questions';
    protected $primaryKey = 'id';
    protected $fillable = ['namefield', 'status'];

    protected $guarded = [];
    public function fieldquestion(){
        return $this->hasMany(Question::class);
    }
}
