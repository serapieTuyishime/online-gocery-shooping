<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">online groceries shop</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                                      
             <li><a href="contactus.php"><span class="glyphicon glyphicon-log-in"></span> contactus</a></li>
              <li><a href="aboutus.php"><span class="glyphicon glyphicon-log-in"></span> about us</a></li>
              <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> Manager sign in </a></li><li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php   
                           }else{
                            ?> 
            <li><a href="contactus.php"><span class="glyphicon glyphicon-log-in"></span> contactus</a></li>
            <li><a href="aboutus.php"><span class="glyphicon glyphicon-log-in"></span> about us</a></li>
             <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> Manager sign in</a></li> <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>