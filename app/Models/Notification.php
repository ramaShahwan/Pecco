<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

       
     protected $table = 'notifications';

        protected $fillable = [
        'title',
        'tender_id',
        'user_id',
        'body',
        'is_read',
    ];

          public function User()
      {
          return $this->belongsTo(User::class, 'user_id');
      }

                public function Tender()
      {
          return $this->belongsTo(Tender::class, 'tender_id');
      }
}
