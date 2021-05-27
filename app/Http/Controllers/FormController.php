<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();

        return view('/forms/index', [
            'forms' => $forms
        ]);
    }

    public function create()
    {
        return view('/forms/forms_create');
    }


    public function store(Request $request)
    {
        Form::create($request->validate([
            'name' => ['required', 'min:2', 'max:50']
        ]));

        return redirect(route('forms.index'));
    }

    public function show(Form $form)
    {
        return view('/form.show', [
            'form' => $form
        ]);
    }

    public function edit(Form $form)
    {
        return view('/forms/forms_edit', ['form' => $form]);
    }

    public function update(Request $request, Form $form)
    {
        $form->update($request->validate([
            'name' => ['required', 'min:2', 'max:50']
        ]));

        return redirect(route('forms.index', $form));
    }

    public function destroy(Form $form)
    {
        $form->delete();

        $forms = Form::all();

        return view('/forms/index', [
            'forms' => $forms
        ]);
    }
}
