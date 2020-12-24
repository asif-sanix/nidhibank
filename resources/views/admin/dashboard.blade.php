@extends('admin.layouts.master')

@push('links')

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plyr/plyr.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/fonts/simple-line-icons/style.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/app-assets/css/core/colors/palette-gradient.css')}}">

@endpush

@section('main')



<div class="content-header row">

        <div class="content-header-left col-md-6 col-12 mb-2">

       

          <h3 class="content-header-title mb-0">Dashboard</h3>

        </div>

        <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

            <div class="btn-group" role="group">

            

            </div>

           

          </div>

        </div>

      </div>



<div class="row">

          <div class="col-xl-4 col-lg-4 col-12  col-sm-12">

            <div class="card">

              <div class="card-content">

                <div class="media align-items-stretch">

                  <div class="p-2 text-center bg-primary bg-darken-2">

                    <i class="icon-cloud-download font-large-2 white"></i>

                  </div>

                  <div class="p-2 bg-gradient-x-primary white media-body">

                    <h5>Received Amount (₹)</h5>

                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 0</h5>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-xl-4 col-lg-4 col-12  col-sm-12">

            <div class="card">

              <div class="card-content">

                <div class="media align-items-stretch">

                  <div class="p-2 text-center bg-danger bg-darken-2">

                    <i class="icon-cloud-upload font-large-2 white"></i>

                  </div>

                  <div class="p-2 bg-gradient-x-danger white media-body">

                    <h5>Paid Amount (₹)</h5>

                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>0</h5>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-xl-4 col-lg-4 col-12  col-sm-12">

            <div class="card">

              <div class="card-content">

                <div class="media align-items-stretch">

                  <div class="p-2 text-center bg-warning bg-darken-2">

                    <i class="icon-vector font-large-2 white"></i>

                  </div>

                  <div class="p-2 bg-gradient-x-warning white media-body">

                    <h5>Cash in hand (₹)</h5>

                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 0</h5>

                  </div>

                </div>

              </div>

            </div>

          </div>


        </div>



@endsection



@push('scripts')



@endpush