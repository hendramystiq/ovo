<?php 
$account = "081259169690"; // nomor ovo
$access = "2b7d02d96f7dfbd0fa5abbcb8cc772971475044c"; // access ovo
$amount = 1; // jumlah tf (bisa rp1)
$transfer_to = "088228091504"; // nomor ovo tumbal

$max=100; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/transfer.php?phone_number=$account&amount=$amount&access_code=$access&to_account=$transfer_to"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
