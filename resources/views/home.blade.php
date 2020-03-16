@extends('layouts.template') @section('title', 'GEEC - Grupo de Educação Ética e Cidadania') @section('content')
<header>
    <div class="header__bg"></div>
    <h1><img src="{{asset('imagens/geec.png')}}" class="img-fluid" alt=""> </h1>
</header>

<div class="container">
    @foreach($news as $noticia)
    <div class="row mt-2">
        <div class="col s12 m6 l4 card-width">
            <div class="card-panel border-radius-6 mt-10 card-animation-1">
            
                <a href="{{url('/news' . "/" . $noticia->slug)}}">
                    @if(count($noticia->gallery) > 0)
                    <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                        src="{{url('storage/' . $noticia->gallery[0]->photo)}}" alt="images">
                    @endif
                </a>
                <h6><a href="#" class="mt-5">{{$noticia->title}}</a></h6>

                <p class="">Criado em: {{date('d/m/Y H:i', strtotime($noticia->created_at))}}</p>
                <p><span>Categoria: {{$noticia->category->name}}</span></p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col s12">
        <ul class="pagination">
            <li class="disabled">
                <a href="#!">
                    <i class="material-icons">chevron_left</i>
                </a>
            </li>
            <li class="active"><a href="#!">1</a></li>

            <li class="waves-effect">
                <a href="#!">
                    <i class="material-icons">chevron_right</i>
                </a>
            </li>
        </ul>
    </div>
</div>



<div class="section  blue darken-3 ">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 ">
                <h5 class="start white-text">Jovem Aprendiz</h5>
                <p class="white-text">O Programa Inclusão Aprendiz do GEEC visa oferecer oportunidade de trabalho e
                    renda para jovens e adolescentes das camadas menos favorecidas da sociedade, afastando-os de
                    situações de risco social
                </p>
                <ul class="lista-template">
                    <li>promovendo a inclusão social, profissional e a cidadania</li>
                    <li>O projeto também se estende a pessoas com deficiência</li>
                    <li>O programa está em atividade desde 2010 e oferece cursos de qualificação profissional a jovens
                        com idade entre 14 e 24 anos</li>
                    <li>Lei de Aprendizagem (nº.10.097 de 2000, regulamentada pelo Decreto nº. 9.579 de 22 de Novembro
                        de 2018</li>
                </ul>
                <div class="center">
                    <a class="waves-effect waves-light btn" href="https://portal.aprendizgeec.org.br/"
                        style="margin-bottom:10px;">Mais Informações</a>
                </div>

            </div>
            <div class="col s6 offset-s3 m6 center">
                <img class="responsive-img" src="https://aprendizgeec.org.br/uploads/portal/logo_aprendiz.png">
            </div>
        </div>
    </div>
</div>




<div class="section  grey lighten-4" id="remotemanagement">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 ">
                <h5 class="start text-primarycolor">CITEC - Centro de Inovação Tecnológica</h5>
                <p>é o núcleo de desenvolvimento tecnológico do GEEC. Criado inicialmente para atender as demandas da
                    própria instituição, em instalação e manutenção de computadores, o Citec cresceu e agora é um setor
                    relativamente autônomo, que atende também
                    o público externo.</p>
                <h5 class="start text-primarycolor">CITEC realiza I “Café com Código”em Divinópolis</h5>
                <blockquote>
                    o objetivo de disseminar o conhecimento em tecnologia em Divinópolis e região.
                </blockquote>
                <!--<p><span class="text-primarycolor" style="font-weight:500;">PRO</span> features are included in the subscription.</p>-->
                <div class="center">
                    <a class="waves-effect waves-light btn" href="http://citec.org.br/" style="margin-bottom:10px;">Para
                        mais informações.</a>
                </div>
                <!--<span style="font-size:0.7rem;">*Subscriptions are re-billed every 30 days and you will be charged for the amount of devices registered to your account. Annual subscriptions require an upfront payment.</span>-->
            </div>
            <div class="col s6 offset-s3 m6 center">
                <img class="responsive-img"
                    src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/remote_illustration.png">
            </div>
        </div>
    </div>
</div>


<div class="section blue darken-3" id="custom">
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3 m6 center">
                <img class="responsive-img"
                    src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/ic_launcher_customise.png">
            </div>
            <div class="col s12 m6">
                <h5 class="start white-text center">Clube do livro</h5>
                <p class="start-paragraph-text" style="color:rgba(255, 255, 255, .8);">desfrute de deliciosos momentos
                    que só a literatura pode proporcionar.</p>
                <ul class="lista-template">
                    <li>Entre Com Seus Dados</li>
                    <li>Escolha Seu Plano</li>
                    <li>Desfrute De Uma Boa Leitura</li>
                </ul>
                <p>
                    <a href="https://www.clubeespirita.com.br/" target="_blank" class="white-text flow-text"><i
                            class="material-icons">arrow_forward</i> Mais informações</a>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    header {
        position: relative;
        height: 300px;
        overflow: hidden;
    }

    .header__bg {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(#42a5f5, #1976d2);
        transform: skewY(-6deg);
        transform-origin: top left;
    }

    h1 {
        margin: 0;
        padding: 100px 0;
        font: 44px "Arial";
        text-align: center;
    }

    header h1 {
        position: relative;
        color: white;
    }
</style>
<script>
    $(document).ready(function() {
        $('input#input_text, textarea#textarea2').characterCounter();
    });
</script>
@endsection
