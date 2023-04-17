@extends('layouts.master')
@section('content')


<div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>Acerca de nós</h2>
            <p>Contribuindo para a promoção dos direitos humanos das crianças e da rapariga.</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active">Acerca de nós</li>
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
                    <h2>ASSOCIAÇÃO CRIANÇA NOSSA ESPERANÇA</h2>
                    <p>ACNE é uma pessoa colectiva de direito privado, sem fins lucrativos, dotado de autonomia administrativa, financeira e patrimonial. , com Sede em Maputo e com Delegação na cidade de Mocuba, na província da Zambézia, constituída e inscrita no Cartório Notarial de Maputo. 
                        É uma associação de âmbito nacional, criada com objectivo único de trabalhar em prol das crianças vulneráveis, procurando um ambiente saudável e um mundo melhor para as crianças, nas províncias da Zambézia, Nampula e Cabo Delgado.
                        </p>
                   
                </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<section class="team-section bg-grey bd-bottom circle shape padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Conheça os nossos objetivos</h2>
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
                        <li><i class="fa fa-check"></i>Contribuir para a promoção dos direitos humanos das crianças e da rapariga.</li>
                        <li><i class="fa fa-check"></i>Promover o desenvolvimento sustentável de base comunitária, visando a elevação das condições de vida das crianças vulneráveis.</li>
                        <li><i class="fa fa-check"></i>Aumentar a capacidade de participação da criança a nível socioeconómico, cultural e ambiental, através da educação, informação e prestação de serviços de qualidade.</li>
                        <li><i class="fa fa-check"></i>Reduzir uniões prematuras e gravidezes precoces nas raparigas.</li>
                        <li><i class="fa fa-check"></i>Realizar trabalhos de apoio directo ou indirecto as crianças desfavorecidas no meio rural.</li>
                        <li><i class="fa fa-check"></i>Promover a realização de actividades de iniciativa local, nos domínios de educação, saúde e assistência jurídica gratuita as crianças desfavorecidas.</li>
                        <li><i class="fa fa-check"></i>Contribuir para a redução da mão de obra infantil, tráfico de menores e de raparigas na exploração sexual .</li>
                        <li><i class="fa fa-check"></i>Sensibilizar e apoiar os pais no registo das crianças nas instituições competentes de registo Civil.</li>
                        <li><i class="fa fa-check"></i>Prestar apoio legal a comunidade e divulgar a legislação de menores no seio das comunidades rurais, nomeadamente, Constituição da República de Moçambique, Lei de protecção as pessoas (crianças) com deficiência, Lei de protecção as pessoas (crianças com HIV-SIDA) e doenças degenerativas, Lei de protecção contra as Uniões Prematuras, Lei da Família, Lei de Protecção e promoção dos direitos da criança.</li>
                        <li><i class="fa fa-check"></i>Promover, incentivar e apoiar programas de desenvolvimento nos domínios da Saúde Sexual e Reprodutiva como HIV-SIDA, na desnutrição crônica, doenças degenerativas e fístula obstétrica.</li>
                        <li><i class="fa fa-check"></i>Promover através de acções de formação profissional, o auto-emprego das raparigas mães que se encontram fora do sistema nacional de educação.</li>
                        <li><i class="fa fa-check"></i>Apoiar e participar na investigação e divulgação de conhecimentos e práticas nocivas as raparigas nas comunidades, tráfico de menores, assédio sexual e trabalho infantil.</li>
                        <li><i class="fa fa-check"></i>Cooperar com Estado, com o sector privado e com as organizações não governamentais congéneres nacionais e internacionais, na promoção de programas de saúde sexual e reprodutiva, incluindo planeamento familiar, prevenção e redução de infeções de transmissão sexual.</li>
                        <li><i class="fa fa-check"></i>Assessorar legalmente sem fins lucrativos quando solicitado, as instituições publicas/privadas de acção social e empresas, em temas relacionados a criança e rapariga.</li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</section><!-- /Team Section -->

@endsection