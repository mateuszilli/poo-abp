<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ng-file-upload-shim.min.js"></script>
    <script src="assets/js/ng-file-upload.min.js"></script>
    <script src="application/views/app.js"></script>
</head>
<body>
    <header></header>
    <main>
        <div class="container-fluid">
            <?php $this->load->view($page); ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>