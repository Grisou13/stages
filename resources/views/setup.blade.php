<!DOCTYPE html>
<!-- TODO continue reading this https://scotch.io/tutorials/angularjs-multi-step-form-using-ui-router -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/darkly/bootstrap.min.css">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>

</head>
<body>
    <div class="app" ng-app="SetupApp">
        <div class="container">
            <div ui-view></div>
        </div>
    </div>
<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
