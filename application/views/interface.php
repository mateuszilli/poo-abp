<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/highcharts/code/highcharts.js"></script>
    <script src="/assets/highcharts/code/modules/series-label.js"></script>
    <script src="/assets/highcharts/code/modules/exporting.js"></script>
    <script src="/assets/highcharts/code/modules/export-data.js"></script>
    <script src="/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/angular.min.js"></script>
    <script src="/assets/js/angular-file-model.js"></script>
    <script src="/application/views/app.js"></script>
</head>
<body>
    <header></header>
    <main>
        <div class="container-fluid" ng-app="app" ng-cloak>
            <?php $this->load->view($page); ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>