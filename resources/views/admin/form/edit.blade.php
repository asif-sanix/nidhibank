@extends('admin.layouts.master')
@section('title','Create Slider')
@push('links')
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
  <link rel="stylesheet" href="{{asset('admin-assets/dropify/css/dropify.min.css')}}">
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
          {!! Form::open(['route'=>['admin.'.request()->segment(2).'.update',$form->id],'method'=>'put','files'=>true]) !!}

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    
                    <div class="form-group{{ $errors->has('financial_year') ? ' has-error' : '' }}">
                        {!! Form::label('financial_year', 'Financial Year') !!}
                        {!! Form::select('financial_year', ['2019-2020'=>'2019-2020','2020-2021'=>'2020-2021'], $form->financial_year, ['id' => 'financial_year', 'class' => 'form-control', 'required' => 'required','placeholder'=>'Select Financial Year']) !!}
                        <small class="text-danger">{{ $errors->first('financial_year') }}</small>
                    </div>

                    <div class="form-group {{ $errors->has('submission_bate') ? ' has-error' : '' }}">
                        
                        {!! Form::label('submission_bate', 'Submission Date') !!}
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                              <span class="fa fa-calendar-o"></span>
                            </span>
                        </div>
                        {!! Form::text('submission_bate', $form->submission_bate, ['class' => 'form-control pickadate', 'placeholder' => 'Date']) !!}
                        <small class="text-danger">{{ $errors->first('submission_bate') }}</small>
                    </div>
                    </div>

                    <div class="form-group{{ $errors->has('member') ? ' has-error' : '' }}">
                        {!! Form::label('member', 'Select A Member') !!}
                        {!! Form::select('member', App\Model\Member::where('user_type',2)->pluck('name','id'), $form->member_id, ['id' => 'member', 'class' => 'form-control select2', 'required' => 'required', 'placeholder'=>'Select A Member']) !!}
                        <small class="text-danger">{{ $errors->first('member') }}</small>
                    </div>

                    {!! Form::submit('Save', ['class' => 'btn btn-info pull-right']) !!}


                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="form-group{{ $errors->has('form_type') ? ' has-error' : '' }}">
                        {!! Form::label('form_type', 'Select Form Type') !!}
                        {!! Form::select('form_type', App\Model\FormType::pluck('type','id'), $form->form_type, ['id' => 'form_type', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'Select Form Type']) !!}
                        <small class="text-danger">{{ $errors->first('form_type') }}</small>
                    </div>
                    
                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">

                            {!! Form::label('image', 'Image') !!}

                            {!! Form::file('image', ['class'=>'dropify','data-default-file'=>asset($form->file)]) !!}

                            <small class="text-danger">{{ $errors->first('image') }}</small>

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

@endpush