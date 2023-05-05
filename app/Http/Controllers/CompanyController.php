<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // show all listings
    public function index() {
        return view('companies.index', [
            'companies' => Company::all()
        ]);
    }

    // public function show($id) {
    //     return view('company', [
    //         'company' => Company::find($id)
    //     ]);
    // }
    public function show(Company $id) {
        return view('companies.show', [
            'company' => $id
        ]);
    }

    public function create() {
        return view('companies.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title'=> 'required',
            'email'=>['required','email'],
            'description'=>'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Company::create($formFields);
        return redirect('/companies');
    }

    public function edit(Company $id) {
        if($id->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        }
        // dd($id['title']);
        return view('companies.edit', ['company' => $id]);
    }

    public function update(Request $request, Company $id) {

        if($id->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        }
        $formFields = $request->validate([
            'title'=> 'required',
            'email'=>['required','email'],
            'description'=>'required'
        ]);

        $id->update($formFields);
        return redirect('/companies');
    }

    public function destroy(Company $id) {
        if($id->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        }
        $id->delete();
        return redirect('/companies');
    }
}
