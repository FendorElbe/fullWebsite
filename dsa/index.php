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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <title>Übersicht - Kelin Asprat</title>
  </head>
  <body>
    <?php include ("nav_dsa.php"); ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-8">
          Grafische Übersicht
        </div>
        <div class="col-4 border-left">

          <div class="container-fluid p-0">
            <div class="row justify-content-end py-2">
              <div class="col-4 text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-light">Einnahmen</button>
                  <button type="button" class="btn btn-secondary">80</button>
                </div>
              </div>
              <div class="col-4 text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-light">Ausgaben</button>
                  <button type="button" class="btn btn-secondary">70</button>
                </div>
              </div>
              <div class="col-4 text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-light">Bilanz</button>
                  <button type="button" class="btn btn-success">+ 10</button>
                </div>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col">

                  <div class="card my-2">
                    <div class="row ">
                      <div class="col-md-4">
                        <img src="img/damaged.jpg" class="rounded w-100">
                        <a href="#" class="btn btn-primary w-100">Zur Taverne</a>
                      </div>
                      <div class="col-md-8 px-0 py-2">
                        <div class="card-block px-3">
                          <h4 class="card-title">Die Taverne ist beschädigt!</h4>
                          <p class="card-text">Ihr habt das alte und verfallene Geäude betrachtet. Schnell erkennt ihr, dass einige Reparaturen fällig sind.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card my-2">
                    <div class="row ">
                      <div class="col-md-4">
                        <img src="img/dorf.png" class="rounded w-100">
                        <a href="#" class="btn btn-primary w-100">Zum Dorf</a>
                      </div>
                      <div class="col-md-8 px-0 py-2">
                        <div class="card-block px-3">
                          <h4 class="card-title">Ihr habt ein Dorf gekauft!</h4>
                          <p class="card-text">Ist dies der Beginn von etwas großem?</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <script>
	var code = 0;
    document.addEventListener('keydown', function(event) {
	console.log("Hello world!");
      if (code == 0){
        if (event.keyCode == 80) {
          code++;
			console.log(code);
        }
        else {
          code = 0;
        }
      }
      else if (code == 1){
        if (event.keyCode == 72) {
          code++;
			console.log(code);
        }
        else {
          code = 2;
        }
      }
      else if (code == 2){
        if (event.keyCode == 69) {
          code++;
			console.log(code);
        }
        else {
          code = 0;
        }
      }
      else if (code == 3){
        if (event.keyCode == 88) {
			console.log(code);
          alert("Das Auge des Phex sieht dich an...");
        }
		code = 0;
      }
    }, true);
    </script>

  </body>
</html>
