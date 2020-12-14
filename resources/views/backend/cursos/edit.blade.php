@extends('backend.layout_backend')
@section('title', 'Cursos - Editar')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Empezamos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('cursos.update',$curso->id) }}" method="POST" enctype='multipart/form-data'>
              @csrf
              @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="nombre"  value="{{$curso->nombre}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                <textarea type="text" class="form-control" name="descripcion"  >{{$curso->descripcion}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file"  name="imagen">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Git</label>
                  <textarea type="text" class="form-control" name="git"  >{{$curso->git}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Categoria</label>
                    <select class="form-control" name="categoria" >
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Empresa</label>
                    <select class="form-control" name="empresa" >
                        @foreach ($empresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Estado</label>
                    <select class="form-control" name="estado" >
                        <option value="1">Activo</option>
                        <option value="0">Desactivado</option>
                        
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