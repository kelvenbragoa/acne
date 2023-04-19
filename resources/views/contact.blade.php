@extends('layouts.master')
@section('content')

<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>{{__('text.contat')}}</h2>
            <p>{{__('text.header.title')}}</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">{{__('text.home')}}</a></li>
                <li class="breadcrumb-item active">{{__('text.contact')}}</li>
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
                    <h3>{{__('text.meeting')}}</h3>
                    <p>{{__('text.acne_description')}}</p>
                    <ul>
                        <li><i class="ti-location-pin"></i> Mozambique, Mocuba</li>
                        <li><i class="ti-mobile"></i> +258 84 879 7215 / 84 487 5800</li>
                        <li><i class="ti-email"></i> acnefundacao@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="contact-form">
                    <h3>{{__('text.send_us_message')}}</h3>
                   
                    <form action="" method="post" id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="{{__('text.name')}}" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="{{__('text.email')}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="{{__('text.message')}}" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">{{__('text.send')}}</button>
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