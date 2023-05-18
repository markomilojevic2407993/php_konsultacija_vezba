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

echo $keyPrvog."<br>".$keyDrugog."<br>".$keyZadnjeg;

$valuePrvog=$korisnici[$keyPrvog];
$valueZadnjeg=$korisnici[$keyZadnjeg];


echo "<br>".$valuePrvog."<br>".$valueZadnjeg."<hr>";

$zbir=$valuePrvog+$valueZadnjeg;
echo $zbir/2;





?>