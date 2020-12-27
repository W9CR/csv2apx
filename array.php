<?php

    /*define the header for conventional channels */
    $ConvHeader = array( 1 => 'Type', 'Conventional Personality Name', 'DVRS Profile Selection', 'Receive Only Personality', 'Rx Voice / Signal Type', 'Unmute / Mute Type', 'Rx Unmute Delay (ms)', 'Squelch (Fine Tune)', 'Busy LED', 'Rx De-Emphasis', 'HearClear', 'Tx Voice / Signal Type', 'Time Out Timer (sec)', 'Transmit Pre-Emphasis', 'Reverse Burst / Turn-Off Code', 'Transmit Power Level', 'Adaptive Power', 'ASTRO\ASTRO System', 'ASTRO\Digital Modulator Type', 'ASTRO\ASTRO Rx Unmute Rule', 'ASTRO\Late Entry Fast Unmute', 'Non-ASTRO\Signaling Type', 'Non-ASTRO\System Number', 'Non-ASTRO\PTT ID', 'Non-ASTRO\Emergency PTT ID', 'Emergency Revert\Revert Type', 'Emergency Revert\Revert Zone', 'Emergency Revert\Revert Channel', 'Revert Talkgroup\Revert Talkgroup', 'Revert Talkgroup\Revert TG Secure / Clear Strapping', 'Revert Talkgroup\Revert TG Key Select', 'Tone Signaling List', 'Selective Call\Selective Call Rx / Tx', 'Selective Call\Unmute Type', 'Call Alert\Call Alert Rx / Tx', 'Call Alert\In-Call User Alert Enable', 'MDC\RTT Button Access', 'MDC\Auto Select Call Transmit', 'MDC\Unlimited Calling', 'Non-ASTRO Call Hot List', 'ASTRO Selective Call\Selective Call Rx / Tx', 'Selective Call\Auto Selective Call Transmit', 'ASTRO Call Alert\Call Alert Rx / Tx', 'ASTRO Call Alert\In-Call User Alert Enable', 'ASTRO Unlimited Calling', 'ASTRO Call Hot List', 'Talkgroup', 'Talkgroup List', 'Selection Type', 'Repeater Access', 'Access Type', 'Singletone List Selection', 'Repeater Access Button 1/ PTT\Code Type', 'Repeater Access Button 1/ PTT\MDC Repeater ID', 'Repeater Access Button 1/ PTT\Singletone Alias Selection', 'Repeater Access Button 2\Code Type', 'Repeater Access Button 2\MDC Repeater ID', 'Repeater Access Button 2\Singletone Alias Selection', 'Tactical Rekey Enable', 'Hot Keypad', 'DTMF Mic Enable', 'End Tx on Voice Absence', 'RF Modem', 'Scan\Scan List Selection', 'Scan\Automatic Scan', 'Scan\Mixed Vote Scan Enable', 'Scan\Mixed Vote Scan Tx Steering', 'Smart PTT\Smart PTT Type', 'Smart PTT\Quick Key Override', 'Incident Signaling Type', 'Tactical Public Safety UI Enable', 'Personnel Accountability\Personnel Accountability Registration', 'Personnel Accountability\Tx Voice Type', 'OTA Radio Alias Type', 'OTA Radio Alias Update Enable', 'Conventional RSSI Display', 'RSSI Display Timer (sec)', 'Phone Operation', 'DTMF Timing Select', 'Auto Access Code Select', 'Secure Voice / Signal Type', 'XL Transmit', 'DES-XL Tx Default', 'Voice\Secure / Clear Strapping', 'Voice\Key Strapping', 'Voice\Key Select', 'Voice\Ignore Rx Clear Voice', 'Packet Data\Secure / Clear Strapping', 'Packet Data\Key Select', 'Packet Data\Ignore Rx Clear Packet Data', 'Proper Code Detect', 'OTAR Tx', 'ASTRO OTAR Profile Index', 'Echo Mute Time (ms)', 'Scan Select', 'Scan Holdoff Strapping', 'Key ID', 'XL Delay Following Key ID', 'Advanced RF AGC', 'Analog Flat Audio', 'Disable High Pass Filter') ;
    
    /*define the header for freq rows */
    
    $FreqHeader = array( 1 =>'Type', 'Conventional Personality Name', 'Frequency Name', 'Rx / TA Frequency (MHz)', 'Tx Frequency (MHz)', 'Direct / Talkaround', 'Direct Frequency (MHz)', 'Tx Deviation / Channel Spacing', 'Rx / TA  Network ID', 'Tx Network ID', 'Direct Network ID', 'ASTRO Talkgroup ID', 'User Selectable PL (MPL)', 'User Selectable PL [MPL]', 'Rx / TA Squelch Type', 'Rx / TA PL Freq', 'Rx / TA  PL Code', 'Rx / TA DPL Code', 'Rx / TA DPL Invert', 'Tx Squelch Type', 'Tx PL Freq', 'Tx PL Code', 'Tx DPL Code', 'Tx DPL Invert', 'Direct Squelch Type', 'Direct PL Freq', 'Direct PL Code', 'Direct DPL Code', 'Direct DPL Invert', 'Mixed Vote Scan Persistent Member');
    
    
    /* now we should have a defualt array/row of values for all types of records, and then these will merge with each row */
    
    $ConvDefaults = array_combine($ConvHeader, (array( 1 => 'ConvPers', 'FSG Tampa FM', '<DVRS Disabled>', 'False', 'Mixed Mode', 'Standard', '0', '6', 'True', 'True', 'Disabled', 'Non-ASTRO', '180', 'True', 'True', 'High', 'False', 'Ham P25', 'C4FM', 'Digital CSQ', 'True', 'MDC', 'Ham MDC', 'True', 'False', 'Selected Channel', '<None>', '<None>', '1', 'Clear', 'Sec Key 1', '<Tone Signaling Disabled>', 'Disabled', 'And', 'Disabled', 'False', 'None', 'False', 'False', 'LIST 1', 'Disabled', 'False', 'Disabled', 'False', 'False', 'LIST 1', 'True', 'Ham', 'Selectable', 'False', 'Manual', '<Tone Signaling Disabled>', 'MDC', '1', '<Disabled>', 'None', '1', '<Disabled>', 'False', 'True', 'False', 'False', 'Disabled', '<None>', 'False', 'False', 'False', 'Disabled', 'False', 'Disabled', 'False', 'False', 'Digital', 'Disabled', 'False', 'True', '15', 'Unlimited', 'Timing 1', 'Code 1', 'ASTRO', 'True', 'False', 'Clear', 'Select', 'Sec Key 1', 'False', 'Clear', 'Sec Key 1', 'False', 'True', 'False', '<Disabled>', '0', 'Non-XL & XL', 'Both', 'None', '50', 'Disabled', 'False', 'False')));
    
    $FreqDefaults = array_combine($FreqHeader, (array( 1=> 'Freq', 'Default Pers', 'DEFAULT W9CR', '146.520000', '1465.520000', 'True', '443.525000', '5 kHz / 25 kHz', '659', '659', '659', 'WorldWide', 'False', 'Disabled', 'CSQ', '146.2', '4B', '023', 'False', 'Disabled', '146.2', '4B', '023', 'False', 'PL', '146.2', '4B', '023', 'False', 'False')));
  
    /* below function takes two inputs, the default array for the type and the $input array, and returns a sanatized array */
    function SetDefaults($default, $input)  {
        $output = array();
        foreach ($input as $key => $value) {
            if (empty ($value)) { //echo $key, " is blank \n";
                $output[$key] = $default[$key] ;}
            else { $output[$key] = $value ; } };
        return $output;
    };

    /* Idea here is to read in a CSV and then put it into an array based on ["Conventional Personality Name"]
     
     
     Array
     Personality["Conventional Personality Name"] => ["Type"] => ["Frequency Name"] = $frequency
     
     
     
    
/* Map Rows and Loop Through Them */
    $rows   = array_map('str_getcsv', file('./freq.csv'));
    //$header = array_shift($rows);
    $personality = array();
    $frequencies = array();
    $i = 0;
    foreach ($rows as $row) {
        //need some kinda check that the length of the csv data matches the input
        if ($row[0] == "ConvPers") {
            // clean up the array
            $clean =  SetDefaults($ConvDefaults, (array_combine($ConvHeader, $row)));
            $pers = $clean["Conventional Personality Name"];
            $type = $clean["Type"];
            $personality[$pers][$type] = $clean ;
            unset ($clean, $type, $pers);
        }
        elseif ($row[0] == "Freq"){
            // clean up the array
            $clean =  SetDefaults($FreqDefaults, (array_combine($FreqHeader, $row)));
            $pers = $clean["Conventional Personality Name"];
            $freqname = $clean["Frequency Name"];
            $type = $clean["Type"];
            $personality[$pers][$type][$freqname] = $clean ;
            unset ($clean, $type, $pers, $freqname);
        }
        
        elseif (empty($row[0])) { echo "Blank Type on row ", $i , ": " , (implode(", ", $row)), "\n"; }
        elseif ((empty($row[0])) != True) { echo "Unknown type \"$row[0]\" on row ", $i , ": " , (implode(", ", $row)), "\n"; }
        $i++;
        };
    unset($i);
   // print_R($personality);
    
    // check that if there's a Freq, there's a Conv and vice versa.  If  not,
    // add in the defaults.
    foreach ($personality as $key => $row) {
        print ($key) . "\n";
        if (empty($personality[$key]['ConvPers'])) {
            print "ERROR: '" . $key . "' is missing Conventional Personality\n";
            $pers = $key;
            $type = "ConvPers" ;
            $personality[$pers][$type] = $ConvDefaults ;
            unset ($clean, $type, $pers, $freqname);

            
        };
        if (empty($personality[$key]['Freq'])) {
            print "ERROR: '" . $key . "' is missing at least one frequency\n";
            $pers = $key;
            $freqname = "UNSET";
            $type = "Freq";
            $personality[$pers][$type][$freqname] = $FreqDefaults ;
            $personality[$pers][$type][$freqname]['Conventional Personality Name'] = $pers;
            unset ($clean, $type, $pers, $freqname);
        };
    };
    
    print_r ($personality);
         // clean up the array
           // $clean =  SetDefaults($ConvDefaults, (array_combine($ConvHeader, $row)));
            //$pers = $clean["Conventional Personality Name"];
           // $type = $clean["Type"];
           // $personality[$pers][$type] = $clean ;
           // unset ($clean, $type, $pers);
        //}

    
    
    
  
    // should we clean up the array with htmlspecialchars() since XML will die if fed an & sign?
    
    // now we should have the data in the right array.
    
    //foreach (array_keys($personality) as $PersName) {
      //  echo "$PersName \n";
      //  foreach (array_keys($personality[$value]) as $conv) {
      //      echo "Value: $value Conv: $conv \n";
      //      print_r ($personality[$value][$conv]);
      //  };
  //  };
    
    
    
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
    
    
    foreach (array_keys($personality) as $PersName) {
        // now make a Node under the Recset to hold the personality
        $Node = $xml->createElement( "Node" );
        $Node_attr = new DOMAttr('Name','Conventional Personality');
        $Node->setAttributeNode($Node_attr);
        $Node_attr = new DOMAttr('ReferenceKey', $PersName);
        $Node->setAttributeNode($Node_attr);
    
        // Now make the sections, all 14 of them
        $Section = $xml->createElement( "Section" );
        $Section_attr = new DOMAttr('Name','General');
        $Section->setAttributeNode($Section_attr);
        $Section_attr = new DOMAttr('id','10150');
        $Section->setAttributeNode($Section_attr);
        
        // now the fields in the section
        $Field_attr = new DOMAttr('Name','Conventional Personality Name');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Conventional Personality Name'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','DVRS Profile Selection');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['DVRS Profile Selection'] );
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
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Receive Only Personality'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Rx Voice / Signal Type');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Rx Voice / Signal Type'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Busy LED');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Busy LED'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Rx Unmute Delay (ms)');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Rx Unmute Delay (ms)'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Unmute / Mute Type');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Unmute / Mute Type'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Rx De-Emphasis');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Rx De-Emphasis'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Squelch (Fine Tune)');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Squelch (Fine Tune)'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
        
        
        $Field_attr = new DOMAttr('Name','HearClear');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['HearClear'] );
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
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Tx Voice / Signal Type'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Transmit Power Level');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Transmit Power Level'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Reverse Burst / Turn-Off Code');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Reverse Burst / Turn-Off Code'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Adaptive Power');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Adaptive Power'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
    
        $Field_attr = new DOMAttr('Name','Time Out Timer (sec)');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Time Out Timer (sec)'] );
        $Field->setAttributeNode($Field_attr);
        $Section->appendChild($Field);
        
        $Field_attr = new DOMAttr('Name','Transmit Pre-Emphasis');
        $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Transmit Pre-Emphasis'] );
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
    
        // test if freq is defined
        foreach (array_keys($personality[$PersName]['Freq']) as $Freq) {
            echo "Personality: $PersName Frequency: $Freq \n";
            print_r ($personality[$PersName]['Freq'][$Freq]['Frequency Name']);
            echo "\n";
            // This is a single frequency until FREQQQQ
            // now the embeded node
            $EmbeddedNode_attr = new DOMAttr('Name','Frequency Options');
            $EmbeddedNode = $xml->createElement( "EmbeddedNode" );
            $EmbeddedNode->setAttributeNode($EmbeddedNode_attr);
            $EmbeddedNode_attr = new DOMAttr('ReferenceKey', $personality[$PersName]['Freq'][$Freq]['Frequency Name']);
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Frequency Name'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA Frequency (MHz)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA Frequency (MHz)'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx Frequency (MHz)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx Frequency (MHz)'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct / Talkaround');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct / Talkaround'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct Frequency (MHz)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct Frequency (MHz)'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx Deviation / Channel Spacing');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx Deviation / Channel Spacing'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA  Network ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA  Network ID'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx Network ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx Network ID'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct Network ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct Network ID'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO Talkgroup ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['ASTRO Talkgroup ID'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name', 'User Selectable PL (MPL)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['User Selectable PL (MPL)'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','User Selectable PL [MPL]');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['User Selectable PL [MPL]'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA Squelch Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA Squelch Type'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA PL Freq');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA PL Freq'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA  PL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA  PL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA DPL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA DPL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Rx / TA DPL Invert');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Rx / TA DPL Invert'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx Squelch Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx Squelch Type'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx PL Freq');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx PL Freq'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx PL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx PL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx DPL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx DPL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Tx DPL Invert');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Tx DPL Invert'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct Squelch Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct Squelch Type'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct PL Freq');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct PL Freq'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct PL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct PL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct DPL Code');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct DPL Code'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Direct DPL Invert');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Direct DPL Invert'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Mixed Vote Scan Persistent Member');
            $Field = $xml->createElement( "Field", $personality[$PersName]['Freq'][$Freq]['Mixed Vote Scan Persistent Member'] );
            $Field->setAttributeNode($Field_attr);
            $EmbeddedSection->appendChild($Field);
        };
        $Node->appendChild($Section);
            // Signaling options section
            $Section = $xml->createElement( "Section" );
            $Section_attr = new DOMAttr('Name','Signaling');
            $Section->setAttributeNode($Section_attr);
            $Section_attr = new DOMAttr('id','10144');
            $Section->setAttributeNode($Section_attr);
            // now the fields in the section
            $Field_attr = new DOMAttr('Name','Non-ASTRO\Signaling Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Non-ASTRO\Signaling Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
        
            $Field_attr = new DOMAttr('Name','Non-ASTRO\System Number');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Non-ASTRO\System Number'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
        
            $Field_attr = new DOMAttr('Name','ASTRO\Digital Modulator Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO\Digital Modulator Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
        
            $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Emergency Revert\Revert Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO\ASTRO System');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO\ASTRO System'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO\Late Entry Fast Unmute');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO\Late Entry Fast Unmute'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Non-ASTRO\PTT ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Non-ASTRO\PTT ID'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Zone');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Emergency Revert\Revert Zone'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Non-ASTRO\Emergency PTT ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Non-ASTRO\Emergency PTT ID'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO\ASTRO Rx Unmute Rule');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO\ASTRO Rx Unmute Rule'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Emergency Revert\Revert Channel');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Emergency Revert\Revert Channel'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert Talkgroup');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Revert Talkgroup\Revert Talkgroup'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert TG Secure / Clear Strapping');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Revert Talkgroup\Revert TG Secure / Clear Strapping'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Revert Talkgroup\Revert TG Key Select');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Revert Talkgroup\Revert TG Key Select'] );
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Call Alert\Call Alert Rx / Tx'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','MDC\Auto Select Call Transmit');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['MDC\Auto Select Call Transmit'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Call Alert\In-Call User Alert Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Call Alert\In-Call User Alert Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Selective Call\Unmute Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Selective Call\Unmute Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','MDC\Unlimited Calling');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['MDC\Unlimited Calling'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','MDC\RTT Button Access');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['MDC\RTT Button Access'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Non-ASTRO Call Hot List');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Non-ASTRO Call Hot List'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Node->appendChild($Section);
        
            // ASTRO Call options section
            $Section = $xml->createElement( "Section" );
            $Section_attr = new DOMAttr('Name','ASTRO Call');
            $Section->setAttributeNode($Section_attr);
            $Section_attr = new DOMAttr('id','10141');
            $Section->setAttributeNode($Section_attr);
            // now the fields in the section - note this overlaps with the non-astro section for the key.  It's been prefixed with ASTRO
            $Field_attr = new DOMAttr('Name','Call Alert\Call Alert Rx / Tx');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO Call Alert\Call Alert Rx / Tx'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            //note this overlaps with the non-astro section for the key.  It's been prefixed with ASTRO
            $Field_attr = new DOMAttr('Name','Selective Call\Selective Call Rx / Tx');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO Selective Call\Selective Call Rx / Tx'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO Call Hot List');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO Call Hot List'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Selective Call\Auto Selective Call Transmit');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Selective Call\Auto Selective Call Transmit'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            //note this overlaps with the non-astro section for the key.  It's been prefixed with ASTRO
            $Field_attr = new DOMAttr('Name','Call Alert\In-Call User Alert Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO Call Alert\In-Call User Alert Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','ASTRO Unlimited Calling');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO Unlimited Calling'] );
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Talkgroup'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Talkgroup List');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Talkgroup List'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Selection Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Selection Type'] );
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\Code Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 1/ PTT\Code Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Access Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Access Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Repeater Access Button 2\Code Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 2\Code Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Singletone List Selection');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Singletone List Selection'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\MDC Repeater ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 1/ PTT\MDC Repeater ID'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Repeater Access Button 1/ PTT\Singletone Alias Selection');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 1/ PTT\Singletone Alias Selection'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Repeater Access Button 2\Singletone Alias Selection');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 2\Singletone Alias Selection'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Field_attr = new DOMAttr('Name','Repeater Access Button 2\MDC Repeater ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Repeater Access Button 2\MDC Repeater ID'] );
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
            $Field = $xml->createElement( "Disabled", $personality[$PersName]['ConvPers']['Smart PTT\Smart PTT Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan\Scan List Selection');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Scan\Scan List Selection'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Tactical Rekey Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Tactical Rekey Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan\Automatic Scan');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Scan\Automatic Scan'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Hot Keypad');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Hot Keypad'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Smart PTT\Quick Key Override');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Smart PTT\Quick Key Override'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan\Mixed Vote Scan Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Scan\Mixed Vote Scan Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan\Mixed Vote Scan Tx Steering');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Scan\Mixed Vote Scan Tx Steering'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Tactical Public Safety UI Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Tactical Public Safety UI Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','End Tx on Voice Absence');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['End Tx on Voice Absence'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Incident Signaling Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Incident Signaling Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Personnel Accountability\Personnel Accountability Registration');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Personnel Accountability\Personnel Accountability Registration'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Personnel Accountability\Tx Voice Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Personnel Accountability\Tx Voice Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','RF Modem');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['RF Modem'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','OTA Radio Alias Type');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['OTA Radio Alias Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Conventional RSSI Display');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Conventional RSSI Display'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','RSSI Display Timer (sec)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['RSSI Display Timer (sec)'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','OTA Radio Alias Update Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['OTA Radio Alias Update Enable'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','DTMF Mic Enable');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['DTMF Mic Enable'] );
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Phone Operation'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','DTMF Timing Select');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['DTMF Timing Select'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Auto Access Code Select');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Auto Access Code Select'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            
            $Node->appendChild($Section);
        
        
        
        /*
         // One Touch options section - not implimented
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Secure Voice / Signal Type'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Packet Data\Secure / Clear Strapping');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Packet Data\Secure / Clear Strapping'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','OTAR Tx');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['OTAR Tx'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Key ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Key ID'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Voice\Ignore Rx Clear Voice');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Voice\Ignore Rx Clear Voice'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Voice\Secure / Clear Strapping');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Voice\Secure / Clear Strapping'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','XL Transmit');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['XL Transmit'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Proper Code Detect');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Proper Code Detect'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan Holdoff Strapping');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Scan Holdoff Strapping'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Voice\Key Strapping');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Voice\Key Strapping'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Scan Select');
        
        echo "PERS: ", $PersName , " SELECT " , htmlspecialchars($personality[$PersName]['ConvPers']['Scan Select']);
        echo "\n";
            $Field = $xml->createElement( "Field", htmlspecialchars($personality[$PersName]['ConvPers']['Scan Select']) );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','ASTRO OTAR Profile Index');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['ASTRO OTAR Profile Index'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','DES-XL Tx Default');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['DES-XL Tx Default'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Voice\Key Select');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Voice\Key Select'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Packet Data\Key Select');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Packet Data\Key Select'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Echo Mute Time (ms)');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Echo Mute Time (ms)'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Packet Data\Ignore Rx Clear Packet Data');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Packet Data\Ignore Rx Clear Packet Data'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','XL Delay Following Key ID');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['XL Delay Following Key ID'] );
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
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Analog Flat Audio'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Advanced RF AGC');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Advanced RF AGC'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            $Field_attr = new DOMAttr('Name','Disable High Pass Filter');
            $Field = $xml->createElement( "Field", $personality[$PersName]['ConvPers']['Disable High Pass Filter'] );
            $Field->setAttributeNode($Field_attr);
            $Section->appendChild($Field);
            
            $Node->appendChild($Section);
        $recsec_node->appendChild($Node);
    };
    $root_node->appendChild($recsec_node);
    //var_dump ($version);
    $root_import->appendChild($version);
    $root_import->appendChild($language);
    $root_import->appendChild($root_node);
    $xml->appendChild($root_import);
    
    $xml->formatOutput = TRUE;
    
    print $xml->saveXML();
    
    /*
        $outputarray = array_merge ($ConvDefaults, (array_combine($ConvHeader,$rows[7])));
        print_R($outputarray);
        print_R(array_merge ($ConvDefaults, (array_combine($ConvHeader,$rows[7]))));
       
           };
    */
    //var_dump ($frequencies);
 //   var_dump ($personality);


?>
