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
    print_R($personality);
    
    
    /*
        $outputarray = array_merge ($ConvDefaults, (array_combine($ConvHeader,$rows[7])));
        print_R($outputarray);
        print_R(array_merge ($ConvDefaults, (array_combine($ConvHeader,$rows[7]))));
       
        
        // this works to iterate through the array
        
        (array_combine($ConvHeader,$rows[7])
         
         
         print_R test47($ConvDefaults, (array_combine($ConvHeader,$rows[7])));
                print_R ($out);
    
        $frequencies = array_combine($ConvHeader, $row);
        $pers = $frequencies["Conventional Personality Name"];
        $freqname = $frequencies["Frequency Name"];
        $type = $frequencies["Type"];
        $personality[$pers][$type][$freqname] = $frequencies ;
        //var_dump($pers);
        //store_freq(array_combine($header, $row));
    };
    */
    //var_dump ($frequencies);
 //   var_dump ($personality);
    
    // now we have them in the $frequency array.  We need to skip the first line
    // and then loop through the array and set all the vars per the array in the file

?>
