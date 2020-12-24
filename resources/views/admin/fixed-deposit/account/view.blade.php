@extends('admin.layouts.master')

@push('links')

<link rel="stylesheet" href="{{asset('admin-assets/dropify/css/dropify.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Paid Up Capital/Authorised Capital</h5>
  </div>

  
  <div class="content-header-right col-md-6 col-12">

      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

        <div class="btn-group" role="group">

            @can('edit_paid_up_authorised_capital')

                <a href="{{ route('admin.'.request()->segment(2).'.edit',$capital->id) }}" class="btn btn-primary btn-sm">Edit Paid Up Capital</a>

            @endcan

       </div>

    </div>

</div>

</div>



<div class="card">
    <div class="card-content">


        <div class="card-body">

            <table class="table">
                <tbody>
                    <tr>
                        <td style="width:30%;">Paid up Capital</td>
                        <td>{{$capital->paid_up_capital??'N/A'}}</td>
                    </tr>


                    <tr>
                        <td style="width:30%;">Authorised Capital</td>
                        <td>{{$capital->authorised_capital??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Date</td>
                        <td>{{$capital->date->format('d F Y')}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Created By</td>
                        <td>{{App\Model\Capital::where('capital_id', $capital->id)->first()->value('admin')}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Created On</td>
                        <td>{{App\Model\Capital::where('capital_id', $capital->id)->first()->value('created_at')->format('d F Y')}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Modified By</td>
                        <td>{{App\Model\Capital::where('capital_id', $capital->id)->latest()->value('admin')}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Modified On</td>
                        <td>{{App\Model\Capital::where('capital_id', $capital->id)->latest()->value('created_at')->format('d F Y')}}</td>
                    </tr>

                </tbody>
            </table>


        </div>

    </div>
</div>





@endsection


@push('scripts')

<script src="{{asset('admin-assets/dropify/js/dropify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/dropify/dropify.js')}}"></script>
<script src="{{asset('admin-assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@endpush