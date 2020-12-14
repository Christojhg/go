@extends('backend.layout_backend')
@section('title', 'Empresa - Crear')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Empezaamos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('empresa.store') }}" method="POST" enctype='multipart/form-data'>
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre"  placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion" ></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imagen</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file"  name="imagen">
                    </div>
                  </div>
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