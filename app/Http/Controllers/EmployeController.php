<?php

namespace App\Http\Controllers;
use App\employe;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();

        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
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
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'phone'=>'required',
            'id_company'=>'required'
        ]);
        $employe = new Employe([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'empl_email' => $request->get('email'),
            'empl_phone' => $request->get('phone'),
            'company_id' => $request->get('id_company')
        ]);
        $employe->save();
        return redirect('/employes')->with('success', 'employe saved!');
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
        $employe = Employe::find($id);
        return view('employes.edit', compact('employe'));
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
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'phone'=>'required',
            'id_company'=>'required'
        ]);
        $employe = Employe::find($id);
        $employe->first_name =  $request->get('first_name');
        $employe->last_name =  $request->get('last_name');
        $employe->empl_email =  $request->get('email');
        $employe->empl_phone =  $request->get('phone');
        $employe->company_id =  $request->get('id_company');
        $employe->save();

        return redirect('/employes')->with('success', 'employe updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        return redirect('/employes')->with('success', 'employe deleted!');
    }
}
