<!DOCTYPE html>
 
<html lang = "en">

<head> 
	<title> Dunder Mifflin Customer </title>
	<meta charset = "utf-8"/> 
		
	<link rel="stylesheet" href="stylesheet2.css" type="text/css"/>

</head>
 
<body>

	<div class = "box" position = "absolute">
	<form method = "post" onsubmit = "required()" action="try1.php">
		<table id = "form">
			<th id="th1">
			<div class = "title"> <h2> Dunder Mifflin Paper </h2></div>
			<br/>
			
			<label> Customer's First Name 
					<input type = "text" placeholder = "Enter your first name"
							id = "Fname" name = "StylistFname" 
					>

			</label>
			
			<br/><br/>
			
			<label> Customer's Last Name 
					<input type = "text" placeholder = "Enter your last name"
							id = "Lname" name = "StylistLname"	
					>
					
			</label>
			
			<br/><br/>
			
			<label> Customer's Password 
					<input type = "password" placeholder = "Enter your Password"
							id = "PW2"	name = "StylistPW"
							title = "Your password should contain maximum of 10 characters and must have atleast one uppercase letter, one special character, and one numeric character"
					>
					
			</label>
			
			<br/><br/>
			
						
			<label> <input type = "checkbox" id = "CheckBox" name = " Checkox " >
					Check the box to request an Email confirmation of your appointment
			</label>
			
			<br/>
			<br/>
			
			Select an appointment option: 
				<select name = "dropdown" id = "transaction" >
					<option> Choose one of the following actions </option>
					
					<option> Book an Appointment </option>
					
					<option> Cancel an Appointment </option>
					
			</select>
			<br/>
			<br/>
				<p id = "sub"> 
					<input type = "submit" value = "Submit"   name = "Login" > 
					<input type = "reset" value = "Reset" />
				</p>
			</th>
		</table>
		
	</form>
	</div>
		<script >
				
		function required(){
		
			var FirstName = document.getElementById("Fname");
			var LastName = document.getElementById("Lname");
			var pw = document.getElementById("PW");
			//var IDnum = document.getElementById("ID");
			//var PhoneNum = document.getElementById("phoneN");
			var Email = document.getElementById("email");
			var Check = document.getElementById("CheckBox");
			var transc = document.getElementById("transaction");
			
			var FirstNameReg = /^[A-Za-z]+\s*[A-Za-z]*$/;
			var LastNameReg = /^[A-Za-z]+\s*[A-Za-z]*$/;
			var pwReg = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{0,10}$/;
			//var IDnumReg = /^[0-9]{8}$/
			//var PhoneNumReg = /^[0-9]{3}[-\s]?[0-9]{3}[-\s]?[0-9]{4}$/
			var EmailReg = /^[^!#$%&'*+-\/=?^_`{|].*[A-Za-z0-9!#$%&'*+-\/=?^_`{|]{1,64}[@]{1}[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
			
			//First name validation (empty and correct)
			if(FirstName.value.trim() == "" || FirstName.value == null || FirstName.value == undefined || FirstName.value.search(FirstNameReg) == -1){
				alert('Please enter your valid first name. \nYour first name cannot contain any numeric characters.');
				FirstName.style.borderColor = "red";
				return false;
			}
			else{
				FirstName.style.borderColor = "black";
			}

			//Last name validation (empty and correct)
			if(LastName.value.trim() == ""|| LastName.value == null || LastName.value == undefined || LastName.value.search(LastNameReg)== -1){
				alert('Please enter your valid last name. \nYour last name cannot contain any numeric characters.');
				LastName.style.borderColor = "red";
				return false;
			}
			else{
				LastName.style.borderColor = "black";
			}
			
			// password validation (just empty or not)
			if(pw.value.trim() == "" || pw.value==null || pw.value == undefined){
				alert('Please enter your password');
				pw.style.borderColor = "red";
				return false;
			}
			else{
				pw.style.borderColor = "black";
			}
			
			//email
			if(Check.checked == true ){
				if(Email.value.trim() == ""|| Email.value==null || Email.value == undefined){
					alert('Please enter your email address');
					Email.style.borderColor = "red";
					return false;
				}
				else{
					Email.style.borderColor = "black";
				}
			}
			
			//appointment
			if(transc.value == "Choose one of the following actions"){
				alert('Transaction is required. Choose one of the following actions');
				return false;
			}

			var checkNormal = /^[a-z]{0,10}$/; //only lower case letters NO Num, NO UCL, No SC
			var checkSC = /^(?=.*[!@#$%^&*])/;
			var checkNum = /^(?=.*[0-9])/;
			var checkUCL = /^(?=.*[A-Z])/;
			var maxLen = 10;
			
			if(pw.value.search(pwReg)== -1){
			console.log(pw.value);
				if(pw.value.length > maxLen ){
					alert('Conditions for password not met. \nThe length of your password cannot be more than 10 characters');
					return false;
				}
				if(pw.value.search(checkNormal) == 0){
					alert('Conditions for password not met. \nYou must have atleast one numeric character, one special character, and one Upper-case Letter in your password');
					pw.style.borderColor = "red";
					return false;
				}
				
				var passCheck = checkNum.test(pw.value);
				if(passCheck == false){
					alert('Conditions for password not met. \nYou must have atleast one numeric character in your password');
					pw.style.borderColor = "red";
					return false;
				}
				var passCheck = checkSC.test(pw.value);
				if(passCheck == false){
					alert('Conditions for password not met. \nYou must have atleast one special character in your password');
					pw.style.borderColor = "red";
					return false;
				}
				var passCheck = checkUCL.test(pw.value);
				if(passCheck == false){
					alert('Conditions for password not met. \nYou must have atleast one Uppercase letter in your password');
					pw.style.borderColor = "red";
					return false;
				}
				
			}
				pw.style.borderColor = "black";
		} 
		


	</script>
</body>
  
 </html>