<div class="form-group">
    <select class="form-control" name="{{ $name }}">
	    @foreach($optionsArray as $categories)
		    @if(count($categories->childs))
                <optgroup label="{{ $categories->name }}">
		            @foreach($categories->childs as $category)
		                <option value="{{ $category->id }}">{{ $category->name }}</option>
		            @endforeach
		        </optgroup>		
		    @else

		    	
            @endif
	        
	    @endforeach
	</select>
</div>

