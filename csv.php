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
    $Field = $xml->createElement( "Field", 'Standard' );
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
    
    $Node->appendChild($Section);
    
    
    // TX options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Tx Options');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10137');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Tx Voice / Signal Type');
    $Field = $xml->createElement( "Field", 'Non-ASTRO' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Transmit Power Level');
    $Field = $xml->createElement( "Field", 'High' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Reverse Burst / Turn-Off Code');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Adaptive Power');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Time Out Timer (sec)');
    $Field = $xml->createElement( "Field", '180' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Transmit Pre-Emphasis');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    // Frequency options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Frequency Options');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10148');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('Embedded','True');
    $Section->setAttributeNode($Section_attr);
    // now the Embedded set
    $EmbeddedRecset_attr = new DOMAttr('Name','Frequency Options');
    $EmbeddedRecset = $xml->createElement( "EmbeddedRecset" );
    $EmbeddedRecset->setAttributeNode($EmbeddedRecset_attr);
    $EmbeddedRecset_attr = new DOMAttr('Id','0');
    $EmbeddedRecset->setAttributeNode($EmbeddedRecset_attr);
    $Section->appendChild($EmbeddedRecset);
    
    // This is a single frequency until FREQQQQ
    
    // now the embeded node
    $EmbeddedNode_attr = new DOMAttr('Name','Frequency Options');
    $EmbeddedNode = $xml->createElement( "EmbeddedNode" );
    $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
    $EmbeddedNode_attr = new DOMAttr('ReferenceKey','FUCK1');
    $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
    $EmbeddedRecset->appendChild($EmbeddedNode);
    
    // Embedded Frequency options section
    $EmbeddedSection = $xml->createElement( "EmbeddedSection" );
    $EmbeddedSection_attr = new DOMAttr('Name','Frequency Options');
    $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
    $EmbeddedSection_attr = new DOMAttr('id','10149');
    $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
    $EmbeddedNode->appendChild($EmbeddedSection);
    
    // Now fields in the embeddedsection in the EmbeddedNode which is the frequency
    
    $Field_attr = new DOMAttr('Name','Name');
    $Field = $xml->createElement( "Field", 'FUCK1' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA Frequency (MHz)');
    $Field = $xml->createElement( "Field", 146.775000 );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Frequency (MHz)');
    $Field = $xml->createElement( "Field", '146.565000' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct / Talkaround');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Frequency (MHz)');
    $Field = $xml->createElement( "Field", '146.775000' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Deviation / Channel Spacing');
    $Field = $xml->createElement( "Field", '5 kHz / 25 kHz' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA  Network ID');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Network ID');
    $Field = $xml->createElement( "Field", '659' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Network ID');
    $Field = $xml->createElement( "Field", '659' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO Talkgroup ID');
    $Field = $xml->createElement( "Field", 'Local' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name', 'User Selectable PL (MPL)');
    $Field = $xml->createElement( "Field", 'FALSE' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','User Selectable PL [MPL]');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA PL Freq');
    $Field = $xml->createElement( "Field", '146.2' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA  PL Code');
    $Field = $xml->createElement( "Field", '4B' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA DPL Code');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx PL Freq');
    $Field = $xml->createElement( "Field", '146.2' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx PL Code');
    $Field = $xml->createElement( "Field", '4B' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    
    $Field_attr = new DOMAttr('Name','Tx DPL Code');
    $Field = $xml->createElement( "Field", '056' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct PL Freq');
    $Field = $xml->createElement( "Field", '146.2' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct PL Code');
    $Field = $xml->createElement( "Field", '4B' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct DPL Code');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Mixed Vote Scan Persistent Member');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Frequency done
    
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
    
    // FREQQQQ end of frequency
    
    
    // This is a single frequency until FREQQQQ
    
    // now the embeded node
    $EmbeddedNode_attr = new DOMAttr('Name','Frequency Options');
    $EmbeddedNode = $xml->createElement( "EmbeddedNode" );
    $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
    $EmbeddedNode_attr = new DOMAttr('ReferenceKey','FUCK2');
    $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
    $EmbeddedRecset->appendChild($EmbeddedNode);
    
    // Embedded Frequency options section
    $EmbeddedSection = $xml->createElement( "EmbeddedSection" );
    $EmbeddedSection_attr = new DOMAttr('Name','Frequency Options');
    $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
    $EmbeddedSection_attr = new DOMAttr('id','10149');
    $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
    $EmbeddedNode->appendChild($EmbeddedSection);
    
    // Now fields in the embeddedsection in the EmbeddedNode which is the frequency
    
    $Field_attr = new DOMAttr('Name','Rx / TA Frequency (MHz)');
    $Field = $xml->createElement( "Field", 146.775000 );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name', 'User Selectable PL (MPL)');
    $Field = $xml->createElement( "Field", 'FALSE' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx DPL Code');
    $Field = $xml->createElement( "Field", '056' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Frequency (MHz)');
    $Field = $xml->createElement( "Field", '146.565000' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Network ID');
    $Field = $xml->createElement( "Field", '659' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    //    $Field_attr = new DOMAttr('Name','Tx PL Code');
    //    $Field = $xml->createElement( "Field", '4B' );
    //    $Field->setAttributeNode($Field_attr);
    //    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx PL Freq');
    $Field = $xml->createElement( "Field", '131.8' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    /*
     $Field_attr = new DOMAttr('Name','Rx / TA  PL Code');
     $Field = $xml->createElement( "Field", '4B' );
     $Field->setAttributeNode($Field_attr);
     $EmbeddedSection->appendChild($Field);
     */
    $Field_attr = new DOMAttr('Name','Rx / TA PL Freq');
    $Field = $xml->createElement( "Field", '131.8' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA DPL Code');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Rx / TA DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    
    $Field_attr = new DOMAttr('Name','Rx / TA  Network ID');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct / Talkaround');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Squelch Type');
    $Field = $xml->createElement( "Field", 'PL' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct PL Freq');
    $Field = $xml->createElement( "Field", '131.8' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    //    $Field_attr = new DOMAttr('Name','Direct PL Code');
    //    $Field = $xml->createElement( "Field", '4B' );
    //    $Field->setAttributeNode($Field_attr);
    //    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO Talkgroup ID');
    $Field = $xml->createElement( "Field", 'Local' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Tx Deviation / Channel Spacing');
    $Field = $xml->createElement( "Field", '5 kHz / 25 kHz' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Name');
    $Field = $xml->createElement( "Field", 'FUCK2' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Network ID');
    $Field = $xml->createElement( "Field", '659' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','User Selectable PL [MPL]');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct Frequency (MHz)');
    $Field = $xml->createElement( "Field", '146.775000' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct DPL Code');
    $Field = $xml->createElement( "Field", '023' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Direct DPL Invert');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Mixed Vote Scan Persistent Member');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $EmbeddedSection->appendChild($Field);
    
    // Frequency done
    
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
    
    
    // End of all frequencies
    $Node->appendChild($Section);
    
    
    // Signaling options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Signaling');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10144');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Non-ASTRO\Signaling Type');
    $Field = $xml->createElement( "Field", 'MDC' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Non-ASTRO\System Number');
    $Field = $xml->createElement( "Field", 'Ham MDC' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO\Digital Modulator Type');
    $Field = $xml->createElement( "Field", 'C4FM' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Type');
    $Field = $xml->createElement( "Field", 'Selected Channel' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO\ASTRO System');
    $Field = $xml->createElement( "Field", 'Ham P25' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO\Late Entry Fast Unmute');
    $Field = $xml->createElement( "Field", '&lt;Tone Signaling Disabled&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Non-ASTRO\PTT ID');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Zone');
    $Field = $xml->createElement( "Field", '&lt;None&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Non-ASTRO\Emergency PTT ID');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO\ASTRO Rx Unmute Rule');
    $Field = $xml->createElement( "Field", 'Digital CSQ' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Channel');
    $Field = $xml->createElement( "Field", '&lt;None&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert Talkgroup');
    $Field = $xml->createElement( "Field", '1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert TG Secure / Clear Strapping');
    $Field = $xml->createElement( "Field", 'Clear' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert TG Key Select');
    $Field = $xml->createElement( "Field", 'Sec Key 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    
    
    // Non-ASTRO Call options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Non-ASTRO Call');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10143');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Call Alert\Call Alert Rx / Tx');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','MDC\Auto Select Call Transmit');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Call Alert\In-Call User Alert Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Selective Call\Unmute Type');
    $Field = $xml->createElement( "Field", 'And' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','MDC\Unlimited Calling');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','MDC\RTT Button Access');
    $Field = $xml->createElement( "Field", 'None' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Non-ASTRO Call Hot List');
    $Field = $xml->createElement( "Field", 'LIST 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    // ASTRO Call options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','ASTRO Call');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10141');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Call Alert\Call Alert Rx / Tx');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Selective Call\Selective Call Rx / Tx');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO Call Hot List');
    $Field = $xml->createElement( "Field", 'LIST 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Selective Call\Auto Selective Call Transmit');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Call Alert\In-Call User Alert Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','ASTRO Unlimited Calling');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    
    $Node->appendChild($Section);
    
    
    // ASTRO Talkgroup options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','ASTRO Talkgroup');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10147');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Talkgroup');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Talkgroup List');
    $Field = $xml->createElement( "Field", 'Ham' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Selection Type');
    $Field = $xml->createElement( "Field", 'Selectable' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    
    // RAC options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','RAC');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10138');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Repeater Access');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\Code Type');
    $Field = $xml->createElement( "Field", 'MDC' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Access Type');
    $Field = $xml->createElement( "Field", 'Manual' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Repeater Access Button 2\Code Type');
    $Field = $xml->createElement( "Field", 'None' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Singletone List Selection');
    $Field = $xml->createElement( "Field", '&lt;Tone Signaling Disabled&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\MDC Repeater ID');
    $Field = $xml->createElement( "Field", '1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\Singletone Alias Selection');
    $Field = $xml->createElement( "Field", '&lt;Disabled&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Repeater Access Button 2\Singletone Alias Selection');
    $Field = $xml->createElement( "Field", '&lt;Disabled&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Field_attr = new DOMAttr('Name','Repeater Access Button 2\MDC Repeater ID');
    $Field = $xml->createElement( "Field", '1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    
    // Features options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Features');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10135');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Smart PTT\Smart PTT Type');
    $Field = $xml->createElement( "Disabled", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan\Scan List Selection');
    $Field = $xml->createElement( "Field", '&lt;None&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Tactical Rekey Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan\Automatic Scan');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Hot Keypad');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Smart PTT\Quick Key Override');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan\Mixed Vote Scan Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan\Mixed Vote Scan Tx Steering');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Tactical Public Safety UI Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','End Tx on Voice Absence');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Incident Signaling Type');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Personnel Accountability\Personnel Accountability Registration');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Personnel Accountability\Tx Voice Type');
    $Field = $xml->createElement( "Field", 'Digital' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','RF Modem');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','OTA Radio Alias Type');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Conventional RSSI Display');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','RSSI Display Timer (sec)');
    $Field = $xml->createElement( "Field", '15' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','OTA Radio Alias Update Enable');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','DTMF Mic Enable');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    
    // Phone options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Phone');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10139');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Phone Operation');
    $Field = $xml->createElement( "Field", 'Unlimited' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','DTMF Timing Select');
    $Field = $xml->createElement( "Field", 'Timing 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Auto Access Code Select');
    $Field = $xml->createElement( "Field", 'Code 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    
    $Node->appendChild($Section);
    
    
    
    /*
     // One Touch options section
     $Section = $xml->createElement( "Section" );
     $Section_attr = new DOMAttr('Name','One Touch');
     $Section->setAttributeNode($Section_attr);
     $Section_attr = new DOMAttr('id','10145');
     $Section->setAttributeNode($Section_attr);
     // now the fields in the section
     $Field_attr = new DOMAttr('Name','');
     $Field = $xml->createElement( "Field", '' );
     $Field->setAttributeNode($Field_attr);
     $Section->appendChild($Field);
     
     
     $Node->appendChild($Section);
     
     */
    
    // Secure options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Secure');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10142');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Secure Voice / Signal Type');
    $Field = $xml->createElement( "Field", 'ASTRO' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Packet Data\Secure / Clear Strapping');
    $Field = $xml->createElement( "Field", 'Clear' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','OTAR Tx');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Key ID');
    $Field = $xml->createElement( "Field", 'None' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Voice\Ignore Rx Clear Voice');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Voice\Secure / Clear Strapping');
    $Field = $xml->createElement( "Field", 'Clear' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','XL Transmit');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Proper Code Detect');
    $Field = $xml->createElement( "Field", 'True' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan Holdoff Strapping');
    $Field = $xml->createElement( "Field", 'Both' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Voice\Key Strapping');
    $Field = $xml->createElement( "Field", 'Select' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Scan Select');
    $Field = $xml->createElement( "Field", 'Non-XL &amp; XL' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','ASTRO OTAR Profile Index');
    $Field = $xml->createElement( "Field", '&lt;Disabled&gt;' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','DES-XL Tx Default');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Voice\Key Select');
    $Field = $xml->createElement( "Field", 'Sec Key 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Packet Data\Key Select');
    $Field = $xml->createElement( "Field", 'Sec Key 1' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Echo Mute Time (ms)');
    $Field = $xml->createElement( "Field", '0' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Packet Data\Ignore Rx Clear Packet Data');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','XL Delay Following Key ID');
    $Field = $xml->createElement( "Field", '50' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    
    $Node->appendChild($Section);
    
    
    
    // Advanced options section
    $Section = $xml->createElement( "Section" );
    $Section_attr = new DOMAttr('Name','Advanced');
    $Section->setAttributeNode($Section_attr);
    $Section_attr = new DOMAttr('id','10140');
    $Section->setAttributeNode($Section_attr);
    // now the fields in the section
    $Field_attr = new DOMAttr('Name','Analog Flat Audio');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Advanced RF AGC');
    $Field = $xml->createElement( "Field", 'Disabled' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    $Field_attr = new DOMAttr('Name','Disable High Pass Filter');
    $Field = $xml->createElement( "Field", 'False' );
    $Field->setAttributeNode($Field_attr);
    $Section->appendChild($Field);
    
    $Node->appendChild($Section);
    
    
    
    
    
    
    
    
    $recsec_node->appendChild($Node);
    
    
    
    $root_node->appendChild($recsec_node);
    //var_dump ($version);
    $root_import->appendChild($version);
    $root_import->appendChild($language);
    $root_import->appendChild($root_node);
    $xml->appendChild($root_import);
    
    $xml->formatOutput = TRUE;

    
    function store_freq($row) {
        
        global $recsec_node, $Node, $Section, $EmbeddedRecset, $EmbeddedNode, $EmbeddedSection, $xml ;
        
        echo "testing" , $xml->getElementById('10148')->tagName , "\n";

        
        $Node = $xml->createElement( "Node" );
        $Node_attr = new DOMAttr('Name','Conventional Personality');
        $Node->setAttributeNode($Node_attr);
        $Node_attr = new DOMAttr('ReferenceKey', $row["Conventional Personality Name"] );
        $Node->setAttributeNode($Node_attr);
        
        
        // Frequency options section
        $Section = $xml->createElement( "Section" );
        $Section_attr = new DOMAttr('Name','Frequency Options');
        $Section->setAttributeNode($Section_attr);
        $Section_attr = new DOMAttr('id','10148');
        $Section->setAttributeNode($Section_attr);
        $Section_attr = new DOMAttr('Embedded','True');
        $Section->setAttributeNode($Section_attr);
        // now the Embedded set
        $EmbeddedRecset_attr = new DOMAttr('Name','Frequency Options');
        $EmbeddedRecset = $xml->createElement( "EmbeddedRecset" );
        $EmbeddedRecset->setAttributeNode($EmbeddedRecset_attr);
        $EmbeddedRecset_attr = new DOMAttr('Id','0');
        $EmbeddedRecset->setAttributeNode($EmbeddedRecset_attr);
        $Section->appendChild($EmbeddedRecset);
        
        // This is a single frequency until FREQQQQ
        
        // now the embeded node
        $EmbeddedNode_attr = new DOMAttr('Name','Frequency Options');
        $EmbeddedNode = $xml->createElement( "EmbeddedNode" );
        $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
        $EmbeddedNode_attr = new DOMAttr('ReferenceKey',$row["Frequency Name"]);
        $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
        $EmbeddedRecset->appendChild($EmbeddedNode);
        
        // Embedded Frequency options section
        $EmbeddedSection = $xml->createElement( "EmbeddedSection" );
        $EmbeddedSection_attr = new DOMAttr('Name','Frequency Options');
        $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
        $EmbeddedSection_attr = new DOMAttr('id','10149');
        $EmbeddedSection->setAttributeNode($EmbeddedSection_attr);
        $EmbeddedNode->appendChild($EmbeddedSection);
        
        // Now fields in the embeddedsection in the EmbeddedNode which is the frequency
        
        $Field_attr = new DOMAttr('Name','Name');
        $Field = $xml->createElement( "Field", $row["Frequency Name"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA Frequency (MHz)');
        $Field = $xml->createElement( "Field", $row["Rx / TA Frequency (MHz)"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx Frequency (MHz)');
        $Field = $xml->createElement( "Field", $Row["Tx Frequency (MHz)"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct / Talkaround');
        $Field = $xml->createElement( "Field", $row["Direct / Talkaround"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct Frequency (MHz)');
        $Field = $xml->createElement( "Field", $row["Direct Frequency (MHz)"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx Deviation / Channel Spacing');
        $Field = $xml->createElement( "Field",  $row["Tx Deviation / Channel Spacing"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA  Network ID');
        $Field = $xml->createElement( "Field", $row["Rx / TA  Network ID"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx Network ID');
        $Field = $xml->createElement( "Field", $row["Tx Network ID"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct Network ID');
        $Field = $xml->createElement( "Field", $row["Direct Network ID"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','ASTRO Talkgroup ID');
        $Field = $xml->createElement( "Field", $row["ASTRO Talkgroup ID"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name', 'User Selectable PL (MPL)');
        $Field = $xml->createElement( "Field", $row["User Selectable PL (MPL)"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','User Selectable PL [MPL]');
        $Field = $xml->createElement( "Field", $row["User Selectable PL [MPL]"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA Squelch Type');
        $Field = $xml->createElement( "Field", $row["Rx / TA Squelch Type"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA PL Freq');
        $Field = $xml->createElement( "Field", $row["Rx / TA PL Freq"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA  PL Code');
        $Field = $xml->createElement( "Field", $row["Rx / TA  PL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA DPL Code');
        $Field = $xml->createElement( "Field", $row["Rx / TA DPL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx / TA DPL Invert');
        $Field = $xml->createElement( "Field", $row["Rx / TA DPL Invert"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx Squelch Type');
        $Field = $xml->createElement( "Field", $row["Tx Squelch Type"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx PL Freq');
        $Field = $xml->createElement( "Field", $row["Tx PL Freq"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx PL Code');
        $Field = $xml->createElement( "Field", $row["Tx PL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        
        $Field_attr = new DOMAttr('Name','Tx DPL Code');
        $Field = $xml->createElement( "Field", $row["Tx DPL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Tx DPL Invert');
        $Field = $xml->createElement( "Field", $row["Tx DPL Invert"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct Squelch Type');
        $Field = $xml->createElement( "Field", $row["Direct Squelch Type"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct PL Freq');
        $Field = $xml->createElement( "Field", $row["Direct PL Freq"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct PL Code');
        $Field = $xml->createElement( "Field", $row["Direct PL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct DPL Code');
        $Field = $xml->createElement( "Field", $row["Direct DPL Code"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Direct DPL Invert');
        $Field = $xml->createElement( "Field", $row["Direct DPL Invert"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name', 'Mixed Vote Scan Persistent Member');
        $Field = $xml->createElement( "Field", $row["Mixed Vote Scan Persistent Member"] );
        $Field->setAttributeNode($Field_attr);
        $EmbeddedSection->appendChild($Field);
        
        $Node->appendChild($Section);
        
        
        
        $recsec_node->appendChild($Node);

    }
    
    
 
    /* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file('./freq.csv'));
    $header = array_shift($rows);
    $frequencies    = array();
    foreach($rows as $row) {
        $frequencies = array_combine($header, $row);
        store_freq(array_combine($header, $row));
        
        
    }
    
   // var_dump $frequencies
    
    // now we have them in the $frequency array.  We need to skip the first line
    // and then loop through the array and set all the vars per the array in the file
    
    
    
    
    
    

// Parse the XML.
print $xml->saveXML();
    $xml->validateOnParse = true;
    echo "testsfddfsfding" , $xml->getElementById('10148') , "\n";
?>
