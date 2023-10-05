@section('title', 'MATRÍCULAS ABIERTAS')

@extends('layouts.landing')

@section('css')

@endsection

@section('content')

{{-- Title curso start--}}
@php
    $textTitulo = "LANDING GENERAL";
@endphp
<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script>
{{-- Title curso end--}}


{{-- Menu Principal startd --}}
    @include('layouts.partials.header')
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-primary slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ml-lg-0 ">
            <div class="row">
                <div class="col-12 col-lg-4 cont-img-poople d-none d-lg-block" data-aos="fade-right">
                    <img src="{{asset('images/banner-general-people.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h3 data-aos="fade-up" id="title-curso">Más de 25 años de educación de calidad</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-lg-block"><h3 class="text-primary" style="text-shadow: none;">Carrera de Enfermería y Cursos en salud</h3></div>
                    <h5 class="font-secondary d-none d-lg-block" data-aos="zoom-out-right" data-aos-duration="800">
                        ¡Matricúlate YA!
                    </h5>                
                </div>

                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        @include('layouts.partials.utils.formulario', ['cursoEstado'=> false,'codigoProducto' => 7, 'codigoPrograma' => 3])                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-white mb-3 py-4 position-relative">
        <div class="points_profesionals-header d-none d-md-block" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container shadow cont-float bg-white col-11 col-md-10 col-lg-10 col-xl-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row px-3 px-lg-0">
                <div class="col-12 border-bottom border-primary p-4">
                    <div class="row flex-column flex-lg-row p-4">
                        <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="text-primary text-uppercase m-0">¿Por qué elegirnos?</h2>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex cont-info" data-aos="fade-up">  
                    <?php
                        $porqueelerginosItems = [
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/asesoria-docente.svg',
                                'porqueelegirnosTitle' => 'Docentes<br>certificados',
                                'porqueelegirnosDescripcion' => 'Docentes titulados con amplia experiencia en su rubro.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/docente-certificado.svg',
                                'porqueelegirnosTitle' => 'Asesoría<br>Académica',
                                'porqueelegirnosDescripcion' => 'Acompañamiento constante para tu desarrollo profesional.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/convenio-institucionales.svg',
                                'porqueelegirnosTitle' => 'Convenios<br>institucionales',
                                'porqueelegirnosDescripcion' => 'Con entidades del sector salud, clinicas para poder realizar tus prácticas.',
                            ],
                        ];
                    ?>

                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>
                <div class="porqueleegrinos-movil d-lg-none col-12">
                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>           
            </div>
        </div>
        <div class="points_profesionals-footer d-none d-md-block" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
    </section>
    {{-- Porque elegirnos end --}}

    {{-- Profesionales de exito start --}}
    <section id="especialidades" class="section_profesionales bg-white mb-3 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container bg-info cont-info py-5 shadow position-relative" data-aos="fade-up">        
            <div class="co-12 p-4 mt-5">
                <h2 class="text-primary text-center text-uppercase p-2 bg-white m-auto">
                    FORMAMOS PROFESIONALES QUE TRASCIENDEN
                </h2>            
            </div>
            <div class="col-12 col-lg-8 m-auto mb-5">
                <p class="mt-2 text-center text-white ">
                    Conoce nuestros cursos de especialización que te permitirán insertarte rápidamente al 
                    mercado laboral en modalidad VIRTUAL y PRESENCIAL.
                </p>
            </div>
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block " data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

        <div class="container">
            <div class="row justify-content-center mt-3">
                <?php
                        $areasItem = [
                            [   
                                'areaImg' => 'images/cursos/vitamina-c-curso-cauwe.jpg',
                                'areaName' => 'Vitamina c via endovenoso',
                            ],
                            
                            [
                                'areaUrl' => route('adultomayor'),
                                'areaImg' => 'images/cursos/cuiado-adulto mayor-cauwe.jpg',
                                'areaName' => 'Cuidado del adulto mayor',
                            ],
                           
                            [
                                'areaImg' => 'images/cursos/cuidados-basicos adulto-cauwe.jpg',
                                'areaName' => 'Necesidades básicas del adulto',
                            ],
                            [
                                'areaUrl' => route('primerosauxilios'),
                                'areaImg' => 'images/cursos/primeros-auxilios-curso-cauwe.jpg',
                                'areaName' => 'Primeros auxilios y RCP',
                            ],
                            [
                                'areaImg' => 'images/cursos/curaciones-curso-cauwe.jpg',
                                'areaName' => 'Curación de heridas y suturas',
                            ],
                            [
                                'areaUrl' => route('inyectables'),
                                'areaImg' => 'images/cursos/inyectables-cauwe.jpg',
                                'areaName' => 'Inyectables',
                            ],
                            
                        ];
                    ?>

                    @foreach($areasItem as $items)
                        @include('layouts.partials.utils.areas', $items)
                    @endforeach

            </div>
        </div>        
    </section>
    {{-- Profesionales de exito end --}}


    {{-- Clientes start --}}
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
    {{-- Clientes end --}}
</div>

@endsection