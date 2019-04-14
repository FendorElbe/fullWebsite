<?php
  $pdo = new PDO('mysql:host=10.35.47.124:3306;dbname=k86121_dorf', 'k86121_dsauser', 'DasSchwarzeAuge');
  $sql = "SELECT Name FROM Arbeiter WHERE Name = 'Alrik Alrikson'";
  foreach ($pdo->query($sql) as $row) {
    $data = $row;
  }
?>

<div class="card m-1 p-0 dsacard">
  <div class="card-body m-3 p-0">
    <div class="container m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
          <div class="dsacard-header">
            <?php echo $data['Name']; ?>
          </div>
        </div>
      </div>

      <div class="row m-0 p-0">
        <div class="col-6 m-0 p-0">
          <div class="dsacard-image"></div>
          </div>
          <div class="col-6 m-0 p-0">
            <div class="dsacard-rasse mx-2">
              <?php echo $data['Rasse']; ?>
            </div>
            <div class="dsacard-infoblock mx-1">Infos</div>
          </div>
        </div>

        <div class="row p-0 my-2 mx-0">
          <div class="col-6 m-0 p-0 ">
            <?php
              $talente = array('Wirtschaft', 'Unterhaltung', 'Kochen', 'Wildnis');
              foreach ($talente as $talent) {
                echo "<div class='dsacard-talent my-2 mr-1 ml-0'>";
                echo "<div class='btn-group dsabtn-group'>";
                echo "<button type='button' class='btn btn-light btn-block dsabtn-talent-left'>".$talent."</button>";
                echo "<button type='button' class='btn btn-danger dsabtn-talent-right dsabtn-talent-";
                $val = $data["$talent"];
                if ($val < 5) {
                  echo "grey";
                } elseif ($val < 10) {
                  echo "green";
                } elseif ($val < 15) {
                  echo "blue";
                } elseif ($val < 20) {
                  echo "purple";
                } else {
                  echo "yellow";
                }
                echo "'>";
                echo strval($val);
                echo "</button>";
                echo "</div>";
                echo "</div>";
              }
            ?>
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
