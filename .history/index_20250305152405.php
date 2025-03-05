
<?php
include('inc/controller_landing_page.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowdfunding Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="uploadImage/Logo/logo.png">

</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        Crowdfunding
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                              
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
</nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Crowdfunding Platform</h1>
                    <p class="lead">Join our community and raise funds for your project, cause, or venture.</p>
                    <button class="btn btn-primary btn-lg" onClick="window.location.href='student/request.php'">Start a Campaign</button>
                    
                </div>
                <div class="col-md-6">
                    <img src="uploadImage/Logo/logo.png" alt="Hero Image" width="127" height="80" class="img-fluid">                </div>
            </div>
        </div>
    </section>

    <!-- Campaigns Section -->
    <section class="campaigns">
        <div class="container">
            <h2 class="mb-4">Featured Campaigns</h2>
								
            <div class="row">
            <?php
                            $sql = "SELECT students.*,requests.photo as Campaign_image,requests.* FROM students INNER JOIN requests ON students.track_number = requests.student_id order by requests.id asc";
                               // $sql = "SELECT * FROM users where role !='super Admin' order by id asc";

										 $result = $conn->query($sql);
                                     	 while($row = $result->fetch_assoc()) {

										  ?>
              <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $row['Campaign_image']; ?>" alt="No Campaign Image" class="card-img-top" height="110" width="60">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-text">Raised: $3000 / Goal: N<?php echo number_format((float) $row['amount'] ,2); ?></p>
                            <button class="btn btn-success btn-lg" onClick="payPageWithPaystack()">Donate</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
			
        </div>
    </section>
    <input type="hidden" id="hidpublickey" name="hidpublickey" value="<?php echo $publickey; ?>"> </p>
    <input type="hidden" id="hidemail" name="hidemail" value="<?php echo $_SESSION['email']; ?>"> </p>
    <input type="hidden" id="hidtotal" name="hidtotal" value="<?php echo $total; ?>"> </p>
    <input type="hidden" id="hidplace" name="hidplace" value="<?php echo $placeid; ?>"> </p>
    <input type="hidden" id="hidstart" name="hidstart" value="<?php echo $start; ?>"> </p>
    <input type="hidden" id="hidend" name="hidend" value="<?php echo $end; ?>"> </p>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
				  <script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: document.getElementById("hidpublickey").value, // Replace with your public key
    email: document.getElementById("hidemail").value,
    amount: document.getElementById("hidtotal").value * 100,
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars

    ref: Math.floor((Math.random() * 10000000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location="http://localhost/tourism_booking_system/home/payment.php?transaction=Cancelled";
      alert('Transaction Cancelled.');
    },
       callback: function(response){
      let message = 'Booking Payment complete! Reference: ' + response.reference + ' . Kindly save the reference ID for future use.';
    alert(message);
    window.location="http://localhost/tourism_booking_system/home/verify.php?amount="+encodeURIComponent(document.getElementById("hidtotal").value)+"&email=" +encodeURIComponent(document.getElementById("hidemail").value)+"&place=" +encodeURIComponent(document.getElementById("hidplace").value)+"&start=" +encodeURIComponent(document.getElementById("hidstart").value)+"&end=" +encodeURIComponent(document.getElementById("hidend").value)+"&reference=" + response.reference    }
  });

  handler.openIframe();
}
    </script> 

    <!-- Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <h2 class="mb-4">Start Your Campaign Today!</h2>
            <p class="lead">Join our community and raise funds for your project, cause, or venture.</p>
            <button class="btn btn-primary btn-lg">Start a Campaign</button>
        </div>
    </section>

    <p>
      <!-- Footer Section -->
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>
      <?php  include('inc/footer.php');?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</p>
</body>
</html>