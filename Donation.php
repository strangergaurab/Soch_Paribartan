 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
  <style>
    
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* Global styles */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}
.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
}


/*  Header */
header {
  background-color: #316a77;
  color: #fff;
  padding: 50px 0;
}

/* Style for the header h1 */
header h1 {
  font-size: 28px;
  font-weight: bold;
}
.topnav a {
  color: #fff;
  text-decoration: none;
  margin: 0 20px;
  font-size: 18px;
  transition: color 0.3s;
}

.topnav a:hover {
  color: #1ac6e9;
}

/* Style for the top navigation bar */
.topnav {
  float: left;
  
}
 /* .topnav :hover {
  color: #1ac6e9;

}  */
/* Style for the active link in the top navigation bar */
.topnav a.active {
  color: #3acbf0;
}

/* Style for the container navigation */
.right-nav ul {
  list-style: none;
  text-align: center;
  padding: 10px 0;
  margin: 0; /* Remove top margin */
  float: right;
}
.right-nav ul li {
  display: inline;
  margin-right: 20px;
  
}

.right-nav ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 18px;
  transition: color 0.3s;
}

/* Style for the active link in the container navigation */
.right-nav ul li a:hover {
  color: #1ac6e9;
}


/* Hero Section */
.hero {
  padding: 30px 0;
  text-align: center;
  margin-bottom: 20px;
  background-color: #f5f5f5;

 }
 
 /* Place text in the middle of the image */
 .text hero-container{
   text-align: center;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   color: white;
   
 }

.hero h2 {
  font-size: 36px;
  margin-bottom: 20px;
  margin-top: 20px;
  color: #1ca4da;
  font-family: cursive;
  font-style: italic;
  text-align: center;
  margin-left: 80px;
  
  
  
}

.hero p {
  font-size: 18px;
  margin-bottom: 40px;
}

.btn{
  display: inline-block;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  padding: 10px;
  margin-top: 12px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #555;
}


/* About Section */

