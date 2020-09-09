@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
  <link rel="stylesheet" href="{{asset('admin-assets/dropify/css/dropify.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Un-Encumbered Deposit</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_un_encumbered_deposit')
                <a href="{{ route('admin.un-encumbered-deposit.create') }}" class="btn btn-primary btn-sm">Add Un-Encumbered Deposit</a>
            @endcan
       </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-content">
        <div class="card-body">
          {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$deposit->id],'method'=>'put','files'=>true]) !!}

           <div class="row">
                <div class="col-md-6 col-sm-12">
                    
                    <div class="form-group{{ $errors->has('deposit_type') ? ' has-error' : '' }}">
                        {!! Form::label('deposit_type', 'Deposit Type') !!}
                        {!! Form::select('deposit_type', ['Scheduled Commercial Banks'=>'Scheduled Commercial Banks','Post Office'=>'Post Office'], $deposit->deposit_type, ['id' => 'deposit_type', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Deposit Type']) !!}
                        <small class="text-danger">{{ $errors->first('deposit_type') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('bank_po_name') ? ' has-error' : '' }}">
                        {!! Form::label('bank_po_name', 'Bank/PO Name') !!}
                        {!! Form::text('bank_po_name', $deposit->bank_po_name, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Bank/PO Name']) !!}
                        <small class="text-danger">{{ $errors->first('bank_po_name') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('fd_amount') ? ' has-error' : '' }}">
                        {!! Form::label('fd_amount', 'FD Amount') !!}
                        {!! Form::text('fd_amount', $deposit->fd_amount, ['class' => 'form-control', 'placeholder' => 'FD Amount']) !!}
                        <small class="text-danger">{{ $errors->first('fd_amount') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('fd_no') ? ' has-error' : '' }}">
                        {!! Form::label('fd_no', 'FD No') !!}
                        {!! Form::text('fd_no', $deposit->fd_no, ['class' => 'form-control', 'required' => 'required','placeholder'=>'FD No']) !!}
                        <small class="text-danger">{{ $errors->first('fd_no') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::text('address', $deposit->address, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Address']) !!}
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('annual_interest_rate') ? ' has-error' : '' }}">
                        {!! Form::label('annual_interest_rate', 'Annual Interest Rate %') !!}
                        {!! Form::text('annual_interest_rate', $deposit->annual_interest_rate, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Annual Interest Rate']) !!}
                        <small class="text-danger">{{ $errors->first('annual_interest_rate') }}</small>
                    </div>

                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}


                </div>

                <div class="col-md-6 col-sm-12">

                     <div class="form-group">
                        <div class="checkbox{{ $errors->has('is_fd_mandatory') ? ' has-error' : '' }}">
                            {!! Form::label('is_fd_mandatory', 'Is FD Mandatory') !!}<br>
                             {!! Form::checkbox('is_fd_mandatory', '1', $deposit->is_fd_mandatory, ['id' => 'switch1','class'=>'switch']) !!} 
                        </div>
                        <small class="text-danger">{{ $errors->first('is_fd_mandatory') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('open_date') ? ' has-error' : '' }}">
                        {!! Form::label('open_date', 'Open Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('open_date', $deposit->open_date, ['class' => 'pickadate form-control', 'placeholder' => 'Open Date']) !!}
                        <small class="text-danger">{{ $errors->first('open_date') }}</small>
                    </div>
                    </div>

                    <div class="form-group {{ $errors->has('maturity_date') ? ' has-error' : '' }}">
                        {!! Form::label('maturity_date', 'Maturity Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('maturity_date', $deposit->open_date, ['class' => 'pickadate form-control', 'placeholder' => 'Maturity Date']) !!}
                        <small class="text-danger">{{ $errors->first('maturity_date') }}</small>
                    </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">

                            {!! Form::label('file', 'File') !!}

                            {!! Form::file('file', ['class'=>'dropify', 'data-default-file'=>asset($deposit->file)]) !!}

                            <small class="text-danger">{{ $errors->first('file') }}</small>

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


<script type="text/javascript" src="{{asset('admin-assets/dropify/dropify.js')}}"></script>
<script src="{{asset('admin-assets/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('admin-assets/app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
@endpush