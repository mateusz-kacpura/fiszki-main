<?php
function add_form($table){
    echo '
      <label class="box-sizer">  
      <h1>WYSZUKAJ SŁÓWKO: </h1>  
        <div style="float:left" class="form-group">
            <form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=wyszukaj">  
                <label class="box-sizer">  <span>WYSZUKAJ: </span>
                    <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="slowo" style="width: 250px">
                </label>
                </br></br>
                <label class="box-sizer"> 
                    <input type="submit" name="submit" value="WYŚLIJ">&nbsp;
                </label>    
                <label class="box-sizer"> 
                    <input type="reset" value="WYCZYŚĆ FORMULARZ">
                </label>
            </form>
         </div>
      </label>
      </br></br>
  ';
}

/*  <label class="input-sizer">
  <div style="float:left" class="form-group">
    <h1>DODAJ NOWE SŁÓWKO</h1>
      <div style="float:left" class="form-group">
            <form method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=dodaj">
                    <label class="input-sizer">    <span>PL: </span>
                        <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element1" style="width: 250px">
                    </label></br></br>
                    <label class="input-sizer">  <span>EN: </span>
                        <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element2" style="width: 250px">
                    </label></br></br>
                    <label class="input-sizer">   <span>ZDANIE: </span>
                        <input type="text" onInput="this.parentNode.dataset.value = this.value" size="1" name="dodaj_element3" style="width: 250px">
                    </label>
                    </br></br>
                    <label class="input-sizer"> 
                        <input type="submit" name="submit" value="WYŚLIJ">&nbsp;
                    </label>    
                    <label class="input-sizer"> 
                        <input type="reset" value="WYCZYŚĆ FORMULARZ">
                    </label>
            </form> 
      </div>
    </div>
  </label> */
?>