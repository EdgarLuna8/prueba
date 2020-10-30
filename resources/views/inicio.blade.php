@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-borderless card-header-flex">
                        <div class="text-center">
                            <h5 class="mb-0">Crear formulario</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-5">
                                    <form action="{{ route('prospecto.store') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="controls">
                                                    <input type="hidden" class="form-control" id="id" name="" />
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="controls">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                                        placeholder="Nombre" required
                                                        data-validation-required-message="El campo nombre es obligatorio" />
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="controls">
                                                    <label for="telefono">Teléfono</label>
                                                    <input type="number" class="form-control" id="telefono"
                                                        name="telefono" placeholder="Teléfono" required
                                                        data-validation-required-message="El campo Teléfono es obligatorio" />
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="controls">
                                                    <label for="email">Correo Electronico</label>
                                                    <input type="mail" class="form-control" id="email" name="email"
                                                        placeholder="Correo Electronico" min="0" required
                                                        data-validation-required-message="El campo Correo Electronico es obligatorio" />
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <div class="controls">
                                                    <label for="asunto">Asunto</label>
                                                    <textarea class="form-control" name="asunto" id="asunto" cols="30"
                                                        rows="2" placeholder="Escribe tu asunto..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 ">
                                                {{-- <div class="controls">
                                                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                                    </div> --}}

                                                <boton-agregar>

                                                </boton-agregar>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-5">
                    @if (count($prospectos)==0)
                    <div class="text-center">No hay prospectos</div>
                    @else
                    <table class="table" id="prospectos-datatable">
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
                                    <boton-eliminar prospecto-id="{{ $prospecto->id }}"></boton-eliminar>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        s
    </div>



    @endsection

    @section('footer_script')
    <script>
        $("#prospectos-datatable").DataTable({
        responsive: true,
        columnDefs: [{
            orderable: false,
            targets: [4]
        }],
    });
    </script>
    @endsection
