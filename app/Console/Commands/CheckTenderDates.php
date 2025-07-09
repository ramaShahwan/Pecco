<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
   use App\Models\Notification;
   use App\Models\Tender; 
class CheckTenderDates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:check-tender-dates';
 protected $signature = 'check:tender-dates';
       protected $description = 'Check tender dates and notify users';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
//  public function handle()
// {
//     $today = now();
//     $targetDate = $today->copy()->addDays(2);

//     $tenders = Tender::whereDate('end_date', $targetDate)
//         ->orWhereDate('visit_date', $targetDate)
//         ->get();

//     foreach ($tenders as $tender) {
//         $type = null;
//         $time = null;

//         if ($tender->end_date && $tender->end_date->toDateString() == $targetDate->toDateString()) {
//             $type = 'نهاية التقديم';
//             $time = $tender->end_date->format('Y-m-d H:i');
//         }

//         if ($tender->visit_date && $tender->visit_date->toDateString() == $targetDate->toDateString()) {
//             $type = 'موعد الزيارة';
//             $time = $tender->visit_date->format('Y-m-d H:i');
//         }

//         if ($type && $tender->user_id) {
//             Notification::create([
//                 'user_id' => $tender->user_id,
//                 'tender_id' => $tender->id,
//                 'title' => "تنبيه بخصوص {$tender->project_name}",
//                 'body' => "اقترب موعد {$type} بتاريخ {$time}",
//             ]);
//         }
//     }

//     $this->info('تم إنشاء الإشعارات للمناقصات القريبة.');
// }


public function handle()
{
    $today = now();
    $targetDate = $today->copy()->addDays(2);

    $tenders = \App\Models\Tender::whereBetween('end_date', [$today, $targetDate])
        ->orWhereBetween('visit_date', [$today, $targetDate])
        ->get();

    foreach ($tenders as $tender) {
        $type = null;
        $time = null;

        if ($tender->end_date && $tender->end_date >= $today && $tender->end_date <= $targetDate) {
            $type = 'نهاية التقديم';
            $time = $tender->end_date->format('Y-m-d H:i');
        }

        if ($tender->visit_date && $tender->visit_date >= $today && $tender->visit_date <= $targetDate) {
            $type = 'موعد الزيارة';
            $time = $tender->visit_date->format('Y-m-d H:i');
        }

        if ($type && $tender->user_id) {
            \App\Models\Notification::create([
                'user_id' => $tender->user_id,
                'tender_id' => $tender->id,
                'title' => "تنبيه بخصوص {$tender->project_name}",
                'body' => "اقترب موعد {$type} بتاريخ {$time}",
            ]);
        }
    }

    $this->info('تم إنشاء الإشعارات للمناقصات القريبة.');
}
}
