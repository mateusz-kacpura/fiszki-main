<?php
function load_word_by_id($table, $row){
    $flaga = 1;

    if(!isset($table)){
        echo "Zabezpieczenie przed nadużyciem load_word_by_id.php";
        $flaga = 0;
    }

    if(!is_int($row['id'])){
        echo "Zabezpieczenie przed nadużyciem load_word_by_id.php";
        $flaga = 0;
    }

    if ($flaga==1){
    $id = $row['id'];
    echo '<div class="arkus">';
    
    echo '
        <div class="edytuj">
        <form style="display: inline" method="post" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=edytuj&id='.$row['id'].'">
        <label class="input-sizer">
        <span>EN: </span>
        <input type="text" name="a'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wyrażenie polskie:" value="'.$row['v1'].'">
        </label>
        <label class="input-sizer">
        <span>PL: </span>
        <input type="text" name="b'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Wrażenie angielskie:"  value="'.$row['v2'].'">
        </label>
        <label class="input-sizer">
        <span> </span>
        <input type="text" name="c'.$id.'" onInput="this.parentNode.dataset.value = this.value" size="1" placeholder="Przykładowe zdanie" value="'.$row['zdanie'].'">
        </label>
        <input type="submit" name="submit" class="przycisk przycisk1" value="Edytuj!"></form>

        <form method="post" style="display: inline-block" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=edit_flag&id='.$row['id'].'">
        <input type="submit" name="c'.$id.'" placeholder="deflaut" class="przycisk przycisk'.$row['flaga'].'" value="'.$row['flaga'].'">
        </form>

        <form method="post" style="display: inline-block" action="tryb_edycji.php?zestaw='.$table.'&'.$table.'=usun&id='.$row['id'].'">
        <input type="submit" name="submit" class="przycisk przycisk3" value="Usuń!">
        </form>

        </div>
        </div>
        ';                                                                             
    }                                                  
}

function change_class_form(){
// placecholder zwruci zmienna x wartoscia w zaleznosci od wartosci flagi ymagane polaczenie pdo
// styl css trzeba napisac odpowiada przycisk 1
// 
}
function action_change_flag_for_word(){

}

/*
relacja z klijentem
proces obslugi klijenta
sprzedarz

polsat box Mateusz Kacpura
W czym mogę pomóc?

dlaczego nie działa dekoder?
na czym polega problem?

aktywne słuchanie

----> proszę o chwilę cierpliwości

nie wchodzimy klijentowi w słowo

poprawność języka wypowiedzi, nie używamy zdrobnień

staramy się używać języak korzyći
wzroty grzecznośąciowe
------> proszę podejść do dekodera

nie używamy takich zwrotów jak 
----< nie wiem
----< nie jestem kompetentny

nie uzywamy słow jak przypuszczam
nie uzywamy słowa w czym jest problem

---> nie ma żadnych zaległości na kontrakcie
---> zzarządzamy odpowiednio czasem rozmowy, aby teat był wyczerpany
staramy się wsyztsko wytłumaczyć klijentowi

-----> proszę o chwilę cieepliwości co 30 sekund

entuzjazm zaangarzowanie
-----> rozmuem

radzenie sobie z obiekcjami
kontrulujemy emocje

konsekwentnie i stanowczo prowadzimy rozmowę

klijenta należy uspokoić
im klijent mówi głośniej to my mówimy ciszej

na zakonczenie rozmowy
czy w czyms jeszcze moge pomóc

zakoczenie rozmowy -----------
do usłyszenia


--------------------------------------

uwierzytelnienie na poczatku kazdej rozmowy
poproszę numer pesel
poproszę numer karty
poproszę numer kontraktu

numer
cp 699 00 8888 numer do dzialu windyfikacji

czy można umowe rozwiązać?
tak z jednomiesięcznym okresem wypowiedzenia


odszukac 
czas trwania umowy

nie łączymy zgłoszeń windyfikacyjnym 
ze zgłoszeniami informacyjnymi

czy mógłby Pan mnie nie obrażać?
w związku z tym, że moja prośba nie została
zrealizowana, jestem zmuszony zakończyć połączenie

osobie trzeciej nie należy udzielać informacji z konkraktu

<-----------    --   ---   --  ---  -- ---------->

proces sprzedarzowy
najważniejsze jest utzrymanie umowy na telewizję
drugim standardem jest utrzymanie umowy na internet

transfer do plusa w celu przedstawienia oferty na internet

czy przekierować Pana do Plusa w celu przedstawienia oferty 
na internet

zachęcam do korzystania z aplikacji i polsat box

czy Panele fotowoltaiczne Pana interesują, 
można obniżyć rachunek za prąd

zachęcam do zajżenia na stronę internetową
<www class="czystapolska pl"></www>

o aplikacji mówimy zawsze

;'''''''''''''''''''''''.,

Proszę zwrócić uwagę, że za tyle będzie miał Pan aż tyle dostępnych kanałów

Czy jest to dla Pana wszystko jesne i zrozumiałe?

Proszę Pana ja udzielam Panu tylko oferty 
dotyczącej Polsat Box

Telewizja satelitarna kanały 
*/

?>