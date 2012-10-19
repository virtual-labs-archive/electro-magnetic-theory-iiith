<?php
mysql_connect("localhost","emt","changethis") or die(mysql_error());
mysql_select_db("emt") or die(mysql_error());
$result = mysql_query("delete from topmenu");
mysql_query("insert into topmenu values
                (1,'Home','index.php'),
                (2,'List of Experiments','experiments.php'),
                (3,'FAQ','./faqs.php'),
                (4,'Contact us','aboutus.php'),
                (5,'Vlab.co.in','http://vlab.co.in')
");
?>


