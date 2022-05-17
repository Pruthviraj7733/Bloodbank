<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice project</title>
    <link rel="stylesheet" href="practice.css">
</head>
<body>
    <header class="header">
        <!-- left box for logo  -->
       
        <div class="left">
            <img src="image/bloodlogo.png" alt="" width="100%" height="140px">
             
                
            
        </div>
        <!-- mid box for nav bar  -->
        <div class="center">
    <ul class="navbar">
        <li><a href="index.php" class="active" style="color:red; font-size:30px;">Blood Bank Managment</a></li>
       
    </ul>
        </div>
        <!-- right box for button  -->



        <div class="right">
            <?php if (isset($_SESSION['hid'])) { ?>
    
            <ul class="navbar">
                <li class="">
                    <a class="btn" href="bloodinfo.php">Add blood info</a>
                </li>
                <li class="">
                    <a class="btn" href="bloodrequest.php"> Check Pending Request</a>
                </li>
                <li class="">
                    <a class="btn" href="abs.php">Available blood samples</a>
                </li>
                
                <li class="">
                    <a class="btn" href="logout.php">Logout</a>
                </li>
            </ul>
    
            <?php } elseif (isset($_SESSION['rid'])) { ?>
            <div class=""> 
            <ul class="navbar">
                <li class="">
                    <a class="btn" href="sentrequest.php">Check request Status</a>
                </li>
                <li class="">
                    <a class="btn" href="abs.php">Available blood samples</a>
                </li>
                
                <li class="">
                    <a class="btn" href="logout.php">Logout</a>
                </li>
            </ul>
    
            <?php }  else { ?>
    
            <ul class="navbar">
                <li >
                    <a class="btn" href="abs.php">Available blood samples</a>
                </li>
                <li class="">
                    <a class="btn" href="register.php">Register</a>
                </li>
                <li class="">
                    <a class="btn" href="rlogin.php">Login</a>
                </li>
            </ul>
    
            <?php } ?>
            </div>
            </div>
           </div>

<!--         
        <div class="right">
            <button class="btn">Available Blood Sample</button>
    <button class="btn"><a href="call.html "  style="color: white; text-decoration: none; ">Register</a> </button>
    <button class="btn">Login</button>
     -->
        </div>
    </header>
</body>
</html>