
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0//img/favicons/favicon.ico">

    <title>Quản lý Admin</title>

  
  
    <link rel="stylesheet" href="{{('backend/css/bootstrap.min.css')}}" type="text/css">
    
    <link rel="stylesheet" href="{{('frontend/css/login.css')}}" type="text/css">
  </head>

  <body class="text-center">
    
     @csrf
    <form action="{!! route('formlogin') !!}" class="form-signin" method="post" >
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <img class="" src="https://vi.wizcase.com/wp-content/uploads/2022/02/en-bootstrap-logo.jpg" alt="" width="72" height="72">
      <h1 class="">Please sign in</h1>
      <?php
         $message = Session::get('message'); 
         if($message){
          echo '<strong style="color:red">',$message.'</strong>';
          Session::put('message',null);
         }
      ?>
      <input type="email" name="email"  class="email form-control" placeholder="Email address" >
      <input type="password" name="password" class="password form-control" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
   
    </form>
  </body>
</html>