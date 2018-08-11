<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/4/2018
 * Time: 9:51 PM
 */

//require_once "includes/init.php";

require_once "includes/class/PhpDataObject.php";


$database = new PhpDataObject();
$database->select()->from('users')->execute();
//$database->query("INSERT INTO users",[id=>'1',name=>'rex',username=>''])
?>
<pre>
<?php
    if ($database){
        var_dump($database);
}

  echo  $x['name'];
$keys = array("name","username","password");
$values = array("Sambhrant","sam","abcd123");
$database->insert($keys,$values,"users")->execute();
$x = $database->last();

?>



</pre>




