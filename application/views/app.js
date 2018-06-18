var app = angular.module("app", []);

app.controller('carsControllers', function($scope, $http) {
    $scope.car = {};
    $scope.cars = {};

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

    $scope.getCars = function() {
        $http.get("Cars/getCars")
        .then(function(response) {
            $scope.cars = response.data;
        });
    };

    $scope.getCars();
});