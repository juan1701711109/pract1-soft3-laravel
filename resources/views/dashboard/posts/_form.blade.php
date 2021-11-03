{{-- Falsificacion de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input value="{{ old('publication', $post -> publication) }}" class="form-control" type="text" name="publication" id="publication" placeholder="Name Publication">
</div>

<div class="form-group">
    <select class="custom-select" aria-label="Default" name="category_id" id="category_id">
        <option selected disabled>Select an Option</option>
        @foreach ($categories as $category_name=>$id)
            <option {{ $post -> category_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">
                {{$category_name}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="custom-select" name="state_publication" id="state_publication">
        @include('dashboard.components.state_options', ['val'=>$post->state_publication])
    </select>
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" placeholder="Content of publication" cols="30" rows="10">{{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>

<button type="submit" class="btn btn-success">Save</button>
<a class="btn btn-danger" href="{{ route('post.index') }}">Discard</a>