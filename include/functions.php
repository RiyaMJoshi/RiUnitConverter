<?php

// Unit Values for 'Length & Distance and Area' correlated with Metre values.
const LENGTH_TO_METER = array(
  "kilometer" => 1000,
  "metre" => 1,
  "centimetre" => 0.01,
  "millimetre" => 0.001,
  "micrometre" => 0.000001,
  "nanometre" => 0.000000001,
  "mile" => 1609.344,
  "yard" => 0.9144,
  "foot" => 0.3048,
  "inch" => 0.0254,
  "nautical_mile" => 1852,
   
  "hectare" => 100,   
  "acre" => 63.614907234075  
);


// Unit Values for 'Volume & Capacity' correlate with Letre values.
const VOLUME_TO_LITRE = array(
  "cubic_kilometer" => 1e+12,
  "cubic_metre" => 1000,
  "cubic_centimetre" => 0.001,
  "cubic_mile" => 4.168e+12,
  "cubic_yard" => 764.555,
  "cubic_foot" => 28.3168,
  "cubic_inch" => 0.0163871,
  "litre" => 1,
  "millilitre" => 0.001,
  "liquid_gallon_(us)" => 3.78541,
  "liquid_quart_(us)" => 0.946353,
  "liquid_pint_(us)" => 0.473176,
  "legal_cup_(us)" => 0.24,
  "fluid_ounce_(us)" => 0.0295735,
  "tablespoon_(us)" => 0.0147868,
  "teaspoon_(us)" => 0.00492892,
  "liquid_gallon_(uk)" => 4.54609,
  "liquid_quart_(uk)" => 1.13652,
  "liquid_pint_(uk)" => 0.568261,
  "legal_cup_(uk)" => 0.284131,
  "fluid_ounce_(uk)" => 0.0284131,
  "tablespoon_(uk)" => 0.0177582,
  "teaspoon_(uk)" => 0.00591939
);


// Unit Values for 'Mass & Weight' correlated with Kilogram values.
const MASS_TO_KILOGRAM = array(
  "tonne" =>	1000,
  "kilogram" =>	1,
  "gram" =>	0.001,
  "milligram" =>	0.000001,
  "microgram" =>	0.00000001,
  "imperial_ton" =>	1016.05,
  "us_ton" =>	907.185,
  "stone" =>	6.35029,
  "pound" =>	0.453592,
  "ounce" =>	0.0283495  
);


// Unit Values for 'Speed' correlated with Kmph values.
const SPEED_TO_KMPH = array(
  "miles_per_hour" => 1.60934,
  "foot_per_second" => 1.09728,
  "metre_per_second" => 3.6,
  "kilometre_per_hour" => 1,
  "knot" => 1.852
);


/* Unit Values for 'Temperature' are included and calculated in 'temperature.php' file itself using JavaScript. */


// Replace Space by "_" inside Units
function optionize($string) {
    return str_replace(' ', '_', strtolower($string));
  }

// Convert Float to String
function float_to_string($float, $precision=10) {
    $float = (float) $float;
    $string = number_format($float, $precision, '.', '');
    $string = rtrim($string, '0');
    $string = rtrim($string, '.');
    return $string;
  }

// Length & Distance
function convert_to_meters($value, $from_unit) {
    if(array_key_exists($from_unit, LENGTH_TO_METER)) {
      return $value * LENGTH_TO_METER[$from_unit];
    } else {
      return "Unsupported unit.";
    }
  }
    
function convert_from_meters($value, $to_unit) {
    if(array_key_exists($to_unit, LENGTH_TO_METER)) {
      return $value / LENGTH_TO_METER[$to_unit];
    } else {
      return "Unsupported unit.";
    }
  }

function convert_length($value, $from_unit, $to_unit) {
    $meter_value = convert_to_meters($value, $from_unit);
    $new_value = convert_from_meters($meter_value, $to_unit);
    return $new_value;
    // $new_value = sprintf('%E', convert_from_meters($meter_value, $to_unit));
    // return $new_value;
  }


// Area
function convert_to_square_meters($value, $from_unit){
    $from_unit = str_replace('square_', '', $from_unit);
    if(array_key_exists($from_unit, LENGTH_TO_METER)) {
        return $value * pow(LENGTH_TO_METER[$from_unit], 2);
    } else {
      return "Unsupported unit.";
    }
}

function convert_from_square_meters($value, $to_unit) {
    $to_unit = str_replace('square_', '', $to_unit);
    if(array_key_exists($to_unit, LENGTH_TO_METER)) {
      return $value / pow(LENGTH_TO_METER[$to_unit], 2);
    } else {
      return "Unsupported unit.";
    }
}

function convert_area($value, $from_unit, $to_unit) {
    $meter_value = convert_to_square_meters($value, $from_unit);
    $new_value = convert_from_square_meters($meter_value, $to_unit);
    return $new_value;
}


// Volume & Capacity
function convert_to_litres($value, $from_unit) {
  if(array_key_exists($from_unit, VOLUME_TO_LITRE)) {
    return $value * VOLUME_TO_LITRE[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_litres($value, $to_unit) {
  if(array_key_exists($to_unit, VOLUME_TO_LITRE)) {
    return $value / VOLUME_TO_LITRE[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_volume($value, $from_unit, $to_unit) {
  $meter_value = convert_to_litres($value, $from_unit);
  $new_value = convert_from_litres($meter_value, $to_unit);
  return $new_value;
}


// Speed
function convert_to_kmph($value, $from_unit) {
  if(array_key_exists($from_unit, SPEED_TO_KMPH)) {
    return $value * SPEED_TO_KMPH[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_kmph($value, $to_unit) {
  if(array_key_exists($to_unit, SPEED_TO_KMPH)) {
    return $value / SPEED_TO_KMPH[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_speed($value, $from_unit, $to_unit) {
  $meter_value = convert_to_kmph($value, $from_unit);
  $new_value = convert_from_kmph($meter_value, $to_unit);
  return $new_value;
}

// Mass & Weight
function convert_to_kilogram($value, $from_unit) {
  if(array_key_exists($from_unit, MASS_TO_KILOGRAM)) {
    return $value * MASS_TO_KILOGRAM[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_kilogram($value, $to_unit) {
  if(array_key_exists($to_unit, MASS_TO_KILOGRAM)) {
    return $value / MASS_TO_KILOGRAM[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_mass($value, $from_unit, $to_unit) {
  $meter_value = convert_to_kilogram($value, $from_unit);
  $new_value = convert_from_kilogram($meter_value, $to_unit);
  return $new_value;
}

?>