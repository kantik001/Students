<?php

namespace App\Listeners\Student;

use App\Events\Student\StoredStudentEvent;
use App\Models\Surname;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CountTotalRatingOfSurnameListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StoredStudentEvent $event): void
    {
        $surname = Surname::find($event->student->surname_id);
        $surname->update([
            'total_rating' => $surname->students->sum('performance_rating'),
        ]);
    }
}
