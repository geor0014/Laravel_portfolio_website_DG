<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $grades=Grade::latest()->get();

        return view('grades.index',compact('grades'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('grades.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
       $properties = $request->validate([
           'course_name' =>['required'],
           'test_name' =>['required'],
           'lowest_passing_grade'=>['required','numeric','min:0','max:10'],
           'best_grade'=>['required','numeric','min:0','max:10'],
       ]);

       Grade::create($properties);

       return Redirect('grades');
    }

    /**
     * @param Grade $grade
     * @return void
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Grade $grade)
    {
        //
        return view('grades.edit', compact('grade'));
    }


    /**
     * @param Request $request
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Grade $grade)
    {
        //
        $properties = $request->validate([
            'course_name' =>['required'],
            'test_name' =>['required'],
            'lowest_passing_grade'=>['required','numeric','min:0','max:10'],
            'best_grade'=>['required','numeric','min:0','max:10'],
        ]);

        $grade->update($properties);

        return Redirect('grades');
    }


    /**
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Grade $grade)
    {
        //
        $grade->delete();

        return Redirect('grades');
    }
}
