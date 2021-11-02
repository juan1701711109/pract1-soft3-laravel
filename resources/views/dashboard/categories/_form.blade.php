{{-- Falsificacion de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input value="{{ old('category_name', $category -> category_name) }}" class="form-control" type="text" name="category_name" id="category_name" placeholder="Name Category">
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" placeholder="Content of publication" cols="30" rows="10">{{ old('content_publication', $category -> content_publication) }}
    </textarea>
</div>

<button type="submit" class="btn btn-success">Save</button>
<button class="btn btn-danger" href="{{ URL::previous() }}">Discard</button>