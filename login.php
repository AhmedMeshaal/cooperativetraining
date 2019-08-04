<?php 

//Define the database....
     include('db_connection.php');
     include('header.php');
    $title = "LOGIN";

if(isset($_POST['uid'],$_POST['pwd']))
{
    $user = $_POST['uid'];
    $pwd  = md5($_POST['pwd']);

    
    $query = "SELECT * FROM `employees` WHERE `employee_name`='$user' AND `password`='$pwd'";
    
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    
            if(mysqli_num_rows($result))
        {
            setcookie('uid','uid',time()+2200);
        }
    
            $db_dept=$row["employee_department"];
           
switch ($db_dept) {
    case "Supplying":
        header("Location: add_order.php");
        exit;
        break;
    case "Services":
        header("Location: add_truck.php");
        exit;
        break;
    case "admin":
        header("Location: admin.php");
        exit;
        break;
}
    header('Location: login.php?status=0');
}

?>

          <!-- The CSS Design -->
          <style>
             
h1 {
        text-transform: uppercase;
        color: #4CAF50;
        display: inline-block;
        font-size: 25px;
    
    }
              
img {
         width: 120px; 
         height: 80px; 
         padding: 2px;
         
     }
              
.container-fluid {
         border: 2px solid #2E8B57; 
         background-color: #F0FFFF;
         border-radius: 8px;
      }
        
#ii {
    border: 2px solid #2E8B57; 
    border-radius: 5px
}    


body {
    background-color:#2F4F4F;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}

.container {
    padding: 150px 100px 150px 500px;
    position: fixed;
}

.form-login {
    background-color: #EDEDED;
    padding: 40px 30px 40px 30px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}
          </style>
 
          <!-- end of The CSS Design -->
            
            <!-- Star of the content -->
            
            <div class="container">
                <form action="login.php" method="post">
    <div class="row">
        <div class="col-md-8">
            <div class="form-login">
            <h4>WELECOME</h4>
            <input type="text" name="uid" id="uid" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" name="pwd" id="pwd" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button type="submit" class="btn btn-primary btn-md" style="background-color: darkcyan; width: 120px;">Login</button>

            </span>
            </div>
            </div>
        
        </div>
                </form>

        </body>
        


            
            <!-- End of the content -->
        
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</html>

      