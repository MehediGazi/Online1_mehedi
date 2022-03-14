<?php

$id = $_GET["id"];
	$email = $_GET["email"];

	$date = $_GET["date"];
    $from = $_GET["from"];
    $to = $_GET["to"];
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