<?php
#############################HTML######################################################
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/logi.css" />
    <title>Logikirja</title>
  </head>
  <body>


  <header>
      <menu>
        <a href="index.html">Etusivu</a>
        <a href="saa.html">Radiosää</a>
      </menu>
  </header>



    <h1 class="logi_otsikko">OH3CYT logikirja</h1>
    <form name="logForm" action="insert.php" method="POST">
      <div class="logi_input">
        <dt>
          <div >Kutsu: </div><input type="text" name="log_kutsu" required/>
        </dt>
        <dt>
          <div>Taajuus: </div><input type="text" name="log_frq" />
        </dt>
        <dt>
          <div>RST: </div><input type="text" name="log_rst" />
        </dt>
        <dt>
          <div>QTH: </div><input type="text" name="log_gth" />
        </dt>
        <dt>
          <div>Kello: </div><input type="time" name="log_time" />
        </dt>
        <dt>
          <div>Päivä: </div><input type="date" name="log_date" />
        </dt>
      </div>
      <dt class="logi_submit">
        <input type="submit" name="log_sub" id="sendButton" />
      </dt>
    </form>

    <footer>
      <p>Author: Miko Savolainen</p>
    </footer>
  </body>
</html>

';
#############################HTML######################################################
?>