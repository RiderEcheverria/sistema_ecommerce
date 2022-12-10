<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Nombre</h6>
        <input type="text" name="name" id="name" class="form-control" 
        placeholder="Escriba un nombre" laceholder="Nombre" required onkeypress="return soloLetras(event)" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Ubicación</h6>
        <input type="text" class="form-control" name="address" id="address" 
        aria-describedby="helpId" placeholder="Escriba una direccion"  required>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Número de NIT</h6>
        <input type="number" name="nit" id="nit" class="form-control" 
        placeholder="Escriba numero de NIT" 
        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
        onKeyPress="if(this.value.length==12) return false;" min="100000000000" max="999999999999" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Correo electronico</h6>
        <input type="email" class="form-control" name="email" id="email" 
        aria-describedby="emailHelpId" placeholder="Escriba un gmail valido" required>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Número de contacto</h6>
        <input type="number" name="celular" id="celular" class="form-control"
        placeholder="Escriba un numero de contacto" required  
        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
    onKeyPress="if(this.value.length==8) return false;" min="60000000" max="79999999" />
      </div>
    </div>
  </div> 
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
        <h6>Estado</h6>
        <select  name="estatus" value="{{ old('estatus', $provider->estatus) }}" 
            class="form-control" id="exampleSelectGender">          
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
        </select>
      </div>
    </div>
  </div>   
</div>
<br/>



