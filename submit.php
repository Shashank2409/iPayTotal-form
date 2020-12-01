<html>
<head>
<script>
	/*$('.button').click(function() {
	  $.ajax({
		type: "POST",
		url: "some.php",
		data: { name: "John" }
	  }).done(function( msg ) {
		alert( "Data Saved: " + msg );
	  });
	});*/
</script>

</head>
<body>

<?php
$url = "https://ipaytotal.solutions/api/hosted-pay/payment-request";
$key = "Yaha_dalna_api_key"; // change this value with real api_key
// Fill with real card holders info
// all these parameters are required
$data = [
    'api_key' => $key,
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'address' => $_POST['address'],
    'country' => $_POST['country'],
    'state' => $_POST['state'], // if your country US then use only 2 letter state code.
    'city' => $_POST['city'],
    'zip' => $_POST['zip'],
    'ip_address' => $_SERVER['REMOTE_ADDR'], // client device ip_address
    'email' => $_POST['email'],
    'phone_no' => $_POST['phone_no'],
    'amount' => $_POST['amount'],
    'currency' => $_POST['currency'],
    'sulte_apt_no' => 'ORDER'.time(), // transaction ref from merhant side
    'response_url' => 'http://localhost:8000/response.php', // redirect to here if transaction success or fail
];
echo gettype($data) . "<br>";
//echo $data;
echo $data['first_name'];
foreach ($data as $value) {
    echo $value;
	echo "\n";
}
?>
<?php


//function abc($name){
	//echo "Yessss";
//}

?>
<h2>
HI
</h2>
<form method="POST" action="final_submit.php">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<input type="hidden" class="form-control" id="first_name" name="first_name" value= "<?php echo htmlspecialchars($data['first_name']); ?>" />
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="last_name" name="last_name" value= "<?php echo htmlspecialchars($data['last_name']); ?>" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="address" name="address" value= "<?php echo htmlspecialchars($data['address']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="country" name="country" value= "<?php echo htmlspecialchars($data['country']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="state" name="state" value= "<?php echo htmlspecialchars($data['state']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="city" name="city" value= "<?php echo htmlspecialchars($data['city']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="zip" name="zip" value= "<?php echo htmlspecialchars($data['zip']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="email" name="email" value= "<?php echo htmlspecialchars($data['email']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="phone_no" name="phone_no" value= "<?php echo htmlspecialchars($data['phone_no']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="currency" name="currency" value= "<?php echo htmlspecialchars($data['currency']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="hidden" class="form-control" id="amount" name="amount" value= "<?php echo htmlspecialchars($data['amount']); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="amount">Card No</label>
					<input type="number" class="form-control" id="car_no" name="card_no" placeholder="Card No.">
				</div>
			</div>
		</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
