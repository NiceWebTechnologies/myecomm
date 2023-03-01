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


    function product() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                product: 1
            },
            success: function (data) {
                $("#get_product").html(data);

            }
        });



    }



    $("body").delegate(".category", "click", function (event) {

        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                selected_cat: 1,
                cat_id: cid
            },
            success: function (data) {
                $("#get_product").html(data);

            }
        });
    });


    $("body").delegate(".brand", "click", function (event) {

        event.preventDefault();
        var bid = $(this).attr('bid');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                selected_brand: 1,
                brand_id: bid
            },
            success: function (data) {
                $("#get_product").html(data);

            }
        });
    });



    /* search button */

    $("#search_btn").click(function () {
        var keyword = $("#search").val();
        if (keyword != "") {

            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    search: 1,
                    keyword: keyword
                },
                success: function (data) {
                    $("#get_product").html(data);

                }
            });

        }



    });


    $("#sign_up").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "register.php",
            method: "POST",
            data: $("form").serialize(),
            success: function (data) {
                $("#msg").html(data);

            }
        });
    });




    $("#login").click(function (e) {
        e.preventDefault();
        var email = $("#email").val();
        var pass = $("#pass").val();
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {
                userLogin: 1,
                email: email,
                pass: pass,
            },
            success: function (data) {

                if (data == "done") {
                    window.location.href = "profile.php";
                }


            }
        });


    });


    $("body").delegate("#pcart", "click", function (e) {
        e.preventDefault();
        var pid = $(this).attr("pid");
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                addproduct: 1,
                pid: pid
            },
            success: function (data) {
                $("#msg1").html(data);
                 cart_count();
            }
        });
    });

cart_container();
function cart_container(){
    $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                getcartProduct: 1
            },
            success: function (data) {
                $("#cart_product").html(data);

            }
        });
     cart_count();
    
}
    cart_count();
function cart_count(){
     $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                cart_count: 1
            },
            success: function (data) {
                $(".badge").html(data);

            }
        }); 
    
    
    
}
    $("#cartcontainer").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                getcartProduct: 1
            },
            success: function (data) {
                $("#cart_product").html(data);

            }
        });
    });



    cart_checkout();

    function cart_checkout() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                cart_check: 1
            },
            success: function (data) {
                $("#cart_checkout").html(data);

            }
        });

    }


    $("body").delegate(".qty", "keyup", function (e) {
        e.preventDefault();
        var pid = $(this).attr("pid");
        var qty = $("#qty_" + pid).val();
        var price = $("#price_" + pid).val();
        var total = qty * price;
        $("#total_" + pid).val(total);

    });

    $("body").delegate(".remove", "click", function (e) {
        e.preventDefault();
        var pid = $(this).attr("remove_id");
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                deleteitem: 1,
                deleteId: pid
            },
            success: function (data) {
                $("#msgcart").html(data);
                cart_checkout();
            }
        });

    });

    $("body").delegate(".update", "click", function (e) {
        e.preventDefault();
        var updateid = $(this).attr("update_id");
        var qty = $("#qty_" + updateid).val();
        var price = $("#price_" + updateid).val();
        var total = $("#total_" + updateid).val();
        $.ajax({
            url: "action.php",
            method: "post",
            data: {
                updateacart: 1,
                updateid: updateid,
                qty: qty,
                price: price,
                total: total
            },
            success: function (data) {
                $("#msgcart").html(data);
                cart_checkout();
            }
        });
    });

    page();

    function page() {
        $.ajax({
            url: "action.php",
            method: "post",
            data: {
                page: 1,
                
            },
            success: function (data) {
                $("#pageno").html(data);
            }
        });

    }

   
    $("body").delegate("#page", "click", function () {
        var pageno = $(this).attr("page");
        $.ajax({
            url: "action.php",
            method: "post",
            data: {
                product:1,
                setpage: 1,
                pageno: pageno
            },
            success: function (data) {
                $("#get_product").html(data);
            }
        });
        
    });
   cart_detail();
    function cart_detail(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{cart_detail:1},
            success:function(data){
                $('.cart_detail').html(data);
            }
            
        });
    }

});


