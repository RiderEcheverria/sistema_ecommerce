<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" name="name" id="name" class="form-control"
         placeholder="Nombre" required onkeypress="return soloLetras(event)" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Ubicacion </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="address" id="address"
        aria-describedby="helpId" placeholder="" required>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Numero NIT</label>
      <div class="col-sm-9">
        <input type="number" name="nit" id="nit" class="form-control" 
        placeholder="NIT" required onkeypress="return valideKey(event);" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Correo electronoco </label>
      <div class="col-sm-9">
        <input type="email" class="form-control" name="email" id="email" 
        aria-describedby="emailHelpId" placeholder="@.gmail.com" required>
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
        placeholder="Celilar/Telefono" required onkeypress="return valideKey(event);" />
      </div>
    </div>
  </div>    
</div> 
  
