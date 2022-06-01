<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $courses = Course::latest()->get();

        return view('grades.index', compact('courses'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        if (Auth::check()) {

            $courses = Course::latest()->get();

            return view('grades.create', compact('courses'));
        } else {
            return redirect('/login');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $properties = $request->validate([
                'course_id' => ['required'],
                'test_name' => ['required'],
                'best_grade' => ['required', 'numeric', 'min:0', 'max:10'],
            ]);

            Grade::create($properties);

            return Redirect('grades');
        } else {
            return redirect('/login');
        }
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
        if (Auth::check()) {

            return view('grades.edit', compact('grade'));
        } else {
            return redirect('/login');
        }
    }


    /**
     * @param Request $request
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Grade $grade)
    {
        //
        if (Auth::check()) {

            $properties = $request->validate([
                'test_name' => ['required'],
                'lowest_passing_grade' => ['required', 'numeric', 'min:0', 'max:10'],
                'best_grade' => ['required', 'numeric', 'min:0', 'max:10'],
            ]);

            $grade->update($properties);

            return Redirect('grades');
        } else {
            return redirect('/login');
        }
    }


    /**
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Grade $grade)
    {
        //
        if (Auth::check()) {

            $grade->delete();

            return Redirect('grades');
        } else {
            return redirect('/login');
        }
    }
}
