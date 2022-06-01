<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('faq', compact('faqs'));
    }

    public function create()
    {
        if (Auth::check()) {
            return view('faq-create');
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {

            $properties = $request->validate([
                'question' => ['required'],
                'answer' => ['required'],
            ]);

            Faq::create($properties);

            return Redirect('faq');
        } else {
            return redirect('/login');
        }
    }

    public function edit(Faq $faq)
    {
        if (Auth::check()) {
            return view('faq-edit', compact('faq'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request, Faq $faq)
    {
        if (Auth::check()) {

            $properties = $request->validate([
                'question' => ['required'],
                'answer' => ['required'],
            ]);

            $faq->update($properties);

            return Redirect('faq');
        } else {
            return redirect('/login');
        }
    }

    public function destroy(Faq $faq)
    {
        if (Auth::check()) {

            $faq->delete();
            return Redirect('faq');
        } else {
            return redirect('/login');
        }
    }
}
