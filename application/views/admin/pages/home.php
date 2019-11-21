
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Album example · Bootstrap</title>


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .carousel {overflow:hidden}
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.3/examples/album/album.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Info Pangan Malang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>

  </div>
</nav>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Pasar</h1>
      <p class="lead text-muted">
      Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php foreach ($pangan as $value): ?>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <img class="mx-auto d-block pt-2" src="<?php echo base_url('gambar/'.substr($value['gambar'], 31))?>" alt="" width="80px">
              <!-- <title>Placeholder</title> -->
              <div class="card-body">
                <p class="card-text"><?php echo $value['nama'] ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <strong class="text-muted"><?php echo "Rp. ".number_format($value['harga']) ?></strong>
                </div>
              </div>
              <?php foreach ($value['status'] as $x): ?>
                <?php if ($x['harga'] == "tetap"): ?>
                  <div class="card-footer bg-info text-right text-white">
                    Harga Tetap <?php echo "Rp. ".number_format($x['beda']) ?>
                    <img src="<?php echo base_url('assets/images/z-equal.png'); ?>" alt="">
                  </div>
                <?php endif ?>
                <?php if ($x['harga'] == "naik"): ?>
                  <div class="card-footer bg-danger text-right text-white">
                    Harga Naik <?php echo "Rp. ".number_format($x['beda']) ?>
                    <img src="<?php echo base_url('assets/images/z-up.png'); ?>" alt="">
                  </div>
                <?php endif ?>
                <?php if ($x['harga'] == "turun"): ?>
                  <div class="card-footer bg-success text-right text-white">
                    Harga Turun <?php echo "Rp. ".number_format($x['beda']) ?>
                    <img src="<?php echo base_url('assets/images/z-down.png'); ?>" alt="">
                  </div>
                <?php endif ?>
              <?php endforeach ?>

            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
