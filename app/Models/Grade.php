<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'test_name', 'lowest_passing_grade', 'best_grade',];

    /**
     * @param $num
     * @return void
     */
    public function addResult($num)
    {


        if ($num > $this->best_grade) {
            $this->best_grade = $num;

        }
        if ($this->lowest_passing_grade <= $this->best_grade) {
            $this->passed_at = now();
        }
        $this->save();
    }
}
