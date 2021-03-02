creacion de historila de pacientes
<form action="{{url('/pacientes')}}" method="post">
@csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name ="Nombre">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name ="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name ="ApellidoMaterno">
    <br>
    <label for="Telefono">Telefono</label>
    <input type="text" name ="Telefono">
    <br>
    <label for="Diagnostico">Diagnostico</label>
    <input type="text" name ="Diagnostico">
    <br>
    <input type="submit" value="Guardar Datos">
    <br>
</form>