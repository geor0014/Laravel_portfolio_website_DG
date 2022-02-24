<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    /**
     * @return void
     */
    public function assignCredits()
    {
        $grades = $this->grades->all();

        $avg = collect($grades)
            ->filter(function ($grade) {
                return $grade->best_grade >= 5.5;
            })
            ->map(function ($grade) {
                return $grade->best_grade;
            })
            ->avg();

        if ($avg >= 5.5) {
            $this->passed_at = now();
        }
            $this->save();
    }
}
