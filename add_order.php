<?php 

//Define the database....
     include('db_connection.php');
     $title = "ADD ORDER";
     include('header.php');
     

// Dislay the products from the database into HOSPITAL droplist... 
    $query = "SELECT `hospital_id`,`hospital_name`,`hospital_city` FROM `hospitals`";
    $result = mysqli_query($conn, $query);

     $hospitals = array();
    while($row1 = mysqli_fetch_assoc($result))
    {
        $orders[$row1["hospital_id"]] = $row1;  
        }

// Dislay the products from the database into WEREHOUSE droplist... 
    $query = "SELECT `werehouse_id`, `werehouse_name`, `werehouse_type` FROM `werehouse_list`";
    $result = mysqli_query($conn, $query);

     $hospitals = array();
    while($row1 = mysqli_fetch_assoc($result))
    {
        $werehouses[$row1["werehouse_id"]] = $row1;  
        }

// Add new order into the system[DATABASE]....
    if(isset($_POST['btn'])){
        
                $id = $_POST['id'];
                $whsid = $_POST['werehouse'];
        
        $whs = $werehouses[$whsid]["werehouse_name"];
            
            
                $hsptlid = $_POST["hospital"];
        
        $hsptl = $orders[$hsptlid]["hospital_name"];
                $qty = $_POST['quantity'];
                $dt = $_POST['date'];
                $typ = $_POST['type'];
                $cond = $_POST['condition'];
                $txt = $_POST['text'];
        
        
        
        
        $query = "INSERT INTO `order_list` SET `order_id`=$id, `werehouse_name`='$whs', `hospital`='$hsptl', `quantity`=$qty, `order_date`= '$dt', `car_type`='$typ', `condition`='$cond', `comment`='$txt' ";
        //var_dump($query);
        //exit;
             

             $result = mysqli_query($conn,$query);
                if($result)
                {
                    header("location:add_order.php?status=1");      
                }
                else 
                {
                    header("location:add_order.php?status=0");
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
                <h2>Order Added Successfully....</h2>
                <?php } else if(isset($_GET['status']) AND $_GET['status']==0) {?>
                    <h2>Sorry..!! Order was not added</h2>
                    <?php } else{?>
                         
                        <legend class="title">Add Order</legend>
                        <p class="category">Adding new order</p>
                    
                 <form action="add_order.php" method="post"> 
                     <!-- start of first row of the form -->
                    <div class="row">
                     <div class="col-md-2">
                         <div class="form-group label-floating">
                             
                            <label class="control-label">Order ID (disabled)</label>
                            <input type="text" class="form-control" name="id">
                             
                         </div>
                        </div>
                        
                     <div class="col-md-7">
                         <div class="form-group label-floating">
                             
                             <label class="control-label">Werehouse Name :</label>
                            <select class="form-control" name="werehouse">
                                <option>-------------</option>
                                
                                <?php foreach($werehouses as $v) { ?>
                                
                                <option value="<?php echo $v['werehouse_id']?>">
                                    <?php echo $v['werehouse_name'] ?> </option>
                                <!--<option>Al Jabr Hospital</option>
                                <option>Birth and Chilldren Hospital</option>
                                <option>Ben Jolwi Hospital</option>-->
                                
                                <?php } ?>
                            </select>
                             
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
                       
                            <label class="control-label">Hospital Name :</label>
                            <select class="form-control" name="hospital">
                                <option>-------------</option>
                                
                                <?php foreach($orders as $v) { ?>
                                
                                <option value="<?php echo $v['hospital_id']?>">
                                    <?php echo $v['hospital_name'] ?> </option>
                                <!--<option>Al Jabr Hospital</option>
                                <option>Birth and Chilldren Hospital</option>
                                <option>Ben Jolwi Hospital</option>-->
                                
                                <?php } ?>
                            </select>                   
                       
                       </div>  
                     </div>
                     
                     <div class="col-md-2">
                          <div class="form-group label-floating">
                                                    
                              <label class="control-label">Qty</label>
                              <input type="number" class="form-control" name="quantity" max=5>
                                                
                         </div>                  
                     </div>
                
                     </div>
                     
                     
                  <div class="row">
                    <div class="col-md-2">
                        <div class="from-group label-floating">
                        
                        </div>
                      </div>

                     
                     <div class="col-md-3">
                          <div class="form-group label-floating">
                                                    
                              <label class="control-label">Order Delivery Date :</label>
                              <input type="date" class="form-control" name="date" placeholder="Type the employee name here">
                                                
                         </div>                  
                     </div>
                
                     </div>
                     
                 <div class="row">
                       <div class="col-md-9">
                           <div class="from-group label-floating">
                            
                               <label style="padding-left: 180px;" class="control-label">Car Type:</label>
                               <input type="radio" name="type" value="Refrigerated" ><label style="margin-left: 5px; margin-right: 30px; color: #0000FF; font-weight: bold;">Refrigerated</label>
                               <input type="radio" name="type" value="Un-Refrigerated"><label style="margin-left: 5px;  margin-right: 30px; color: #FF0000; font-weight: bold;">Un-Refrigerated</label>
                              
                           </div>
                     </div>
                     
                     </div>
                     
                <div class="row" style="padding-bottom: 5px;">
                     <div class="col-md-9">
                         <div class="from-group label-floating">
                             
                               <label style="padding-left: 180px;" class="control-label">Order Condition:</label>
                               <input type="radio" name="condition" value="Emergency"><label style="margin-left: 5px; margin-right: 30px; font-weight: bold;">Emergency</label>
                               <input type="radio" name="condition" value="Normal"><label style="margin-left: 5px; font-weight: bold;">Normal</label>
                               
                           </div>
                     </div>
                         </div>
                     
                     <div class="row" style="padding-bottom: 20px;">
                     <div class="col-md-9">
                         <div class="from-group label-floating">
                             
                               <label style="padding-left: 180px;" class="control-label">Note :</label>
                             <div class="col-md-9">  
                             <textarea class="form-control" style="padding-bottom: 70px; margin-left: 180px;" name="text" placeholder="Type a comment here...."></textarea>
                               
                             </div>
                           </div>
                     </div>
                         </div> 
                              
                     
                     <button id="btn" type="submit" name="btn" value="submit" class="btn btn-success pull-right">Complete Order</button>
                     
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
     
