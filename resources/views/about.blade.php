@extends('layouts.master')
@section('content')


<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>{{__('text.about_us')}}</h2>
            <p>{{__('text.header_title')}}</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">{{__('text.home')}}</a></li>
                <li class="breadcrumb-item active">{{__('text.about_us')}}</li>
            </ol>
        </div>
    </div>
</div><!-- /Page Header -->


<section class="about-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-image">
                    <img src="{{asset('template/img2/1.jpg')}}" alt="about image">
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>{{__('text.acne')}}</h2>
                    <p>{{__('text.acne_description')}}
                        </p>
                   
                </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<section class="team-section bg-grey bd-bottom circle shape padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>{{__('text.meet_our_objectives')}}</h2>
            {{-- <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p> --}}
        </div><!-- /Section Heading -->
        <div class="team-wrapper row">
            {{-- <div class="col-lg-3 sm-padding">
                <div class="team-wrap row">
                    <div class="col-md-6">
                        <div class="team-details">
                           <img src="{{asset('template/img2/1.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Buzi<span>Sofala</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-1 -->
                    <div class="col-md-6">
                        <div class="team-details">
                           <img src="{{asset('template/img2/2.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Buzi<span>Sofala</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-2 -->
                    <div class="col-md-6">
                        <div class="team-details">
                            <img src="{{asset('template/img2/3.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Buzi<span>Sofala</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-3 -->
                    <div class="col-md-6">
                        <div class="team-details">
                           <img src="{{asset('template/img2/1.jpg')}}" alt="team">
                            <div class="hover">
                                <h3>Buzi<span>Sofala</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-4 -->
                </div>
            </div> --}}
            <div class="col-lg-12 sm-padding">
                <div class="team-content">
                   
                    <ul class="check-list">
                        <li><i class="fa fa-check"></i>{{__('text.o_1')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_2')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_3')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_4')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_5')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_6')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_7')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_8')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_9')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_10')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_11')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_12')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_13')}}</li>
                        <li><i class="fa fa-check"></i>{{__('text.o_14')}}</li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section><!-- /Team Section -->

@endsection