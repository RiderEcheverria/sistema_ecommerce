<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nombre</label>
        <div class="col-sm-9">
            <input type="text" name="name" id="name" class="form-control" 
            placeholder="Nombre" required>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Ubicacion </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId"
             placeholder="" required>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Apellido</label>
        <div class="col-sm-9">
            <input type="text" name="surname" id="surname" class="form-control"
             placeholder="Apellido" required>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Correo electronoco </label>
        <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
             placeholder="@.gmail.com" required>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Numero de CI</label>
        <div class="col-sm-9">
            <input type="number" name="cedula" id="cedula" class="form-control" 
            placeholder="cedula" required>
        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Estado</label>
            <div class="col-sm-9">
                <select  name="estatus" value="{{ old('estatus', $persona->estatus) }}" 
                    class="form-control" id="exampleSelectGender">
                <option selected>Seleccione el estado</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
                </select>
            </div>
          </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Numero de contacto</label>
        <div class="col-sm-9">
            <input type="number" name="celular" id="celular" class="form-control" 
            placeholder="Celular/Telefono" required>
        </div>
      </div>
    </div>
  </div>
         
       
    