.about-us {
  display: flex;
  align-items: center;
  height: 100vh;
  width: 100%;
  /*padding: 90px 0;*/
  background: #fff;
}
.image {
  height: auto;
  width: 420px;
  border-radius: 8px;
}
.about {
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  padding:0%;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text {
  width: 540px;
  margin: 8px;
}


.text p {
  font-size: medium;
  color: #333;
  line-height: 15px;
  letter-spacing: 1px;
}

.data {
  margin-top: 30px;
  margin-bottom: 10px;
}
.connect {
  font-size: 18px;
  background: #e4d0d0
  
  text-decoration: none;
  border: none;
  padding: 10px 12px;
  border-radius: 10px;
  transition: 0.5s;
}

.connect:hover {
  background: #000;
  border: 1px solid #4070f4;
}



/* Donation Section */

.donate {
margin: 5px auto;
background: color #f5f5f5;
padding: 40px;
max-width: 600px;
width: 100%;
background-color: #6c96b3;
}


.donate h3 {
  font-size: 24px;
  margin-bottom: 5px;
}

.donate p {
  font-size: 18px;
  color: #777;
  margin-bottom: 5px;
}

.form-group {
  margin: 7px auto;
  display: inline;

}

label {
  display: block;
  margin-bottom: 0px;
}

input[type="text"],
input[type="email"],
input[type="phone"]
input [type="password"]
	

input{
 
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=tel], select {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.input-field {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.input-field_terms {
  display: inline;

}
.donationbtn {

  max-width: 600px;
  margin-left: 720px;
  margin-right: auto;
}

button{
  background-color:#0170b9;
  color: #fff;
  padding: 10px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color:#000;
  border: 1px solid #4070f4;
 
}

.amount {
  display:inline-flex;
  gap: 10px;

}
#data {
  margin-left: 645px;
}

.dnow {
  font-size: 16px;
  background: #05788f;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 12px;
  margin: 10px;
  border-radius: 6px;
  transition: 0.5s;

}
.dnow:hover {
  background: #333;
  border: 1px solid #01081b;
}

#donation_amount{
   width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.error-message {
  color: red;
  font-size: 0.8em;
  height: 20px;
}
/* Footer Section */

footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

footer p,footer ul li a {
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  margin-bottom: 5px;
}

footer ul {
  list-style: none;
  margin-top: 10px;
}

footer ul li {
  display: inline;
  margin-right: 10px;
}

  /* For mobile phones: 
  */@media screen and (max-width: 768px) {
  h4 {
    padding: 0 20px;
    font-size: 36px;
  }
  .text {
    font-size: 17px;
    margin-bottom: 0;
  }
  .about {
    flex-direction: column;
    padding: 20px;
  }
  .about-us {
    padding: 0;
  }
}
  
  </style>

</head>
<body>
    
 <section class="donate" id="donate">
    <div class="form-group" id="form-group">

      <h3>Donate Now</h3>
      
      <div class=" box">
      
      <form action="form.php" method="post" onSubmit="return validateForm()">

      <div class="input-field">
    <label for="name">Name:</label>
    <input type="text" name="full_name" id="full_name" placeholder="Full Name" required>
    <div id="full_name_error" class="error-message"></div>   
</div>
<div class="input-field">
        <label for="email">Email:</label>
        <input type="text" name="email" id= "email" placeholder=Email required><br>
        <div id="email_error" class="error-message"></div>  

</div>
<div class="input-field">
<label for="gender-select">Gender</label>
<div class="custom_select" required> 
            
            <select name="gender" id="gender" required>
              <option value="" >Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
</div>
</div>
<div class="inputfield">
     
  <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" placeholder="Phone No:" required><br>
        <div id="phone_error" class="error-message"></div>


  <label for="address">Address:</label>

        <input type="text" placeholder="Address"  id ="address" name="address" required><br>
</div>
  <div class="input-field">
    <label for="donation_amount">Donation Amount:</label>
    <!-- <input type="radio" name="donation_amount" id="donation_amount" value="50" /> $30
    <input type="radio" name="donation_amount" id="donation_amount" value="50" /> $50
    <input type="radio" name="donation_amount" id="donation_amount" value="100" /> $100
    <input type="radio" name="donation_amount" id="donation_amount" value="150" /> $150 -->
<input type="number" id="donation_amount" name="donation_amount" min="200" max="2500000" step="50" placeholder="200-250000" />
  
</div>
  
    <h4><span>Program:</span></h4>
          <select name="donation_type" id="donation_type" required>
        
            <option selected value=''>Select Program</option>
            <option value='Blood'>Blood donation</option>
            <option value='Awarness'>Awarness Program</option>
            <option value='Justic'>Justice For Program</option>
            <option value='Help_Children'>Help Children Program</option>
         </select> 


	<div class="inputfield_terms">
          <label  for="checkbox" class="check">
            <input type="checkbox"  id= "checkbox"  required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       	</div> 

       <button type="submit" value="Submit">Submit </button>
     
    </form>
  </div>
  </div>
  </section>

  <script>
function validateForm() {
        var full_name = document.getElementById('full_name');
        var email = document.getElementById('email');
        var phone = document.getElementById('phone');
        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('confirm_password');

        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var phoneRegex = /^9\d{9}$/;
        var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        function displayError(inputElement, message) {
            const errorElementId = inputElement.id + "_error";
            const errorElement = document.getElementById(errorElementId);
            errorElement.textContent = message;
            errorElement.setAttribute('role', 'alert');
            inputElement.focus();
        }

        if (full_name.value.trim() === '') {
            displayError(full_name, 'Full Name is required.');
            return false;
        }

        if (!emailRegex.test(email.value)) {
            displayError(email, 'Please provide a valid email address.');
            return false;
        }

        if (!phoneRegex.test(phone.value)) {
            displayError(phone, 'Invalid Phone number');
            return false;
        }

        if (!passwordRegex.test(password.value)) {
            displayError(password, 'Invalid Password. Minmum 8 char 1 Upper 1 number .');
            return false;
        }

        if (confirmPassword.value !== password.value) {
            displayError(confirmPassword, 'Passwords do not match.');
            return false;
        }

        return true;
    }
</script>
   
  </body>
  <html>