@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
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
          {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$capital->id],'method'=>'put','files'=>true]) !!}

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group{{ $errors->has('paid_up_capital') ? ' has-error' : '' }}">
                        {!! Form::label('paid_up_capital', 'Paid Up Capital') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('paid_up_capital', $capital->paid_up_capital, ['class' => 'form-control', 'placeholder' => 'Paid Up Capital']) !!}
                        <small class="text-danger">{{ $errors->first('paid_up_capital') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('authorised_capital') ? ' has-error' : '' }}">
                        {!! Form::label('authorised_capital', 'Authorised Capital') !!}
                        <span class="required danger">*</span>
                        {!! Form::text('authorised_capital', $capital->authorised_capital, ['class' => 'form-control', 'placeholder' => 'Authorised Capital']) !!}
                        <small class="text-danger">{{ $errors->first('authorised_capital') }}</small>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                        
                        {!! Form::label('date', 'Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('date', $capital->date->format('d F Y'), ['class' => 'form-control pickadate', 'placeholder' => 'Date']) !!}
                        <small class="text-danger">{{ $errors->first('date') }}</small>
                    </div>
                    </div>


                    {!! Form::submit('Update', ['class' => 'btn btn-info pull-right']) !!}
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


y

@endpush