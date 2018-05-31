{!! csrf_field() !!}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="avatar-user">Avatar</label>
            <input type="file" name="avatar-user" id="">
            {!! $errors->first('avatar-user', '<span class=error>:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name-user">Nombre Usuario</label>
            <input type="text" name="name-user" id="" class="form-control" placeholder="Enter ..." value="{{ $user->name or old('name-user') }}">
            {!! $errors->first('name-user', '<span class=error>:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email-user">Correo Usuario</label>
            <input type="text" name="email-user" id="" class="form-control" placeholder="Enter ..." value="{{ $user->email or old('email-user') }}">
            {!! $errors->first('email-user', '<span class=error>:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="" class="form-control" placeholder="Enter ...">
            {!! $errors->first('password', '<span class=error>:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="forpassword_confirmationm-group">
            <label for="password">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="Enter ...">
            {!! $errors->first('password_confirmation', '<span class=error>:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="checkbox">
            @foreach($roles as $id => $name)
                <label>
                    <input type="checkbox" name="roles[]" id="" value="{{ $id }}" {{  $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}>{{$name}}
                </label>
            @endforeach
        </div>
        {!! $errors->first('roles', '<span class=error>:message</span>') !!}
    </div>
    <div class="col-md-6">
        <input type="submit" value="Crear" class="btn btn-block btn-success btn-flat">
    </div>
</div>