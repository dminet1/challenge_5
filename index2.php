<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Challenge 5 - PHP</title>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  </head>
  <body>
    <h2>Challenge 5 - PHP</h2>
    <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    ?>

    <?php
      $videogames = array('Starcraft','Democracy 3','Dead or Alive 5','Forza Motorsport 6','NHL 16','Lost in Harmony','DiRT Rally','Football Manager 2016','The Witness','Rise of the Tomb Raider','Quantum Break','Total War Attila');

       // function to add lines in the table #vgame :
       function addline($element,$i) {
    ?>
         <tr>
           <td><?php echo $i ?></td>
           <td><?php echo $element ?></td>
         </tr>
    <?php
       }
    ?>

    <section class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Tableau listant des jeux vidéos</h2>
          <div class="table-responsive">
            <table class="table" id="vgame">
              <thead>
                <tr>
                  <th>Clé</th>
                  <th>Nom du jeu</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  //$i = 0;
                  //foreach ($videogames as $element) {
                    //addline($element,$i);
                    //$i++;
                  //}
                  for ($i=0; $i < count($videogames); $i++) {
                    addline($videogames[$i],$i);
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  </body>

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

  <script>
  // plug_in jQuery datatable zero configuration
  $(document).ready(function() {
    $('#vgame').DataTable();
  } );
  </script>
  
</html>
