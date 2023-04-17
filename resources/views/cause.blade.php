@extends('layouts.master')
@section('content')

<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>Causas</h2>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga.</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active">Causas</li>
            </ol>
        </div>
    </div>
</div><!-- /Page Header -->

<section class="blog-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Causas participadas</h2>
            <span class="heading-border"></span>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga</p>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img2/1.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> Janeiro 01.2023</span>
                                <h3><a href="#">A história da doação</a></h3>
                                <p>O segredo para a felicidade está em ajudar os outros. Nunca sobrestime a diferença voce pode fazer para a vida dos outros.</p>
                                
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img2/2.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> Janeiro 01.2023</span>
                                <h3><a href="#">Ajuda a comunidade</a></h3>
                                <p>O segredo para a felicidade está em ajudar os outros. Nunca sobrestime a diferença voce pode fazer para a vida dos outros.</p>
                            </div>
                        </div>
                    </div><!-- Post 2 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="{{asset('template/img2/3.jpg')}}" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> Janeiro 01.2023</span>
                                <h3><a href="#">A caridade, uma regra</a></h3>
                                <p>O segredo para a felicidade está em ajudar os outros. Nunca sobrestime a diferença voce pode fazer para a vida dos outros.</p>
                            </div>
                        </div>
                    </div><!-- Post 3 -->
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section><!-- Blog Section -->

@endsection