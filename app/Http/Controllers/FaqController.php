<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
                'question' => ['required', 'string', 'max:255', 'min:3'],
                'answer' => ['required', 'string', 'max:255', 'min:3'],
                'user_id' => ['required'],
            ]);

            Faq::create($properties,);
            return Redirect('faq');
        } else {
            return redirect('/login');
        }
    }

    public function edit(Faq $faq)
    {
        // check if user is authorized to edit this faq using Gate
        $this->authorize('update', $faq);

        return view('faq-edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // check if user is authorized to update faq using Gate
        $this->authorize('update', $faq);

        $properties = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        $faq->update($properties);

        return Redirect('faq');
    }

    public function destroy(Faq $faq)
    {
        // Check if user is authorized to delete the faq using Gate
        $this->authorize('delete', $faq);

        $faq->delete();
        return Redirect('faq');
    }
}
