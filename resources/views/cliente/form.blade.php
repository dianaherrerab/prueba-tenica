<label>
    Nombre del cliente <br>
    <input type="text" name="nombre" value="{{ old('name', $cliente->nombre) }}">
</label>
<br>
<label>
    Documento del usuario <br>
    <input type="text" name="documento" value="{{ old('documento', $cliente->documento) }}">
</label>
<br>
<label>
    Correo del usuario <br>
    <input type="text" name="correo" value="{{ old('correo', $cliente->correo) }}">
</label>
<br>
<label>
    Dirección del usuario <br>
    <input type="text" name="direccion" value="{{ old('direccion',$cliente->direccion) }}">
</label>
<br>