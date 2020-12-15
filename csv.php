<?php

// Set the content type to be XML, so that the browser will   recognise it as XML.
header( "content-type: application/xml; charset=UTF-8" );

// "Create" the document.
$xml = new DOMDocument( "1.0", "UTF-8" );

// Create  elements.
$root_import  = $xml->createElement( "import_export_doc" );
    $version = $xml->createElement( "Version" );
    $language = $xml->createElement( "Language" );
    $root_node = $xml->createElement( "Root" );
    $attr_root_features = new DOMAttr('ExportedAllFeatures','False');
    $root_node->setAttributeNode($attr_root_features);
    $attr_root_features = new DOMAttr('ConverterGenerated','False');
    $root_node->setAttributeNode($attr_root_features);
    $recsec_node = $xml->createElement( "Recset" );

    // create a conventional personality recset
    //<Recset Name="Conventional Personality" Id="2059">
    $attr_recset_features = new DOMAttr('Name','Conventional Personality');
    $recsec_node->setAttributeNode($attr_recset_features);
    $attr_recset_features = new DOMAttr('Id','2059');
    $recsec_node->setAttributeNode($attr_recset_features);
    
    $version->setAttributeNode('2');
    
    $root_node->appendChild($recsec_node);
    $root_import->appendChild($version);
    $root_import->appendChild($language);
    $root_import->appendChild($root_node);
    $xml->appendChild($root_node);
    
// Parse the XML.
print $xml->saveXML();
?>
