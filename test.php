<html>
	<h4>Convert Roman to Numbers</h4>
</html>
<?php
$symbols = array(
    'M' => 1000,
    'D' => 500,
    'C' => 100,
    'L' => 50,
    'X' => 10,
    'V' => 5,
    'I' => 1,
);

$roman = 'MDLV';
$result = 0;

foreach ($symbols as $key => $value) {
    while (strpos($roman, $key) === 0) {
        $result += $value;
        $roman = substr($roman, strlen($key));
    }
}
echo $result;
?>