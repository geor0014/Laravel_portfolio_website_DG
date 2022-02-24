<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
         return $this->belongsTo(Course::class);
    }

    /**
     * @param $num
     */
    public function addResult($num)
    {
        if ($num > $this->best_grade) {
            $this->best_grade = $num;
        }
        $this->save();
        $this->course->assignCredits();
    }
}
