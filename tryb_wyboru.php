
<?php

require_once('polaczeniePDO.php');
if(!$pdo){
    header('location: index.php');//przekierowanie do logowania
}
require_once "php/panel_admin/choose_table/html/__html_routes.php";
require_once "php/panel_admin/choose_table/__function_routes.php";
require_once "php/__navigate_page.php";

?>
<!DOCTYPE html>
<html lang="en">

<?php include('html/header.php') ?>

<?php

$file_name = basename(__FILE__);

navigate_page($file_name);

html_choose_table_menu();

navigate_table($pdo);

select_table_by_flag_all($pdo);

?>

</body>

<script>
 $('.select button').click(function(){
            $('.select button').removeClass('active')
            console.log(this.classList.add('active'))
        })

const menu_click = document.querySelector('.menubutton').addEventListener('click', (e) => {
    document.querySelector('.menu').classList.toggle('active');
});

</script>

<?php include('js/panel_admin/choose_table/__scripts_routes.php') ?>