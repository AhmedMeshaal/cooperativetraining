<?php 

// Define the database...
	include('db_connection.php');
    include('header.php');
    $title = "REGISTERATION";

// Insert the new employee data...
    if(isset($_POST['btn']))
    {
        $nm = $_POST['userName'];
        $id = $_POST['id'];
        $pwd = md5($_POST['userPassword']);
        $dept = $_POST['select'];
        $em = $_POST['email'];
        $phne = $_POST['phone'];
        
        $query = "INSERT INTO `employees` SET `employee_id`=$id ,`employee_name`='$nm' ,`password`='$pwd' ,`employee_department`='$dept', `email`='$em' ,`employee_phone`='$phne' ;";
        
        $result = mysqli_query($conn , $query);
        
        if($result==1)
                    header("location:register.php?status=1");
                  else 
                header("location:register.php?status=0");
        
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
              
h2 {
        color: #E0FFFF;
    }

a {
        color: #FFD700;
        letter-spacing: 5px;
        text-transform: uppercase;
        font-size: 30px;
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
    padding: 50px 100px 150px 500px;
    position: fixed;
}

.form-register {
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

#btn {
    background-color: darkcyan; width: 120px;
 }
.error {
    font-style: oblique;
    color: #4B0082;
    font-size: 10px;
    visibility: hidden;
}
              
.footer {
    text-align: center;
}

          </style>
 
          <!-- end of The CSS Design -->
          
            <!-- Star of the content -->
            
            <div class="container">
                
                <form method="post" action="#" name="register">
                
                    <?php if(isset($_GET['status']) AND $_GET['status']==1) {?>
                <h2>Information Added Successfully....</h2> <a href="login.php">Login and Start work</a>
                <?php } else if(isset($_GET['status']) AND $_GET['status']==0) {?>
                    <h2>Sorry..!! Information was not added</h2>
                    <?php } else{?>
                    
    <div class="row">
        <div class="col-md-8">
            <div class="form-register">
            <h4>WELECOME</h4>
            <input type="text" id="userName" name="userName" class="form-control input-sm chat-input" placeholder="Name" />
                <span id="usererr" class="error">Insert value this is required</span>
            </br>
            <input type="text" id="id" name="id" class="form-control input-sm chat-input" placeholder="ID" />
                <span id="iderr" class="error">Insert value this is required</span>
            </br>
            <input type="text" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="password" />
                <span id="pwderr" class="error">Insert value this is required</span>
            </br>
                                          <select class="form-control" name="select">
                                                <option>--Department--</option>
                                                <option>Admin</option>
                                                <option>Supplying</option>
                                                <option>Services</option>
                                          </select>
                    <span id="depterr" class="error">Insert value this is required</span>
            </br>
            <input type="text" id="email" name="email" class="form-control input-sm chat-input" placeholder="Email" />
                <span id="emlerr" class="error">Insert value this is required</span>
            </br>
            <input type="text" id="phone" name="phone" class="form-control input-sm chat-input" placeholder="Phone Number" />
                <span id="phnerr" class="error">Insert value this is required</span>
            </br>
            <div class="wrapper">
            <span class="group-btn"> 
                
                <button id="btn" type="submit" name="btn" value="submit" class="btn btn-success pull-right" onclick="validate()">Register</button>

                
            </span>
            </div>
            </div>
        
        </div>
</form>
                   <script type="text/javascript">

                       function validate()
                       {
                           var spans = document.getElementsByTagName("span");
                           var username = document.register.userName;
                           if(userName.value == "")
                               {
                                   span[0].style.visibility = "visible";
                               }
                       }

                    </script>
<?php } ?>
        </body>
        

            <!-- End of the content -->

        
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</html>

      