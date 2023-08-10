/*!
    * Start Bootstrap - SB Admin v6.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);



 function dangnhap()  
 {
             var u = document.getElementById("username").value;
             var p = document.getElementById("password").value;

             if(u === "") {
                 alert("Please enter username");
                 return false;
             }
             if(p === "") {
                 alert("Please enter Password");
                 return false;
             }
             
             alert("Let's run !");
             return true;
         }

 function dathang()  
 {
             var hvt = document.getElementById("hovaten").value;
             var sdt = document.getElementById("sdt").value;
             var e = document.getElementById("email").value;
             var dc = document.getElementById("diachi").value;  
             
             if(hvt === "") {
                 alert("Please enter your first and last name");
                 return false;
             }
             if(sdt === "") {
                 alert("Please enter the phone number");
                 return false;
             }
             if(e === "") {
                 alert("Please enter your email");
                 return false;
             }
             if(dc === "") {
                 alert("Please enter your address");
                 return false;
             }
             alert("Your order is successful and you will be contacted to verify your order");
             return true;
         }

function xoa()
{  
  var id = document.getElementById("id").value;    
  var xoa1=confirm('Do you want to delete'+id);   
  if (xoa1 === true) {
    alert("Delete successfully");
    return true;
} else {
    alert("Cancel delete");
    return false;
}
}

function donhang() 
{
   var soluong = document.getElementById("soluong").value;  
 
   if(soluong > 10)
   {
     alert("Only order quantity below 10");
     return false;
   }
   if(soluong < 1)
   {
     alert("Order quantity at least 1");
     return false;
   }
   
   return true;
}

