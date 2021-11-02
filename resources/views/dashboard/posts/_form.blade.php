{{-- Falsificacion de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input value="{{ old('publication', $post -> publication) }}" class="form-control" type="text" name="publication" id="publication" placeholder="Name Publication">
</div>

<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">Published</option>
        <option value="">Reject</option>
        <option value="">In_Review</option>
    </select>
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" placeholder="Content of publication" cols="30" rows="10">{{ old('content_publication', $post -> content_publication) }}
    </textarea>
</div>

<button type="submit" class="btn btn-success">Save</button>
<button class="btn btn-danger" href="{{ URL::previous() }}">Discard</button>