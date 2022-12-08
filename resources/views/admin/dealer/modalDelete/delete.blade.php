  <style>
  /* Buttons */
  .btn-primary { color: white; background: #03a5fc; }
  .btn-danger { background-color: #F6534E; }
  
  /* Modals */
  .modal-footer { border-top: none; padding: 20px 30px 30px 30px; }
  .modal-header { padding: 30px 30px 20px 30px; border-bottom: none; }
  .modal-body { padding: 0px 30px; }
  
  .panel { box-shadow: none; margin-bottom: 0; border-radius: 0; }
  .panel-title { font-size: 13px; color: #284664; }
  .panel-heading { padding: 15px; }
  .panel-heading .panel-title .blue-link { display: none; }
  .panel-heading .panel-title .blue-link.collapsed { display: block; }
  .panel-default>.panel-heading { background: #fff; border-bottom: none; }
  .panel-default {  }
  .panel-body { padding: 0 15px; }
  
  .inv-container { float: left; max-width: 150px; line-height: 18px; }
  
  .panel.bank-feeds { border-top: none; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;  }
  .panel.bank-feeds .pre-scrollable { border-top: 1px solid #EEF1F3 !important; }
  .panel.repeating-invoices { border-top-left-radius: 3px; border-top-right-radius: 3px; }
  
  .m-tiny .modal-dialog { max-width: 120px; }
  .m-small .modal-dialog { max-width: 180px; }
  .m-medium .modal-dialog { max-width: 350px; }
  .m-large .modal-dialog { max-width: 320px; }
  </style>
  {!! Form::model($dealer, ['route' => ['dealers.update', $dealer], 'method' => 'PUT']) !!}
                <input style="display:none" type="text" name="name" id="name"
                    value="{{ $dealer->name }}" class="form-control" placeholder=""
                    required onkeypress="return soloLetras(event)" />
                <input style="display:none" type="text" name="address" id="address"
                    value="{{ $dealer->address }}" class="form-control"
                    placeholder="" required>
                <input style="display:none"  type="number" name="nit" id="nit"
                    value="{{ $dealer->nit }}" class="form-control" placeholder=""
                    required
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                    onKeyPress="if(this.value.length==12) return false;" min="0" />
                <input style="display:none" type="text" name="email" id="email"
                    value="{{ $dealer->email }}" class="form-control" placeholder=""
                    required>
                <input style="display:none"  type="number" name="celular" id="celular"
                    value="{{ $dealer->celular }}" class="form-control"
                    placeholder="" required
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                    onKeyPress="if(this.value.length==8) return false;" min="0" />
              <select style="display:none" name="estatus" value="{{ old('estatus', $dealer->estatus) }}" 
                class="form-control" id="exampleSelectGender">          
                <option value="0">Inactivo</option>
                </select>                                                                                                                        
  <div class="modal fade m-medium" id="modal-delete-edit{{$dealer->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-edit">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <center> <img id='gif' src=' https://cdn.dribbble.com/users/251873/screenshots/9288094/media/a1c2f89065f68e1b2b5dcb66bdb9beb1.gif' width="80%px"></center>
          <center> <h4>Esta seguro de eliminar ?</h4></center>
          <center> <h4>El registro N:<b>{{ $dealer->id}}</b></h4></center>
        <center><p class="s-text">¡No podrás revertir esto! </p></center> 
        <div>
          <div class="modal-footer" style="text-align: center" >
            <button type="submit" class="btn btn-dark"> ¡Sí, Eliminar!</button>
            </button>
            <div></div>
            <button type="submit" class="btn btn-danger pull-right" data-dismiss="modal">¡No, Cancelar!</button>
        </div>
      </div>
    </div>
  </div> 
  {!! Form::close() !!}
  
  
