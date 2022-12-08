<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-sm-9">
          <h6>Nombre de categoria</h6>
          <input type="text" name="name" id="name" class="form-control" 
          placeholder="Escriba una categoria" required onkeypress="return soloLetras(event)" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
      <div class="form-group row">
          <div class="col-sm-9">
            <h6>Estado</h6>
              <select  name="estatus" value="{{ old('estatus', $category->estatus) }}" 
                  class="form-control" id="exampleSelectGender">          
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
              </select>
          </div>
      </div>
  </div>
</div>