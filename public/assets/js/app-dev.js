'use strict';

var app = angular.module('app', [
    'ngRoute',
    'ngMockE2E',
    'ngAnimate',
    'ngSanitize',
    'ui.bootstrap',
    'alertServices',
    'restangular',
    'dashboardController'
]);

var dash_users = [
    {
        name: "Test 1", id: 1
    },
    {
        name: "Test 2", id: 1
    },
    {
        name: "Test 3", id: 1
    }

]


app.run(function($httpBackend) {
    $httpBackend.whenGET(/api\/v1\/dashboard_mocked/).respond(
        200, { status: 'success', message: "Report", data: dash_users }
    );
    $httpBackend.whenGET(/^assets\/js\/templates\//).passThrough();
    $httpBackend.whenGET(/api\/v1\/dashboard/).passThrough();
});

app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl:  'assets/js/templates/dashboard.html',
                controller:  'DashboardCtrl'
            }).
            when('/not_mocked', {
                templateUrl:  'assets/js/templates/dashboard.html',
                controller:  'DashboardNotMockedCtrl'
            }).
            otherwise({
                redirectTo: '/'
            });
    }]);

/**
 * Data from the REST server will always be an array
 * message
 * data
 * status
 */
app.config(function(RestangularProvider) {

    // add a response intereceptor
    RestangularProvider.addResponseInterceptor(function(data, operation, what, url, response, deferred) {
        var extractedData;
        extractedData = data.data;
        return extractedData;
    });
});