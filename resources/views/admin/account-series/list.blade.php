@extends('admin.layouts.master')
@section('title','List Slider')
@push('stype')

@endpush
@section('main')
<div class="panel-body ">
    <div class="table-responsive">
        <table class="table table-hover table-header dataTable no-footer" id="table1">
            <thead style="background-color:#3c8dbc;color:#fff;">
                <tr>
                    <th style="width:70%;">
                        Document Name
                    </th>
                    <th style="width:10%;">
                        Prefix
                    </th>
                    
                    <th style="width:10%;">
                        Start No
                    </th>
                    <th style="width:10%;">
                        Format in Digits
                    </th>
                </tr>
            </thead>
            <tbody>
                {!! Form::open(['route'=>'admin.account-series.store']) !!}
                @forelse($data as $d)
                @if($loop->index == 4)
                <tr>
                    <td>
                        Series Configuration Type
                    </td>
                    <td colspan="3">
                        <div class="col-md-12" style="padding:0px;">
                        <select class="form-control required" id="AccountSeriesType" name="AccountSeriesType"><option value="">Select</option>
                            <option selected="selected" value="1">Single Series for All Accounts</option>
                            <option value="2">Single Series for Deposit and Single Series for Loan accounts</option>
                            <option value="3">Seprate Series for all accounts</option>
                        </select>
                        <span class="field-validation-valid" data-valmsg-for="AccountSeriesType" data-valmsg-replace="true"></span>
                        </div>
                    </td>
                </tr>
                @endif
                <tr>
                    <td width="50%">
                        {{ $d->document_name }}
                    </td>
                    <td>
                        {!! Form::hidden('id[]', $d->id, []) !!}
                        {!! Form::text('EmployeeCodePrefix[]', $d->prefix, ['class'=>'form-control','autocomplete'=>'off']) !!}
                        
                    </td>

                    <td>
                        {!! Form::text('EmployeeCodeStartNo[]', $d->start_no, ['class'=>'form-control','autocomplete'=>'off']) !!}
                        
                    </td>
                    <td>
                        {!! Form::selectRange('formate_in_degit[]', 3, 20, [$d->formate_in_degit],['class'=>'form-control']) !!}
                        <span class="field-validation-valid" data-valmsg-for="EmployeeCodeDigits" data-valmsg-replace="true"></span>

                    </td>
                </tr>
                @empty

                @endforelse
                <tr style="text-align: center;">
                    <td colspan="4">{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}</td>
                </tr>
                {!! Form::close() !!}
            </tbody>
        </table>
     </div>
</div>
@endsection

@push('script')

@endpush