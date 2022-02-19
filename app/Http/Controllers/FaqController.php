<?php

namespace App\Http\Controllers;

use App\Models\Faq;
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
        return view('faq-create');
    }

    public function store(Request $request)
    {
        $properties = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        Faq::create($properties);

        return Redirect('faq');
    }

    public function edit(Faq $faq)
    {
        return view('faq-edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $properties = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        $faq->update($properties);

        return Redirect('faq');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return Redirect('faq');
    }
}
