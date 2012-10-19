<?php
mysql_connect("localhost","emt","changethis") or die(mysql_error());
mysql_select_db("emt") or die(mysql_error());
$result = mysql_query("delete from menu");
mysql_query("insert into menu values
                (1,'Introduction','','','T001','submenu_pics/intro.jpeg'),
                (2,'Objective','','','T002','submenu_pics/obj.jpeg'),
                (3,'Video Tutorial','','','T003','submenu_pics/manual.jpeg'),
                (4,'Procedure','','','T004','submenu_pics/pro.jpg'),
                (5,'Virtual Experiment','','','T005','submenu_pics/sim.jpg'),
                (6,'Theory','','','T006','submenu_pics/theory.jpg'),
                (7,'Quiz','','','T007','submenu_pics/quiz.jpeg'),
                (8,'References','','','T008','submenu_pics/books.jpg'),
		(9, 'Feedback','','','T009','submenu_pics/obj.jpeg')
");
?>


