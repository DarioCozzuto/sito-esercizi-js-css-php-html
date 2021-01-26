<?php

    $indirizzo = $_POST['hemail'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $info = $_POST['info'];
    $richiesta = $_POST['tipoRichiesta'];
    $messaggio = $_POST['messaggio'];
    $headers =  "MIME-Version: 1.0\n";
    $headers .=  "Content-type: text/html; charset=UTF-8\n";
    $headers .= "From:" . $_POST['yemail'];
    $riceviMail = $_POST['email'];

  
    
    mail($indirizzo, $nome, $riceviMail, $headers);
 
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
#navbar {
  overflow: auto;
  background-color: #333;
  position: fixed;
  bottom: 0;
	width: 100%;
}
	</style>
<title>EMAIL FORM</title>
</head>
<body>
	<div class="container">
    <div class="row">
        <div  class="col-md-8 m-auto">
            <h1 class="bg-primary my-5">EMAIL SERVICE</h1>
        </div>
    </div>

    <div class="row">


        <div class="col-md-8 m-auto">
            <form method="post" action="mail_html.php">

               <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Object</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="...." name="nome">
                   </div>
				</div>
                
                <div class="form-group row">
                 <label for="email" class="col-sm-2 col-form-label">"From"</label>
                   <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="...." name="yemail">
                    </div>
				</div>
				
				 <div class="form-group row">
                 <label for="email" class="col-sm-2 col-form-label">To</label>
                   <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="...." name="hemail">
                    </div>
				</div>

                <hr>
        
                <div class="form-group row">
                    <label for="textarea" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                    <textarea class="form-control"  placeholder="...." rows="5" name="email"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-info mt-4">Send</button>
            </form>

        </div> 
      </div>
    </div>

	<footer>	
 <nav id="navbar"><div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.html">Home Page</a></li>
    </ul>
  </div>
	</nav>
</footer>
	</body>
</html> 