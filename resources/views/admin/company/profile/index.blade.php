@extends('admin.layouts.master')

@push('links')

<link rel="stylesheet" href="{{asset('admin-assets/dropify/css/dropify.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Company Profile</h5>
  </div>

  
  <div class="content-header-right col-md-6 col-12">

      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

        <div class="btn-group" role="group">

            @can('edit_company_profile')

                <a href="{{ route('admin.company-profile.edit') }}" class="btn btn-primary btn-sm">Edit Details</a>

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
                        <td style="width:30%;">Company Name</td>
                        <td>{{$profile->company_name??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Address</td>
                        <td>{{$profile->address_1??'N/A'}}, {{$profile->address_1?$profile->address_2:''}}, {{$profile->address_1?$profile->district:''}}-{{$profile->address_1?$profile->pincode:''}}, {{$profile->address_1?$profile->state:''}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Mobile No</td>
                        <td>{{$profile->mobile_no??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">LandLine No</td>
                        <td>{{$profile->landline_no??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Email Address</td>
                        <td>{{$profile->email??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">CIN</td>
                        <td>{{$profile->cin??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">GSTIN</td>
                        <td>{{$profile->gstin??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">PAN</td>
                        <td>{{$profile->pan??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Incorporation Date</td>
                        <td>{{$profile->incorporation_date->format('d F Y')??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Authorised Capital</td>
                        <td>{{$profile->authorised_capital??'N/A'}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%;">Paid-Up Capital</td>
                        <td>{{$profile->paid_up_capital??'N/A'}}</td>
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