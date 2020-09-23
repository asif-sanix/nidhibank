@extends('admin.layouts.master')
@section('title','List Slider')
@push('links')
<style type="text/css">
    .list-group-item {
    padding: 0.85rem 1.25rem;
    border-left: 0;
    border-right: 0;
}
 .list-group-item a{
    color: #000;
 }
</style>
@endpush
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Saving Account Details</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_saving_account')
                <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Add Saving Account</a>
            @endcan
       </div>
    </div>
</div>
</div>



<div class="row my-1">
    <div class="col-lg-3 col-md-3 col-12">

        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <a href="{{ route('admin.saving-account.show', $account->id) }}">
                            <span class="float-left"><i class="fa fa-circle-o mr-1"></i></span>Account details
                        </a>
                      </li>

                      <li class="list-group-item">
                        <a href=""><span class="float-left"><i class="fa fa-plus-circle mr-1"></i></span>Deposit Amount</a>
                      </li>


                      <li class="list-group-item">
                        <a href=""><span class="float-left"><i class="fa fa-minus-circle mr-1"></i></span>Withdraw Amount</a>
                      </li>

                      <li class="list-group-item">
                        <a href=""><span class="float-left"><i class="fa fa-list-ol mr-1"></i></span>Statement</a>
                      </li>

                      <li class="list-group-item">
                        <a href=""><span class="float-left"><i class="fa fa-ellipsis-h mr-1"></i></span>Transactions</a>
                      </li>


                      <li class="list-group-item">
                        <a href=""><span class="float-left"><i class="fa fa-user mr-1"></i></span>Add/Update Nominee</a>
                      </li>
                      
                    </ul>
                </div>
                     
            </div>
        </div>

    </div>



    <div class="col-lg-9 col-md-9 col-12">

        <div class="card">
            <div class="card-content">
                <div class="card-body">

                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->account_no}}
                        </span>
                       Account No.
                      </li>
                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->created_at->format('d F, Y')}}
                        </span>
                        Account Date
                      </li>

                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getApplication->application_no}}
                        </span>
                        Application No.
                      </li>

                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getApplication->application_date->format('d F, Y')}}
                        </span>
                        Application Date
                      </li>


                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getMember->name}}
                        </span>
                        Member's Name
                      </li>


                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getScheme->name}}
                        </span>
                        Scheme Name
                      </li>


                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getScheme->interest_rate}}
                        </span>
                        Interest Rate
                      </li>


                      <li class="list-group-item">
                        <span class="float-right">
                          {{$account->getScheme->interest_payout}}
                        </span>
                        Interest Payout
                      </li>

                      <li class="list-group-item">
                        <span class="float-right">
                          @if($account->getApplication->status == 1)
                            <span class='badge badge-success'>Approved</span>
                          @endif

                          @if($account->getApplication->status == 0)
                            <span class='badge badge-warning'>Pending</span>
                          @endif

                          @if($account->getApplication->status == 2)
                            <span class='badge badge-danger'>Canceled</span>
                          @endif

                        </span>
                        Status
                      </li>
                      
                    </ul>

                </div>
                     
            </div>
        </div>

    </div>



</div>

@endsection


@push('scripts')



@endpush