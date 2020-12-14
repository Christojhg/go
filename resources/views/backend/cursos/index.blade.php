@extends('backend.layout_backend')
@section('title', 'Cursos')
@section('content')
      <div class="card">
        <div class="card-header">
        <a href="{{route('cursos.create')}}"><h3 class="card-title">Agregar</h3></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Git</th>
                <th style="width: 120px">Categoria</th>
                <th style="width: 120px">Empresa</th>
                <th style="width: 120px">NR de videos</th>
                <th style="width: 20px">Editar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cursos as $curso)
              <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->descripcion}}</td>
                <td><span class="badge bg-danger">{{$curso->imagen}}</span></td>
                <td><span class="badge bg-danger">{{$curso->git}}</span></td>
                <td><span class="badge bg-danger">{{$curso->categoria_id }}</span></td>
                <td><span class="badge bg-danger">{{$curso->empresa_id }}</span></td>
                <td><span class="badge bg-danger">NR VI</span></td>
              <td><a href="{{route('cursos.edit',$curso->id)}}"><button class="badge bg-success" style="width: 50px">E</button></a></td>
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