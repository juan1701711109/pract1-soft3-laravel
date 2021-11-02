@extends('dashboard.master')
@section('content')
    <h6>List Category</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Name</th>
                <th>Contenido</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td scope="row">{{ $category -> id}}</td>
                <td>{{ $category -> category_name}}</td>
                <td>{{ $category -> content_publication}}</td>
                <td>{{ $category -> created_at}}</td>
                <td><a href="{{ route('category.edit', $category -> id)}}" class="btn btn-info">Editar</a></td>
                <td><a href="{{ route('category.show', $category -> id)}}" class="btn btn-info">Ver</a></td>
                <td><a class="btn btn-danger" data-id="{{ $category->id }}" data-toggle="modal" data-target="#exampleModal">Eliminar</a></td>
            </tr>
            @endforeach
            
        </tfoot>
    </table>
@endsection

{{ $categories->links()}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar la categoría?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deleteCategory" action="{{ route('category.destroy',0) }}" method="POST"
                data-action="{{ route('category.destroy',0) }}" >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#deleteCategory').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deleteCategory').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar la categoria: ' + id)
        })
    }

</script>