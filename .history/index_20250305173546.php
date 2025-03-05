
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
                           
                           $sql = "
                           SELECT 
                               students.*, 
                               requests.photo as Campaign_image, 
                               requests.*, 
                               (
                                   SELECT SUM(amount) 
                                   FROM donations 
                                   WHERE donations.request_id = requests.id
                               ) as total_amount_raised
                           FROM students 
                           INNER JOIN requests ON students.track_number = requests.student_id 
                           ORDER BY requests.id ASC
                       ";
                       
                       $result = $conn->query($sql);
                       while($row = $result->fetch_assoc()) {
                           // Access the total amount raised using $row['total_amount_raised']
                       

										  ?>
              <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $row['Campaign_image']; ?>" alt="No Campaign Image" class="card-img-top" height="110" width="60">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-text">Raised: <?php ?> / Goal: N<?php echo number_format((float) $row['amount'] ,2); ?></p>
<button class="btn btn-success btn-lg" onClick="window.location.href='donate.php?requestid=<?php echo $row['requestid'] ?>&studentid=<?php echo $row['studentid'] ?>'">Donate</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
			
        </div>
    </section>

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