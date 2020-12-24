@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Director/Promoter</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_director_promoter')
                <a href="{{ route('admin.director-promoter.create') }}" class="btn btn-primary btn-sm">Add Director/Promoter</a>
            @endcan
       </div>
    </div>
</div>
</div>

{!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$directorPromoter->id],'method'=>'put','files'=>true]) !!}

<div class="card">
    <div class="card-content">
        <div class="card-body">
          
            <div class="row">
                <div class="col-md-4 col-sm-12">


                    <div class="form-group{{ $errors->has('director_promoter') ? ' has-error' : '' }}">
                        {!! Form::label('director_promoter', 'Director/Promote') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('director_promoter',['Director'=>'Director','Promote'=>'Promote'], $directorPromoter->director_promoter, ['id' => 'director_promoter', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Director/Promote']) !!}
                        <small class="text-danger">{{ $errors->first('director_promoter') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                        
                        {!! Form::label('date_of_birth', 'Date Of Birth') !!}
                        <span class="required danger">*</span>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('date_of_birth', $directorPromoter->date_of_birth, ['class' => 'form-control pickadate', 'placeholder' => 'Date Of Birth']) !!}
                        <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
                    </div>
                    </div>

                    

                    <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                        {!! Form::label('address_1', 'Address1') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('address_1', $directorPromoter->address_1, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Address1']) !!}
                        <small class="text-danger">{{ $errors->first('address_1') }}</small>
                    </div>

                     

                    <div class="form-group {{ $errors->has('district') ? ' has-error' : '' }}">
                        {!! Form::label('district', 'Discrict') !!}
                        <span class="required danger">*</span>
                        <span class="required danger">*</span>
                        {!! Form::text('district', $directorPromoter->district, ['class' => 'form-control', 'placeholder' => 'District']) !!}
                        <small class="text-danger">{{ $errors->first('district') }}</small>
                    </div>

                    

                   

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('email', $directorPromoter->email, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Email']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('aadhar_no') ? ' has-error' : '' }}">
                        {!! Form::label('aadhar_no', 'Aadhar No.') !!}
                        {!! Form::text('aadhar_no', $directorPromoter->aadhar_no, ['class' => 'form-control', 'placeholder' => 'Aadhar No.']) !!}
                        <small class="text-danger">{{ $errors->first('aadhar_no') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                        {!! Form::label('mother_name', 'Mother Name') !!}
                        {!! Form::text('mother_name', $directorPromoter->mother_name, ['class' => 'form-control', 'placeholder'=>'Mother Name']) !!}
                        <small class="text-danger">{{ $errors->first('mother_name') }}</small>
                    </div>


                    

                </div>





                <div class="col-md-4 col-sm-12">
                    <div class="form-group {{ $errors->has('enrollment_date') ? ' has-error' : '' }}">
                        
                        {!! Form::label('enrollment_date', 'Enrollment Date') !!}
                        <span class="required danger">*</span>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('enrollment_date', $directorPromoter->enrollment_date, ['class' => 'form-control pickadate', 'placeholder' => 'Enrollment Date']) !!}
                        <small class="text-danger">{{ $errors->first('enrollment_date') }}</small>
                    </div>
                    </div>


                    

                    <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                        {!! Form::label('address_2', 'Address2') !!}
                        {!! Form::text('address_2', $directorPromoter->address_2, ['class' => 'form-control', 'placeholder' => 'Address2']) !!}
                        <small class="text-danger">{{ $errors->first('address_2') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                        {!! Form::label('country', 'Country') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('country', 'India', ['class' => 'form-control', 'placeholder' => 'Country','readonly']) !!}
                        <small class="text-danger">{{ $errors->first('country') }}</small>
                    </div>


                   

                    <div class="form-group {{ $errors->has('pincode') ? ' has-error' : '' }}">
                        {!! Form::label('pincode', 'Pincode') !!}
                        <span class="required danger">*</span>
                        <span class="required danger">*</span>
                        {!! Form::text('pincode', $directorPromoter->pincode, ['class' => 'form-control', 'placeholder' => 'Pincode']) !!}
                        <small class="text-danger">{{ $errors->first('pincode') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                           {!! Form::label('mobile_no', 'Mobile No.') !!}
                           <span class="required danger">*</span>
                           {!! Form::text('mobile_no', $directorPromoter->mobile_no, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Mobile No.']) !!}
                           <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                       </div> 


                      

                       <div class="form-group{{ $errors->has('pan') ? ' has-error' : '' }}">
                           {!! Form::label('pan', 'PAN') !!}
                           {!! Form::text('pan', $directorPromoter->pan, ['class' => 'form-control', 'placeholder' => 'PAN']) !!}
                           <small class="text-danger">{{ $errors->first('pan') }}</small>
                       </div>

                      


                       <div class="form-group{{ $errors->has('din') ? ' has-error' : '' }}">
                           {!! Form::label('din', 'DIN') !!}
                           {!! Form::text('din', $directorPromoter->din, ['class' => 'form-control', 'placeholder' => 'DIN']) !!}
                           <small class="text-danger">{{ $errors->first('din') }}</small>
                       </div>



                    
                </div>


                <div class="col-md-4 col-sm-12">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('name', $directorPromoter->name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Name']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        {!! Form::label('gender', 'Gender') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('gender', ['Male'=>'Male','Female'=>'Female'], $directorPromoter->gender, ['id' => 'gender', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Gender']) !!}
                        <small class="text-danger">{{ $errors->first('gender') }}</small>
                    </div>


                     <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                        {!! Form::label('state', 'State') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('state', App\Model\State::pluck('name','name'), $directorPromoter->state, ['id' => 'state', 'class' => 'form-control select2', 'placeholder' => 'State']) !!}
                        <small class="text-danger">{{ $errors->first('state') }}</small>
                    </div>


                     <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                        {!! Form::label('occupation', 'Occupation') !!}
                        {!! Form::text('occupation', $directorPromoter->occupation, ['class' => 'form-control', 'placeholder' => 'Occupation']) !!}
                        <small class="text-danger">{{ $errors->first('occupation') }}</small>
                    </div>



                    <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                        {!! Form::label('marital_status', 'Marital Status') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('marital_status', ['Married'=>'Married','UnMarried'=>'UnMarried'], $directorPromoter->marital_status, ['id' => 'marital_status', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Marital Status']) !!}
                        <small class="text-danger">{{ $errors->first('marital_status') }}</small>
                  </div> 


                   <div class="form-group{{ $errors->has('relative_name') ? ' has-error' : '' }}">
                       {!! Form::label('relative_name', 'Relative Name') !!}
                       {!! Form::text('relative_name', $directorPromoter->relative_name, ['class' => 'form-control', 'placeholder' => 'Relative Name']) !!}
                       <small class="text-danger">{{ $errors->first('relative_name') }}</small>
                   </div>


                   <div class="form-group {{ $errors->has('appointment_date') ? ' has-error' : '' }}">
                        
                    {!! Form::label('appointment_date', 'Appointment Date') !!}
                    <span class="required danger">*</span>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span class="fa fa-calendar-o"></span>
                        </span>
                    </div>
                    {!! Form::text('appointment_date', $directorPromoter->appointment_date, ['class' => 'form-control pickadate', 'placeholder' => 'Appointment Date']) !!}
                    <small class="text-danger">{{ $errors->first('appointment_date') }}</small>
                </div>
                </div>
                    


                </div>

            </div>
                
            

        </div>
             
    </div>
</div>


<div class="card">
    <div class="card-content">
        <div class="card-header" id="heading-links">
          <h4 class="card-title">Bank Details</h4>
          
        </div>
        <div class="card-body">

            <div class="row">

                 <div class="col-md-4 col-sm-12">
            <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                {!! Form::label('bank_name', 'Bank Name') !!}
                {!! Form::text('bank_name', $directorPromoter->bank_name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Name']) !!}
                <small class="text-danger">{{ $errors->first('bank_name') }}</small>
            </div>

            <div class="form-group{{ $errors->has('ifs_code') ? ' has-error' : '' }}">
                {!! Form::label('ifs_code', 'IFS Code') !!}
                {!! Form::text('ifs_code', $directorPromoter->ifs_code, ['class' => 'form-control', 'required' => 'required','placeholder'=>'IFS Code']) !!}
                <small class="text-danger">{{ $errors->first('ifs_code') }}</small>
            </div>
        </div>

         <div class="col-md-4 col-sm-12">

            <div class="form-group{{ $errors->has('bank_address') ? ' has-error' : '' }}">
                {!! Form::label('bank_address', 'Bank Address') !!}
                {!! Form::text('bank_address', $directorPromoter->bank_address, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Address']) !!}
                <small class="text-danger">{{ $errors->first('bank_address') }}</small>
            </div>

            <div class="form-group{{ $errors->has('bank_account') ? ' has-error' : '' }}">
                {!! Form::label('bank_account', 'Bank Account') !!}
                {!! Form::text('bank_account', $directorPromoter->bank_account, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Account']) !!}
                <small class="text-danger">{{ $errors->first('bank_account') }}</small>
            </div>
        </div>

         <div class="col-md-4 col-sm-12">

            <div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
                {!! Form::label('account_type', 'Account Type') !!}
                {!! Form::select('account_type', ['Saving'=>'Saving Account','Current'=>'Current Account'], $directorPromoter->account_type, ['id' => 'account_type', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Account Type']) !!}
                <small class="text-danger">{{ $errors->first('account_type') }}</small>
            </div>

             <div class="button-group">
            {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}
        </div>

        </div>
        </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection
@push('scripts')




  <script src="{{asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>  
  <script src="{{asset('admin-assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}"
  type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('.select2').select2();
});

</script>
@endpush