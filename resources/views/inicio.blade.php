@extends('layouts.master')
@section('title', 'Inicio') 
@section('content')


<!-- data-ride="carousel" -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <div class="view">

                <!--Video source-->
                <video class="" autoplay loop>
                    <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
                </video>

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Learn Bootstrap 4 with MDB</strong>
                        </h1>

                        <p>
                            <strong>Best & free guide of responsive web design</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
                                versions available. Create your own, stunning website.</strong>
                        </p>

                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Ver catálogo de productos
                            <i class="fa fa-graduation-cap ml-2"></i>
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <div class="view" style="background-image: url(general/img/portada.jpg); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Texto de titulo</strong>
                        </h1>

                        <p>
                            <strong>Alguna descripción</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Detalles de lo que se vende, vestidos, etc.</strong>
                        </p>

                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                            <i class="fa fa-graduation-cap ml-2"></i>
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <div class="view">

                <!--Video source-->
                <video class="video-full" autoplay loop>
                    <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                </video>

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4">
                            <strong>Learn Bootstrap 4 with MDB</strong>
                        </h1>

                        <p>
                            <strong>Best & free guide of responsive web design</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
                                versions available. Create your own, stunning website.</strong>
                        </p>

                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                            <i class="fa fa-graduation-cap ml-2"></i>
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->
<br><br>
<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Desde aqí empieza el plugin-->
        <section>
            <center> <h2>Productos</h2></center>
            <!--Las imagenes deben ser de 800 x 800-->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4" style="padding: 10px;">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Camisas</h5>
                        </div>
                        <img class="card-img-top" src="https://www.decathlon.es/media/836/8369758/big_6aa9ddf49b2742a598f05cbd1c06afe4.jpg" width='100' height='330'  alt="Card image cap" />
                        <div class="card-body">
                            <a href="#" class="btnCards btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" style="padding: 10px;">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Vestidos</h5>
                        </div>
                        <img class="card-img-top" src="https://image.airydress.com/image/308_422/36/be/36be48aedfbc1af8479ee9889ac58acb.jpg" width='100' height='330' alt="Card image cap" />
                        <div class="card-body">
                            <a href="#" class="btnCards btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" style="padding: 10px;">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Zapatos</h5>
                        </div>
                        <img class="card-img-top" src="http://clcdn02.mundotkm.com/2016/06/zapatos-que-engordan-las-piernas-5.jpg" width='100' height='330' alt="Card image cap" />
                        <div class="card-body">
                            <a href="#" class="btnCards btn btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section: Main info-->

        <hr class="my-5">

        <!--Section: Main features & Quick Start-->
        <section>

        </section>
        <!--Section: Main features & Quick Start-->

        <hr class="my-5">

        <!--Section: Not enough-->
        <section>


        </section>
        <!--Section: Not enough-->

        <hr class="mb-5">

        <!--Section: More-->
        <section>


        </section>
        <!--Section: More-->

    </div>
</main>
<!--Main layout-->
@endsection