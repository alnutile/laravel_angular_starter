var dashboardController = angular.module('dashboardController', ['ngSanitize']);

dashboardController.controller('DashboardCtrl', ['$scope', '$http', '$location', '$route',
    '$routeParams', 'Noty', 'Restangular',
    '$filter',
    function($scope, $http, $location, $route, $routeParams,
             Noty, Restangular, current_user, $filter){

        Noty("Welcome to the Dashboard", "success");


        Restangular.all('api/v1/dashboard_mocked').getList().then(function(response){
            console.log(response);
            $scope.users = response;
        });

    }]);

dashboardController.controller('DashboardNotMockedCtrl', ['$scope', '$http', '$location', '$route',
    '$routeParams', 'Noty', 'Restangular',
    '$filter',
    function($scope, $http, $location, $route, $routeParams,
             Noty, Restangular, current_user, $filter){

        Noty("Welcome to the Dashboard", "success");


        Restangular.all('api/v1/dashboard').getList().then(function(response){
            console.log(response);
            $scope.users = response;
        });

    }]);