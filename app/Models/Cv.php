<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

     protected $table = 'cvs';

        protected $fillable = [
        'name',
        'specialization',
        'filepath',
        'filename',
        'user_id',
    ];

          public function User()
      {
          return $this->belongsTo(User::class, 'user_id');
      }
}
