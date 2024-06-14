<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<!-- start header-menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light position-sticky fixed-top mb-2">
   <div class="container">
       <a class="navbar-brand" href="./index.php" style="font-size: 170%;"><strong>KoPay Store</strong></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <div class="navbar-nav">
           <a class="nav-item nav-link" href="admin.php">Admin</a>
           <a class="nav-item nav-link" href="customer.php">Customer</a>
           <a class="nav-item nav-link" href="buku.php">Kopi</a>
           <a class="nav-item nav-link" href="index.php">Halaman Depan</a>

         </div>
           <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
               <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php echo $_SESSION["username"]; ?>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Profile</a>
                 <a class="dropdown-item" href="#">Setting</a>
                 <a class="dropdown-item bg-dark text-light" href="logout.php">Logout</a>
               </div>
             </li>
           </ul>
       </div>
   </div>
 </nav>
<!-- end header-menu -->
