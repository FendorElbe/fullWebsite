<?php
$pdo = new PDO('mysql:host=10.35.47.124:3306;dbname=k86121_dorf', 'k86121_dsauser', 'DasSchwarzeAuge');
?>

<div class="card m-1 p-0 dsacard">
  <div class="card-body m-3 p-0">
    <div class="container m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
          <div class="dsacard-header">
            <?php
              $sql = "SELECT Name FROM Arbeiter WHERE Name = 'Alrik Alrikson'";
              foreach ($pdo->query($sql) as $row) {
                echo $row['Name'];
              }
            ?>
          </div>
        </div>
      </div>

      <div class="row m-0 p-0">
        <div class="col-6 m-0 p-0">
          <div class="dsacard-image"></div>
        </div>
        <div class="col-6 m-0 p-0">
          <div class="dsacard-rasse mx-2">Mittelländer</div>
          <div class="dsacard-infoblock mx-1">Infos</div>
        </div>
      </div>

      <div class="row p-0 my-2 mx-0">
        <div class="col-6 m-0 p-0 ">
          <div class="dsacard-talent my-2 mr-1 ml-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Wirtschaft</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 mr-1 ml-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Unterhaltung</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 mr-1 ml-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Kochen</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 mr-1 ml-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Wildnis</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
        </div>
        <div class="col-6 m-0 p-0">
          <div class="dsacard-talent my-2 ml-1 mr-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Handwerk</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 ml-1 mr-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Schmied</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">3</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 ml-1 mr-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Baukunst</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
          <div class="dsacard-talent my-2 ml-1 mr-0">
            <div class="btn-group dsabtn-group">
              <button type="button" class="btn btn-light btn-block dsabtn-talent-left">Heilkunde</button>
              <button type="button" class="btn btn-danger dsabtn-talent-right">14</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
          <div class="dsacard-potential mx-1">
            Potential: <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
