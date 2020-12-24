<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\CompanyProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profile = CompanyProfile::latest()->first();
        return view('admin.company.profile.index',compact('profile'));
    }


    public function edit(Request $request)
    {
        $profile = CompanyProfile::latest()->first();
        return view('admin.company.profile.edit',compact('profile'));
    }

    public function store(Request $request)
    {
      //return  $request->all();

        $this->validate($request,[
            'company_name'=>'required',
            'address_1'=>'required',
            'country'=>'required',    
            'district'=>'required',    
            'mobile_no'=>'required',    
            'email'=>'required',    
            'cin'=>'required',    
            'state'=>'required',    
            'pincode'=>'required',
        ]);


        $profile = CompanyProfile::latest()->first();
        $profile->company_name = $request->company_name;
        $profile->address_1 = $request->address_1;
        $profile->country = $request->country;
        $profile->district = $request->district;
        $profile->mobile_no = $request->mobile_no;
        $profile->email = $request->email;
        $profile->pan = $request->pan;
        $profile->cin = $request->cin;
        $profile->alias = $request->alias;
        $profile->address_2 = $request->address_2;
        $profile->state = $request->state;
        $profile->landline_no = $request->landline_no;
        $profile->website_address = $request->website_address;
        $profile->gstin = $request->gstin;
        $profile->pincode = $request->pincode;
        $profile->incorporation_date = Carbon::parse($request->incorporation_date)->format('Y-m-d');


        if($profile->save()){
           return redirect()->route('admin.company-profile.index')->with(['class'=>'success','message'=>'Profile Updated Successfully.']);
       }
       return back()->with(['class'=>'success','message'=>'Site Details Updates']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        $roles = Role::select(['id','name'])->get()->pluck('name','id')->toArray();
        return view('admin.project.create',compact('roles'));
    }


}
