<?php
include('inc/controller_landing_page.php');

$requestid= $_GET['requestid'];
$studentid= $_GET['requestid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="uploadImage/Logo/logo.png">

</head>
<body>
<div class="login-container">
        <h2><a href="index.php"><img src="uploadImage/Logo/logo.png" alt="logo" width="151" height="68" border="0" longdesc="index.php"></a></h2>
        <h2>Start your Donation</h2>
        <form action="login.php" method="post">
            <label for="username">Fullname:</label>
            <input type="text" id="txtfullname" name="txtfullname" required>

            <label for="password">Email:</label>
            <input type="email" id="txtemail" name="txtemail" required>
            
            <label for="password">Amount:</label>
            <input type="number" id="txtamount" name="txtamount" required>

            <button type="submit" name="btnpay" onClick="payPageWithPaystack()">Pay</button>
        </form>
</div>
<input type="hidden" id="hidpublickey" name="hidpublickey" value="<?php echo $publickey; ?>"> </p>
<input type="hidden" id="hidrequestid" name="hidrequestid" value="<?php echo $requestid; ?>"> </p>


<script src="https://js.paystack.co/v1/inline.js"></script>
				  <script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: document.getElementById("hidpublickey").value, // Replace with your public key
    email: document.getElementById("txtemail").value,
    amount: document.getElementById("txtamount").value * 100,
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars

    ref: Math.floor((Math.random() * 10000000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location="http://localhost/crowdfunding/donate.php?transaction=Cancelled";
      alert('Transaction Cancelled.');
    },
       callback: function(response){
      let message = 'Donation complete! Reference: ' + response.reference + ' . Kindly save the reference ID for future use.';
    alert(message);
    window.location="http://localhost/crowdfunding/verify.php?amount="+encodeURIComponent(document.getElementById("txtamount").value)+"&email=" +encodeURIComponent(document.getElementById("txtemail").value)+"&fullname=" +encodeURIComponent(document.getElementById("txtfullname").value)+"&requestid=" +encodeURIComponent(document.getElementById("requestid").value)+"&reference=" + response.reference    }
  });

  handler.openIframe();
}
    </script> 
<p align="center"><strong><?php include('inc/footer.php'); ?></strong></p>

<link rel="stylesheet" href="popup_style.css">
<p>&nbsp;</p>
<p>
  <?php if(!empty($_SESSION['success'])) {  ?>
</p>
<p>&nbsp; </p>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong>
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong>
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>
</html>