var app = angular.module("app", ["ngFileUpload"]);

app.controller('carsControllers', function($scope, $http, Upload) {
    $scope.car = {};
    $scope.cars = {};
    $scope.arq = {};

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
        console.log($scope.arq);
        if ($scope.arq) {
            Upload.upload({
                url: 'Values/setValues',
                data: {file: $scope.arq}
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