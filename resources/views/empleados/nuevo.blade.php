
<form action="{{url ('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleados.formulario');

</form>