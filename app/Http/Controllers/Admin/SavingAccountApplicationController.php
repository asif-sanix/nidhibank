<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SavingAccountApplication\SavingAccountApplicationCollection;
use App\Model\Capital;
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
            $datas = SavingAccountApplication::orderBy('created_at','desc')->select(['id','name','scheme_code','interest_payout','created_at','interest_rate']);
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
                'scheme_code'=>'required',
                'interest_payout'=>'required',   
                'minimum_balance'=>'required',   
                'name'=>'required',   
                'interest_rate'=>'required',   
            ]);

            $application = new SavingAccountApplication;
          
            $application->application_code = $request->application_code;
            $application->interest_payout = $request->interest_payout;
            $application->minimum_balance = $request->minimum_balance;
            $application->name = $request->name;
            $application->interest_rate = $request->interest_rate;
            $application->is_active = $request->is_active?1:0;


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
        $scheme = SavingAccountApplication::find($id);
        return view('admin.saving-accounts.application.edit', compact('scheme')); 
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
            'scheme_code'=>'required',
            'interest_payout'=>'required',   
            'minimum_balance'=>'required',   
            'name'=>'required',   
            'interest_rate'=>'required',   
        ]);

        $scheme = SavingAccountApplication::find($id);
      
        $scheme->scheme_code = $request->scheme_code;
        $scheme->interest_payout = $request->interest_payout;
        $scheme->minimum_balance = $request->minimum_balance;
        $scheme->name = $request->name;
        $scheme->interest_rate = $request->interest_rate;
        $scheme->is_active = $request->is_active?1:0;


        if($scheme->save()){ 
            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Scheme Updated successfully.']);
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
}
