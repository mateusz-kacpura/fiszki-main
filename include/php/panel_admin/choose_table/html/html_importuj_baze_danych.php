<?php
function html_importuj_baze_danych(){

echo '</br><div class="import" ><form action="tryb_wyboru.php?zestaw=importuj_baze_danych" method="post" name="upload_excel" enctype="multipart/form-data">
          <fieldset>
          <label class="input-sizer">
              <!-- Form Name -->
              <legend>Importuj dane z pliku CSV </legend>

              <!-- File Button -->
              <div style="float:left" class="form-group">
                  <label style="float:left" class="col-md-4 control-label" for="filebutton">Wybrany plik</label>
                  <div class="col-md-4" ></br>
                  <label class="input-sizer">
                  <span>EN: </span>
                      <input onInput="this.parentNode.dataset.value = this.value" size="1" type="file" name="file" required>
                </label>
                  </div>
              </div>
              
              <!-- Button -->
              <div style="float:left" class="form-group">
                  <label style="float:left" class="col-md-4 control-label" for="singlebutton">Nazwa pliku</label>
                  <div class="col-md-4">
                  <label class="input-sizer">
                  <span>NAZWIJ NOWĄ TABELĘ: </span>
                      <input onInput="this.parentNode.dataset.value = this.value" size="1" type="text" name="nazwa_importowanej_tabeli"  style="width:120px;" required>
                      <label class="input-sizer">
                      <span> </span>
                      <input onInput="this.parentNode.dataset.value = this.value" size="1" type="submit" id="submit" name="Import" value="IMPORTUJ " class="btn btn-primary button-loading" data-loading-text="Loading..."></input>
                      </label>
                  </div>
              </div>
              
          </label></fieldset>
      </form></div>';
}

