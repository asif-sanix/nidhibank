@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
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
          {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$scheme->id],'method'=>'put','files'=>true]) !!}

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    
                    <div class="form-group{{ $errors->has('scheme_code') ? ' has-error' : '' }}">
                        {!! Form::label('scheme_code', 'Scheme Code') !!}
                        {!! Form::text('scheme_code', $scheme->scheme_code, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Scheme Code']) !!}
                        <small class="text-danger">{{ $errors->first('scheme_code') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('interest_payout') ? ' has-error' : '' }}">
                        {!! Form::label('interest_payout', 'Interest Payout') !!}
                        {!! Form::select('interest_payout', ['Monthly'=>'Monthly','Quarterly'=>'Quarterly','Half Yearly'=>'Half Yearly','Yearly'=>'Yearly'], $scheme->interest_payout, ['id' => 'interest_payout', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Interest Payout']) !!}
                        <small class="text-danger">{{ $errors->first('interest_payout') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('minimum_balance') ? ' has-error' : '' }}">
                        {!! Form::label('minimum_balance', 'Minimum Balance') !!}
                        {!! Form::text('minimum_balance', $scheme->minimum_balance, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Minimum Balance']) !!}
                        <small class="text-danger">{{ $errors->first('minimum_balance') }}</small>
                    </div>
                    

                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}


                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="form-group">
                        <div class="checkbox{{ $errors->has('is_active') ? ' has-error' : '' }}">
                            {!! Form::label('is_active', 'Is Active') !!}<br>
                             {!! Form::checkbox('is_active', '1', $scheme->is_active, ['id' => 'switch1','class'=>'switch']) !!} 
                        </div>
                        <small class="text-danger">{{ $errors->first('is_active') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', $scheme->name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Name']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('interest_rate') ? ' has-error' : '' }}">
                        {!! Form::label('interest_rate', 'Interest Rate') !!}
                        {!! Form::text('interest_rate', $scheme->interest_rate, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Interest Rate']) !!}
                        <small class="text-danger">{{ $errors->first('interest_rate') }}</small>
                    </div>
                    

                </div>

            </div>
                
            {!! Form::close() !!}

        </div>
             
    </div>
</div>
@endsection
@push('scripts')

<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>

@endpush