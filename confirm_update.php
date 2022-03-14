<?php

$id = $_GET["id"];
	$email = $_GET["EMAIL"];

	$date = $_GET["DATE"];
    $from = $_GET["From"];
    $to = $_GET["To"];
    $stat = 'No'

?>



<h1>Confirm Ticket</h1>



<form method=get action=confirmt.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	f0: <input type=text name=Email value='<?php echo $email; ?>'>

	<p>

	f1: <input type=text name=date value='<?php echo $date; ?>'>

	<p>
    f1: <input type=text name=from value='<?php echo $from; ?>'>

<p>
f1: <input type=text name=to value='<?php echo $to; ?>'>

<p>

	<input type=submit value=Update>

</form>