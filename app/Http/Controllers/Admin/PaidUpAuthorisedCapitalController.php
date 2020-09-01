<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\PaidUpAuthorisedCapital\PaidUpAuthorisedCapitalCollection;
use App\Model\Capital;
use App\Model\PaidUpAuthorisedCapital;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaidUpAuthorisedCapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = PaidUpAuthorisedCapital::orderBy('created_at','desc')->select(['id','date','paid_up_capital','authorised_capital','created_at']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('paid_up_capital', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new PaidUpAuthorisedCapitalCollection($datas));
           
        }

        return view('admin.paid-up-authorised-capital.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.paid-up-authorised-capital.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
       $capital = PaidUpAuthorisedCapital::find($id);
        return view('admin.paid-up-authorised-capital.view', compact('capital')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
                'paid_up_capital'=>'required',
                'authorised_capital'=>'required',   
                'date'=>'required',   
            ]);

            $paidup = new PaidUpAuthorisedCapital;
          
            $paidup->paid_up_capital = $request->paid_up_capital;
            $paidup->authorised_capital = $request->authorised_capital;
            $paidup->date = Carbon::parse($request->date)->format('Y-m-d');

            if($paidup->save()){ 
                $capital = new Capital;
                $capital->admin = Auth::guard('admin')->user()->name;
                $capital->capital_id = $paidup->id;
                $capital->save();
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Paid Up Capital/Authorised Capital Created successfully.']);
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
        $capital = PaidUpAuthorisedCapital::find($id);
        return view('admin.paid-up-authorised-capital.edit', compact('capital')); 
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
                'paid_up_capital'=>'required',
                'authorised_capital'=>'required',   
                'date'=>'required',   
            ]);

            $paidup = PaidUpAuthorisedCapital::find($id);
          
            $paidup->paid_up_capital = $request->paid_up_capital;
            $paidup->authorised_capital = $request->authorised_capital;
            $paidup->date = Carbon::parse($request->date)->format('Y-m-d');

            if($paidup->save()){ 
                $capital = new Capital;
                $capital->admin = Auth::guard('admin')->user()->name;
                $capital->capital_id = $paidup->id;
                $capital->save();
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Paid Up Capital/Authorised Capital Updated Successfully.']);
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
        if(PaidUpAuthorisedCapital::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
