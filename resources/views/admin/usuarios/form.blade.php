<label for="name">
    Nombre del usuario <br>
    <input type="text" name="name" value="{{ old('name', $usuario->name) }}">
</label>
<br>
<label for="name">
    Correo del usuario <br>
    <input type="text" name="email" value="{{ old('email', $usuario->email) }}">
</label>
<br>
<label for="name">
    Contraseña del usuario <br>
    <input type="password" name="password" value="{{ old('password',$usuario->password) }}">
</label>
<br>