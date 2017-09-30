<div class="modal fade" id="modalDirectory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" ><span>Registrar</span></h4>
      </div>

      <form id='formDirectory' method="post">
        <input name="id" type="hidden" id="id">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nombre</label>
                  <input name="nombre" type="text" class="form-control" id="nombre" required="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Apellidos</label>
                  <input name="apellidos" type="text" class="form-control" id="apellidos" required="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Edad</label>
                  <input name="edad" type="text" class="form-control" id="edad" required="" maxlength="3">
              </div>
            </div>

            <div class="col-md-9">
              <div class="form-group">
                <label>Dirección</label>
                  <input name="direccion" type="text" class="form-control" id="direccion" required="">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>Teléfono</label>
                  <input name="telefono" type="text" class="form-control" id="telefono" required="">
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer clearfix">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>

          <button type="submit" class="btn btn-success" id="btnRealizar" data-e="R" data-loading-text="Procesando...<i class='fa fa-refresh fa-spin'></i>"><i class="fa fa-check"></i> Realizar</button>
        </div>
      </form>
    </div>
  </div>
</div>