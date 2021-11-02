{{-- Falsificacion de peticiones en sitios cruzados --}}
@extends('dashboard.master')
@section('content')
<div class="form-group">
    <input readonly value="{{$post->publication}}" class="form-control" type="text" name="publication" id="publication" placeholder="Name Publication">
</div>

<div class="form-group">
    <select disabled class="form-control" name="state_publication" id="state_publication">
        <option value="">Published</option>
        <option value="">Reject</option>
        <option value="">In_Review</option>
    </select>
</div>

<div class="form-group">
    <textarea readonly class="form-control" name="content_publication" id="content_publication" placeholder="Content of publication" cols="30" rows="10">
        {{ $post->content_publication}}
    </textarea>
</div>
<button class="btn btn-danger" href="{{ URL::previous() }}">Aceptar</button>