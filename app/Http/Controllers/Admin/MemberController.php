<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Member\MemberCollection;
use App\Model\Capital;
use App\Model\Member;
use App\Model\MemberGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = Member::orderBy('created_at','desc')->where('user_type', 2)->select(['id','name','membership_id','appointment_date','email','created_at','mobile_no']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('name', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new MemberCollection($datas));
           
        }

        return view('admin.member.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
       $members = MemberGroup::select('name','id','parent_id')->with('childs')->get();
       
        return view('admin.member.create', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
       $capital = Member::find($id);
        return view('admin.member.view', compact('capital')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
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

            $member = new Member;
            $member->user_type = 2;
            $member->introducer_member_name = $request->introducer_member_name;
            $member->member_group = $request->member_group;
            $member->monthly_income = $request->monthly_income;
            $member->address_1 = $request->address_1;
            $member->district = $request->district;
            $member->email = $request->email;
            $member->aadhar_no = $request->aadhar_no;
            $member->mother_name = $request->mother_name;
            $member->address_2 = $request->address_2;
            $member->country = $request->country;
            $member->pincode = $request->pincode;
            $member->mobile_no = $request->mobile_no;
            $member->pan = $request->pan;
            $member->din = $request->din;
            $member->name = $request->name;
            $member->gender = $request->gender;
            $member->state = $request->state;
            $member->occupation = $request->occupation;
            $member->marital_status = $request->marital_status;
            $member->relative_name = $request->relative_name;
            $member->bank_name = $request->bank_name;
            $member->ifs_code = $request->ifs_code;
            $member->bank_address = $request->bank_address;
            $member->bank_account = $request->bank_account;
            $member->account_type = $request->account_type;


            $member->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $member->enrollment_date = Carbon::parse($request->enrollment_date)->format('Y-m-d');
            $member->appointment_date = Carbon::parse($request->appointment_date)->format('Y-m-d');

            if($member->save()){ 

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
        $member = Member::find($id);
        return view('admin.member.edit', compact('member')); 
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

            $member = Member::find($id);
            $member->user_type = 2;
            $member->introducer_member_name = $request->introducer_member_name;
            $member->member_group = $request->member_group;
            $member->monthly_income = $request->monthly_income;
            $member->address_1 = $request->address_1;
            $member->district = $request->district;
            $member->email = $request->email;
            $member->aadhar_no = $request->aadhar_no;
            $member->mother_name = $request->mother_name;
            $member->address_2 = $request->address_2;
            $member->country = $request->country;
            $member->pincode = $request->pincode;
            $member->mobile_no = $request->mobile_no;
            $member->pan = $request->pan;
            $member->din = $request->din;
            $member->name = $request->name;
            $member->gender = $request->gender;
            $member->state = $request->state;
            $member->occupation = $request->occupation;
            $member->marital_status = $request->marital_status;
            $member->relative_name = $request->relative_name;
            $member->bank_name = $request->bank_name;
            $member->ifs_code = $request->ifs_code;
            $member->bank_address = $request->bank_address;
            $member->bank_account = $request->bank_account;
            $member->account_type = $request->account_type;


            $member->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $member->enrollment_date = Carbon::parse($request->enrollment_date)->format('Y-m-d');
            $member->appointment_date = Carbon::parse($request->appointment_date)->format('Y-m-d');

            if($member->save()){ 

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
