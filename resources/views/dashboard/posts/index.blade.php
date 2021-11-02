@extends('dashboard.master')
@section('content')
    <h6>List Posts</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Publlicacion</th>
                <th>Contenido</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="row">{{ $post -> id}}</td>
                <td>{{ $post -> publication}}</td>
                <td>{{ $post -> content_publication}}</td>
                <td>{{ $post -> state_publication}}</td>
                <td>{{ $post -> created_at}}</td>
                <td><a href="{{ route('post.edit', $post -> id)}}" class="btn btn-info">Editar</a></td>
                <td><a href="{{ route('post.show', $post -> id)}}" class="btn btn-info">Ver</a></td>
                <td><a href="{{ route('post.destroy' ,$post -> id)}}" class="btn btn-danger">Eliminar</a></td>
            </tr>
            @endforeach
            
        </tfoot>
    </table>
@endsection

{{ $posts->links()}}