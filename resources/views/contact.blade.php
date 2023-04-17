@extends('layouts.master')
@section('content')

<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>Contactos</h2>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga.</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active">Contactos</li>
            </ol>
        </div>
    </div>
</div><!-- /Page Header -->


<section class="contact-section padding">
    <div id="google_map"></div><!-- /#google_map -->
    <div class="container">
        <div class="row contact-wrap">
            <div class="col-md-6 xs-padding">
                <div class="contact-info">
                    <h3>Entre em contacto</h3>
                    <p>ACNE é uma pessoa colectiva de direito privado, sem fins lucrativos, dotado de autonomia administrativa, financeira e patrimonial, com Sede em Maputo e com Delegação na cidade de Mocuba, na província da Zambézia, constituída e inscrita no Cartório Notarial de Maputo.</p>
                    <ul>
                        <li><i class="ti-location-pin"></i> Mozambique, Sofala</li>
                        <li><i class="ti-mobile"></i> +258 840000</li>
                        <li><i class="ti-email"></i> info@acne.co.mz</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="contact-form">
                    <h3>Envie-nos uma mensagem</h3>
                   
                    <form action="" method="post" id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Mensagem" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Contact Section -->

@endsection