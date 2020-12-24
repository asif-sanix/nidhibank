@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

  <div class="content-header-left col-md-6 col-12 mb-2">
    <h5 class="content-header-title mb-0">Agent Ranking</h5>
  </div>

  <div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
      <div class="btn-group" role="group">
        @can('add_agent_ranking')
        <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Agent Add Ranking</a>
        @endcan
      </div>
    </div>
  </div>
</div>

{!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$agent->id],'method'=>'put','files'=>true]) !!}

<div class="card">
  <div class="card-content">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 col-sm-12">

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name') !!}
            <span class="required danger">*</span>
            {!! Form::text('name', $agent->name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Name']) !!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
          </div>

          <div class="form-group{{ $errors->has('agent_rank') ? ' has-error' : '' }}">
           {!! Form::label('agent_rank', 'Agent Rank') !!}
           <span class="required danger">*</span>
           {!! Form::select('agent_rank', App\Model\AgentRanking::pluck('rank_name','id'), $agent->agent_rank, ['id' => 'agent_rank', 'class' => 'form-control select2', 'required' => 'required', 'placeholder'=>'Select Agent Rank']) !!}
           <small class="text-danger">{{ $errors->first('agent_rank') }}</small>
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
            {!! Form::text('date_of_birth', $agent->date_of_birth, ['class' => 'pickadate form-control', 'placeholder' => 'Date Of Birth']) !!}
            <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
          </div>
        </div>



        <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
          {!! Form::label('address_1', 'Address1') !!}
          <span class="required danger">*</span>
          {!! Form::text('address_1', $agent->address_1, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Address1']) !!}
          <small class="text-danger">{{ $errors->first('address_1') }}</small>
        </div>

        <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
          {!! Form::label('district', 'District') !!}
          <span class="required danger">*</span>
          {!! Form::text('district', $agent->district, ['class' => 'form-control', 'required' => 'required','placeholder'=>'District']) !!}
          <small class="text-danger">{{ $errors->first('district') }}</small>
        </div>

        <div class="form-group{{ $errors->has('aadhar_no') ? ' has-error' : '' }}">
          {!! Form::label('aadhar_no', 'Aadhar No.') !!}
          {!! Form::text('aadhar_no', $agent->aadhar_no, ['class' => 'form-control','placeholder'=>'Aadgar No.']) !!}
          <small class="text-danger">{{ $errors->first('aadhar_no') }}</small>
        </div>




      </div>


      <div class="col-md-4 col-sm-12">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          {!! Form::label('email', 'Email') !!}
          <span class="required danger">*</span>
          {!! Form::text('email', $agent->email, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Email']) !!}
          <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>

        <div class="form-group{{ $errors->has('associate_member') ? ' has-error' : '' }}">
          {!! Form::label('associate_member', 'Associate Member') !!}
          <span class="required danger">*</span>
          {!! Form::select('associate_member', [], $agent->associate_member_id, ['id' => 'associate_member', 'class' => 'get_member form-control', 'required' => 'required', 'placeholder'=>'Associate Member']) !!}
          <small class="text-danger">{{ $errors->first('associate_member') }}</small>
        </div>

        <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
          {!! Form::label('father_name', 'Father Name') !!}
          <span class="required danger">*</span>
          {!! Form::text('father_name', $agent->father_name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Father Name']) !!}
          <small class="text-danger">{{ $errors->first('father_name') }}</small>
        </div>



        <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
          {!! Form::label('address_2', 'Address2') !!}
          {!! Form::text('address_2', $agent->address_2, ['class' => 'form-control', 'placeholder'=>'Address2']) !!}
          <small class="text-danger">{{ $errors->first('address_2') }}</small>
        </div>



        <div class="form-group {{ $errors->has('pincode') ? ' has-error' : '' }}">
          {!! Form::label('pincode', 'Pincode') !!}
          <span class="required danger">*</span>
          {!! Form::text('pincode', $agent->pincode, ['class' => 'form-control', 'placeholder' => 'Pincode']) !!}
          <small class="text-danger">{{ $errors->first('pincode') }}</small>
        </div>

        <div class="form-group{{ $errors->has('pan') ? ' has-error' : '' }}">
          {!! Form::label('pan', 'PAN') !!}
          {!! Form::text('pan', $agent->pan, ['class' => 'form-control', 'placeholder'=>'PAN']) !!}
          <small class="text-danger">{{ $errors->first('pan') }}</small>
        </div>

      </div>


      <div class="col-md-4 col-sm-12">

        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
          {!! Form::label('mobile_no', 'Mobile No.') !!}
          <span class="required danger">*</span>
          {!! Form::text('mobile_no', $agent->mobile_no, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Mobile No.']) !!}
          <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
        </div>

        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
         {!! Form::label('gender', 'Gender') !!}
         <span class="required danger">*</span>
         {!! Form::select('gender', ['Female'=>'Female','Male'=>'Male'], $agent->gender, ['id' => 'gender', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Gender']) !!}
         <small class="text-danger">{{ $errors->first('gender') }}</small>
       </div>

       <div class="form-group {{ $errors->has('date_of_joining') ? ' has-error' : '' }}">
        {!! Form::label('date_of_joining', 'Date Of Joining') !!}
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <span class="fa fa-calendar-o"></span>
            </span>
          </div>
          {!! Form::text('date_of_joining', $agent->date_of_joining, ['class' => 'pickadate form-control', 'placeholder' => 'Date Of Joining']) !!}
          <small class="text-danger">{{ $errors->first('date_of_joining') }}</small>
        </div>
      </div>



      <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
        {!! Form::label('state', 'State') !!}
        <span class="required danger">*</span>
        {!! Form::select('state', App\Model\State::pluck('name','name'), $agent->state, ['id' => 'state', 'class' => 'form-control select2', 'placeholder' => 'State']) !!}
        <small class="text-danger">{{ $errors->first('state') }}</small>
      </div>

      <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
          {!! Form::label('occupation', 'Occupation') !!}
          {!! Form::text('occupation', $agent->occupation, ['class' => 'form-control', 'placeholder' => 'Occupation']) !!}
          <small class="text-danger">{{ $errors->first('occupation') }}</small>
      </div>


      <div class="form-group{{ $errors->has('spouse_name') ? ' has-error' : '' }}">
        {!! Form::label('spouse_name', 'Spouse Name') !!}
        {!! Form::text('spouse_name', $agent->spouse_name, ['class' => 'form-control', 'placeholder'=>'Spouse Name']) !!}
        <small class="text-danger">{{ $errors->first('spouse_name') }}</small>
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
          <span class="required danger">*</span>
          {!! Form::text('bank_name', $agent->bank_name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Name']) !!}
          <small class="text-danger">{{ $errors->first('bank_name') }}</small>
        </div>

        <div class="form-group{{ $errors->has('ifs_code') ? ' has-error' : '' }}">
          {!! Form::label('ifs_code', 'IFS Code') !!}
          <span class="required danger">*</span>
          {!! Form::text('ifs_code', $agent->ifs_code, ['class' => 'form-control', 'required' => 'required','placeholder'=>'IFS Code']) !!}
          <small class="text-danger">{{ $errors->first('ifs_code') }}</small>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">

        <div class="form-group{{ $errors->has('bank_address') ? ' has-error' : '' }}">
          {!! Form::label('bank_address', 'Bank Address') !!}
          <span class="required danger">*</span>
          {!! Form::text('bank_address', $agent->bank_address, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Address']) !!}
          <small class="text-danger">{{ $errors->first('bank_address') }}</small>
        </div>

        <div class="form-group{{ $errors->has('bank_account') ? ' has-error' : '' }}">
          {!! Form::label('bank_account', 'Bank Account') !!}
          <span class="required danger">*</span>
          {!! Form::text('bank_account', $agent->bank_account, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank Account']) !!}
          <small class="text-danger">{{ $errors->first('bank_account') }}</small>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">

        <div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
          {!! Form::label('account_type', 'Account Type') !!}
          <span class="required danger">*</span>
          {!! Form::select('account_type', ['Saving'=>'Saving Account','Current'=>'Current Account'], $agent->account_type, ['id' => 'account_type', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Account Type']) !!}
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

<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>

{{-- <script type="text/javascript">
  $("#associate_member").val({{$agent->associate_member_id}});
</script> --}}
@endpush