<?php include 'header2.php' ?>
<?php
session_start();
$mob = $_SESSION['mobile'];
?>

<div class="content">
	<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
				<form>
					<div class="register-top-grid">
						<h3>personal information</h3>
						<div>
							<span>First Name<label>*</label></span>
							<input type="text" name="name" id="name">
						</div>
						<div>
							<span>Last Name<label>*</label></span>
							<input type="text">
						</div>

						<div>
							<span>select Security question<label>*</label></span>

							<select name="cars" id="questions" name="select" style="width:95%;height:6%;">
								<option value="" disabled selected>Select Security Question</option>

								<option value="What was your childhood nickname?">What was your childhood nickname?</option>
								<option value="-What is the name of your favourite childhood friend?saab">-What is the name of your favourite childhood friend?Saab</option>
								<option value="-What was your favourite place to visit as a child?">-What was your favourite place to visit as a child?</option>
								<option value="What was your dream job as a child?">What was your dream job as a child?</option>
								<option value="What was your dream job as a child?">What was your dream job as a child?</option>
								<option value="-What is your favourite teacher's nickname?">-What is your favourite teacher's nickname?</option>
							</select>
							<span style="padding-top:4%">Give answer<label>*</label></span>
							<input type="text" placeholder="answer" name="ans" id="ans" />


						</div>
						<div>
							<span>Mobile number<label>*</label></span>
							<input type="text" id="mobile" name="mobile" readonly value=<?php echo $mob ?>>
						</div>
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text" name="email" id="email" onblur="validateEmail(this);" />
						</div>
					</div>

					<div class="clearfix"> </div>
					<a class="news-letter" href="#">

			</div>
			<div class="register-bottom-grid">
				<h3>login information</h3>
				<div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required onfocus="CheckPassword(password)">
				</div>

			</div>
			</form>
			<div class="clearfix"> </div>
			<div class="register-but">
				<form>
					<input type="submit" value="submit" name="info" id="info">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- registration -->

</div>
<!-- login -->
<!---footer--->
<div class="facebook-section">
	<?php include 'footer.php' ?>
</div>
<!---footer--->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
	function validateEmail(emailField) {
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		if (reg.test(emailField.value) == false) {
			alert('Invalid Email Address');
			return false;
		}

		return true;

	}

	$(document).ready(function() {
		$("#info").click(function(e) {
			e.preventDefault();
			var mobile1 = $("#mobile").val();
			var email = $("#email").val();
			var name = $("#name").val();
			var select = $("#questions").val();
			var ans = $("#ans").val();
			var password = $("#password").val();
			console.log(mobile1);
			if (email != null && name != null && select != null && ans != null && password != null) {

				if (/^\d{10}$/.test(mobile1)) {
					if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
						$.ajax({
							url: 'insert.php',
							type: 'POST',
							data: {
								mobile1: mobile1,
								email: email,
								ans: ans,
								password: password,
								name: name,
								select: select,

							},
							success: function(result) {
								alert(result);
								window.location('login.php');

							}
						});

				} else {
					alert("Invalid number in  must be ten digits");

					return false;
				}
			} else {
				alert("firstly fill all fields correctly");
			}

			//     else{
			//     
			// }
		})
	})

	function checkpassword(password) {
		password.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (password.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (password.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (password.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (password.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
	}
</script>

</html>