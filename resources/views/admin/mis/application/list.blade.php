@extends('admin.layouts.master')
@section('title','List Slider')
@section('main')

<div class="content-header row">

    <div class="content-header-left col-md-5 col-12 mb-2">
      <h5 class="content-header-title mb-0">Mis Application</h5>
    </div>

    @if(request()->status == 'Approved')
    @php
        $status =1;
    @endphp
    @elseif(request()->status == 'Canceled')
     @php
        $status = 2;
    @endphp
    @elseif(request()->status == 'Pending')
     @php
        $status = 0;
    @endphp
    @else
    @php
    $status = '';
    @endphp
    @endif
    
    <div class="content-header-left col-md-2 col-12 mb-12">
        <div class="" style="max-width: 200px;margin:0 auto">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}" style="margin-bottom: 0">
            {!! Form::select('status',[0=>'Pending',1=>'Approved',2=>'Canceled'], $status, ['id' => 'status', 'class' => 'form-control form-control-sm','placeholder'=>'All Status','onChange'=>'status()']) !!}
            <small class="text-danger">{{ $errors->first('status') }}</small>
        </div>
    </div>
    </div>


    <div class="content-header-right col-md-5 col-12">
      <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            @can('add_saving_account_application')
                <a href="{{ route('admin.'.request()->segment(2).'.create') }}" class="btn btn-primary btn-sm">Add Mis Application</a>
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
                                <th>Applicatopn No.</th>
                                <th>Member Name</th>
                                <th>Agent Name</th>
                                <th>Application Date</th>
                                @can('status_saving_account_application')
                                <th>Status</th>
                                @endcan
                                <th>Created at</th>
                                @can(['edit_saving_account_application','delete_saving_account_application','read_saving_account_application','status_saving_account_application'])
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
                    'url': '{{ route('admin.'.request()->segment(2).'.index') }}',
                    'data': function(d) {
                        d._token = '{{ csrf_token() }}';
                        d._method = 'PATCH';
                        d.status = $('#status').val();
                        d._token = '{{ csrf_token() }}';
                    }

                },
                "columns": [
                    { "data": "sn" }, 
                    { "data": "application_no" }, 
                    { "data": "member_name" }, 
                    { "data": "agent_name" }, 
                    { "data": "application_date" }, 
                    { "data": "status",
                        render: function(data, type, row) {
                            if (type === 'display') {
                                var select = '';
                                @can('status_saving_account_application')

                                if( row['changeStatus']=='0'){
                                    select+='<div class="form-group" style="margin:0"><select id="status'+row['id']+'" class="form-control" onchange="changeStatus($(this),'+row['id']+')" name="changeStatus"><option value="1">Approved</option><option value="0" selected="selected">Pending</option><option value="2">Cancled</option></select><small class="text-danger"></small></div> ';
                                }

                                if( row['changeStatus']=='1'){
                                    select+='<span class="badge badge-success">Approved</span>';
                                }

                                if(row['changeStatus']=='2'){
                                   select+='<span class="badge badge badge-danger">Canceled</span>';
                                }

                                @endcan
                                
                                return select;
                            }
                            return ' ';
                        },
                    }, 
                    { "data": "created_at" }, 
                    {
                        "data": "action",
                        render: function(data, type, row) {
                            if (type === 'display') {
                                var btn = '';



                                @can(['edit_saving_account_application','delete_saving_account_application','read_saving_account_application'])





                                    @can('read_saving_account_application')
                                        btn += '<a class="btn btn-social-icon btn-outline-success btn-xs" href="{{ request()->url() }}/' + row['id'] + '"><i class="fa fa-eye"></i></a>&nbsp;';
                                    @endcan

                                    @can('edit_saving_account_application')
                                        btn+='<a class="btn btn-xs btn-social-icon btn-outline-info" href="'+window.location.href+'/'+row['id']+'/edit"><i class="fa fa-pencil-square-o"></i></a> ';
                                    @endcan
                                    
                                    @can('delete_saving_account_application')
                                        btn += '<button type="button" onclick="deleteAjax(\''+window.location.href+'/'+row['id']+'\')" class="btn btn-xs btn-social-icon btn-outline-danger"><i class="fa fa-trash"></i></button>&nbsp;';
                                    @endcan

                                @endcan
                                return btn;
                            }
                            return ' ';
                        },
                }]

            });

        function status(){
            table2.draw();
        }



        function changeStatus(element, id){
        var status = element.val();
        if (confirm('Are you sure to change application status.')){  
        $.ajax({
            url:'{{ route('admin.saving-account-application.changeStatus') }}',
            method: 'post',
            data:{'id':id,'status':status,'_method':'PUT','_token':'{{ csrf_token() }}'},
            dataType:'json',

            success: function(result) {
                if (result.error == true ){
                    toastr.error(result.message);
                    table2.draw('page');
                } 
                else{
                    toastr.success(result.message);
                    table2.draw('page');
               }

            },
            error: function(response) {
             
                toastr.error(response.message);
                table2.draw('page');

           }
        });
    }
    table2.draw('page');
    return false;

    }

    </script>


@endpush