{{-- Falsificacion de peticiones en sitios cruzados --}}
@extends('dashboard.master')
@section('content')
    

<div class="form-group">
    <input readonly value="{{$category->publication}}" class="form-control" type="text" name="category_name" id="category_name" placeholder="Name Category">
</div>


<div class="form-group">
    <textarea readonly class="form-control" name="content_publication" id="content_publication" placeholder="Content of publication" cols="30" rows="10">{{ $category->content_publication}}
    </textarea>
</div>
<button class="btn btn-danger" href="{{ URL::previous() }}">Aceptar</button>
@endsection