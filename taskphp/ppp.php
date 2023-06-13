<?php 
 
 session_start(); // Start the session
     //include_once 'classes/register.php';
    include 'classes/register.php';
    $reg = new Register();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $register = $reg->addRegister($_POST);
    }

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration page</title>
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
  .input-with-focus {
    border: 1px solid red !important;
    box-shadow: none !important;
  }
  .input-with-focus2 {
    border: 1px solid rgb(222, 226, 230) !important;
    box-shadow: none !important;
  }
  .input-group .border-start-0,
.input-group .border-start-0:focus {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
  .error {
            border-color: red !important;
        }
        @media (max-width: 600px) { /* Adjust the maximum width as per your requirement */
      .hide-on-small {
        display: none;
      }
    }

    
    .strong{
      color: red;
    }    
</style>
<style>
        .is-invalid {
            border-color: red !important;
        }

        .error-message {
            color: red;
            font-size: 0.8rem;
            margin-top: 5px;
        }
    </style>

  </head>
  <body>

         

<div class="container-fluid">    
             
    <div class="row">
    <div class="row  ">
      <div class="col-md-7 rounded hide-on-small ">
        <img class="img" src="images/task1.png" alt="">
    </div>


      <div class="col-md-4  mt-5">
      


      <form action="" method="POST" enctype="multipart/form-data" class="">
                <h5>Adventure starts here 🚀</h5>
                <p>Make your app management easy and fun!</p>

                <div class="mb-3 mt-4">
                  <label for="name">Username:</label>
                  <input type="text" name="name" id="name-input" placeholder="Enter Your username" class="form-control" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <div id="name-validation" class="invalid-feedback">This field is required.</div>
              </div>
                        
      <div class="mb-3 mt-4">
              <label for="email">Email :</label>
              <input type="email" name="email" id="email-input" placeholder="Enter Your email" class="form-control" required style="box-shadow: none !important; ">
              <div class="valid-feedback">Valid.</div>
              
              <div id="email-validation" class="error-message"></div>
          </div>
      

          
           
            <div class="mb-3 mt-4">
                  <label for="password">Password:</label>
                  <div class="input-group">
                      <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control border-end-0" required style="border-right: none!important;">
                      <div class="input-group-append">
                          <button type="button" class="btn border border-start-0">
                              <i class="fa fa-eye icon" id="togglePassword"></i>
                          </button>
                      </div>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>  

        

              <div class="form-check mb-3 mt-4">
                          <input class="form-check-input " type="checkbox" id="myCheck" name="remember" required>
                          <label class="form-check-label" for="myCheck">I agree on blabla.</label>
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback">Check this checkbox to continue.</div>
                      </div>


                      <input type="submit" value="Registration" name="submit" class="border-0 w-100 p-2 rounded color mt-4">
                    </form> 

     
                    <p class="text-center text-muted mt-4 mb-0">Already have an account? <a href="login.php"
                      class="color2 text-decoration-none"><u>Login here</u></a></p>

              <hr class="mt-4">
            

              <div class="text-center mt-4">
                  
                  <i class="fa fa-facebook text-primary  m-1  facebook" aria-hidden="true"></i>
                  <i class="fa fa-google text-danger p-2 m-1 google " aria-hidden="true"></i>
                  <i class="fa fa-twitter-square text-primary p-2  m-1 twiter " aria-hidden="true"></i>

              </div>
      </div> 
    </div>
    
    
</div>


<script>

document.getElementById("email-input").addEventListener("input", function () {
    var emailInput = document.getElementById("email-input");
    var emailValidation = document.getElementById("email-validation");
    var isValidEmail = validateEmail(emailInput.value);

    if (isValidEmail) {
      emailInput.classList.remove("is-invalid");
      emailValidation.textContent = "";
      emailInput.classList.remove("input-with-focus");
    } else {
      emailInput.classList.add("is-invalid");
      emailValidation.textContent = "Email is invalid.";
    
      emailInput.classList.add("input-with-focus2");
    }
  });

  const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };
  

const validate = () => {
  const $result = $('#result');
  const email = $('#email').val();
  $result.text('');

  if(validateEmail(email)){
   
  } else{
    $result.text(' is invalid.');
    $result.css('color', 'red');
  }
  return false;
}

$('#email').on('input', validate);
  

  // password hide and show 
  const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
  // toggle the visibility of the password
  if (password.getAttribute("type") === "password") {
    password.setAttribute("type", "text");
  } else {
    password.setAttribute("type", "password");
  }

  // toggle the icon
  this.classList.toggle("fa-eye-slash");
});

// add border color and box shadow to the icon button when password input field has focus
password.addEventListener("focus", function () {
  togglePassword.parentElement.parentElement.classList.add("input-with-focus");
});

password.addEventListener("blur", function () {
  togglePassword.parentElement.parentElement.classList.remove("input-with-focus");
});

//shadow none 
document.addEventListener('DOMContentLoaded', function() {
  var inputs = document.querySelectorAll('.form-control');
  
  inputs.forEach(function(input) {
    input.addEventListener('focus', function() {
      input.classList.add('input-with-focus');
    });

    input.addEventListener('blur', function() {
      input.classList.remove('input-with-focus');
    });
  });
});



//hide msg 
setTimeout(function() {
      var element = document.querySelector('.hide-after-3s');
      if (element) {
        element.style.display = 'none';
      }
    }, 3000); // 3000 milliseconds = 3 seconds

    </script>

  
    
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>