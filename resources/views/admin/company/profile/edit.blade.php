@extends('admin.layouts.master')

@push('links')

 <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Company Profile</h5>
  </div>

  <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

      </div>
  </div>
</div>



<div class="card">
    <div class="card-content">
        <div class="card-body">



            {!! Form::open(['method' => 'POST', 'route' => 'admin.company-profile.update', 'class' => 'form-horizontal','files'=>true]) !!}

            <div class="row my-1">
                <div class="col-lg-6 col-6">

                    <div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
                        {!! Form::label('company_name', 'Company Name') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('company_name', $profile->company_name, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                        <small class="text-danger">{{ $errors->first('company_name') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('address_1') ? ' has-error' : '' }}">
                        {!! Form::label('address_1', 'Address 1') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('address_1', $profile->address_1, ['class' => 'form-control', 'placeholder' => 'Address 1']) !!}
                        <small class="text-danger">{{ $errors->first('address_1') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                        {!! Form::label('country', 'Country') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('country', 'India', ['class' => 'form-control', 'placeholder' => 'Country','readonly']) !!}
                        <small class="text-danger">{{ $errors->first('country') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('district') ? ' has-error' : '' }}">
                        {!! Form::label('district', 'Discrict') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('district', $profile->district, ['class' => 'form-control', 'placeholder' => 'District']) !!}
                        <small class="text-danger">{{ $errors->first('district') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                        {!! Form::label('mobile_no', 'Mobile No.') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('mobile_no', $profile->mobile_no, ['class' => 'form-control', 'placeholder' => 'Mobile No.']) !!}
                        <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email Address') !!}
                        <span class="required danger">*</span>
                        {!! Form::email('email', $profile->email, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('pan') ? ' has-error' : '' }}">
                        {!! Form::label('pan', 'PAN') !!}
                        {!! Form::text('pan', $profile->pan, ['class' => 'form-control', 'placeholder' => 'PAN']) !!}
                        <small class="text-danger">{{ $errors->first('pan') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('cin') ? ' has-error' : '' }}">
                        {!! Form::label('cin', 'CIN') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('cin', $profile->cin, ['class' => 'form-control', 'placeholder' => 'CIN']) !!}
                        <small class="text-danger">{{ $errors->first('cin') }}</small>
                    </div>


                    

                </div>


                <div class="col-lg-6 col-6">



                    <div class="form-group {{ $errors->has('alias') ? ' has-error' : '' }}">
                        {!! Form::label('alias', 'Alias') !!}
                        {!! Form::text('alias', $profile->alias, ['class' => 'form-control', 'placeholder' => 'Alias']) !!}
                        <small class="text-danger">{{ $errors->first('alias') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('address_2') ? ' has-error' : '' }}">
                        {!! Form::label('address_2', 'Address 2') !!}
                        {!! Form::text('address_2', $profile->address_2, ['class' => 'form-control', 'placeholder' => 'Address 2']) !!}
                        <small class="text-danger">{{ $errors->first('address_2') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                        {!! Form::label('state', 'State') !!}
                        <span class="required danger">*</span>
                        {!! Form::select('state', App\Model\State::pluck('name','name'), $profile->state, ['id' => 'state', 'class' => 'form-control select2', 'placeholder' => 'State']) !!}
                        <small class="text-danger">{{ $errors->first('state') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('pincode') ? ' has-error' : '' }}">
                        {!! Form::label('pincode', 'Pincode') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('pincode', $profile->pincode, ['class' => 'form-control', 'placeholder' => 'Pincode']) !!}
                        <small class="text-danger">{{ $errors->first('pincode') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('landline_no') ? ' has-error' : '' }}">
                        {!! Form::label('landline_no', 'Landline No.') !!}
                        {!! Form::text('landline_no', $profile->landline_no, ['class' => 'form-control', 'placeholder' => 'Landline No.']) !!}
                        <small class="text-danger">{{ $errors->first('landline_no') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('website_address') ? ' has-error' : '' }}">
                        {!! Form::label('website_address', 'Website Address') !!}
                        {!! Form::text('website_address', $profile->website_address, ['class' => 'form-control', 'placeholder' => 'Website']) !!}
                        <small class="text-danger">{{ $errors->first('website_address') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('gstin') ? ' has-error' : '' }}">
                        {!! Form::label('gstin', 'GSTIN') !!}
                        {!! Form::text('gstin', $profile->gstin, ['class' => 'form-control', 'placeholder' => 'GSTIN']) !!}
                        <small class="text-danger">{{ $errors->first('gstin') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('incorporation_date') ? ' has-error' : '' }}">
                        {!! Form::label('incorporation_date', 'Incorporation Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('incorporation_date', \Carbon\Carbon::parse($profile->paid_up_capital)->format('d F Y'), ['class' => 'pickadate form-control', 'placeholder' => 'Incorporation Date']) !!}
                        <small class="text-danger">{{ $errors->first('incorporation_date') }}</small>
                    </div>
                    </div>


                </div>
                @can('edit_company_profile')
                    <div class="btn-group text-center" style="margin: 0 auto;">
                        {!! Form::submit("Save", ['class' => 'btn btn-success']) !!}
                    </div>
                @endcan

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