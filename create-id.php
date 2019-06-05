<?php

if($_POST){
    $lrn = isset($_POST['formData']['lrn']) ? $_POST['formData']['lrn'] : "";
    $students_name = isset($_POST['formData']['students_name']) ? $_POST['formData']['students_name'] : "";
    $students_grade = isset($_POST['formData']['students_grade']) ? $_POST['formData']['students_grade'] : "";
    $guardians_name = isset($_POST['formData']['guardians_name']) ? $_POST['formData']['guardians_name'] : "";
    $guardians_address = isset($_POST['formData']['guardians_address']) ? $_POST['formData']['guardians_address'] : "";
    $guardians_number = isset($_POST['formData']['guardians_number']) ? $_POST['formData']['guardians_number'] : "";

    $lrn_settings = isset($_POST['settings']['lrn']) ? $_POST['settings']['lrn'] : array();
    $students_name_settings = isset($_POST['settings']['students_name']) ? $_POST['settings']['students_name'] : array();
    $students_grade_settings = isset($_POST['settings']['students_grade']) ? $_POST['settings']['students_grade'] : array();
    $guardians_name_settings = isset($_POST['settings']['guardians_name']) ? $_POST['settings']['guardians_name'] : array();
    $guardians_address_settings = isset($_POST['settings']['guardians_address']) ? $_POST['settings']['guardians_address'] : array();
    $guardians_number_settings = isset($_POST['settings']['guardians_number']) ? $_POST['settings']['guardians_number'] : array();
    
    
    $lrn_settings['value'] = $lrn;
    $students_name_settings['value'] = $students_name;
    $students_grade_settings['value'] = $students_grade;
    $guardians_name_settings['value'] = $guardians_name;
    $guardians_address_settings['value'] = $guardians_address;
    $guardians_number_settings['value'] = $guardians_number;



    $students_data = [
        'lrn' => $lrn_settings,
        'students_name' => $students_name_settings,
        'students_grade' => $students_grade_settings,
        'guardians_name' => $guardians_name_settings,
        'guardians_address' => $guardians_address_settings,
        'guardians_number' => $guardians_number_settings,
    ];

    $fp = fopen("students_data/$lrn.json", 'w');
    fwrite($fp, json_encode($students_data));
    fclose($fp);
    echo json_encode($students_data);
}