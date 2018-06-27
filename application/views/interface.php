<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/highcharts/code/highcharts.js"></script>
    <script src="/assets/highcharts/code/modules/series-label.js"></script>
    <script src="/assets/highcharts/code/modules/exporting.js"></script>
    <script src="/assets/highcharts/code/modules/export-data.js"></script>
    <script src="/assets/js/angular.min.js"></script>
    <script src="/assets/js/angular-file-model.js"></script>
    <script src="/application/views/app.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top header">
            <div class="navbar-header">
                <button type="button" 
                    data-target="#navbarCollapse" 
                    data-toggle="collapse" 
                    class="navbar-toggle">
                    <i class="glyphicon glyphicon-menu-hamburger menuIcon"></i>
                </button>
                <span class="navbar-brand">ABP-POO</span>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="Cars">Cars</a></li>
                    <li><a href="Reports">Reports</a></li>
                    <li class="divider"></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid" ng-app="app" ng-cloak>
            <?php $this->load->view($page); ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>

<style>
    .header { position: relative; }
    .menuIcon { margin: 0; padding: 0; color: #FFF; font-size: 16px;}
</style>