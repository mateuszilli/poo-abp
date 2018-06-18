<div ng-app="app" ng-controller="carsControllers">
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <input type="text" class="form-control" ng-model="car.name_car">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <button class="btn btn-primary form-control" ng-click="setCar()">
                    <i class="fa fa-plus"></i> Adicionar
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Codigo</th>
                        <th>Carro</th>
                        <th width="10%" class="text-center">Excluir</th>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
