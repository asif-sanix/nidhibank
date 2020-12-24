<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Agent\AgentCollection;
use App\Model\Capital;
use App\Model\Agent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = Agent::orderBy('created_at','desc')->select(['id','code','name','date_of_birth','mobile_no','created_at','email']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('name', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new AgentCollection($datas));
           
        }

        return view('admin.agent.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.agent.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
       $capital = Form::find($id);
        return view('admin.form.view', compact('capital')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'mobile_no'=>'required',
                'agent_rank'=>'required',   
                'date_of_birth'=>'required',   
                'address_1'=>'required',   
                'district'=>'required',   
                'associate_member'=>'required',   
                'father_name'=>'required',   
                'pincode'=>'required',   
                'gender'=>'required',   
                'date_of_joining'=>'required',   
                'state'=>'required',   
            ]);

            $agent = new Agent;
          
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->agent_rank_id = $request->agent_rank;
            $agent->mobile_no = $request->mobile_no;
            $agent->address_1 = $request->address_1;
            $agent->district = $request->district;
            $agent->aadhar_no = $request->aadhar_no;
            $agent->associate_member_id = $request->associate_member;
            $agent->father_name = $request->father_name;
            $agent->address_2 = $request->address_2;
            $agent->pincode = $request->pincode;
            $agent->pan = $request->pan;
            $agent->gender = $request->gender;
            $agent->state = $request->state;
            $agent->spouse_name = $request->spouse_name;
            $agent->occupation = $request->occupation;


            $agent->bank_name = $request->bank_name;
            $agent->ifs_code = $request->ifs_code;
            $agent->bank_address = $request->bank_address;
            $agent->bank_account = $request->bank_account;
            $agent->account_type = $request->account_type;
            
            $agent->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $agent->date_of_joining = Carbon::parse($request->date_of_joining)->format('Y-m-d');
            $agent->code = AccountSeriesGen('agent_code','\App\Model\Agent','code');

            if($agent->save()){ 

                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Agent Created successfully.']);
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
        $agent = Agent::find($id);
        return view('admin.agent.edit', compact('agent')); 
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
                'name'=>'required',
                'email'=>'required',
                'mobile_no'=>'required',
                'agent_rank'=>'required',   
                'date_of_birth'=>'required',   
                'address_1'=>'required',   
                'district'=>'required',   
                'associate_member'=>'required',   
                'father_name'=>'required',   
                'pincode'=>'required',   
                'gender'=>'required',   
                'date_of_joining'=>'required',   
                'state'=>'required',   
            ]);

            $agent = Agent::find($id);
          
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->agent_rank_id = $request->agent_rank;
            $agent->mobile_no = $request->mobile_no;
            $agent->address_1 = $request->address_1;
            $agent->district = $request->district;
            $agent->aadhar_no = $request->aadhar_no;
            $agent->associate_member_id = $request->associate_member;
            $agent->father_name = $request->father_name;
            $agent->address_2 = $request->address_2;
            $agent->pincode = $request->pincode;
            $agent->pan = $request->pan;
            $agent->gender = $request->gender;
            $agent->state = $request->state;
            $agent->spouse_name = $request->spouse_name;


            $agent->bank_name = $request->bank_name;
            $agent->ifs_code = $request->ifs_code;
            $agent->bank_address = $request->bank_address;
            $agent->bank_account = $request->bank_account;
            $agent->account_type = $request->account_type;
            
            $agent->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $agent->date_of_joining = Carbon::parse($request->date_of_joining)->format('Y-m-d');

            if($agent->save()){ 

                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Agent Updated successfully.']);
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
        if(Agent::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
