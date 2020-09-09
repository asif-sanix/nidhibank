<select class="form-control" name="{{ $name }}">
	<option value="">&nbsp;</option>
	@foreach ($optionsArray->where('parent_id',0) as $category)
		<option value="{{ $category->id }}">{{ $category->name }}</option>
		@if(count($category->childs))
			@include('components.form.subCategoryList', ['categories'=>$category->childs,'dashes'=>'-'])
		@endif
	@endforeach
</select>