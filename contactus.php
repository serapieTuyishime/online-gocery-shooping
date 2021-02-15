<?php if (isset($_SESSION['C_ID']))?>


<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<?php //include 'includes/other_header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<?php 
$result=3;
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    $email= $_POST['email'];
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $query= 'INSERT into messages(name, email, subject, message) values(?, ?, ?, ?)';
    $stmt= $db->prepare($query);
    $stmt->bind_param('ssss', $name, $email, $subject, $message);
    if($stmt->execute())
    {
      $result= 1;
    }
    else
    {
      $result=2;
    }
}
 ?>
<!-- page start-->
        <div class="row">
          <div class="col-lg-6">
            <div class="recent">
              <?php if ($result==1): ?>
                 <center><div class="alert alert-primary alert-dismissible text-center col-lg-8" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Successful! Message sent thank you for your feedback</strong> 
            </div></center>
            <?php elseif ($result==2): ?>
               <center><div class="alert alert-primary alert-dismissible text-center col-lg-8" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Error! Message not sent!</strong>
            </div></center>
              <?php endif ?>
              <h3>Send us a message</h3>
            </div>
            <form action="contactus.php" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" required data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" required name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </form>
          </div>

          <div class="col-lg-6">
            <div class="recent">
              <h3>Get in touch with us</h3>
            </div>
            <p><font color="black">Email:</font><span class="edit">musayvone123@gmail.com</p>
             <div>
              <p>Thank you for choosing online grocery shopping we are here for you</p>
              <p>Pleas feel free to ring us anytime !</p><br><br><br>

              <h4>Address:</h4>Kinigi kwa ....<br>
              <h4>Telephone:</h4>+250 782 434 806</br>
              <h4>Other:</h4>+250 727 968 275
            </div>
          </div>
        </div>
        <!-- page end-->
<?php include 'includes/footer.php'; ?>