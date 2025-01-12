@extends('layouts.admin.app')
@section('title')
    | Crear Activo
@endsection
@section('content')

    <div class="container">
        <div class="col-p1 m-3 bck-tab">
            <div class="table-responsive">
                <form action="{{route('activos.guardar')}}" method="post">
                    @csrf
                    <div>
                        <label for="TipoActivo">Tipo Activo</label>
                        <select name="TipoActivo" id="TipoActivo" class="form-select my-3 form-control"
                                aria-label="Seleccione el tipo Activo">
                            <option value=" ">Seleccione el tipo Activo</option>
                            <option value="Tangible">Tangible</option>
                            <option value="Intangible">Intangible</option>
                        </select>
                        @if($errors->has('TipoActivo'))
                            <label for="" style="color:red;">{{ $errors->first('TipoActivo') }}</label>
                            <br>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <label for="NombreActivo">Nombre de Activo</label>
                        <input type="text" class="form-control" id="NombreActivo" name="NombreActivo">
                        @if($errors->has('NombreActivo'))
                            <label for="" style="color:red;">{{ $errors->first('NombreActivo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="SN">SERIAL</label>
                        <input type="text" class="form-control" id="SN" name="SN">
                        @if($errors->has('SN'))
                            <label for="" style="color:red;">{{ $errors->first('SN') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Marca">Marca</label>
                        <input type="text" class="form-control" id="Marca" name="Marca">
                        @if($errors->has('Marca'))
                            <label for="" style="color:red;">{{ $errors->first('Marca') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Modelo">Modelo / Version</label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo">
                        @if($errors->has('Modelo'))
                            <label for="" style="color:red;">{{ $errors->first('Modelo') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Garantia">Garantia</label>
                        <input type="date" class="form-control" id="Garantia" name="Garantia">
                        @if($errors->has('Garantia'))
                            <label for="" style="color:red;">{{ $errors->first('Garantia') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <label for="Descripcion">Descripcion</label>
                        <textarea type="text" class="form-control" id="Descripcion" name="Descripcion"></textarea>
                        @if($errors->has('Descripcion'))
                            <label for="" style="color:red;">{{ $errors->first('Descripcion') }}</label>
                            <br>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <select name="IdProveedor" id="IdProveedor" class="form-select my-3 form-control"
                                aria-label="Seleccione el proveedor">
                            <option value="">Seleccione Proveedor del Activo</option>
                            @foreach($prov as $provs)
                                <option value="{{$provs->id}}">{{$provs->ProvName}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('IdProveedor'))
                            <label for="" style="color:red;">{{ $errors->first('IdProveedor') }}</label>
                            <br>
                        @endif
                    </div>
                        <div class="form-floating mb-3">
                            <select name="IdUsuario" id="IdUsuario" class="form-select my-3 form-control"
                                    aria-label="Seleccione el Usuario que registra">
                                @foreach($usuario as $usu)
                                <option value="">Seleccione el Usuario que registra</option>
                                <option value="{{$usu->id}}">{{$usu->name}} | {{$usu->Cargo}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('IdUsuario'))
                                <label for="" style="color:red;">{{ $errors->first('IdUsuario') }}</label>
                                <br>
                            @endif
                        </div>
                    <hr>
                    <button type="submit" class="btn btn-success">Registrar Activo</button>
                    <a type="button" class="btn" id="color-font" href="{{route('activos.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



