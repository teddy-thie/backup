<?php
require "boot.php";


if (empty($_POST['payment_method_nonce'])) {
    header('location: checkout.php');
}

$result = Braintree_Transaction::sale([
  'amount' => $_POST['amount'],
  'paymentMethodNonce' => $_POST['payment_method_nonce'],
  'customer' => [
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
  ],
  'shipping' => [
    'streetAddress' => $_POST['saddress'],
    'extendedAddress' => $_POST['iaddress'],
    'locality' => $_POST['town'],
    'region' => $_POST['state'],
    'postalCode' => $_POST['zip'],
  ],
  'options' => [
    'submitForSettlement' => true
  ]
]);

if ($result->success===true) {
  // code...
}else {
  print_r($result->errors);
  die();
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Report</title>
  </head>
  <body>
    <form class="payment-form">

      <label for="">Transaction ID</label>
      <input type="text" disabled="disabled" name="id" value="<?php echo $result->transaction->id; ?>">

              <label for="firstName" class="heading">First Name</label><br>
              <input type="text" disabled="disabled" name="firstName" id="firstName" value="<?php echo $result->transaction->customer['firstName'] ;?>"><br><br>

              <label for="lastName" class="heading">Last Name</label><br>
              <input type="text" disabled="disabled" name="lastName" id="lastName" value="<?php echo $result->transaction->customer['lastName'] ;?>"><br><br>


      <label for="">Address</label>
      <input type="text" disabled="disabled" name="saddress" value="<?php echo $result->transaction->shipping['streetAddress']; ?>">
      <input type="text" disabled="disabled" name="iaddress" value="<?php echo $result->transaction->shipping['extendedAddress']; ?>">
      <label for="">Town/City</label>
      <input type="text" disabled="disabled" name="town" value="<?php echo $result->transaction->shipping['locality']; ?>" >
      <label for="">State/County</label>
      <input type="text" disabled="disabled" name="state" value="<?php echo $result->transaction->shipping['region']; ?>">
      <label for="">Postcode/Zip</label>
      <input type="text" disabled="disabled" name="zip" value="<?php echo $result->transaction->shipping['postalCode']; ?>" >

      <label for="">Price</label>
      <input type="number" disabled="disabled" name="price" value="<?php echo $result->transaction->amount; ?>">


      <label for="">Status</label>
      <input type="text" disabled="disabled" name="status" value="Successful" required="yes">

      <div id="dropin-container"></div>

      <input type='submit' value='Pay'/>
    </form>

  </body>
</html>
