<!DOCTYPE html>
<html>
<head>
  <title>e-commerce</title>
</head>
<body>

  
    
    <fieldset>
      <legend>Login</legend>
      <form  action="{{ url('/home') }}" method="post">
        {{ csrf_field() }}
        <input type="text" placeholder="username"><br>
        <input type="password" placeholder="password"><br>
        <input type="submit" value="Submit">
      </form>

    </fieldset>
  

</body>
</html>