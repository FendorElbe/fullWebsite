<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="custom.css">

    <title>Urlaube</title>
  </head>
  <body>
    <?php include ("nav_urlaube.php"); ?>
    <div class="container p-3">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#neuUrlaub">Neuer Urlaub</a></li>
        <li><a data-toggle="tab" href="#neuTag">Neuer Tag</a></li>
        <li><a data-toggle="tab" href="#neuBild">Bilderupload</a></li>
      </ul>
      <div class="tab-content">
        <div id="neuUrlaub" class="tab-pane fade in active">
          <p>Neuer Urlaub</p>
        </div>
        <div id="neuTag" class="tab-pane fade">
          <p>Neue Tage</p>
        </div>
        <div id="neuBild" class="tab-pane fade">
          <p>Neues Bild</p>
        </div>
      </div>
    </div>
  </body>
</html>
