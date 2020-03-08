
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-xs-12 col-lg-12 ">
            <div id="demo">
                <table id="tabla_resultados" class="table">
                    <thead class="head_table">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="resultados_tabla">
                        @if($data->count() > 0)
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $data->idCurso }}</td>
                            <td>{{ $data->nombreCurso }}</td>
                            <td>{{ $data->descripcionCurso }}</td>
                            <td><input type='button' value='Eliminar' class='btn success buto'
                                    name="{{ $data->idCurso }}">
                            </td>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <div id="" class="alert alert-info">No hay registros.</div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>