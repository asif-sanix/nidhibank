@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Mis Account</h5>
  </div>

  <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_saving_account_scheme')
            <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Add Mis Account</a>
            @endcan
        </div>
    </div>
</div>
</div>


{!! Form::open(['method' => 'POST', 'route' =>'admin.'.request()->segment(2).'.store', 'class' => 'form-horizontal','files'=>true]) !!}

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">



                    <div class="form-group {{ $errors->has('application_date') ? ' has-error' : '' }}">
                        {!! Form::label('application_date', 'Application Data') !!}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="fa fa-calendar-o"></span>
                              </span>
                          </div>
                          {!! Form::text('application_date', null, ['class' => 'pickadate form-control', 'placeholder' => 'Application Date']) !!}
                          <small class="text-danger">{{ $errors->first('application_date') }}</small>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('member_name') ? ' has-error' : '' }}">
                        {!! Form::label('member_name', 'Member Name') !!}
                        {!! Form::select('member_name', [], null, ['id' => 'get_member', 'class' => 'get_member form-control', 'required' => 'required', 'placeholder'=>'Member Name','onchange'=>'getMemberSingle($(this))']) !!}
                        <small class="text-danger">{{ $errors->first('member_name') }}</small>
                    </div>

                <div class="form-group{{ $errors->has('joint_ac_holder') ? ' has-error' : '' }}">
                    {!! Form::label('joint_ac_holder', 'Joint A/c Holder (If any)') !!}
                    {!! Form::select('joint_ac_holder', [], null, ['id' => 'joint_ac_holder', 'class' => 'get_member form-control', 'placeholder'=>'Joint A/c Holder (If any)']) !!}
                    <small class="text-danger">{{ $errors->first('joint_ac_holder') }}</small>
                </div>

                <div class="form-group{{ $errors->has('agent_name') ? ' has-error' : '' }}">
                    {!! Form::label('agent_name', 'Agent Name') !!}
                    {!! Form::select('agent_name', [], null, ['id' => 'get_agent', 'class' => 'get_agent form-control', 'placeholder'=>'Agent Name']) !!}
                    <small class="text-danger">{{ $errors->first('agent_name') }}</small>
                </div>

                <div class="form-group{{ $errors->has('scheme') ? ' has-error' : '' }}">
                    {!! Form::label('scheme', 'Scheme') !!}
                    {!! Form::select('scheme', App\Model\SavingAccountScheme::pluck('name','id'), null, ['id' => 'get_scheme', 'class' => 'get_scheme form-control', 'placeholder'=>'Select Scheme','onchange'=>'schemeDetails($(this))']) !!}
                    <small class="text-danger">{{ $errors->first('scheme') }}</small>
                </div>

                <div class="form-group{{ $errors->has('opening_amount') ? ' has-error' : '' }}">
                    {!! Form::label('opening_amount', 'Opening Amount') !!}
                    {!! Form::text('opening_amount', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Opening Amount']) !!}
                    <small class="text-danger">{{ $errors->first('opening_amount') }}</small>
                </div>


                <div class="form-group{{ $errors->has('pay_mode') ? ' has-error' : '' }}">
                    {!! Form::label('pay_mode', 'Pay Mode') !!}
                    {!! Form::select('pay_mode', ['Cash'=>'Cash','Cheque'=>'Cheque','Online Transfer'], null, ['id' => 'pay_mode', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Pay Mode']) !!}
                    <small class="text-danger">{{ $errors->first('pay_mode') }}</small>
                </div>

                {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}


            </div>

        </div>


    </div>

</div>



<div class="col-md-6 col-sm-12">
       
       <div class="card">
                <div class="card-header card-head-inverse bg-success">
                  <h4 class="card-title">Members Detail</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show" style="">
                  <div class="card-body">
                    <ul class="list-group list-group-flush" id="memberDetails">

                        <li class="list-group-item">
                          <span class="badge badge-default badge-pill bg-danger float-right">0</span>
                          Record Not Found
                        </li>

                    </ul>

                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-header card-head-inverse bg-primary">
                  <h4 class="card-title">Scheme Detail</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show" style="">
                  <div class="card-body">
                    <ul class="list-group list-group-flush" id="schemeDetails">

                        <li class="list-group-item">
                          <span class="badge badge-default badge-pill bg-danger float-right">0</span>
                          Record Not Found
                        </li>

                    </ul>
                  </div>
                </div>
              </div>
</div>

{!! Form::close() !!}

@endsection
@push('scripts')




<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>  
<script src="{{asset('admin-assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}"
type="text/javascript"></script>


<script src="{{asset('admin-assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>


@endpush