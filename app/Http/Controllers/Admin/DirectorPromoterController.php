<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\DirectorPromoter\DirectorPromoterCollection;
use App\Model\Capital;
use App\Model\DirectorPromoter;
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
            $datas = DirectorPromoter::orderBy('created_at','desc')->select(['id','name','membership_id','appointment_date','email','created_at','mobile_no']);
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
       $capital = DirectorPromoter::find($id);
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
                'paid_up_capital'=>'required',
                'authorised_capital'=>'required',   
                'date'=>'required',   
            ]);

            $paidup = new DirectorPromoter;
          
            $paidup->paid_up_capital = $request->paid_up_capital;
            $paidup->authorised_capital = $request->authorised_capital;
            $paidup->date = Carbon::parse($request->date)->format('Y-m-d');

            if($paidup->save()){ 
                $capital = new Capital;
                $capital->admin = Auth::guard('admin')->user()->name;
                $capital->admin_id = Auth::guard('admin')->user()->id;
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
        $capital = DirectorPromoter::find($id);
        return view('admin.director-promoter.edit', compact('capital')); 
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

            $paidup = DirectorPromoter::find($id);
          
            $paidup->paid_up_capital = $request->paid_up_capital;
            $paidup->authorised_capital = $request->authorised_capital;
            $paidup->date = Carbon::parse($request->date)->format('Y-m-d');

            if($paidup->save()){ 
                $capital = new Capital;
                $capital->admin = Auth::guard('admin')->user()->name;
                $capital->capital_id = $paidup->id;
                $capital->admin_id = Auth::guard('admin')->user()->id;
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
        if(DirectorPromoter::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
