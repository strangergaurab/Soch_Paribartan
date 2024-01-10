    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>SOCH_Websites</title>
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="output.css">
        
           <style>
  
.overlay{
	
    display: none;
        
    position: fixed;
    
    width: 100%;
        
    height: 100%;
    
    background: #fff;
        
    z-index: 10;
    
    opacity: 0.7;
    
    }
    
    
    .loader{
        
    width: 150px;
        
    height: 150px;
        
    border-radius: 50%;
    
    border:10px solid #333;
        
    position: relative;
        
    margin: 0 auto;
        top:30%;
        
    animation:loader 2s linear infinite;
    
    }
    
    
    @keyframes loader{
    50% {
    
    opacity: 0.5;
    
    }
    
    100% {
    
    transform:rotate(360deg);
    }
    }
    
    
    
    .loader:after{content: "";
      
    width: 35px;
      
    height: 35px;
    
    background: #333;
    
    position: absolute;
    
        border-radius: 50%;
    
        top: -20px;
        
    left: 55px;
    
    }
    
    
    .loader:before{
        content: "";
    
        width: 0;
        height: 0;
      
      border-left: 15px solid transparent;
    
        border-right: 15px solid transparent;
    
        border-bottom: 15px solid #333;
    
        position: absolute;
       
     transform: rotate(-90deg);
    
    top: -10px;
     
    left: 39px;
    
    }
    #submits{
        background: blue;
    }
    #submits:hover{
        opacity:0.7;
    }
           </style>
        <script>
            // JavaScript validation
            $(document).ready(function () {
                $("#signup_form").on("submit", function () {
                    var valid = true;

                    // First Name and Last Name should contain only letters
                    var namePattern = /^[A-Za-z]+$/;
                    var name = $("name").val();

                    if (!name.match(namePattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>First Name and Last Name should contain only letters.</div>");
                    }

                    // Validate email address using a regular expression
                    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    var email = $("#email").val();

                    if (!email.match(emailPattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Invalid email address.</div>");
                    }

                  
                    // Validate mobile number (assuming 10-digit numeric)
                    var mobilePattern = /^\d{10}$/;
                    var phone = $("#phone").val();

                    if (!phone.match(mobilePattern)) {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Invalid mobile number. Please enter a 10-digit numeric value.</div>");
                    }

                    // Check if address fields are not empty
                    var address = $("#address").val();

                    if (address.trim() === "") {
                        valid = false;
                        $("#signup_msg").html("<div class='alert alert-danger'>Address fields are required.</div>");
                    }

                    return valid;
                });
            });
        </script>
    </head>
    <body>
    
  
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Visitor Contact Details</div>
                    <div class="panel-body">

                        <form id="signup_form" method="post" action="register.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">First Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="l_name">Last Name</label>
                                    <input type="text" id="l_name" name="l_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Contact Number</label>
                                    <input type="tel" id="mobile" name="mobile" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address </label>
                                    <input type="text" id="address" name="address" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Subjects</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">comment</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Comments..." id="comment" name="comment"></textarea>
                                </div>
                            </div>
                            <p><br/></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <input style="width:100%;" value="Send Message" type="submit" name="signup_button"
                                           class="btn btn-success btn-lg" id="submits">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    

<!--Footer Section-->
<footer class="text-gray-600 body-font mt-5 " style="background-color:  #fc6f03; color: white;">
  <div class="container px-5 mx-auto">
    <div class="flex flex-wrap  md:text-left text-center order-first">
      <div class="lg:w-1/3 md:w-1/2   w-full px-4">
        <a href="PROGRAMS.HTML"><h2 class="title-font underline-on-hover scale-up-on-hover font-bold text-underline  hover:underline text-white tracking-widest text-sm mb-3">PROGRAMS</h2></a>
        <nav class="list-none  mb-10 ">
          <li>
            <a href="PROGRAMS.HTML" class="text-black  hover:underline  text-lg">Awarness Program</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Blood Donation Program</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg" >Deusi Bhailo Program</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Justice For Program</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Help Children Program</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/3 md:w-1/2  w-full px-4">
        <a href="PROGRAMS.HTML"><h2 class="title-font underline-on-hover scale-up-on-hover font-bold text-underline  hover:underline text-white tracking-widest text-sm mb-3">MEMBERS</h2></a>
        <nav class="list-none mb-10 ">
          <li>
            <a href="PROGRAMS.HTML"  class="text-black  hover:underline  text-lg">Administration</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Executive Head</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black  hover:underline  text-lg">Program Manager</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black  hover:underline  text-lg">Others</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/3 md:w-1/2  w-full px-4">
        <a href="PROGRAMS.HTML"><h2 class="title-font underline-on-hover scale-up-on-hover font-bold text-underline  hover:underline text-white tracking-widest text-sm mb-3">Let Us Help You !</h2></a>
        <nav class="list-none mb-10 ">
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Want To Study</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Want Abroad Study</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Want To Donate</a>
          </li>
          <li>
            <a href="PROGRAMS.HTML"  class="text-black hover:underline  text-lg">Want To Be Part Of SPN</a>
          </li>
        </nav>  
      </div>
    </div>
  </div>
      
  <div class="bg-gray-100">
    <div class="container  mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="image/logo-fotor-20231125235651-removebg-preview.png" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-9 h-9 text-white p-2 bg-white rounded-full"
        viewBox="0 0 24 24" alt="Logo">
        <span class="ml-3 text-xl">SPN</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2023 SPN
        <a href="https://www.facebook.com/profile.php?id=100092280244159" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@samratthapa</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a href="main.html" class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="main.html" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="main.html" class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="main.html" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
    </body>
    </html>

