<?php 
 
  
    include 'core/init.php' ;
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
?>

<html>
	<head>
		<title>Twitter_team1</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">

		<link rel="shortcut icon" type="image/png" href="assets/images/twitter.svg"> 
	</head>
<body>
<main class="twt-main">
            <section class="twt-login">
                <?php include 'includes/login.php';  ?>
                    <div class="slow-login">
                        <img class="login-bird" src="<?php echo BASE_URL . "/assets/images/twitter-logo.png"; ?>" alt="bird">
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">Twitter made by team 1</span>
                        <button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            Sign Up</button>
                            
                             
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up For Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
         <?php  include 'includes/signup-form.php' ?>
      </div>
      
    </div>
  </div>
</div>


                    </div>
            </section>
            <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src="assets\images\free-icon-twitter-2673641.png" style="width:40px; height:40px;">
                    <p>201934612 김희원</p>
                    <img class="twt-icon" src="assets\images\free-icon-twitter-2673641.png" style="width:40px; height:40px;">
                    <p>201933641 손성민</p>
                    <img class="twt-icon" src="assets\images\free-icon-twitter-2673641.png" style="width:40px; height:40px;">
                    <p>201935111 이준교</p>
                </div>
            </section>
          
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
</body>
</html>
