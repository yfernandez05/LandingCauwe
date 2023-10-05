@section('title', 'Primeros auxilios y RCP')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
</style>
@endsection

@section('content')

{{-- Title curso start--}}
@php
    $textTitulo = "Primeros auxilios y RCP";
@endphp
<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script>
{{-- Title curso end--}}


{{-- Menu Principal startd --}}
<?php
    $itemsSubmenu = [];
?>
@include('layouts.partials.header',['itemsSubmenu' => $itemsSubmenu])
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-primary slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ml-lg-0 ">
            <div class="row">
                <div class="col-12 col-lg-4 cont-img-poople d-none d-lg-block" data-aos="fade-right">
                    <img src="{{asset('images/cursos/banner-primerosuxilios.png')}}" alt="primerosauxilios">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h3 data-aos="fade-up" id="title-curso" class="d-none d-md-block">Nuestro curso</h3>                                       
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">Primeros auxilios y RCP</h3></div>
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        ¡Matricúlate YA! 
                    </h5> 
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        Nuestra carrera de Primeros auxilios y RCP
                    </h3>
                </div>
                
                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        @include('layouts.partials.utils.formulario', ['cursoEstado'=> false,'codigoProducto' => 3, 'codigoPrograma' => 1]) 
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos mt-5 py-4 position-relative">
        <div class="points_profesionals-header d-none d-md-block" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container text-center" data-aos="fade-up">
            <h2 class="text-primary">¿Por qué elegirnos?</h2>
        </div>
        <div class="container cont-info-elegirnos position-relative mt-4">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 col-md-4 d-flex my-2">
                    <div class="bg-white shadow px-2" data-aos="fade-right">
                        <div class="card-body my-4">
                            <div class="col-4 col-md-9 col-lg-5 m-auto pb-4">
                                <img src="{{asset('images/icons-generals/asesoria-docente.svg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="text-center">
                                <h4 class="text-uppercase text-primary">
                                    Docentes<br>certificados
                                </h4>
                                <p class="mb-0">
                                    Docentes titulados con amplia experiencia en su rubro.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-2">
                    <div class="bg-white shadow px-2" data-aos="fade-right">
                        <div class="card-body my-4">
                            <div class="col-4 col-md-9 col-lg-5 m-auto pb-4">
                                <img src="{{asset('images/icons-generals/docente-certificado.svg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="text-center">
                                <h4 class="text-uppercase text-primary">
                                    Asesoría<br>Académica
                                </h4>
                                <p class="mb-0">
                                    Acompañamiento constante para tu desarrollo profesional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-2">
                    <div class="bg-white shadow px-2" data-aos="fade-right">
                        <div class="card-body my-4">
                            <div class="col-4 col-md-9 col-lg-5 m-auto pb-4">
                                <img src="{{asset('images/icons-generals/convenio-institucionales.svg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="text-center">
                                <h4 class="text-uppercase text-primary">
                                    Convenios<br>institucionales
                                </h4>
                                <p class="mb-0">
                                    Con entidades del sector salud, clinicas para poder realizar tus prácticas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="points_profesionals-footer d-none d-md-block" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
    </section>
    {{-- Porque elegirnos end --}}

    {{-- Aprenderas start --}}
    <section id="aprenderas" class="section_aprenderas mt-4 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block position-absolute" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container text-center" data-aos="fade-up">
            <h2 class="text-primary">En el curso aprenderás</h2>
        </div>
        <div class="container mt-4 mb-2">
            <div class="col-12 p-4 bg-white shadow" data-aos="flip-left" data-aos-duration="800">
                <div class="d-flex flex-wrap">
                    <div class="col-12 col-md-6 font-weight-bold">
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Principios básicos y normas de acción en primeros auxilios.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Reconocimiento de signos vitales.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Alteraciones de la consciencia.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Diferencias de urgencia y emergencias.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Diferencia entre golpe, fisura, fractura, esguince, luxación y Vendaje.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Inmovilización</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Métodos de traslado.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Convulsiones.</p>
                    </div>
                    <div class="col-12 col-md-6 font-weight-bold">
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Quemaduras.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Intoxicación.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Hemorragias.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Lesiones eléctricas.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Lesiones oculares.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Obstrucción de vías.</p>
                        <p class="my-3"><i class="fas fa-check-circle text-primary fa-lg">&nbsp;&nbsp;</i>Reanimación cardiopulmonar (RCP).</p>
                    </div>
                </div>                
            </div>
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block position-absolute" data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
    </section>
    {{-- Aprenderas end --}}


    {{-- Testimonios strat--}}
        @include('layouts.partials.utils.testimonios')
    {{-- Testimonios end--}}


    {{-- Convenios start --}}
    <section id="convenios" class="section_clientes mb-0 pt-4 pb-5 position-relative d-none" style="background-color: #ecf5f8;">
        <div class="circle_profesionals-header d-block d-lg-none d-xl-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container text-center py-4">
            <h2 class="text-primary">Nuestros Convenios</h2>
        </div>

        @include('layouts.partials.utils.clientes')

        <div class="circle_profesionals-footer d-none d-lg-block" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

    </section>
    {{-- Convenios end --}}
</div>

@endsection