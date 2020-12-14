@extends('backend.layout_backend')
@section('title', 'Videos - Editar')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edicción</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('videos.update',$video->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$video->nombre}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion">{{$video->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">URL</label>
                    <textarea type="text" class="form-control" name="url" >{{$video->url}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Visto</label>
                    <select class="form-control" name="visto" >
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Estado</label>
                    <select class="form-control" name="estado" >
                        <option value="1">Activo</option>
                        <option value="0">Desactivo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Curso</label>
                    <select class="form-control" name="curso" >
                        @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Orden - Nombre - descripcion   (Nota:El orden deve ser diferente para todos , para no causar errores)</label>
                    <select multiple class="form-control" name="orden">
                    @foreach ($videos_total as $videos)
                    <option value="{{$videos->orden}}">{{$videos->orden}} - {{$videos->nombre}} - {{$videos->descripcion}}</option>
                    @endforeach
                    </select>
                </div>
                  

                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection