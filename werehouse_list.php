<?php 

// Define the database...
	include('db_connection.php');
    include('header.php');
    $title = "WEREHOUSE LIST";

//The query to view the list of orders...
     $query = "SELECT * FROM `werehouse_list`";
     $result = mysqli_query($conn, $query);

//The array declaration and assigning the variables to the database....

     $orders = array();
 while($row = mysqli_fetch_assoc($result))
 
     {
         $orders[$row["werehouse_id"]] = array(
      "name"=>$row["werehouse_name"],
      "type"=>$row["werehouse_type"]
        
         );
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
              
.table>thead>tr>th {
    border-bottom-width: 1px;
    font-size: 1em;
    font-weight: 300;
}
            

.table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
    padding: 12px 8px;
    vertical-align: middle;
}

.table>thead>tr>th {
    padding-bottom: 5px;
}

.table>tbody>tr {
    position: relative;
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
              
.text-denger {
    color: #FF0000;
    text-align: center;
}
              
tbody {
    text-align: center;               
}
              
          </style>
 
          <!-- end of The CSS Design -->
   
        
        <div class="container">
                
            <!-- start Navbar -->
            <div class="row" style="margin-left: 100px; padding: 20px 0px 20px 0px;">
                
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
                        <legend class="title">Werehouses List</legend>
                        <p class="category" style="border-bottom: 2px solid #2E8B57; border-top: 2px solid #2E8B57">List of all werehouses</p>
        
                         <div class="card-content table-responsive">
                         <table class="table">
                             <thead class="text-denger">
                                  <th>Werehouse Number</th>
                                  <th>Werehouse Name</th>
                                  <th>Type</th>
                             </thead>
                        <tbody>
                            
                            <?php
                            
                            //Foreach loop to display the content from the database....
                            
                            foreach($orders as $k => $v) { ?>
                              <tr>
                                   <td>P-<?php echo $k; ?></td>
                                   <td><?php echo $v["name"]; ?></td>
                                   <td><?php echo $v["type"]; ?></td>
                             </tr>
                               <?php }  ?>
                             </tbody>
                             </table>
                             
                             
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