<?php

function html_exportuj_baze_danych(){
    echo '<div class="import" ><form action="tryb_wyboru.php?zestaw=exportuj_baze_danych" method="post" name="upload_excel" enctype="multipart/form-data">
                <fieldset>
                 <!-- Form Name -->
                 <legend>Exportuj dane do pliku CSV </legend>
                <div class="form-group">
                          <div class="col-md-4 col-md-offset-4">
                              <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                          </div>
                      </div>
               </fieldset>                    
          </form></div>';
}

?>