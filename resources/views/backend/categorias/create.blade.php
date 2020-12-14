@extends('backend.layout_backend')
@section('title', 'Categorias - Crear')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Empezamos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Introdusca el nombre de la categoria ...">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion de la categoria ..."></textarea>
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