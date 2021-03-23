<?php

namespace App\Http\Controllers;
use App\company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = Company::all();

        return view('companys.index', compact('companys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Company_name'=> 'required',
            'Company_email'=> 'required',
            'logo'=> 'required',
            'website'=>'required'
        ]);
        $company = new Company([
            'company_name' => $request->get('Company_name'),
            'company_email' => $request->get('Company_email'),
            'company_logo' => $request->get('logo'),
            'company_web_site' => $request->get('website')
        ]);
        $company->save();
        return redirect('/companys')->with('success', 'Company saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companys.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Company_name'=> 'required',
            'Company_email'=> 'required',
            'logo'=> 'required',
            'website'=>'required'
        ]);
        $company = Company::find($id);
        $company->company_name =  $request->get('Company_name');
        $company->company_email =  $request->get('Company_email');
        $company->company_logo =  $request->get('logo');
        $company->company_web_site =  $request->get('website');
        $company->save();

        return redirect('/companys')->with('success', 'company updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/companys')->with('success', 'company deleted!');
    }
}
