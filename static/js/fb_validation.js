// created with love by arpantek
function fb_validation() {
     const email = $('#email').val();
     const password = $('#password').val();
     if(email == "" || email == null) {
     $('#fb_account_notfound').css("display","block");
     return false;
     }else{
     $('#fb_account_notfound').css("display","none");
     }
     if(email.length < "5") {
     $('#fb_account_notfound').css("display","block");
     return false;
     }else{
     $('#fb_account_notfound').css("display","none");
     }
     if(password == "" || password == null) {
     $('#fb_account_nopassword').css("display","block");
     return false;
     }else{
     $('#fb_account_nopassword').css("display","none");
     }
     if(password.length < "6") {
     $('#fb_account_wrongpassword').css("display","block");
     return false;
     }else{
     $('#fb_account_wrongpassword').css("display","none");
     }
     }
     

