<?php 
ini_set('display_errors', 1);
require_once($_SERVER["DOCUMENT_ROOT"]."/fundscheme/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

$rows = select_all_asc('state');

$output = '<option value="">~~Select State Name~~</option>';

foreach ($rows as $row) {

 $output .='<option value="'.$row['id'].'">'.$row['state'].'</option>';
} 
echo $output;

?>


<?php 