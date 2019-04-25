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
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="neuUrlaub-tab" data-toggle="tab" href="#neuUrlaub" role="tab" aria-controls="neuUrlaub" aria-selected="true">Neuer Urlaub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="neuTag-tab" data-toggle="tab" href="#neuTag" role="tab" aria-controls="neuTag" aria-selected="false">Neuer Tag</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="neuBild-tab" data-toggle="tab" href="#neuBild" role="tab" aria-controls="neuBild" aria-selected="false">Bild hochladen</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="neuUrlaub" role="tabpanel" aria-labelledby="neuUrlaub-tab">
          <div class="container p-3">
            <form action="/neuUrlaub.php" method="post">
              <div class="form-group">
                <label for="titleUrlaub">Titel des Urlaubs</label>
                <input type="text" class="form-control" id="titleUrlaub" name="titleUrlaub" placeholder="Urlaubstitel">
              </div>
              <div class="form-group">
                <label for="descUrlaub">Beschreibung des Urlaubs</label>
                <textarea class="form-control" id="descUrlaub" name="descUrlaub" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-secondary">Abschicken</button>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="neuTag" role="tabpanel" aria-labelledby="neuTag-tab">
          <div class="container p-3">
            <form action="/neuTag.php" method="post">
              <div class="form-group">
                <label for="titleTag">Titel des Tages</label>
                <input type="text" class="form-control" id="titleTag" name="titleTag" placeholder="Tagestitel">
              </div>
              <button type="submit" class="btn btn-secondary">Abschicken</button>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="neuBild" role="tabpanel" aria-labelledby="neuBild-tab">
          <div class="container p-3">
            <form action="imageUpload.php" method="POST" enctype="multipart/form-data">
             <input type="hidden" name="<?php echo ini_get("session.upload_progress.name"); ?>" value="123" />
             <input type="file" name="file1" />
             <input type="submit" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
