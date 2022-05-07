<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <title>Hello, world!</title>
</head>
<body>


<div class="container-fluid dark-bg body">
    <div class="row dark-bg">
        <div class="col-sm-12 menu">@include("partials/menu")</div>
    </div>
    <div class="row content">
        <div class="col-sm-3 justify-content-center h-100 sidenav">
            @yield("aside")
        </div>
        <div class="col-sm-9">
            @yield("content")
        </div>
    </div>
    <footer class="container-fluid dark-bg">
        @include("partials/footer")
    </footer>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
