@extends('admin.layouts.master')
@section('title','List Slider')
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Paid Up Capital/Authorised Capital</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_paid_up_authorised_capital')
                <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Add Paid Up Capital</a>
            @endcan
       </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="row my-1">
                <div class="col-lg-12 col-12">

                    <table id="dataTableAjax" class="display dataTableAjax table table-striped table-bordered dom-jQuery-events" >
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Paid Up Capital</th>
                                <th>Authorised Capital</th>
                                <th>Date</th>
                                <th>Created at</th>
                                @can(['edit_paid_up_authorised_capital','delete_paid_up_authorised_capital','read_paid_up_authorised_capital'])
                                <th>Action</th>
                                @endcan
                            </tr>
                        </thead>
                        
                    </table>

                </div>
            </div>
        </div>
             
    </div>
</div>



@endsection


@push('scripts')


<script type="text/javascript">

  //alert('hello');  

            var table2 = $('#dataTableAjax').DataTable({
                "processing": true,
                "serverSide": true,
                'ajax': {
                    'url': '{{ route('admin.paid-up-authorised-capital.index') }}',
                    'data': function(d) {
                        d._token = '{{ csrf_token() }}';
                        d._method = 'PATCH';
                    }

                },
                "columns": [
                    { "data": "sn" }, 
                    { "data": "paid_up_capital" }, 
                    { "data": "authorised_capital" }, 
                    { "data": "date" }, 
                    { "data": "created_at" }, 
                    {
                        "data": "action",
                        render: function(data, type, row) {
                            if (type === 'display') {
                                var btn = '';

                                @can(['edit_paid_up_authorised_capital','delete_paid_up_authorised_capital','read_paid_up_authorised_capital'])

                                    @can('read_paid_up_authorised_capital')
                                        btn += '<a class="btn btn-social-icon btn-outline-success btn-xs" href="{{ request()->url() }}/' + row['id'] + '"><i class="fa fa-eye"></i></a>&nbsp;';
                                    @endcan

                                    @can('edit_paid_up_authorised_capital')
                                        btn+='<a class="btn btn-xs btn-social-icon btn-outline-info" href="'+window.location.href+'/'+row['id']+'/edit"><i class="fa fa-pencil-square-o"></i></a> ';
                                    @endcan
                                    
                                    @can('delete_paid_up_authorised_capital')
                                        btn += '<button type="button" onclick="deleteAjax(\''+window.location.href+'/'+row['id']+'\')" class="btn btn-xs btn-social-icon btn-outline-danger"><i class="fa fa-trash"></i></button>&nbsp;';
                                    @endcan

                                @endcan
                                return btn;
                            }
                            return ' ';
                        },
                }]

            });

    </script>


@endpush