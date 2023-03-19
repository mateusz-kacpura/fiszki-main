<?php
function html_importuj_baze_danych(){

echo '</br><div class="import" ><label class="box-sizer">
<form action="tryb_wyboru.php?zestaw=importuj_baze_danych" method="post" name="upload_excel" enctype="multipart/form-data">

              
              <legend>Importuj dane z pliku CSV </legend>
              </br>
              
              <div style="float:left" class="form-group">
                  <label  class="col-md-4 control-label" for="filebutton">WYBIERZ PLIK:</label>
                  
                  <label class="box-sizer">
                  <span>EN: </span>
                      <input onInput="this.parentNode.dataset.value = this.value" size="1" type="file" name="file" required>
                </label>
                  
              </div>
              </br></br></br>
       
              <div style="float:left" class="form-group">
                  
                <label  class="col-md-4 control-label" for="singlebutton">WPROWADŹ NAZWĘ NOWEJ TABELI: </label>
                  
                    <label class="box-sizer">
                    <span>NAZWIJ: </span>
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" type="text" name="nazwa_importowanej_tabeli"  style="width:120px;" required>
                    </label>
                  </div> 
                  <label class="box-sizer">
                        <input onInput="this.parentNode.dataset.value = this.value" size="1" type="submit" id="submit" name="Import" value="IMPORTUJ " class="btn btn-primary button-loading" data-loading-text="Loading...">
                    </label>
              </div></br>
              
      </form></label></div>';
}

