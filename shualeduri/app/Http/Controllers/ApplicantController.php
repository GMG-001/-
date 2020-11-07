<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        $Applicants=Applicant::all();

    return view('applicant_list')->with('applicant_list', $Applicants);
}
    public function show(Applicant $applicant){
    return view('post')->with('applicant',$applicant);
}
    public function edit(Applicant $applicant){
        request()->validate([
                'name'=>'required',
                'surname'=>'required',
                'position'=>'required',
                'phone'=>'required',
                'is_hired'=>'required'
            ]
        );
    return view('edit')->with('applicant',$applicant);
}
    public function update(Request $request, $id){

    $applicant = Applicant::findOrFail($id);
    $applicant->update($request->all());
    return redirect()->back();
}
}
