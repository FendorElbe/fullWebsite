<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script scr="custom.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../dsacard.css">

    <title>Taverne</title>
  </head>
  <body>
    <?php include ("../nav_dsa.php"); ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-8">

          <div class="container">
            <div class="row">
              <div class="col-12">
                Küche
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <ul class="list-group">
                  <li class="list-group-item list-header">Koch</li>
                  <li class="list-group-item">Kochen</li>
                </ul>
              </div>
              <div class="col-4">
                <div class="btn-group" role="group" aria-label="Koch1_Arbeiter">
                  <button type="button" class="btn btn-secondary arbeiter-btn">Alrik Alrikson</button>
                  <button type="button" class="btn btn-secondary">12</button>
                </div>
              </div>
              <div class="col-4">
                <div class="btn-group" role="group" aria-label="Koch1_Equipment">
                  <button type="button" class="btn btn-secondary equipment-btn">Goldener Kochlöffel</button>
                  <button type="button" class="btn btn-secondary">+4</button>
                </div>
              </div>
              <div class="col-2">
                <button type="button" class="btn btn-secondary">12</button>
              </div>
            </div>

          </div>

        </div>
        <div class="col-4 border-left">

          <div class="container-fluid p-0">
            Bilanz
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
