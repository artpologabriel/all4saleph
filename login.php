<?
include ("sessions.php");
include ("globalconfig.php");
?>


<div style="height: 6.1rem; margin-bottom: 50px;" >
            <!-- container -->
        
 </div>
<div class="col-md-12">
                <center style="margin-bottom: 105px;" >
                <div class="col-md-4">
            <!-- Login -->
            <div  class="welcome-text">
                    <h3>We're glad to see you again!</h3>
                    <span>Don't have an account? <a onclick="next('window','register.php');" class="register-tab" >Sign Up!</a></span>
                </div>
             
    <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user" aria-hidden="true"></i></i></span>
  </div>
    <input type="email" class="form-control " placeholder="Username" id="u" onchange="addtoPost('&username='+this.value)" onclick="anchorIt(this.id)"  onkeypress="OnEnterPostIt('processlogin_mobile.php')">
    <div class="input-group-prepend">
  </div>
</div> 

    <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text " id="inputGroup-sizing-sm"><i class="fa fa-key" aria-hidden="true"></i></span>
  </div>
    <input  class="form-control"type="password" id="p" placeholder="Password" onchange="addtoPost('&password='+this.value)"  onkeypress="OnEnterPostIt('processlogin_mobile.php')" onclick="anchorIt(this.id)">
    <div class="input-group-prepend">
  </div>
</div> 

   <div class="input-group input-group-sm mb-3">
  <button class="button full-width button-sliding-icon ripple-effect" form="login-form" onClick="postItGoTo('processlogin_mobile.php')">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

        </div>
        </center>
    </div>



        






























