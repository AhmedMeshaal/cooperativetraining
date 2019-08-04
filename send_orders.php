<?php 


// Define the database...
	include('db_connection.php');
    $title = "SEND ORDER";
    include('header.php');
    


// declare the query to display order information...       

if(isset($_POST['btn']))
{
	
    
    $total = 0;
    
    foreach($_POST as $k => $item){
        if(strpos($k,"item") !== false){
        
            
            $query = "SELECT `quantity` FROM `order_list` WHERE `order_id`=$item";
            $result=mysqli_query($conn, $query);
	        $row=mysqli_fetch_assoc($result);

            $total += $row['quantity'];
            
            
        }
    }
    
            $query = "SELECT * FROM `truck_list` WHERE `capacity` >= $total";
            $result=mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
	        $truckrow[$row["truck_number"]]=$row;
    }
	
    //var_dump($truckrow);
    //echo $total;
   // exit;
	
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
              
#execute {
    margin-left: 955px;
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
                        <legend class="title">Order Update</legend>
                        <p class="category" style="border-bottom: 2px solid #2E8B57; border-top: 2px solid #2E8B57">Finish orders to deliver</p>
                         
                <div class="card-content">
                    <?php if(isset($_GET['status']) AND $_GET['status']==1) {?>
                <p>Order Updated Successfully</p>
                <?php } else if(isset($_GET['status']) AND $_GET['status']==0) {?>
                    <p>Sorry..!! Order was not updated</p>
                    <?php } else{?>
                         <form method="post" action="send_orders.php" name="upd" id="upd">
                             
                             <div class="row">
                                 <div class="col-md-3">
                                 
                                 </div>
                                 
                                <div class="col-md-7">
                        <div class="form-group label-floating">
                       
                            <label class="control-label">Truck Number:</label>
    
                            <select class="form-control" name="type">
                                <option>-------------</option>
                                
                              <?php  foreach($truckrow as $k=>$truck){ ?>
                                
                                <option><?php echo $k;?></option>
                                
                            <?php    } ?>
                            </select>  
                            
                       </div>  
                     </div>
                                 
                                 
                                 </div>
                             
                                 <div class="row">
                                     <div class="col-md-3">
                                     </div>
                                     
                                      <div class="col-md-4">
                                           <div class="form-group label-floating">
                                                    
                                               <label class="control-label">Quantity</label>     
                                               <input type="text" class="form-control" value="<?php echo $total; ?>" disabled>
                                                
                                                </div>
                                            </div>
                                     
                                           
                                 </div>
                             
                                 
                             
                              
                             
                    <button id="execute" type="submit" class="btn btn-success pull-right" name="execute">Exexute Order</button>
                                        <div class="clearfix"></div>
                    </form>
                    <?php } ?>
                         </div>         
                         
                    </fieldset>
            </div>
            
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