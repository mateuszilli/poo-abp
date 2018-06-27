<div ng-controller="carsController">
    <div class="row">
        <div class="col-sm-10">
            <input type="text" class="form-control" ng-model="car.name_car">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary form-control" ng-click="setCar()">
                <i class="glyphicon glyphicon-plus"></i> Adicionar
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="10%" class="text-center">#</th>
                        <th>Carro</th>
                        <th width="10%" class="text-center">Excluir</th>
                        <th width="10%" class="text-center">Importar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="(k, c) in cars">
                        <td class="text-center">{{k+1}}</td>
                        <td>{{c.name_car}}</td>   
                        <td class="text-center">
                            <button class="btn btn-lg btn-danger" ng-click="putCar(c.id_car)">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-lg btn-default text-center" ng-click="modalFile(c.id_car)">
                                <i class="glyphicon glyphicon-file"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  <div class="modal" id="modalFile">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Importar arquivo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12 form-group">
              <label>Descrição</label>
              <input type="text" class="form-control" ng-model="import.description">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
              <label>Arquivo</label>
              <input type="file" class="form-control-file" file-model="file">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="setValues()">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>
