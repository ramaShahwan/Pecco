<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
  protected $table = 'documents';

        protected $fillable = [
        'name',
        'filename',
        'filepath',
        'document_date',
        'user_id',
    ];

          public function User()
      {
          return $this->belongsTo(User::class, 'user_id');
      }
   

}
