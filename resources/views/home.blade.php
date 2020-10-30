@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               @if (count($prospectos)==0)
                   <div class="text-center">No hay prospectos</div>
               @else
               <table class="table">
                <thead class="text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                      @foreach ($prospectos as $prospecto)
                          <tr>
                              <td>{{ $prospecto->nombre }}</td>
                              <td>{{ $prospecto->telefono }}</td>
                              <td>{{ $prospecto->email }}</td>
                              <td>{{ $prospecto->asunto }}</td>
                              <td>
                                  <boton-eliminar
                                    prospecto-id ="{{ $prospecto->id }}"
                                  ></boton-eliminar>
                              </td>
                          </tr>
                      @endforeach
                </tbody>
            </table>
               @endif
            </div>
        </div>

    </div>
</div>


@endsection
