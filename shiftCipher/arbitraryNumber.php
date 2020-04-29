<?php 
// None built in PHP function for shifting by an arbitrary number.
// Where a message is shift by three
// $rot is set to default value 13
function str_rot($string, $rot=13){
    $letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';

    // "% 26" allows numbers larger than 26
    // doubled letters = double rotated

    $dbl_rot = ((int) $rot % 26) * 2;
    if($dbl_rot == 0) { return $string; }

    // build shifted letter map ($dbl_rot to end + start to $dbl_rot)

    $map = substr($letters, $dbl_rot) . substr($letters, 0, $dbl_rot);
    // strtr does the substitutions between $letters and $map
    return strtr($string, $letters, $map);
}
echo str_rot("Experience is the teacher of all things.", 3);
?>