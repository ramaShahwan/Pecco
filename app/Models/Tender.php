<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tender extends Model
{
    use HasFactory;

       protected $table = 'tenders';
       protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'visit_date' => 'datetime',
       ];
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
   public function Notifications(): HasMany
   {
       return $this->hasMany(Notification::class);
   }
}
