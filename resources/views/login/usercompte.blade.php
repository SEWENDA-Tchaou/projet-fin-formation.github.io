
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./assets/css/connexion.css') }}">
    <title>index</title>
  </head>
  <body>
  <h1 class="m-5"></h1>
   <div class="image-form m-0">
   
        <div class="color">
            <form action="connexion.php" method="post">    
                <div class="p-5">
        
                    <div class="login-singn container d-flex  mt-4" id="vv" >
                        <div class="mb-3 ">
                            <button class="btn"><a href="#">Créer votre compte</a></button>
                        </div>
        
                        <div class="mb-3">
                            <button class="btn "><a href="{{ asset('connexion') }}">Connectez-vous</a></button>
                        </div>
                    </div>
        
                    <div id="vv"> 
                        
                        <div class=" my-5">
                            <input type="text" class="form-control container" name="nom" placeholder="Nom d'utilisateur"  >
                        </div>
        
                        <div class=" my-5">
                            <input type="password" class="form-control container" name="password" placeholder="Mot de passe" >
                        </div>

                        <div class=" my-5">
                            <input type="password" class="form-control container" name="conffirmpassword" placeholder="confiemez le Mot de passe" >
                        </div>
        
                        <button type="submit" class="btn-creer"name="valider" ><a href="{{ asset('inscription') }}">céer</a></button>  
                    </div> 
                </div>
                            
            </form>
        </div>
   </div>

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>