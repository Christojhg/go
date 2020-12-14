@extends('backend.layout_backend')
@section('title', 'Empresa')
@section('content')
      <div class="card">
        <div class="card-header">
          <a href="{{route('empresa.create')}}"><h3 class="card-title">Agregar</h3></a>
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
                <th style="width: 120px">Logo</th>
                <th style="width: 20px">Editar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($empresas as $empresa)
              <tr>
                <td>{{$empresa->id}}</td>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->descripcion}}</td>
                <td><span class="badge bg-danger">55%</span></td>
                <td><span class="badge bg-danger">LOGO</span></td>
                <td><a href="{{route('empresa.edit',$empresa->id)}}"><button class="badge bg-success" style="width: 50px">Editar</button></a></td>
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