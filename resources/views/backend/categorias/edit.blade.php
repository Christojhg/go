@extends('backend.layout_backend')
@section('title', 'Categorias - Editar')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Empezamos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
                @csrf
                @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <textarea type="text" class="form-control" name="descripcion">{{$categoria->descripcion}}</textarea>
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