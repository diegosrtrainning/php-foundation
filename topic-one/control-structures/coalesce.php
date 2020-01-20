<?php
    $data = ['field_one' => 'I want to became ', 'field_three' => 'PHP certified!'];
    $data['field_two'] = $data['field_two'] ?? null;
    echo $data['field_one'], $data['field_two'],$data['field_three'];

    echo "\n\n";
    
    // Notice: Undefined index: field_five in 
    $data = ['field_four' => 'I want to became ', 'field_six' => 'PHP certified!'];    
    echo $data['field_four'], $data['field_five'],$data['field_six'];

?>