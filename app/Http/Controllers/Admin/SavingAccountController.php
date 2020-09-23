<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SavingAccount\SavingAccountCollection;
use App\Model\Capital;
use App\Model\SavingAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavingAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $datas = SavingAccount::orderBy('created_at','desc')
            ->select('id','account_no','application_id','agent_id','member_id','scheme_id','status','created_at')
            ->with(['getMember'=>function($query){
                $query->select('id','name','email');
            }])
            ->with(['getApplication'=>function($query){
                $query->select('id','application_date','application_no');
            }])
            ->with(['getAgent'=>function($query){
                $query->select('id','name','email');
            }]);


            $search = $request->search['value'];

            if ($search) {
                $datas->where('name', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new SavingAccountCollection($datas));
           
        }

        return view('admin.saving-accounts.account.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.saving-accounts.account.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
        $account = SavingAccount::orderBy('created_at','desc')
            ->select('id','account_no','application_id','agent_id','member_id','scheme_id','status','created_at')
            ->with(['getMember'=>function($query){
                $query->select('id','name','email');
            }])
            ->with(['getApplication'=>function($query){
                $query->select('id','application_date','application_no','status');
            }])
            ->with(['getAgent'=>function($query){
                $query->select('id','name','email');
            }])
        ->first();
        return view('admin.saving-accounts.view.index', compact('account')); 
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

            $application = new SavingAccount;
          
            $application->member_id = $request->member_name;
            $application->joint_ac_holder_id = $request->joint_ac_holder;
            $application->agent_id = $request->agent_name;
            $application->opening_amount = $request->opening_amount;
            $application->pay_mode = $request->pay_mode;
            $application->scheme_id = $request->scheme;

            $application->application_date = Carbon::parse($request->application_date)->format('Y-m-d');
            $application->application_no = AccountSeriesGen('SAVING_APPLICATION','\App\Model\SavingAccount','application_no');


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
        $application = SavingAccount::find($id);
        return view('admin.saving-accounts.account.edit', compact('application')); 
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

        $application = SavingAccount::find($id);
      
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
        if(SavingAccount::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Scheme Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }



    public function changeStatus(Request $request)
    { 
        if(SavingAccount::where(['id'=>$request->id])->update(['status'=>$request->status])){

        if($request->status == 1){
              $account = new SavingAccount; 
              $application =  SavingAccount::find($request->id);

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
