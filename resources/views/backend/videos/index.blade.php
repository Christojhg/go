@extends('backend.layout_backend')
@section('title', 'Videos')
@section('content')
      <div class="card">
        <div class="card-header">
          <a href="{{route('videos.create')}}"><h3 class="card-title">Agregar</h3></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>url</th>
                <th>visto</th>
                <th>orden</th>
                <th>estado</th>
                <th style="width: 120px">curso</th>
                <th style="width: 20px">Editar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($videos as $video)
              <tr>
                <td>{{$video->id}}</td>
                <td>{{$video->nombre}}</td>
                <td>{{$video->descripcion}}</td>
                <td>{{$video->url}}</td>
                <td>{{$video->visto}}</td>
                <td>{{$video->orden}}</td>
                <td>{{$video->estado}}</td>
                <td>{{$video->curso_id }}</td>
                <td><a href="{{route('videos.edit',$video->id)}}"><button class="badge bg-success" style="width: 50px">Editar</button></a></td>
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