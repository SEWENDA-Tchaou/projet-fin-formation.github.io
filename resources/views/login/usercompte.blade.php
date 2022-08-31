
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./assets/css/connexion.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/main.css') }}">
    <title>usercompte</title>
  </head>
  <body>
  
  <!-- header -->
  <div class="header">
    <!-- header-black -->
    <div class="header-black">
        <a href="" class="mail-link">
            <img src="./assets/images/nouvelle-enveloppe-de-courrier-electronique.png" class="enveloppe "
                alt="enveloppe electronique">
        </a>
        <img src="./assets/images/whatsapp.png" class="enveloppe" alt="whatsapp">
        <div class="">
            <p class="header-black-contact">Contactez nous</p>
        </div>

    </div>
    <!-- end header-black -->

    <!-- navbar -->

    <div class="header-nav">
        <div class="logo-background d-flex  ">
            <img src="./assets/images/logo.png" class="logo mt-1" alt="whatsapp">
            <span style="color: #00CCFF;" class="fs-5 mt-1">KNOWLEDGE</span> <span
                style="color: #7CF4E7; margin-left: 3%;" class="fs-5 mt-1">TECHNOLOGY</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active text-light p-5" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light p-5" href="{{ route('formation') }}">Formation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light p-5" href="{{ route('inscription') }}">Inscrivez-vous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active text-light p-5" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="block-image-accueil">
            <img src="/assets/images/2-blackstudent.jpeg" class="imag-invisible img-fluid" alt="Etudiants">
            <div class="text-accueil">
                <div class="text">
                    <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>
                    <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>

                    <p class="text-light text-center"> </p>
                </div>
            </div>
        </div>
    </div>
   
    <!--end navbar -->

</div>
<!-- end-header -->


  <!--  -->
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