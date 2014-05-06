<!DOCTYPE html>
<html lang="en">

<?PHP
  $data = array(
    array("nodeName" => "CBOUTAG004", "node_type" => "UTAG", "cabinetNo" => "CBOUTAG004"),
    array("nodeName" => "CBOUTAG005", "node_type" => "UTAG", "cabinetNo" => "CBOUTAG005"),
    array("nodeName" => "CBOUTAG063", "node_type" => "UTAG", "cabinetNo" => "CBOUTAG063"),
    array("nodeName" => "CBOUTAG066", "node_type" => "UTAG", "cabinetNo" => "CBOUTAG066"),
    array("nodeName" => "DSLHUAG007", "node_type" => "MSAN", "cabinetNo" => "DSL-193"),
    array("nodeName" => "DSLHUAG009", "node_type" => "MSAN", "cabinetNo" => "DSL-024B"),
    array("nodeName" => "DSLHUAG010", "node_type" => "MSAN", "cabinetNo" => "DSL-150B")
  );
?>


<?PHP
  header("Content-Type: text/plain");

  $flag = false;
  foreach($data as $row) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>



<form method="get" action="/download_form.php">

	<button type="submit">Download</button>

</form>



</html>