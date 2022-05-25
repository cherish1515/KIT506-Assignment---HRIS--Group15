<!DOCTYPE html>
<html lang="En">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport"content"width=device-wodth, initial-scale=1.0">
     <title> Index </title>

    <link rel= "stylesheet" href="{{ asset('css/Main.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

</head>



<body>
	<br><br><br><br><br><br><br>
	<div class="container border bold">
     <form id="login" action="{{route('checklogin')}}" style="text-align: center">
					
					<br><br><br>
					<h1>Login HRIS</h1><br><br>

                    <div class="data"> 
						<input type="text" name="username" placeholder="User Name" autocomplete="off" required>
                    </div><br>

                    <div class="data">
                        <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    </div><br>

					<div class="btn">
                        <button type="submit" class="btn btn-secondary">Login</button>
					<br><br><br><br><br>
	</form>
    </div>

 
  
      
    
    
</body>
</html>
    
    
   