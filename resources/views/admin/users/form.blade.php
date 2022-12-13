 <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <div class="col-sm-9">
          <h6>Nombre</h6>
            <input type="text" name="name" id="name" class="form-control" 
            placeholder="Escriba un nombre" required onkeypress="return soloLetras(event)" />
        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
          <div class="col-sm-9">
            <h6>Correo electronico</h6>
              <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelpId"
               placeholder="Escriba un gmail valido" required >
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <div class="col-sm-9">
          <h6>Contraseña</h6>
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
          @if ($errors->has('password'))
            <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
          @endif
        </div>
      </div>
    </div>
  </div>
  <br/>  