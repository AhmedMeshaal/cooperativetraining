<?php 

// Define the database...
	include('db_connection.php');
    $title = "ADD HOSPITAL";
    include('header.php');
    

    if(isset($_POST["btn"]))
    {
        $id = $_POST['id'];
        $nm = $_POST['name'];
        $cty = $_POST['city'];
        $phne = $_POST['phone'];
        $mgph = $_POST['manager'];
        $mgnm = $_POST['mngrname'];
        
        
        
        $query = "INSERT INTO `hospitals` SET `hospital_id`=$id ,`hospital_name`='$nm' ,`hospital_city`='$cty' ,`hospital_phone`='$phne',  `manager_phone`='$mgph', `manager_name`='$mgnm' ";
        
        $result = mysqli_query($conn,$query);
        
        if($result)
                {
                    header("location:add_hospital.php?status=1");      
                }
                else 
                {
                    header("location:add_hospital.php?status=0");
                }
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
              
.title {
    background-color: #B0E0E6; 
    font: normal small-caps normal 36px/1.4 Georgia;
    margin-left: 3px;
}
        
.category {
     background-color: #B0E0E6;
    text-align: center;
    font-size: 20px;
    border-bottom: 2px solid #2E8B57; 
    border-top: 2px solid #2E8B57
}

label.control-label {
    font-size: 14px;
    line-height: 1.07143;
    color: #AAAAAA;
    font-weight: 400;
    margin: 16px;
}
              
.form-control {
    font-size: 14px;
    line-height: 1.42857;
    color: #AAAAAA;
    font-weight: 400;
    margin-left: 5px;
}
              
#btn {
    margin-left: 855px;
    margin-bottom: 10px;
}
              
               
a:link,
a:visited {
    color: #20B2AA;
    font-weight: bold;
}
a:hover {
    color: orangered;
}
a:active {
    background: orangered;
    color: white;
}
              
.footer {
    text-align: center;
}

.row {
    margin-left: 100px; 
    padding: 20px 0px 20px 0px;
      }
 
          </style>
 
          <!-- end of The CSS Design -->
        
     
          
            <div class="container">
                
                <!-- start Navbar -->
            <div class="row">
                
              <div class="col-md-2"> 
                  <a href="add_order.php" class="btn btn-default btn-lg" role="button">Add Order</a> 
              </div>
                
              <div class="col-md-2"> 
                  <a href="order_list.php" class="btn btn-default btn-lg" role="button">Order List</a> 
              </div>
                
              <div class="col-md-2"> 
                  <a href="add_hospital.php" class="btn btn-default btn-lg" role="button">Add Hospital</a> 
              </div>
                
              <div class="col-md-2"> 
                  <a href="add_werehouse.php" class="btn btn-default btn-lg" role="button">Add Werehouse</a> 
              </div> 
                
             <div class="col-md-2"> 
                  <a href="werehouse_list.php" class="btn btn-default btn-lg" role="button">Werehouse List</a> 
              </div>    
                
            </div>
            <!-- end Navbar -->
                
            <!-- start the content --> 
        
                <div class="card-content">
                     <fieldset id="ii"> 
                         
                         <?php if(isset($_GET['status']) AND $_GET['status']==1) {?>
                <h2>Hospital Added Successfully....</h2>
                <?php } else if(isset($_GET['status']) AND $_GET['status']==0) {?>
                    <h2>Sorry..!! Hospital was not added</h2>
                    <?php } else{?>
                         
                        <legend class="title">Add Hospital</legend>
                        <p class="category">Adding new hospital</p>
                    
                 <form action="add_hospital.php" method="post"> 
                     <!-- start of first row of the form -->
                    <div class="row">
                     <div class="col-md-2">
                         <div class="form-group label-floating">
                             
                            <label class="control-label">Hospital ID</label>
                            <input type="text" class="form-control" name="id">
                             
                         </div>
                        </div>
                        
                     <div class="col-md-7">
                         <div class="form-group label-floating">
                             
                             <label class="control-label">Hospital Name</label>
                             <input type="text" class="form-control" name="name" placeholder="Type the hospital name here">
                             
                         </div>
                        </div>
                
                     </div>
                     <!-- end of first row of the form -->
                     
                     <!-- start second row of the form -->
                 <div class="row">
                    <div class="col-md-2">
                         <div class="form-group label-floating">
                             
          
                        </div>
                         </div>
                     
                   <div class="col-md-7">
                        <div class="form-group label-floating">
                       
                            <label class="control-label">Hospital City :</label>
                            <input type="text" class="form-control" name="city" placeholder="Type the hospital city here">                   
                       
                       </div>  
                     </div>
                     
                
                     </div>
                     
                     
                  <div class="row">
                    <div class="col-md-2">
                        <div class="from-group label-floating">
                        
                        </div>
                      </div>

                     
                     <div class="col-md-7">
                          <div class="form-group label-floating">
                                                    
                              <label class="control-label">The Hospital Phone Number :</label>
                              <input type="text" class="form-control" name="phone" placeholder="Type the hospital phone number here">
                                                
                         </div>                  
                     </div>
                
                     </div>
                     
                     <div class="row">
                    <div class="col-md-2">
                        <div class="from-group label-floating">
                        
                        </div>
                      </div>

                     
                     <div class="col-md-7">
                          <div class="form-group label-floating">
                                                    
                              <label class="control-label">The Hospital Inventory Manager Phone Number :</label>
                              <input type="text" class="form-control" name="manager" placeholder="Type the hospital phone number here">
                                                
                         </div>                  
                     </div>
                
                     </div>
                     
                 
                     <div class="row">
                    <div class="col-md-2">
                        <div class="from-group label-floating">
                        
                        </div>
                      </div>

                     
                     <div class="col-md-7">
                          <div class="form-group label-floating">
                                                    
                              <label class="control-label">The Hospital Inventory Manager name :</label>
                              <input type="text" class="form-control" name="mngrname" placeholder="Type the hospital phone number here">
                                                
                         </div>                  
                     </div>
                
                     </div>
                     
                
                     
                     <div class="row">
                    
                         </div> 
                              
                     
                     <button id="btn" type="submit" name="btn" value="submit" class="btn btn-success pull-right">Add Hospital</button>
                     
                </form> 
                         <?php } ?>
                         </fieldset>
            </div>
                
            <!-- end the content -->
                
            <!-- start the footer -->    
                <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        CCSIT COOP Project produced by [Ahmed Meshaal & Hassan Hawaj] 2018-19
                    </p>
                </div>
            </footer>
                
                <!-- end the footer -->
          </div>  

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
      </body>
    </html>