@extends('admin.layouts.master')
@section('title','Group Member')
@push('links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
@endpush
@section('main')
<div class="container">     
	<div class="panel panel-primary">
		<div class="panel-heading">Member Group TreeView</div>
  		<div class="panel-body">
  			<div class="row">
  				<div class="col-md-6" id="js-tree">
  				
			        <ul id="tree1">
			            @foreach($categories as $category)
			                <li>
			                    {{ $category->name }}
			                    @if(count($category->childs))
			                        @include('admin.member-group.manageChild',['childs' => $category->childs])
			                    @endif
			                </li>
			            @endforeach
			        </ul>
  				</div>
  				<div class="col-md-6">
  					<h3>Add New Category</h3>


			  			{!! Form::open(['route' =>'admin.'.request()->segment(2).'.store']) !!}


			  				@if ($message = Session::get('success'))
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">×</button>	
								        <strong>{{ $message }}</strong>
								</div>
							@endif


			  				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								{!! Form::label('Name:') !!}
								{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
								<span class="text-danger">{{ $errors->first('name') }}</span>
							</div>

							<div class="form-group">
								{!! Form::label('Select Category') !!}
								{{ Form::category('parent_id',$allCategories,null,['class'=>'form-control','placeholder'=>'Category Select']) }}
							</div>



							<div class="form-group">
								<button class="btn btn-success">Add New</button>
							</div>


			  			{!! Form::close() !!}


  				</div>
  			</div>

  			
  		</div>
    </div>
</div>


@endsection


@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<script>
    $('#js-tree').jstree();
    
</script>
@endpush