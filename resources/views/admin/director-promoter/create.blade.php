@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Slider Create</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_slider')
                <a href="{{ route('admin.paid-up-authorised-capital.create') }}" class="btn btn-primary btn-sm">Add Slider</a>
            @endcan
       </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-content">
        <div class="card-body">
          {!! Form::open(['method' => 'POST', 'route' =>'admin.'.request()->segment(2).'.store', 'class' => 'form-horizontal','files'=>true]) !!}
            <div class="row">
                <div class="col-md-4 col-sm-12">


                    <div class="form-group{{ $errors->has('director_promoter') ? ' has-error' : '' }}">
                        {!! Form::label('director_promoter', 'Director/Promote') !!}
                        {!! Form::select('director_promoter',['Director'=>'Director','Promote'=>'Promote'], null, ['id' => 'director_promoter', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Director/Promote']) !!}
                        <small class="text-danger">{{ $errors->first('director_promoter') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                        
                        {!! Form::label('date_of_birth', 'Date Of Birth') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('date_of_birth', null, ['class' => 'form-control pickadate', 'placeholder' => 'Date Of Birth']) !!}
                        <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
                    </div>
                    </div>

                    

                    <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                        {!! Form::label('address_1', 'Address1') !!}
                        {!! Form::text('address_1', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Address1']) !!}
                        <small class="text-danger">{{ $errors->first('address_1') }}</small>
                    </div>

                     

                    <div class="form-group {{ $errors->has('district') ? ' has-error' : '' }}">
                        {!! Form::label('district', 'Discrict') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('district', null, ['class' => 'form-control', 'placeholder' => 'District']) !!}
                        <small class="text-danger">{{ $errors->first('district') }}</small>
                    </div>

                    

                   

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Email']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('aadhar_no') ? ' has-error' : '' }}">
                        {!! Form::label('aadhar_no', 'Aadhar No.') !!}
                        {!! Form::text('aadhar_no', null, ['class' => 'form-control', 'placeholder' => 'Aadhar No.']) !!}
                        <small class="text-danger">{{ $errors->first('aadhar_no') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                        {!! Form::label('mother_name', 'Mother Name') !!}
                        {!! Form::text('mother_name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Mother Name']) !!}
                        <small class="text-danger">{{ $errors->first('mother_name') }}</small>
                    </div>


                    

                </div>





                <div class="col-md-4 col-sm-12">
                    <div class="form-group {{ $errors->has('enrollment_date') ? ' has-error' : '' }}">
                        
                        {!! Form::label('enrollment_date', 'Enrollment Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('enrollment_date', null, ['class' => 'form-control pickadate', 'placeholder' => 'Enrollment Date']) !!}
                        <small class="text-danger">{{ $errors->first('enrollment_date') }}</small>
                    </div>
                    </div>


                    

                    <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                        {!! Form::label('address_2', 'Address2') !!}
                        {!! Form::text('address_2', null, ['class' => 'form-control', 'placeholder' => 'Address2']) !!}
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
                        {!! Form::text('pincode', null, ['class' => 'form-control', 'placeholder' => 'Pincode']) !!}
                        <small class="text-danger">{{ $errors->first('pincode') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                           {!! Form::label('mobile_no', 'Mobile No.') !!}
                           {!! Form::text('mobile_no', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Mobile No.']) !!}
                           <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                       </div> 


                      

                       <div class="form-group{{ $errors->has('pan') ? ' has-error' : '' }}">
                           {!! Form::label('pan', 'PAN') !!}
                           {!! Form::text('pan', null, ['class' => 'form-control', 'placeholder' => 'PAN']) !!}
                           <small class="text-danger">{{ $errors->first('pan') }}</small>
                       </div>

                      


                       <div class="form-group{{ $errors->has('din') ? ' has-error' : '' }}">
                           {!! Form::label('din', 'DIN') !!}
                           {!! Form::text('din', null, ['class' => 'form-control', 'placeholder' => 'DIN']) !!}
                           <small class="text-danger">{{ $errors->first('din') }}</small>
                       </div>



                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}
                </div>


                <div class="col-md-4 col-sm-12">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Name']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        {!! Form::label('gender', 'Gender') !!}
                        {!! Form::select('gender', ['Male'=>'Male','Female'=>'Female'], null, ['id' => 'gender', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Gender']) !!}
                        <small class="text-danger">{{ $errors->first('gender') }}</small>
                    </div>


                     <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                        {!! Form::label('state', 'State') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('state', App\Model\State::pluck('name','name'), null, ['id' => 'state', 'class' => 'form-control select2', 'placeholder' => 'State']) !!}
                        <small class="text-danger">{{ $errors->first('state') }}</small>
                    </div>


                     <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                        {!! Form::label('occupation', 'Occupation') !!}
                        {!! Form::text('occupation', null, ['class' => 'form-control', 'placeholder' => 'Occupation']) !!}
                        <small class="text-danger">{{ $errors->first('occupation') }}</small>
                    </div>



                    <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                        {!! Form::label('marital_status', 'Marital Status') !!}
                        {!! Form::select('marital_status', ['Married'=>'Married','UnMarried'=>'UnMarried'], null, ['id' => 'marital_status', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Marital Status']) !!}
                        <small class="text-danger">{{ $errors->first('marital_status') }}</small>
                  </div> 


                   <div class="form-group{{ $errors->has('relative_name') ? ' has-error' : '' }}">
                       {!! Form::label('relative_name', 'Relative Name') !!}
                       {!! Form::text('relative_name', null, ['class' => 'form-control', 'placeholder' => 'Relative Name']) !!}
                       <small class="text-danger">{{ $errors->first('relative_name') }}</small>
                   </div>


                   <div class="form-group {{ $errors->has('appointment_date') ? ' has-error' : '' }}">
                        
                    {!! Form::label('appointment_date', 'Appointment Date') !!}
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span class="fa fa-calendar-o"></span>
                        </span>
                    </div>
                    {!! Form::text('appointment_date', null, ['class' => 'form-control pickadate', 'placeholder' => 'Appointment Date']) !!}
                    <small class="text-danger">{{ $errors->first('appointment_date') }}</small>
                </div>
                </div>
                    


                </div>

            </div>
                
            {!! Form::close() !!}

        </div>
             
    </div>
</div>
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