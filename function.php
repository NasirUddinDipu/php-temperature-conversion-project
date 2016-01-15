<?php

function fahrenheit_to_celsius($given_value){
    $celsius = ($given_value - 32) * 5/9;
    return $celsius;
}
function celsius_to_fahrenheit($given_value){
    $fahrenheit = ($given_value * 9/5) + 32;
    return $fahrenheit;
}
function kelvin_to_fahrenheit($given_value){
    $fahrenheit = ($given_value * 9/5) - 459.67;
    return $fahrenheit;
}
function fahrenheit_to_kelvin($given_value){
    $kelvin =  5/9 * ($given_value + 459.67) ;
    return $kelvin;
}
function celsius_to_kelvin($given_value){
    $kelvin = $given_value + 273.15;
    return $kelvin;
}
function kelvin_to_celsius($given_value){
    $celsius = $given_value - 273.15;
    return $celsius;
}

function form_processing() {
    global $first_selected_name;
    global $second_selected_name;
    global $given_value;
    if (isset($_POST['btn'])) {
    $first_selected_name = $_POST['first_selected_name'];
    $second_selected_name = $_POST['second_selected_name'];
    $given_value = $_POST['given_value'];

    if (($first_selected_name == "Fahrenheit") && ($second_selected_name == "Celsius")) {
        $celsious = fahrenheit_to_celsius($given_value);
        return "Fahrenheit " . $given_value . " = " . $celsious . " Celsius";
    } elseif (($first_selected_name == "Celsius") && ($second_selected_name == "Fahrenheit")) {
        $fahrenheit = celsius_to_fahrenheit($given_value);
        return "Celsius " . $given_value . " = " . $fahrenheit . " Fahrenheit";
    } elseif (($first_selected_name == "Fahrenheit") && ($second_selected_name == "Kelvin")) {
        $kelvin = fahrenheit_to_kelvin($given_value);
        return "Fahrenheit " . $given_value . " = " . $kelvin . " Kelvin";
    } elseif (($first_selected_name == "Kelvin") && ($second_selected_name == "Fahrenheit")) {
        $fahrenheit = kelvin_to_fahrenheit($given_value);
        return "Kelvin " . $given_value . " = " . $fahrenheit . " Fahrenheit";
    } elseif (($first_selected_name == "Celsius") && ($second_selected_name == "Kelvin")) {
        $kelvin = celsius_to_kelvin($given_value);
        return "Celsius " . $given_value . " = " . $kelvin . " Kelvin";
    } elseif (($first_selected_name == "Kelvin") && ($second_selected_name == "Celsius")) {
        $celsius = kelvin_to_celsius($given_value);
        return "Kelvin " . $given_value . " = " . $celsius . " Celsius";
    } elseif (($first_selected_name == "Fahrenheit") && ($second_selected_name == "Fahrenheit")) {
        return "Please Select Something to calculate";
    } elseif ($first_selected_name == "Celsius" && $second_selected_name == "Celsius") {
        return "Please Select Something to calculate";
    } elseif (($first_selected_name == "Kelvin") && ($second_selected_name == "Kelvin")) {
        return "Please Select Something to calculate";
    }
} else {
    return "Please Select Something to calculate";
}
}
