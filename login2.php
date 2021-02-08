<?php include 'header2.php' ?>
<?php include 'connect.php' ?>
<?php session_start();
error_reporting(0);
$mob = $_SESSION['mobile'];
// $newotp= $_GET['otp'];
// if($newotp== $_SESSION['otp']){
//     echo "yes";
// }
// else{
//     echo "no";
// }

?>
<style>
  .second_box {
    display: none;

  }
</style>
<!---header--->
<!---login--->
<div class="content">
  <div class="main-1">
    <div class="container">
      <div class="login-page">
        <div class="account_grid">
          <div class="col-md-12 login-left">

            <div class="col-md-6 login-right">
              <h3>registered</h3>
              <p>If you have an account with us, please log in.</p>
              <form>
                <div class="first_box">
                  <span>Mobile number<label>*</label></span>
                  <input type="text" id="mob">
                </div>
                <div class="first_box">
                  <span>verify otp<label>*</label></span>
                  <input type="submit" value="send Otp" id="submitotp">
                </div>
                <div class="second_box">
                  <span>Enter otp<label>*</label></span>
                  <input type="text" id="otpfield">
                </div>
                <div class="second_box">
                  <span>verify otp<label>*</label></span>
                  <input type="submit" value="NEXT" id="submit">
                </div>
                <span id=show></span>
                <a class="forgot" href="#">Forgot Your Password?</a>
                <button class="btn btn-successr" ><a href='login.php'>Login</a></button>
              </form>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>



    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $("#submitotp").click(function(e) {
        e.preventDefault();
        mobile = $("#mob").val();
        console.log(mobile);
        if (/^\d{10}$/.test(mobile)) {
          $.ajax({
            url: 'verified.php',
            type: 'GET',
            data: {
              mobile: mobile
            },
            success: function(result) {
              if (result == "correct") {
                $(".first_box").hide();
                $(".second_box").show();
              }
            }
          });
        }
      })
    })

    $(document).ready(function() {
      $("#submit").click(function(e) {
        e.preventDefault();
        var otp = document.getElementById("otpfield").value;
        $.ajax({
          url: 'valid.php',
          type: 'GET',
          data: {
            otp: otp
          },
          success: function(result) {
            console.log(result);
            if (result == "yes") {
              $("#show").html("otp verified");
              $("#show").css('color', 'green');
              window.location.href = "account.php";

            } else {
              $("#show").html("invalid otp");
              $("#show").css('color', 'red');
            }
          }
        });

      })
    })
  </script>