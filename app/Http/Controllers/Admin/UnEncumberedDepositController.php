<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\UnEncumberedDeposit\UnEncumberedDepositCollection;
use App\Model\Capital;
use App\Model\UnEncumberedDeposit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnEncumberedDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = UnEncumberedDeposit::orderBy('created_at','desc')->select(['id','bank_po_name','fd_amount','fd_no','created_at','annual_interest_rate']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('paid_up_capital', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new UnEncumberedDepositCollection($datas));
           
        }

        return view('admin.un-encumbered-deposit.list');
    }

    /**
     * Show the UnEncumberedDeposit for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.un-encumbered-deposit.create');
    }

    /**
     * Show the UnEncumberedDeposit for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {   
       $capital = UnEncumberedDeposit::find($id);
        return view('admin.un-encumbered-deposit.view', compact('capital')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
                'deposit_type'=>'required',
                'bank_po_name'=>'required',   
                'fd_amount'=>'required',   
                'fd_no'=>'required',   
                'annual_interest_rate'=>'required',   
                'is_fd_mandatory'=>'required',   
                'open_date'=>'required',   
                'maturity_date'=>'required',   
                'file'=>'nullable|image|mimes:jpeg,png,jpg|max:4000',    
            ]);

            $UnEncumberedDeposit = new UnEncumberedDeposit;
          
            $UnEncumberedDeposit->deposit_type = $request->deposit_type;
            $UnEncumberedDeposit->bank_po_name = $request->bank_po_name;
            $UnEncumberedDeposit->fd_amount = $request->fd_amount;
            $UnEncumberedDeposit->fd_no = $request->fd_no;
            $UnEncumberedDeposit->address = $request->address;
            $UnEncumberedDeposit->is_fd_mandatory = $request->is_fd_mandatory?1:0;
            $UnEncumberedDeposit->annual_interest_rate = $request->annual_interest_rate;
            $UnEncumberedDeposit->open_date = Carbon::parse($request->open_date)->format('Y-m-d');
            $UnEncumberedDeposit->maturity_date = Carbon::parse($request->maturity_date)->format('Y-m-d');

            if($request->hasFile('file')){
                $image_name = time().".".$request->file('file')->getClientOriginalExtension();
                $image = $request->file('file')->storeAs('UnEncumberedDeposit', $image_name);
                $UnEncumberedDeposit->file = 'storage/'.$image;
            } 

            if($UnEncumberedDeposit->save()){ 
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'UnEncumberedDeposit Created successfully.']);
            }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
        }
        
    /**
     * Show the UnEncumberedDeposit for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $deposit = UnEncumberedDeposit::find($id);
        return view('admin.un-encumbered-deposit.edit', compact('deposit')); 
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
            'deposit_type'=>'required',
            'bank_po_name'=>'required',   
            'fd_amount'=>'required',   
            'fd_no'=>'required',   
            'annual_interest_rate'=>'required',   
            'is_fd_mandatory'=>'required',   
            'open_date'=>'required',   
            'maturity_date'=>'required',   
            'file'=>'nullable|image|mimes:jpeg,png,jpg|max:4000',    
        ]);

        $UnEncumberedDeposit = UnEncumberedDeposit::find($id);
      
        $UnEncumberedDeposit->deposit_type = $request->deposit_type;
        $UnEncumberedDeposit->bank_po_name = $request->bank_po_name;
        $UnEncumberedDeposit->fd_amount = $request->fd_amount;
        $UnEncumberedDeposit->fd_no = $request->fd_no;
        $UnEncumberedDeposit->address = $request->address;
        $UnEncumberedDeposit->is_fd_mandatory = $request->is_fd_mandatory?1:0;
        $UnEncumberedDeposit->annual_interest_rate = $request->annual_interest_rate;
        $UnEncumberedDeposit->open_date = Carbon::parse($request->open_date)->format('Y-m-d');
        $UnEncumberedDeposit->maturity_date = Carbon::parse($request->maturity_date)->format('Y-m-d');

        if($request->hasFile('file')){
            $image_name = time().".".$request->file('file')->getClientOriginalExtension();
            $image = $request->file('file')->storeAs('UnEncumberedDeposit', $image_name);
            $UnEncumberedDeposit->file = 'storage/'.$image;
        } 

        if($UnEncumberedDeposit->save()){ 
            return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'UnEncumberedDeposit Created successfully.']);
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
        if(UnEncumberedDeposit::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
