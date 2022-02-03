@extends('layouts.app')

@section('content')<
    <div class="container">
        <h1 class="text-center mt-4">Registrar Establecimiento</h1>

        <div class="mt-5 row justify-content-center">
            <form class="col-md-9 col-xs-12 card card-body">
                <fieldset class="border p-4">
                    <legend class="text-primary">
                        Nombre y Categoria e Imagen principal
                    </legend>

                    <div class="from group">
                        <label for="nombre">Nombre Establecimiento</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre establecimiento" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select name="categoria_id" id="categoria" class="form-control @error('categoria_id') is-invalid @enderror">
                            <option selected disabled>--Seleccione--</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="from group">
                        <label for="imagen_principal">Imagen principal</label>
                        <input type="file" name="imagen_principal" id="imagen_principal" class="form-control @error('imagen_principal') is-invalid @enderror" value="{{ old('imagen_principal') }}" accept=".jpg,.png,.svg,.jpeg">
                        @error('imagen_principal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </fieldset>

                <fieldset class="border p-4">
                    <legend class="text-primary">
                       Ubicación:
                    </legend>

                    <div class="from group">
                        <label for="formbuscador">Coloca la direccion del establecimiento</label>
                        <input type="text" id="formbuscador" class="form-control" placeholder="Direccione del negocio">
                    </div>
                    <p class="text-secondary mt-5 mb-3 text-center">
                        El asistente colocara una direccion estimada, mueve el Pin hacia el lugar correcto.
                    </p>

                </fieldset>



            </form>
        </div>
    </div>
@endsection
