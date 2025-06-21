<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

       protected $table = 'tenders';

        protected $fillable = [
        'project_name',
        'note',
        'start_date',
        'end_date',
        'visit_date',
        'visit_status',
        'tender_status',
        'organization',
        'reference_number',
        'check_value',
        'check_status',
        'url',
        'address',
        'user_id',
    ];

          public function User()
      {
          return $this->belongsTo(User::class, 'user_id');
      }
}
