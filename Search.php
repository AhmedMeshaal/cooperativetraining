<?php 

            
    $title = "SERACH ORDERS";
    include('header.php');

?>


<html>
    
    
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

.input-group-addon
    {
    border: 1px solid #AAAAAA;
    padding: 5px;
    margin-left: 2px;
    background-color: #F0F8FF;
    font-family: monospace;    
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
    
 <body>
  <div class="container">
      
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
                  <a href="Search.php" class="btn btn-default btn-lg" role="button">Search Orders</a> 
              </div>    
                
              <div class="col-md-2"> 
                  <a href="confirmed_orders.php" class="btn btn-default btn-lg" role="button">Confirmed Orders</a> 
              </div>
                    
                
            </div>
            <!-- end Navbar -->
                
   <br />
                <fieldset id="ii">
                    <legend class="title">Search Order</legend>
            <br/>
                    <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Order Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
                </fieldset>
      </div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"F-search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>