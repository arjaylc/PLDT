<?php
require_once('includes/database_master.inc.php');
require_once('includes/page_master.inc.php');
$page_master = new PageMaster();
$database_master = new DatabaseMaster();
$filename = "node_list";
$query="SELECT n.nodeName, n.node_type, c.cabinetNo, c.cabinet_type, n.central_officeName
        FROM node AS n
        LEFT JOIN cabinet AS c
        ON n.cabinetNo = c.cabinetNo
        LIMIT 0, 25";
$result = $database_master->querySelect($query);
$file_ending = "xls";

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo  "Node Name\t";
echo  "Node Type\t";
echo  "Cabinet #\t";
echo  "Cabinet Type\t";
echo  "Homing CO\t";
print("\n");
foreach($result as $row)
{
    echo  $row['nodeName']."\t";
    echo  $row['node_type']."\t";
    echo  $row['cabinetNo']."\t";
    echo  $row['cabinet_type']."\t";
    echo  $row['central_officeName']."\t";
    print "\n";
}
?>