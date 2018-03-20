<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paoly's Boutique - @yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="general/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="general/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="general/css/style.css" rel="stylesheet">
    <!-- Diseño para los iconos sociales -->
    <link href="general/icons/font.css" rel="stylesheet">
    <link href="general/icons/style-icons.css" rel="stylesheet">

</head>    

<body>
    @include('elementos.menu')
    @yield('content')
    @include('elementos.footer')
    <div class="social-bar">
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-youtube"></a>
        <a href="#" class="icon icon-instagram"></a>
    </div>
</body>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="general/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="general/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="general/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="general/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>

</html>
