<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
	
	
   
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
      }

      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

    </style>

    
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="connect-admin.php">
        <h2 class="form-signin-heading">Admin Registration</h2>
		
		<label for="inputUname" class="sr-only">Username</label>
        <input type="name" name="a_name" id="inputEmail" class="form-control" placeholder="User Name" required>
		
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="a_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="a_password" id="inputPassword" class="form-control" placeholder="password" required>
		
		<label for="inputFname" class="sr-only">Locality</label>
        <input type="name" name="a_locality" id="inputEmail" class="form-control" placeholder="Locality" required>
		
		<label for="inputFname" class="sr-only">Contact</label>
        <input type="name" name="a_contact" id="inputEmail" class="form-control" placeholder="contact" required>
		
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" required> Term & condition
          </label>
        </div>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div> 
  </body>
</html>


