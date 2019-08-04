<?php 

// Define the database...
	include('db_connection.php');
    include('header.php');
    $title = "ADD TRUCK";

    if(isset($_POST["add"]))
    {
        $truck = $_POST['truck'];
        $driver = $_POST['driver'];
        $cpcty = $_POST['capacity'];
        $stus = $_POST['status'];
        
    $query = "INSERT INTO `truck_list` SET `truck_number`=$truck, `driver_name`='$driver', `capacity`=$cpcty, `status`='$stus' ";    
    
        //var_dump($query);
        //exit;
        
        $result = mysqli_query($conn,$query);
        
        if($result)
                {
                    header("location:add_truck.php?status=1");      
                }
                else 
                {
                    header("location:add_truck.php?status=0");
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
              
#add {
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
 
          </style>
 
          <!-- end of The CSS Design -->

            <div class="container">
                
                <!-- start Navbar -->
            <div class="row" style="margin-left: 100px; padding: 20px 0px 20px 0px;">
                
              <div class="col-md-2"> 
                  <a href="add_truck.php" class="btn btn-default btn-lg" role="button">Add Truck</a> 
              </div>
                
              <div class="col-md-2"> 
                  <a href="trucks_list.php" class="btn btn-default btn-lg" role="button">Trucks List</a> 
              </div>
                
              <div class="col-md-2"> 
                  <a href="confirmed_orders.php" class="btn btn-default btn-lg" role="button">Confirmed Orders</a> 
              </div>     
                
            </div>
            <!-- end Navbar -->
                
            <!-- start the content --> 
        
                <div class="card-content">
                     <fieldset id="ii"> 
                         
                         <?php if(isset($_GET['status']) AND $_GET['status']==1) {?>
                <h2>Werehouse Added Successfully....</h2>
                <?php } else if(isset($_GET['status']) AND $_GET['status']==0) {?>
                    <h2>Sorry..!! Werehouse was not added</h2>
                    <?php } else{?>
                         
                        <legend class="title">Add Truck</legend>
                        <p class="category" style="border-bottom: 2px solid #2E8B57; border-top: 2px solid #2E8B57">Adding new Truck</p>
                    
                 <form action="add_truck.php" method="post"> 
                     <!-- start of first row of the form -->
                    <div class="row">
                     <div class="col-md-2">
                         <div class="form-group label-floating">
                             
                            <label class="control-label">Truck Number</label>
                            <input type="text" class="form-control" name="truck" placeholder="Type the truck number here">
                             
                         </div>
                        </div>
                        
                     <div class="col-md-7">
                         <div class="form-group label-floating">
                             
                             <label class="control-label">Truck Driver Name</label>
                             <input type="text" class="form-control" name="driver" placeholder="Type the truck driver name here">
                             
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
                       
                            <label class="control-label">Truck Capacity</label>
                             <input type="number" class="form-control" name="capacity">
                                
                              
                            
                       </div>  
                     </div>
                     
                
                     </div>
                     
                     <div class="row">
                    <div class="col-md-2">
                         <div class="form-group label-floating">
                             
          
                        </div>
                         </div>
                     
                   <div class="col-md-7">
                        <div class="form-group label-floating">
                       
                            <label class="control-label">Truck Status:</label>
                            <select class="form-control" name="status">
                                <option>-------------</option>
                                <option>In Site</option>
                                <option>In Maintenance</option>
                                
                            </select>  
                            
                       </div>  
                     </div>
                     
                
                     </div>
                     
                     
                     
                     <div class="row" style="padding-bottom: 20px;">
                    
                         </div> 
                              
                     
                     <button id="add" type="submit" name="add" value="submit" class="btn btn-success pull-right">Add Truck</button>
                     
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