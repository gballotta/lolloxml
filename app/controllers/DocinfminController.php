<?php

class DocinfminController extends BaseController {
	
	public function process() {
		
		$handle = fopen('documento.xml', 'wt');
		fwrite($handle, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
		fwrite($handle, "<documento IDDocumento=\"" . Input::get('identificativo') . "\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:noNamespaceSchemaLocation=\"documentoinformatico.xsd\">\n");
		fwrite($handle, "  <datachiusura>" . Input::get('datachiusura') . "</datachiusura>\n");
		fwrite($handle, "  <oggettodocumento>" . Input::get('oggetto') . "</oggettodocumento>\n");
		fwrite($handle, "  <soggettoproduttore>\n");
		fwrite($handle, "    <nome>" . Input::get('nomeproduttore') . "</nome>\n");
		fwrite($handle, "    <cognome>" . Input::get('cognomeproduttore') . "</cognome>\n");
		fwrite($handle, "    <codicefiscale>" . Input::get('codfiscproduttore') . "</codicefiscale>\n");
		fwrite($handle, "  </soggettoproduttore>\n");
		fwrite($handle, "  <destinatario>\n");
		fwrite($handle, "    <nome>" . Input::get('nomedestinatario') . "</nome>\n");
		fwrite($handle, "    <cognome>" . Input::get('cognomedestinatario') . "</cognome>\n");
		fwrite($handle, "    <codicefiscale>" . Input::get('codfiscdestinatario') . "</codicefiscale>\n");
		fwrite($handle, "  </destinatario>\n");
		fwrite($handle, "</documento>\n");
		fclose($handle);
		
		return Redirect::to('/')->with('successo', 'ok')->with('nomefile', 'documento.xml')->withInput();
	}
	
}
