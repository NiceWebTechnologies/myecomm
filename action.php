<?php 
include("conn.php");
if(isset($_POST["category"])){
    
    $display_categories=mysqli_query($con,"select * from categories");
    echo "<div class='nav nav-pills flex-column'>
                        <li class='nav-item active'><a href='#' class='nav-link active'>Categories</a></li>";
    
   if(mysqli_num_rows($display_categories)>0){
          while ($row=mysqli_fetch_array($display_categories)){
              $cid=$row["cat_id"];
              $cat_name=$row["cat_title"];
             
              echo "
              <li class='nav-item'><a href='#' class='nav-link category' cid='$cid'>$cat_name</a></li>
              
              ";
          }
          echo "</div>";
    
   }
}


if(isset($_POST["brand"])){
    
    $display_brands=mysqli_query($con,"select * from brands");
    echo "<div class='nav nav-pills flex-column'>
                        <li class='nav-item active'><a href='#' class='nav-link active'>Brands</a></li>";
    
    if(mysqli_num_rows($display_brands)>0){
          while ($row=mysqli_fetch_array($display_brands)){
              $bid=$row["brand_id"];
              $brand_name=$row["brand_title"];
             
              echo "
              <li class='nav-item'><a href='#' class='nav-link brand' bid='$bid'>$brand_name</a></li>
              
              ";
          }
          echo "</div>";
    
    }
}




if(isset($_POST["product"])){
    
    $display_products=mysqli_query($con,"select * from products order by rand() limit 0,9");
    echo "  <div class='row'>";
    
    if(mysqli_num_rows($display_products)>0){
          while ($row=mysqli_fetch_array($display_products)){
              $pid=$row["product_id"];
              $product_name=$row["product_title"];
             $pro_image=$row["product_image"];
              $pro_price=$row["product_price"];
              echo "   <div class='col-md-4'><div class='card'>  
              <div class='card-header bg-primary text-white'>
                                        $product_name
                                    </div>

                                    <div class='card-body'>
                                        <img src='$pro_image' height='250' width='160'>
                                    </div>

                                    <div class='card-footer bg-warning text-white'>
                                        Rs.$pro_price
                                        <button pid='$pid' class='btn btn-danger' style='float:right'>Add to Cart</button>
                                    </div>
                                    </div>
              </div>
             
              ";
          }
          echo "</div>";
    
    }
}



if(isset($_POST["selected_cat"])||(isset($_POST["selected_brand"])||(isset($_POST["search"])))){
    if(isset($_POST["selected_cat"])){
        
         $cid=$_POST['cat_id'];
    $selected_products=mysqli_query($con,"select * from products where product_cat='$cid'");
    }
    else if(isset($_POST["selected_brand"])){
        
         $bid=$_POST['brand_id'];
    $selected_products=mysqli_query($con,"select * from products where product_brand='$bid'");
    }
    if(isset($_POST["search"])){
        
         $key=$_POST['keyword'];
    $selected_products=mysqli_query($con,"select * from products where product_keywords like '%$key%' ");
    }
    
    echo "  <div class='row'>";
    
   
          while ($row=mysqli_fetch_array($selected_products)){
              $pid=$row["product_id"];
              $pro_cat=$row["product_cat"];
              $pro_brand=$row["product_brand"];
              $product_name=$row["product_title"];
              $pro_image=$row["product_image"];
              $pro_price=$row["product_price"];
              echo "   <div class='col-md-4'><div class='card'>  
              <div class='card-header bg-primary text-white'>
                                        $product_name
                                    </div>

                                    <div class='card-body'>
                                        <img src='$pro_image' height='250' width='160'>
                                    </div>

                                    <div class='card-footer bg-warning text-white'>
                                        Rs.$pro_price
                                        <button pid='$pid' class='btn btn-danger' style='float:right'>Add to Cart</button>
                                    </div>
                                    </div>
              </div>
             
              ";
          }
          echo "</div>";
    
    
}

?>
