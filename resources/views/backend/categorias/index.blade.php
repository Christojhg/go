@extends('backend.layout_backend')
@section('title', 'Categorias')
@section('content')
      <div class="card">
        <div class="card-header">
          <a href="{{route('categorias.create')}}"><h3 class="card-title">Agregar</h3></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th style="width: 120px">NR de videos</th>
                <th style="width: 20px">Editar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categorias as $categoria)
              <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td><span class="badge bg-danger">55%</span></td>
                <td><a href="{{route('categorias.edit',$categoria->id)}}"><button class="badge bg-success" style="width: 50px">EDITAR</button></a></td>
              </tr>
              <tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
@endsection