<?php 
session_start();


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


if(isset($_POST["page"])){
 
$sql=mysqli_query($con,"select * from products ");
 $count=mysqli_num_rows($sql);
    $pageno=ceil($count/3);

    for($i=1;$i<=$pageno;$i++)
    {
        echo "
        
         <li class='page-item'><a class='page-link' href='#' id='page' page='$i'>$i</a></li>
         
        ";
    }
    
}


if(isset($_POST["product"])){
    $limit=3;
    if(isset($_POST["setpage"])){
        $pageno=$_POST["pageno"];
        $start=($pageno*$limit)-$limit;
        $previous=$pageno-1;
        $next=$pageno+1;
        echo"<div class='row'><div class='col-md-12'><div class='pageno pull-right'>";
        echo " <button class='btn btn-success'><a class='page-link' href='#' id='page' page='$previous'>Previous</a></button>";
        echo"<button class='btn btn-success'><a class='page-link' href='#' id='page' page='$next'>Next</a></button>";
        echo"</div></div></div>";
    }
    else {
        $start=0;
      
    }
    $display_products=mysqli_query($con,"select * from products limit $start,$limit");
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
                                      
                                        <button pid='$pid' class='btn btn-danger' id='pcart' style='float:right'>Add to Cart</button>
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
                                        <button pid='$pid' class='btn btn-danger' id='pcart' style='float:right'>Add to Cart</button>
                                    </div>
                                    </div>
              </div>
             
              ";
          }
          echo "</div>";
    
    
}


if(isset($_POST["addproduct"])){
    
    $pid=$_POST['pid'];
    $uid=$_SESSION["uid"];
    
    $sql=mysqli_query($con,"select * from cart where p_id='$pid' and user_id='$uid'");
    $count=mysqli_num_rows($sql);
    
    if($count>0){
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>Product alredy added.
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";
    }else {
        
        $sql=mysqli_query($con,"select * from products where product_id='$pid'");
        $row=mysqli_fetch_array($sql);
       $pro_id= $row["product_id"];
        $pro_title=$row["product_title"];
        $pro_image=$row["product_image"];
        $pro_price=$row["product_price"];
        
        $insert_sql=mysqli_query($con,"INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$pro_id', '0', '$uid', '$pro_title', '$pro_image', '1', '$pro_price', '$pro_price');");
        
        echo  "<div class='alert alert-success alert-dismissible fade show' role='alert' id='msg'>Product Added Successfully.
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";
    
    }
}


if(isset($_POST["getcartProduct"])||isset($_POST["cart_check"])){
    
   // $pid=$_POST['pid'];
    $uid=$_SESSION["uid"];
    
    $sql=mysqli_query($con,"select * from cart where user_id='$uid'");
    $count=mysqli_num_rows($sql);
    
    if($count>0){
        $no=1;
        $total_amt=0;
        while($row=mysqli_fetch_array($sql)){
        $id=$row["id"];
           $pro_id=$row["p_id"];
           $pro_title=$row["product_title"];
           $pro_price= $row["price"];
           $qty=$row["qty"];
           $pro_image= $row["product_image"];
           $total=$row["total_amount"];
            $price_array=array($total);
            $total_array=array_sum($price_array);
            $total_amt=$total_amt+$total_array;
            if(isset($_POST["getcartProduct"])){
                
                     echo "
            <div class='row'>

                                        <div class='col-md-3'>$no</div>
                                        <div class='col-md-3'><img src='$pro_image' width='30' height='30'></div>
                                        <div class='col-md-3'>$pro_title</div>
                                        <div class='col-md-3'>Rs. $pro_price</div>
                                    </div>
            ";
            $no=$no+1;
                
            } 
            
           else{
                echo "
                <div class='row'>
                            <div class='col-md-2'>
                               <div class='btn-group'>
                                <button remove_id='$pro_id' class='btn btn-danger remove'><i class='fa fa-solid fa-trash'></i></button>
                                <button update_id='$pro_id' class='btn btn-success update'><i class='fa fa-solid fa-check'></i></button>
                                </div>
                            </div>
                            <div class='col-md-2'><img src='$pro_image' width='50' height='50'></div>
                            <div class='col-md-2'>$pro_title</div>
                            <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price_$pro_id' value='$pro_price' disabled></div>
                             <div class='col-md-2'><input type='text' class='form-control qty'  pid='$pro_id' id='qty_$pro_id' value='$qty'></div>
                            <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id'  id='total_$pro_id' value='$total' disabled></div>
                </div>
                
            ";
             
            }
       
        }
         echo "<div class='row'>
                <div class='col-md-12'>
              <h6 class='pull-right'> Sub Total = Rs. $total_amt</h6>
                </div>
                <div>"  ;
    }
}



if (isset($_POST["cart_count"])){
    $uid=$_SESSION["uid"];
    
    $sql=mysqli_query($con,"select * from cart where user_id='$uid'");
    $count=mysqli_num_rows($sql);
    
    echo $count;
    
}



if(isset($_POST["deleteitem"])){
    $delete_id=$_POST["deleteId"];
$uid=$_SESSION["uid"];
    $sql=mysqli_query($con,"delete from cart where user_id='$uid' and p_id=' $delete_id'");
    if($sql){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert' >Product is removed from your cart continue shopping......
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";
    }
}

if(isset($_POST["updateacart"])){
$updateid=$_POST["updateid"];
$qty=$_POST["qty"];
$price=$_POST["price"];
$total=$_POST["total"];
$uid=$_SESSION["uid"];
    $sql=mysqli_query($con,"UPDATE `cart` SET  `qty` = '$qty', `price` = '$price', `total_amount` = '$total' where user_id='$uid' and p_id=' $updateid'");
    if($sql){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Product upated in your cart continue shopping......
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";
    }
}

if (isset($_POST["cart_detail"])){
    $uid=$_SESSION["uid"];
      $sql=mysqli_query($con,"select * from cart where user_id='$uid'");
      $no=1;
        $total_amt=0;
        while($row=mysqli_fetch_array($sql)){
        $id=$row["id"];
           $pro_id=$row["p_id"];
           $pro_title=$row["product_title"];
           $pro_price= $row["price"];
           $qty=$row["qty"];
           $pro_image= $row["product_image"];
           $total=$row["total_amount"];
            $price_array=array($total);
            $total_array=array_sum($price_array);
            $total_amt=$total_amt+$total_array;
            $txid=rand(10,10000);
    echo "
    <div class='col-md-6'>
                                <img src='$pro_image' class='img-thumbnail pull-right' width='150' height='150'>
                                <br>
                            </div>
                            <div class='col-md-6'>
     <table class='table-borderless'>
                                    <tr>
                                        <td><b>Product Name :</b></td>
                                        <td><b>$pro_title</b></td>
                                    </tr>
                                    <tr>
                                        <td> <b>Product Price :</b></td>
                                        <td> <b>$pro_price</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Quantity :</b></td>
                                        <td><b>$qty</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Payment :</b></td>
                                        <td><b>$total</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tansaction ID. :</b></td>
                                        <td><b>$txid</b></td>
                                    </tr>

                                </table>
                        </div>        
                                <br><br>
                                
    
    ";
        }
    
}

?>
