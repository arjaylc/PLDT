LOAD DATA INFILE '\2Q_assignments.csv' 
INTO TABLE egmm.`node_pms_ assignments`
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
(nodeName, idNo, deadline, @vdate_accomplished)
SET
datetime_accomplished = nullif(@vdate_accomplished,'NULL')
;