<div class="form-group">
    <label for="name" >Nombre</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
  </div>
<div class="form-group">
    <label for="surname" >Apellido</label>
    <input type="text" name="surname" id="surname" class="form-control" placeholder="Apellido" required>
  </div>
  <div class="form-group">
    <label for="address">Ubicacion</label>
    <input type="text" class="form-control" 
    name="address" id="address" aria-describedby="helpId" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="cedula" >Numero de CI</label>
        <input type="text" name="cedula" id="cedula" class="form-control" placeholder="NIT" required>
      </div>
   <div class="form-group">
    <label for="email">Correo electronoco</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="@.gmail.com" required>
    </div>   
   <div class="form-group">
    <label for="celular" >Numero de contacto</label>
    <input type="text" name="celular" id="celular" class="form-control" placeholder="Celilar/Telefono" required>
  </div>
  <div class="form-group">
    <label for="exampleSelectGender">Estado</label>
      <select  name="estatus" value="{{ old('estatus', $persona->estatus) }}" class="form-control" id="exampleSelectGender">
        <option selected>Sleccione el estado</option>
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
      </select>
    </div>






