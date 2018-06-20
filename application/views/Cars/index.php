<div ng-app="app" ng-controller="carsControllers" ng-cloak>
    <div class="row">
        <div class="col-sm-10">
            <input type="text" class="form-control" ng-model="car.name_car">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-primary form-control" ng-click="setCar()">
                <i class="fa fa-plus"></i> Adicionar
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Código</th>
                        <th>Carro</th>
                        <th width="10%" class="text-center">Excluir</th>
                        <th width="10%" class="text-center">Importar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="c in cars">
                        <td>{{c.id_car}}</td>
                        <td>{{c.name_car}}</td>   
                        <td class="text-center">
                            <button class="btn btn-danger" ng-click="putCar(c.id_car)">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-file"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Importar arquivo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <input type="file" class="form-control-file" ngf-select ng-model="arq">
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
