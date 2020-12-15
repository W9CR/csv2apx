<?php

// Set the content type to be XML, so that the browser will   recognise it as XML.
header( "content-type: application/xml; charset=UTF-8" );

// "Create" the document.
$xml = new DOMDocument( "1.0", "UTF-8" );

// Create  elements.
$root_import  = $xml->createElement( 'import_export_doc' );
$version = $xml->createElement('Version', 2);

    
    
$language = $xml->createElement( 'Language', 'en' );
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
    
    // now make a Node under the Recset to hold the personality
    
    $Node = $xml->createElement( "Node" );
    $Node_attr = new DOMAttr('Name','Conventional Personality');
    $Node->setAttributeNode($Node_attr);
    $Node_attr = new DOMAttr('ReferenceKey','TST 444.375');
    $Node->setAttributeNode($Node_attr);
    
    // Now make the sections, all 14 of them
    
    
        $Section = $xml->createElement( "Section" );
        $Section_attr = new DOMAttr('Name','General');
        $Section->setAttributeNode($Section_attr);
        $Section_attr = new DOMAttr('id','10150');
        $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    
            $Field_attr = new DOMAttr('Name','Conventional Personality Name');
            $Field = $xml->createElement( "Field", 'TST 444.375' );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
    
            $Field_attr = new DOMAttr('Name','DVRS Profile Selection');
            $Field = $xml->createElement( "Field", '&lt;DVRS Disabled&gt;' );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);

    
     $Node->appendChild($Section);
    // RX options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Rx Options');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10136');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    
    $Field_attr = new DOMAttr('Name','Receive Only Personality');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx Voice / Signal Type');
    $Field = $xml->createElement( "Field", 'Mixed Mode' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Busy LED');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx Unmute Delay (ms)');
    $Field = $xml->createElement( "Field", '0' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Unmute / Mute Type');
    $Field = $xml->createElement( "Field", '0' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx De-Emphasis');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Squelch (Fine Tune)');
    $Field = $xml->createElement( "Field", '6' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    
    $Field_attr = new DOMAttr('Name','HearClear');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);

    /*
    $Field_attr = new DOMAttr('Name','');
    $Field = $xml->createElement( "Field", '' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);

    
    $Field_attr = new DOMAttr('Name','');
    $Field = $xml->createElement( "Field", '' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
*/
    
    
    $Node->appendChild($Section);
    
    

    $recsec_node->appendChild($Node);
    
    
    
    
    

    
    
    
    $root_node->appendChild($recsec_node);
    //var_dump ($version);
    $root_import->appendChild($version);
    $root_import->appendChild($language);
    $root_import->appendChild($root_node);
    $xml->appendChild($root_import);

    $xml->formatOutput = TRUE;
// Parse the XML.
print $xml->saveXML();
?>
