<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
  </head>
  <body style="background-color:rgb(39, 15, 39)" class="m-0 p-0">
    <div class="row">
        <div style="background-color: rgb(88, 29, 88)" class="col-md-2 mx-2 p-0  min-vh-100">
        <ul style="background-color: rgb(88, 29, 88) ;" class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-light text-center" href="#"><h3 class="font-weight-bold mt-5">Soni Kajal</h3></a>
    </li>
    </ul>
        <ul class="navbar-nav mr-auto my-5">
          <li class="nav-item">
        <img style="  border-radius: 50%;" class="container" src="https://tse2.mm.bing.net/th?id=OIP.Gfp0lwE6h7139625a-r3aAHaHa&pid=Api&P=0" alt="...">
    </li>
    </ul>
    <ul style="background-color: rgb(88, 29, 88);" class="navbar-nav mr-auto mh-100">
     <li class="nav-item">
            <a class="nav-link text-light text-center curser1" href="index.php?home=true">HOME</a>
    </li>
    <li class="nav-item">
            <a class="nav-link text-light text-center curser2" href="index.php?work=true">WORK</a>
    </li>
    <li class="nav-item">
            <a class="nav-link text-light text-center curser3" href="index.php?education=true">EDUCATION</a>
    </li>
    <li class="nav-item">
            <a class="nav-link text-light text-center curser4 " href="index.php?hobbies=true">HOBBIES</a>
    </li>
    <li class="nav-item">
            <a class="nav-link text-light text-center curser5" href="index.php?contact=true">CONTACT ME</a>
    </li>
    <br>
    <br>
    <br>
    <br>
    </ul>
  </div>
  <div class="col-md-8">
   <?php
    if(isset($_GET['home'])&& $_GET['home']=="true"){
      ?> 
  <br><br><br><br><br>
    <div class=" row text-light mx-5 my-5 ">
    <div class="col-md-7 container pt-5 justify-content-center">
      <h2 class="text-light">About Me</h2>
      <br>
      <br>
      
      <h3>I am <b>Soni Kajal</b><br>
      currently pursuing B.E in G.E.C Rajkot</h3>
      <p>I want to be a successful full stack developer</p>
      <p>looking for an opportunity to use and enhance my knowledge in Web Development</p>
      <a style='background-color: rgb(88, 29, 88);' href="document/resume2.pdf" class='btn text-light btn-outline-light'>View CV</a>
    </div>
    <div class="col-md-5"><br><br>
    <img style="height:500px" src="https://tse2.mm.bing.net/th?id=OIP.LfBtLCx5jWjmzpI_LDs5TwHaL-&pid=Api&P=0" alt="...">
    </div>
    </div>
    
  <?php }

     if(isset($_GET['work'])&& $_GET['work']=="true"){
      include '\xampp\htdocs\portfolio\work.html';
    }

   elseif(isset($_GET['contact'])&& $_GET['contact']=="true"){
    include '\xampp\htdocs\portfolio\contact.html';
   }
elseif(isset($_GET['education'])&& $_GET['education']=="true"){
  include '\xampp\htdocs\portfolio\education.html';
}
elseif(isset($_GET['hobbies'])&& $_GET['hobbies']=="true"){
  include '\xampp\htdocs\portfolio\hobbies.html';
}

?>

  </div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, the Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>