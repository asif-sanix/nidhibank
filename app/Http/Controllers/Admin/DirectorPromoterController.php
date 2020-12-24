<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\DirectorPromoter\DirectorPromoterCollection;
use App\Model\Capital;
use App\Model\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectorPromoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = Member::orderBy('created_at','desc')->where('user_type', 1)->select(['id','name','membership_id','appointment_date','email','created_at','mobile_no','director_promoter']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('name', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new DirectorPromoterCollection($datas));
           
        }

        return view('admin.director-promoter.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.director-promoter.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
       $capital = Member::find($id);
        return view('admin.director-promoter.view', compact('capital')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
                'director_promoter'=>'required',
                'date_of_birth'=>'required',   
                'address_1'=>'required',   
                'district'=>'required',   
                'email'=>'required',   
                'enrollment_date'=>'required',   
                'country'=>'required',   
                'pincode'=>'required',   
                'mobile_no'=>'required',   
                'name'=>'required',   
                'state'=>'required',   
                'marital_status'=>'required',   
                'appointment_date'=>'required',   
            ]);

            $directorPromoter = new Member;
            $directorPromoter->user_type = 1;
            $directorPromoter->director_promoter = $request->director_promoter;
            $directorPromoter->address_1 = $request->address_1;
            $directorPromoter->district = $request->district;
            $directorPromoter->email = $request->email;
            $directorPromoter->aadhar_no = $request->aadhar_no;
            $directorPromoter->mother_name = $request->mother_name;
            $directorPromoter->address_2 = $request->address_2;
            $directorPromoter->country = $request->country;
            $directorPromoter->pincode = $request->pincode;
            $directorPromoter->mobile_no = $request->mobile_no;
            $directorPromoter->pan = $request->pan;
            $directorPromoter->din = $request->din;
            $directorPromoter->name = $request->name;
            $directorPromoter->gender = $request->gender;
            $directorPromoter->state = $request->state;
            $directorPromoter->occupation = $request->occupation;
            $directorPromoter->marital_status = $request->marital_status;
            $directorPromoter->relative_name = $request->relative_name;
            $directorPromoter->bank_name = $request->bank_name;
            $directorPromoter->ifs_code = $request->ifs_code;
            $directorPromoter->bank_address = $request->bank_address;
            $directorPromoter->bank_account = $request->bank_account;
            $directorPromoter->account_type = $request->account_type;


            $directorPromoter->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $directorPromoter->enrollment_date = Carbon::parse($request->enrollment_date)->format('Y-m-d');
            $directorPromoter->appointment_date = Carbon::parse($request->appointment_date)->format('Y-m-d');

            if($directorPromoter->save()){ 

                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Data Save Successfully.']);
            }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
        }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $directorPromoter = Member::find($id);
        return view('admin.director-promoter.edit', compact('directorPromoter')); 
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
                'director_promoter'=>'required',
                'date_of_birth'=>'required',   
                'address_1'=>'required',   
                'district'=>'required',   
                'email'=>'required',   
                'enrollment_date'=>'required',   
                'country'=>'required',   
                'pincode'=>'required',   
                'mobile_no'=>'required',   
                'name'=>'required',   
                'state'=>'required',   
                'marital_status'=>'required',   
                'appointment_date'=>'required',   
            ]);

            $directorPromoter = Member::find($id);
            $directorPromoter->user_type = 1;
            $directorPromoter->director_promoter = $request->director_promoter;
            $directorPromoter->address_1 = $request->address_1;
            $directorPromoter->district = $request->district;
            $directorPromoter->email = $request->email;
            $directorPromoter->aadhar_no = $request->aadhar_no;
            $directorPromoter->mother_name = $request->mother_name;
            $directorPromoter->address_2 = $request->address_2;
            $directorPromoter->country = $request->country;
            $directorPromoter->pincode = $request->pincode;
            $directorPromoter->mobile_no = $request->mobile_no;
            $directorPromoter->pan = $request->pan;
            $directorPromoter->din = $request->din;
            $directorPromoter->name = $request->name;
            $directorPromoter->gender = $request->gender;
            $directorPromoter->state = $request->state;
            $directorPromoter->occupation = $request->occupation;
            $directorPromoter->marital_status = $request->marital_status;
            $directorPromoter->relative_name = $request->relative_name;
            $directorPromoter->bank_name = $request->bank_name;
            $directorPromoter->ifs_code = $request->ifs_code;
            $directorPromoter->bank_address = $request->bank_address;
            $directorPromoter->bank_account = $request->bank_account;
            $directorPromoter->account_type = $request->account_type;


            $directorPromoter->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $directorPromoter->enrollment_date = Carbon::parse($request->enrollment_date)->format('Y-m-d');
            $directorPromoter->appointment_date = Carbon::parse($request->appointment_date)->format('Y-m-d');

            if($directorPromoter->save()){ 

                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Data Save Successfully.']);
            }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Member::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
