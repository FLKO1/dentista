@extends('layouts.app')

@section('content')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ingrese su correo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
