<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Form\FormCollection;
use App\Model\Capital;
use App\Model\Form;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $datas = Form::orderBy('created_at','desc')->select(['id','form_type','financial_year','member_id','created_at','submission_bate']);
            $search = $request->search['value'];

            if ($search) {
                $datas->where('paid_up_capital', 'like', '%'.$search.'%');              
            }
            $request->request->add(['page'=>(($request->start+$request->length)/$request->length )]);
            $datas = $datas->paginate($request->length);
            return response()->json(new FormCollection($datas));
           
        }

        return view('admin.form.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.form.create');
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
                'financial_year'=>'required',
                'submission_bate'=>'required',   
                'member'=>'required',   
                'form_type'=>'required',   
                'image'=>'required',   
            ]);

            $form = new Form;
          
            $form->financial_year = $request->financial_year;
            $form->member_id = $request->member;
            $form->form_type = $request->form_type;
            $form->submission_bate = Carbon::parse($request->submission_bate)->format('Y-m-d');

            if($request->hasFile('image')){
                $image_name = time().".".$request->file('image')->getClientOriginalExtension();
                $image = $request->file('image')->storeAs('form', $image_name);
                $form->file = 'storage/'.$image;
            } 

            if($form->save()){ 
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Form Created successfully.']);
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
        $form = Form::find($id);
        return view('admin.form.edit', compact('form')); 
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
                'financial_year'=>'required',
                'submission_bate'=>'required',   
                'member'=>'required',   
                'form_type'=>'required',   
                'image'=>'required',   
            ]);

            $form = Form::find($id);
          
            $form->financial_year = $request->financial_year;
            $form->member_id = $request->member;
            $form->form_type = $request->form_type;
            $form->submission_bate = Carbon::parse($request->submission_bate)->format('Y-m-d');

            if($request->hasFile('image')){
                $image_name = time().".".$request->file('image')->getClientOriginalExtension();
                $image = $request->file('image')->storeAs('form', $image_name);
                $form->file = 'storage/'.$image;
            } 

            if($form->save()){ 
                return redirect()->route('admin.'.request()->segment(2).'.index')->with(['class'=>'success','message'=>'Form Updated successfully.']);
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
        if(Form::where('id',$id)->delete()){
            
            return response()->json(['message'=>'Paid Up Capital/Authorised Capital  Deleted successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
