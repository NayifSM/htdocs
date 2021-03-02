Mostrar la lista de pacientes
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Diagnostico</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id }}</td>
            <td>{{$paciente->Nombre }}</td>
            <td>{{$paciente->ApellidoPaterno }}</td>
            <td>{{$paciente->ApellidoMaterno }}</td>
            <td>{{$paciente->Telefono }}</td>
            <td>{{$paciente->Diagnostico }}</td>
            <td>Editar 
            <form action="{{url('/pacientes/'.$paciente->id )}}" method="post">
            @csrf
            {{method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')"
             value="Borrar">
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>