@extends('admin.layouts.master')
@section('title','List Slider')
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-6 col-12 mb-2">
      <h5 class="content-header-title mb-0">Form</h5>
    </div>

    <div class="content-header-right col-md-6 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_form')
                <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Form</a>
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
                                <th>Member ID</th>
                                <th>Financial Year</th>
                                <th>Submission Bate</th>
                                <th>Created at</th>
                                @can(['edit_form','delete_form','read_form'])
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
                    'url': '{{ route('admin.form.index') }}',
                    'data': function(d) {
                        d._token = '{{ csrf_token() }}';
                        d._method = 'PATCH';
                    }

                },
                "columns": [
                    { "data": "sn" }, 
                    { "data": "member_id" }, 
                    { "data": "financial_year" }, 
                    { "data": "submission_bate" }, 
                    { "data": "created_at" }, 
                    {
                        "data": "action",
                        render: function(data, type, row) {
                            if (type === 'display') {
                                var btn = '';

                                @can(['edit_form','delete_form','read_form'])

                                    @can('read_form')
                                        btn += '<a class="btn btn-social-icon btn-outline-success btn-xs" href="{{ request()->url() }}/' + row['id'] + '"><i class="fa fa-eye"></i></a>&nbsp;';
                                    @endcan

                                    @can('edit_form')
                                        btn+='<a class="btn btn-xs btn-social-icon btn-outline-info" href="'+window.location.href+'/'+row['id']+'/edit"><i class="fa fa-pencil-square-o"></i></a> ';
                                    @endcan
                                    
                                    @can('delete_form')
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