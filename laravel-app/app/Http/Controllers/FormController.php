<?php


namespace App\Http\Controllers;

// Import
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function displayForm()
    {
        return view('form.form');
    }

    public function saveForm(Request $request)
    {
        $request->validate([
            'name' => 'required|max:1',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);

        echo 'Success';
    }
}
