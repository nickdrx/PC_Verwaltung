<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'pcverwaltung';
//Create Connection
$mysqli = mysqli_connect($host, $user, $password, $db);
if ( $mysqli )
{

}
else
{
    die('keine Verbindung möglich: ' . mysql_error());
}
$query = "SELECT * FROM tblPCs";
$result = mysqli_query($mysqli, $query);


$records = array ();
$data_index = 0;

$count = 0;
while ($row = mysqli_fetch_assoc($result)) {

    $arr = array(
        $row["id"],
        $row["hdd"],
        $row["takt"],
        $row["ram"]
            );
    $records[$count] = $arr;
    $count++;
}
$current_record = $records[$data_index];



?>


<!DOCTYPE html>
<html>
    <head>
        <script src="script/script.js"></script>
        <link rel="stylesheet" href="./style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
              <div class="col">
              </div>
              <div class=".col-xxl">
                <div class="main_content">
                    <div class="form_container">
                        <div class="main_verw_parent">
                            <div class="main_verw_div1">
                                <ul class="nav">
                                    <li class="nav-item">
                                      <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdowndatei" data-bs-toggle="dropdown" aria-expanded="false">
                                            Datei
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdowndatei">
                                          <li><a class="nav-link" onclick="method_Beenden()">Beenden</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li class="nav-item">
                                      <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownhelp" data-bs-toggle="dropdown" aria-expanded="false">
                                            ?
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownhelp">
                                          <li><a class="nav-link" onclick="method_DB_Ver_Test()">DB-Verbindung testen</a></li>
                                          <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#uebermodel">Über PC Verwaltung</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                            <div class="main_verw_div2">
                                <h4 class="main_app_header">PC Verwaltung Ver.4</h4>    
                            </div>
                            <div class="main_verw_div3">
                                <h5>Dateieingabe</h5>
                                <!-- Input Form -->
                                <form action="./classes/updated.php" method="post">
                                <div class="form_parent">
                                    <input name="id" value="<?php echo $current_record[0]; ?>" hidden>
                                    <div class="form_div1"><label for="prozesstakt">Prozessortakt in GHz</label></div>
                                    <div class="form_div2"><input id="prozesstakt" name="hdd" required></div>
                                    <div class="form_div3"><label for="arbeitsspeicher">Arbeitsspeicher in GB</label></div>
                                    <div class="form_div4"><input id="arbeitsspeicher" name="takt" required></div>
                                    <div class="form_div5"><label for="festplattkapa">Festplattenkapazität in GB</label></div>
                                    <div class="form_div6"><input id="festplattkapa" name="ram" required></div>
                                    <div class="form_div7"><button type="submit"  id="btn_datensatz_ändern" class="btn btn-dark">Datensatz ändern</button></div>
                                    <div class="form_div8"><button type="reset" id="btn_datensatz_löschen" class="btn btn-dark">Löschen</button></div>
                                    </div>
                                </form>


                            </div>
                            <div class="main_verw_div4">
                                <h5>Dateiausgabe</h5>
                                <!-- Hier die Dateiausgabe -->
                                <div id="txt_dateiausgabe">
                                <p>Prozessortakt in GHz:
                                <?php
                                print_r($current_record[1]);
                                ?>
                                <p>Arbeitsspeicher in GB:
                                <?php
                                print_r($current_record[2]);
                                ?>
                                <p>Festplattenkapazität in GB:
                                <?php
                                print_r($current_record[3]);
                                ?>
                                </p> 
                                
                                </div>

                            </div>
                            <div class="main_verw_div5">
                                <div class="data_slider">
                                    <div class="data_slider_parent">
                                    <div class="data_slider_div1"style="padding: 30px;">
                                        <button class="btn btn-dark" style="float:left;">
                                            
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                                              </svg>
                                        </button>
                                        <button class="btn btn-dark" style="float:left; margin-left: 10px;">
                                            
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                              </svg>
                                        </button>
                                    </div>
                                    <div class="data_slider_div2"style="padding: 30px; text-align:center;">
                                    <!-- Hier kommen die Records hin -->
                                    <?php

                                    if (!$records) {
                                        echo "0/0";
                                    } else {
                                        $length_records = count($records);
                                        echo $data_index . "/" . $length_records;
                                    }
                                    ?>
                                    </div>
                                    <div class="data_slider_div3" style="padding: 30px;">
                                        <button class="btn btn-dark" style="float:right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                                              </svg>
                                        </button>
                                        <button class="btn btn-dark"style="float:right; margin-right: 10px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                              </svg>
                                        </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>
              <div class="col">
              </div>
            </div>
          </div>

        <!-- Modals -->
          <div class="Modals">

            
            <div class="modal fade" id="uebermodel" tabindex="-1" aria-labelledby="uebermodelLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="uebermodelLabel">Über PC Verwaltung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h4>PC Verwaltung 4.0</h4>
                    <h4>(C) ErVo-Software 2013</h4>
                    </div>
                </div>
                </div>
            </div>
          </div>
    </body>
</html>