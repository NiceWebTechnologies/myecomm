$(document).ready(function () {

    brand();
    cat();
product();
    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                category: 1
            },
            success: function (data) {
                $("#get_category").html(data);

            }
        });



    }

    function brand() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                brand: 1
            },
            success: function (data) {
                $("#get_brand").html(data);

            }
        });



    }
    
    
     function product(){
  $.ajax({
     url:"action.php",
      method:"POST",
      data:{product:1},
      success:function(data){
      $("#get_product").html(data);
      
  }
  }) ;
     
     
     
 }  
 
    
    
    $("body").delegate(".category","click",function(event){
        
event.preventDefault();
        var cid=$(this).attr('cid');
      $.ajax({
     url:"action.php",
      method:"POST",
      data:{selected_cat:1,cat_id:cid},
      success:function(data){
      $("#get_product").html(data);
      
  }
  }) ;
    });

    
$("body").delegate(".brand","click",function(event){
        
event.preventDefault();
        var bid=$(this).attr('bid');
      $.ajax({
     url:"action.php",
      method:"POST",
      data:{selected_brand:1,brand_id:bid},
      success:function(data){
      $("#get_product").html(data);
      
  }
  }) ;
    });    
 
    
    
/* search button */
    
    $("#search_btn").click(function(){
        var keyword=$("#search").val();
       if(keyword!="") {
           
           $.ajax({
     url:"action.php",
      method:"POST",
      data:{search:1,keyword:keyword},
      success:function(data){
      $("#get_product").html(data);
      
  }
  }) ; 
           
       }
        
        
        
    });
    
    
    $("#sign_up").click(function(e){
               e.preventDefault()  ;
                   $.ajax({
     url:"register.php",
      method:"POST",
      data:$("form").serialize(),
      success:function(data){
      $("#msg").html(data);
      
  }
  }) ;       
                        });
    
});
