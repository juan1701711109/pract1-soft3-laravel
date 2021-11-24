@extends('dashboard.master')
@section('content')
    <h6>Rol Created</h6>
    <form action="{{ route('rol.store') }}" method="POST">
        @include('dashboard.rols._form')
    </form>
@endsection