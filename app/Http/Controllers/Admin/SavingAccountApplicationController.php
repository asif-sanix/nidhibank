<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SavingAccountApplication\SavingAccountApplicationCollection;
use App\Model\Capital;
use App\Model\SavingAccount;
use App\Model\SavingAccountApplication;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavingAccountApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $datas = SavingAccountApplication::orderBy('created_at','desc')
            ->select('id','application_no','agent_id','member_id','scheme_id','status','application_date','created_at')
            ->with(['getMember'=>function($query){
                $query->select('id','name','email');
            }])
            ->with(['getAgent'=>function($query){
                $query->select('id','name','email');
            }]);

            if ($request->status === "0") {
                $datas->where('status', 0);
            } else{
                $datas->whereIn('status', $request->status?[$request->status]:[1,2,0]); 
            }

            $search = $request->search['value'];

            if ($search) {
                $datas->where('name', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new SavingAccountApplicationCollection($datas));
           
        }

        return view('admin.saving-accounts.application.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.saving-accounts.application.create');
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
                'application_date'=>'required',
                'member_name'=>'required',   
                'joint_ac_holder'=>'required',   
                'agent_name'=>'required',   
                'scheme'=>'required',   
                'opening_amount'=>'required',   
                'pay_mode'=>'required',   
            ]);

            $application = new SavingAccountApplication;
          
            $application->member_id = $request->member_name;
            $application->joint_ac_holder_id = $request->joint_ac_holder;
            $application->agent_id = $request->agent_name;
            $application->opening_amount = $request->opening_amount;
            $application->pay_mode = $request->pay_mode;
            $application->scheme_id = $request->scheme;

            $application->application_date = Carbon::parse($request->application_date)->format('Y-m-d');
            $application->application_no = AccountSeriesGen('SAVING_APPLICATION','\App\Model\SavingAccountApplication','application_no');


            if($application->save()){ 
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Application Created successfully.']);
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
        $application = SavingAccountApplication::find($id);
        return view('admin.saving-accounts.application.edit', compact('application')); 
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
            'application_date'=>'required',
            'member_name'=>'required',   
            'joint_ac_holder'=>'required',   
            'agent_name'=>'required',   
            'scheme'=>'required',   
            'opening_amount'=>'required',   
            'pay_mode'=>'required',   
        ]);

        $application = SavingAccountApplication::find($id);
      
        $application->member_id = $request->member_name;
        $application->joint_ac_holder_id = $request->joint_ac_holder;
        $application->agent_id = $request->agent_name;
        $application->opening_amount = $request->opening_amount;
        $application->pay_mode = $request->pay_mode;
        $application->scheme_id = $request->scheme;

        $application->application_date = Carbon::parse($request->application_date)->format('Y-m-d');
        
        if($application->save()){ 
            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Application Updated successfully.']);
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
        if(SavingAccountApplication::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Scheme Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }



    public function changeStatus(Request $request)
    { 
        if(SavingAccountApplication::where(['id'=>$request->id])->update(['status'=>$request->status])){

        if($request->status == 1){
              $account = new SavingAccount; 
              $application =  SavingAccountApplication::find($request->id);

              $account->application_id = $application->id;
              $account->member_id = $application->member_id;
              $account->scheme_id = $application->scheme_id;
              $account->agent_id = $application->agent_id;

              $account->account_no = AccountSeriesGen('SAVING_ACT','\App\Model\SavingAccount','account_no');

              $account->save();
        }

          return response()->json(['message'=>'Application Status Changed', 'class'=>'success']);    
        }

        
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error','error'=>true]);

    }

}
