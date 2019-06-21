<?php

if($_POST){
    $lrn = isset($_POST['formData']['lrn']) ? trim($_POST['formData']['lrn']) : "";
    $students_name = isset($_POST['formData']['students_name']) ? trim($_POST['formData']['students_name']) : "";
    $students_grade = isset($_POST['formData']['students_grade']) ? trim($_POST['formData']['students_grade']) : "";
    $students_grade_options = isset($_POST['formData']['students_grade_options']) ? trim($_POST['formData']['students_grade_options']) : "";
    $students_type = isset($_POST['formData']['students_type']) ? trim($_POST['formData']['students_type']) : "";
    $students_strand = isset($_POST['formData']['students_strand']) ? trim($_POST['formData']['students_strand']) : "";
    $guardians_name = isset($_POST['formData']['guardians_name']) ? trim($_POST['formData']['guardians_name']) : "";
    $guardians_address = isset($_POST['formData']['guardians_address']) ? trim($_POST['formData']['guardians_address']) : "";
    $guardians_number = isset($_POST['formData']['guardians_number']) ? trim($_POST['formData']['guardians_number']) : "";

    $lrn_settings = isset($_POST['settings']['lrn']) ? $_POST['settings']['lrn'] : array();
    $students_name_settings = isset($_POST['settings']['students_name']) ? $_POST['settings']['students_name'] : array();
    $students_grade_settings = isset($_POST['settings']['students_grade']) ? $_POST['settings']['students_grade'] : array();
    $students_grade_options_settings = isset($_POST['settings']['students_grade_options']) ? $_POST['settings']['students_grade_options'] : array();
    $students_type_settings = isset($_POST['settings']['students_type']) ? $_POST['settings']['students_type'] : array();
    $students_strand_settings = isset($_POST['settings']['students_strand']) ? $_POST['settings']['students_strand'] : array();
    $guardians_name_settings = isset($_POST['settings']['guardians_name']) ? $_POST['settings']['guardians_name'] : array();
    $guardians_address_settings = isset($_POST['settings']['guardians_address']) ? $_POST['settings']['guardians_address'] : array();
    $guardians_number_settings = isset($_POST['settings']['guardians_number']) ? $_POST['settings']['guardians_number'] : array();
    $guardians_number_settings = isset($_POST['settings']['guardians_number']) ? $_POST['settings']['guardians_number'] : array();
    
    
    $lrn_settings['value'] = $lrn;
    $students_name_settings['value'] = $students_name;
    $students_grade_settings['value'] = $students_grade;
    $students_grade_options_settings['value'] = $students_grade_options;
    $students_type_settings['value'] = $students_type;
    $students_strand_settings['value'] = $students_strand;
    $guardians_name_settings['value'] = $guardians_name;
    $guardians_address_settings['value'] = $guardians_address;
    $guardians_number_settings['value'] = $guardians_number;



    $students_data = [
        'lrn' => $lrn_settings,
        'students_name' => $students_name_settings,
        'students_grade' => $students_grade_settings,
        'students_grade_options' => $students_grade_options_settings,
        'students_type' => $students_type_settings,
        'students_strand' => $students_strand_settings,
        'guardians_name' => $guardians_name_settings,
        'guardians_address' => $guardians_address_settings,
        'guardians_number' => $guardians_number_settings,
    ];

    $fp = fopen("students_data/$lrn.json", 'w');
    fwrite($fp, json_encode($students_data));
    fclose($fp);
    echo json_encode($students_data);
}