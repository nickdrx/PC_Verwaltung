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
                                          <li><a class="nav-link" href="#">Beenden</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li class="nav-item">
                                      <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownhelp" data-bs-toggle="dropdown" aria-expanded="false">
                                            ?
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownhelp">
                                          <li><a class="nav-link" href="#">DB-Verbindung testen</a></li>
                                          <li><a class="nav-link" href="#">Über PC Verwaltung</a></li>
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
                                <div class="form_parent">
                                    <div class="form_div1"><label for="prozesstakt">Prozessortakt in GHz</label></div>
                                    <div class="form_div2"><input id="prozesstakt" name="prozesstakt"></div>
                                    <div class="form_div3"><label for="arbeitsspeicher">Arbeitsspeicher in GB</label></div>
                                    <div class="form_div4"><input id="arbeitsspeicher" name="arbeitsspeicher"></div>
                                    <div class="form_div5"><label for="festplattkapa">Festplattenkapazität in GB</label></div>
                                    <div class="form_div6"><input id="festplattkapa" name="festplattkapa"></div>
                                    <div class="form_div7"><button type="button" id="btn_datensatz_ändern" class="btn btn-dark">Datensatz ändern</button></div>
                                    <div class="form_div8"><button type="button" id="btn_datensatz_löschen" class="btn btn-dark">Löschen</button></div>
                                    </div>
                            </div>
                            <div class="main_verw_div4">
                                <h5>Dateiausgabe</h5>
                                <textarea id="txt_dateiausgabe" name="txt_dateiausgabe">

                                </textarea> </div>
                            <div class="main_verw_div5"> </div>
                            </div>
                    </div>
                </div>
              </div>
              <div class="col">
              </div>
            </div>
          </div>
    </body>
</html>