<?php
require_once('includes/database_master.inc.php');
require_once('includes/page_master.inc.php');
$page_master = new PageMaster();
$database_master = new DatabaseMaster();
$filename = "node_list";
$query="SELECT n.*, c.*
        FROM node AS n
        LEFT JOIN cabinet AS c
        ON n.cabinetNo = c.cabinetNo";
$result = $database_master->querySelect($query);
$file_ending = "xls";

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "Node Name\t";
echo "Node Type\t";
echo "SIN #\t";
echo "Electric Meter #\t";
echo "Cabinet #\t";
echo "Cabinet Type\t";
echo "Homing CO\t";
echo "Location\t";
print("\n");
foreach($result as $row)
{
    $null ="NOT FOUND";
    echo  $row['nodeName']."\t";
    echo  $row['node_type']."\t";
    if(empty($row['sinNo'])){
        echo $null."\t";
    } else{
        echo  $row['sinNo']."\t";
    }
    if(empty($row['electricMeterNo'])){
        echo $null."\t";
    } else{
        echo  $row['electricMeterNo']."\t";
    }
    echo  $row['cabinetNo']."\t";
    echo  $row['cabinet_type']."\t";
    echo  $row['central_officeName']."\t";
    echo  $row['nodeLocation']."\t";
    print "\n";
}
?>