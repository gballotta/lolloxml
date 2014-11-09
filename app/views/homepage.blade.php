@extends('layout')

@section('content')

@if(Session::has('successo'))

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">File XML generato correttamente</span>
                    <hr class="star-light">
                    <a href="documento.xml">
                    	<button class="btn btn-primary btn-lg">Scarica</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

@else

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Generatore XML</span>
                </div>
            </div>
        </div>
    </div>
</header>

@endif

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-center">DOCUMENTO INFORMATICO MINIMO</h1>
			<hr class="star-primary"/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			{{ Form::open(array('url' => '/documentoinformaticominimo', 'method' => 'post', 'id' => 'contactForm', 'name' => 'sentMessage')) }}
				@include('forms.docinfmin')
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection

