<?php
function html_importuj_baze_danych(){

echo '</br><div class="import" ><form action="tryb_wyboru.php?zestaw=importuj_baze_danych" method="post" name="upload_excel" enctype="multipart/form-data">
          <fieldset>
----------------------------</br>
- v1 - v2 - zdanie - flaga -</br>
----------------------------</br>
-    -    -        -       -</br>
-    -    -        -       -</br>
----------------------------</br>
              <!-- Form Name -->
              <legend>Importuj dane z pliku CSV </legend>

              <!-- File Button -->
              <div style="float:left" class="form-group">
                  <label style="float:left" class="col-md-4 control-label" for="filebutton">Wybrany plik</label>
                  <div class="col-md-4" ></br>
                      <input type="file" name="file" required>
                  </div>
              </div>
              
              <!-- Button -->
              <div style="float:left" class="form-group">
                  <label style="float:left" class="col-md-4 control-label" for="singlebutton">Nazwa pliku</label>
                  <div class="col-md-4">
                      <input type="text" name="nazwa_importowanej_tabeli"  style="width:120px;" required>
                      <input type="submit" id="submit" name="Import" value="Wyślij " class="btn btn-primary button-loading" data-loading-text="Loading..."></input>
                  </div>
              </div>
              
          </fieldset>
      </form></div>';
}

