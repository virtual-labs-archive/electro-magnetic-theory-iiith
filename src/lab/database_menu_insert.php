<?php
mysql_connect("localhost","emt","changethis") or die(mysql_error());
mysql_select_db("emt") or die(mysql_error());
$result = mysql_query("delete from content");
