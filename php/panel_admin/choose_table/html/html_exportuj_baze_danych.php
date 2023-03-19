<?php

function html_exportuj_baze_danych(){
    
    echo '<div class="import" ><form action="tryb_wyboru.php?zestaw=exportuj_baze_danych" method="post" name="upload_excel" enctype="multipart/form-data">
               
                 <!-- Form Name -->
                 <label class="box-sizer">
                 <legend>Exportuj dane do pliku CSV </legend>
                <div class="form-group">
                          <div class="col-md-4 col-md-offset-4">
                          <label class="box-sizer">
                          <span>EKSPORTUJ </span>
                              <input onInput="this.parentNode.dataset.value = this.value" size="1" type="submit" name="Export" class="btn btn-success" value="EKSPORTOWANIE BAZY DANYCH"/>
                        </label>
                          </div>
                      </div>
               </label>                
          </form></br></div>';
}

