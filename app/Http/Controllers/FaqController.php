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
        Faq::create(['question' => $request->question, 'answer' => $request->answer,]);

        return Redirect('faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faq-edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        Faq::find($id)->update(['question' =>$request->question, 'answer' =>$request->answer]);
        return Redirect('faq');
    }

    public function destroy($id)
    {
        Faq::find($id)->delete();
        return Redirect('faq');
    }
}
