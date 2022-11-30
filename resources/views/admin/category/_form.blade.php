<div class="form-group">
  <label for="name" >Nombre</label>
  <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" 
  required onkeypress="return soloLetras(event)" />
</div>
<div class="mb-3">
  <label for="name" >Descripcion</label>
  <textarea class="form-control" id="description" name="description" rows="3"  
  placeholder="Descripcion" required onkeypress="return soloLetras(event)" /></textarea>
</div>