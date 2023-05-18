<?php 
$korisnici = [
    "toma" => 30,
    "marko" => 29,
    "momcilo" => 26
];

$key=array_keys($korisnici);
$keyPrvog=$key[0];
$keyDrugog=$key[1];
$keyZadnjeg=end($key);


$value1=$korisnici[$key[0]];
$valueEnd=$korisnici[end($key)];

echo $value1."<br>".$valueEnd;
$suma=$value1+$valueEnd;
echo "<hr>".$suma/2;
