var app = angular.module("app", ["file-model"]);

app.controller('carsController', function($scope, $http) {
    $scope.car = {};
    $scope.cars = {};
    $scope.file = {};
    $scope.import = {};

    $scope.modalFile = function(id_car) {
        $scope.import.id_car = id_car;
        $("#modalFile").modal();
    };

    $scope.setCar = function() {
        $http.post("Cars/setCar", $scope.car)
        .then(function(response) {
            $scope.getCars();
        }); 
    };

    $scope.putCar = function(id) {
        $http.post("Cars/putCar/"+id)
        .then(function(response) {
            $scope.getCars(); 
        }); 
    };

    $scope.setValues = function() {
        if($scope.file) {
            $scope.import.name_file = $scope.file.name;
            $http.post("Imports/setImport", $scope.import)
            .then(function(response) {
                console.log(200);
            });
        }
    }

    $scope.getCars = function() {
        $http.get("Cars/getCars")
        .then(function(response) {
            $scope.cars = response.data;
        });
    };

    $scope.getCars();
});

app.controller('reportsController', function($scope, $http) {
    $scope.graph = function(objGraph) {
        console.log(objGraph.series);
        
        Highcharts.chart(objGraph.id, {
            chart: {
                type: 'line'
            },
            title: {
                text: objGraph.title
            },
            subtitle: {
                text: objGraph.subtitle
            },
            xAxis: {
                categories: objGraph.categories
            },
            yAxis: {
                title: {
                    text: objGraph.yTitle
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            },
            series: objGraph.series
        });
    };

    $scope.getReports = function() {
        $http.get("Reports/getReports")
        .then(function(response) {
            var obj = response.data
            $scope.graph(obj);
        });
    };

    $scope.getReports();
});