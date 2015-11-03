<?PHP
    $countryorigin = $_POST['countryorigin'];
    $carrier = $_POST['carrier'];
    $iccid = $_POST['iccid'];
	if ($countryorigin != "United States") {
		print ($countryorigin);
	} else {
		print ($carrier);
	}
?>

<html>
<body>

Country Origin: <?php echo $_POST[$countryorigin]; ?><br>
Carrier: <?php echo $_POST[$carrier]; ?>
ICCID: <?php echo $_POST[$iccid]; ?>
IMSI:
</body>
</html>