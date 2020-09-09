@foreach ($categories as $category)
	<option value="{{ $category->id }}">{{$dashes}}{{ $category->name }}</option>
	@if(count($category->childs))
		@include('components.form.subCategoryList', ['categories'=>$category->childs,'dashes'=>$dashes.'-'])
	@endif
@endforeach