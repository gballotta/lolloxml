<div class="row">
	<div class="col-lg-12">
		<h4>Identificativi del documento</h4>
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('identificativo', 'Identificativo') }}
	{{ Form::text('identificativo', Input::old('identificativo'),
	               array('class' => 'form-control',
	                     'placeholder' => 'identificativo',
	                     'id' => 'identificativo',
	                     'required' => '', 
	                     'data-validation-required-message' => 'Inserire identificativo',
	                     'maxlength' => '8',
	                     'data-validation-maxlength-message' => 'Dato troppo lungo (max 40 caratteri)')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('datachiusura', 'Data di chiusura') }}
	{{ Form::text('datachiusura', Input::old('datachiusura'),
	               array('class' => 'form-control',
	                     'placeholder' => 'GG/MM/AAAA',
	                     'id' => 'datachiusura',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire data di chiusura',
	                     'minlength' => '10',
	                     'data-validation-minlength-message' => 'Formato data sbagliato',
	                     'maxlength' => '10')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('oggetto', 'Oggetto') }}
	{{ Form::text('oggetto', Input::old('oggetto'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Metadato funzionale a riassumere brevemente il contenuto del documento',
	                     'id' => 'oggetto',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire oggetto')) }}
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h4>Identificativi del soggetto produttore</h4>
		<br/>
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('nomeproduttore', 'Nome') }}
	{{ Form::text('nomeproduttore', Input::old('nomeproduttore'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Nome del soggetto produttore',
	                     'id' => 'nomeproduttore',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il nome del soggetto produttore')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('cognomeproduttore', 'Cognome') }}
	{{ Form::text('cognomeproduttore', Input::old('cognomeproduttore'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Cognome del soggetto produttore',
	                     'id' => 'cognomeproduttore',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il cognome del soggetto produttore')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('codfiscproduttore', 'Codice Fiscale') }}
	{{ Form::text('codfiscproduttore', Input::old('codfiscproduttore'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Codice Fiscale del soggetto produttore',
	                     'id' => 'codfiscproduttore',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il codice fiscale del soggetto produttore',
	                     'pattern' => '^[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]$',
	                     'data-validation-pattern-message' => 'Formato codice fiscale errato (attenzione: servono lettere maiuscole)')) }}
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h4>Identificativi del soggetto destinatario</h4>
		<br/>
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('nomedestinatario', 'Nome') }}
	{{ Form::text('nomedestinatario', Input::old('nomedestinatario'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Nome del soggetto destinatario',
	                     'id' => 'nomedestinatario',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il nome del soggetto destinatario')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('cognomedestinatario', 'Cognome') }}
	{{ Form::text('cognomedestinatario', Input::old('cognomedestinatario'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Cognome del soggetto destinatario',
	                     'id' => 'cognomedestinatario',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il cognome del soggetto destinatario')) }}
	</div>
</div>
<div class="row control-group">
	<div class="form-group col-xs-12 floating-label-form-group controls">
	{{ Form::label('codfiscdestinatario', 'Codice Fiscale') }}
	{{ Form::text('codfiscdestinatario', Input::old('codfiscdestinatario'),
	               array('class' => 'form-control',
	                     'placeholder' => 'Codice Fiscale del soggetto destinatario',
	                     'id' => 'codfiscdestinatario',
	                     'required' => '',
	                     'data-validation-required-message' => 'Inserire il codice fiscale del soggetto destinatario')) }}
	</div>
</div>
<br/>
<div id="success"></div>
<div class="row">
	<div class="form-group col-xs-12">
		{{ Form::submit('Invia', array('class' => 'btn btn-success btn-lg')) }}
	</div>
</div>