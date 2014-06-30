<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Angular Laravel Starter</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>

<div class="container">
    @include('shared.nav')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div ng-view>
            </div>
        </div>
    </div>
    @include('shared.footer')
</div>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="bower_components/noty/js/noty/packaged/jquery.noty.packaged.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>


<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="bower_components/angular-mocks/angular-mocks.js"></script>
<script src="bower_components/angular-animate/angular-animate.js"></script>
<script src="bower_components/angular-resource/angular-resource.js"></script>
<script src="bower_components/angular-sanitize/angular-sanitize.min.js"></script>

<script src="bower_components/angular-bootstrap/ui-bootstrap.min.js"></script>
<script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>

<script src="bower_components/lodash/dist/lodash.js"></script>
<script src="bower_components/restangular/dist/restangular.js"></script>

<!-- start custom -->
<script src="assets/js/app-dev.js"></script>
<script src="assets/js/controllers/dashController.js"></script>
<script src="assets/js/services/alertServices.js"></script>
<!-- switch to app.js when using live data -->
<!--<script src="assets/js/app.js"></script>-->

</body>
</html>