<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
  protected $fillable = [
      'user_id','section_id','question_id','userAnswer'
  ];
}
