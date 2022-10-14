<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?= $title;?></title>
  </head>
  <body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top"  id="mainNav">
  <div class="container">
  
    <a class="navbar-brand" href="#page-top">WEB SIAK</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link js-scroll-trigger" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/Kuliah/data_dosen">Data Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/Kuliah/mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/Kuliah/matkul">Data MataKuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/Kuliah/data_konkul">Data Kontrak Kuliah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/Kuliah/logout">Logout</a>
          </li>
        
      </ul>
    </div>
  </nav>
  </div>
   


<?= $this->renderSection('content');?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
  
</html>