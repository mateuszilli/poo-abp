<div ng-controller="reportsController">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <select id="cars" 
                    class="form-control" 
                    ng-options="car.id_car as car.name_car for car in cars track by car.id_car"
                    ng-model="filter.id_car"
                    ng-change="getImports(filter.id_car);">
                    <option value="" disabled selected>Informe o carro</option>
                </select>
            </div>
            <div class="form-group">
                <select id="imports" 
                    class="form-control"
                    ng-options="import.id_import as import.description for import in imports track by import.id_import"
                    ng-model="filter.id_import"
                    ng-change="getReportsAbstract(filter.id_import); getReportsSensors(filter.id_import);">
                    <option value="" disabled selected>Informe a importação</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div id="reportAbstract"></div>
        </div>
    </div>
    <div class="row" ng-show="sensors.length > 0">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="10%" class="text-center">#</th>
                        <th width="80%">Nome do sensor</th>
                        <th width="10%" class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="(k, sensor) in sensors">
                        <td class="text-center">{{k+1}}</td>
                        <td>{{sensor.name_sensor}}</td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-lg" 
                                ng-click="modalGraph(filter.id_import, sensor.id_sensor)">
                                <i class="glyphicon glyphicon-signal"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal" id="modalGraph">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Gráfico</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div id="reportDetailed"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>