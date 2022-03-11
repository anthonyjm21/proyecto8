
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-control" value="{{$empleado->nombre}}"  name="nombre" id="formGroupExampleInput" placeholder="Nombres">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" value="{{$empleado->apellidos}}" name="apellidos" id="formGroupExampleInput" placeholder="Apellidos">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" value="{{$empleado->correo}}" name="correo" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Foto</label>
    <input type="file" class="form-control" value="{{$empleado->foto}}" name="foto">
</div>

<div class="mb-3">
    <input type="submit" class="form-control"  value="Guardar Datos">
</div>
