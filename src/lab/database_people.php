<?php
mysql_connect("localhost","emt","changethis") or die(mysql_error());
mysql_select_db("emt") or die(mysql_error());
$result = mysql_query("drop table people");
$result = mysql_query("create table people (id int(11),pic varchar(500),author varchar(500), posttext varchar(500), type varchar(500), weblink varchar(500), email varchar(500))");
$result = mysql_query("delete from people");
mysql_query("insert into people values
                (1,'http://faculty.iiit.ac.in/~Azeemuddin.s/azim-picture.jpg','Dr.Azeemuddin Syed','Areas of Interest : VLSI Design , RFID,Antennas,RFIC Design,Integrated Photonics - All Optical Devices using ring lasers<br>IIIT Hyderabad','faculty','http://faculty.iiit.ac.in/~Azeemuddin.s','azeemuddin.s@iiit.ac.in'),
		(2,'./images/arjunreddy.jpg','Akula Arjun Reddy','B.Tech 4th year, computer science, Language Technologies Research Center, IIIT Hyderabad','student','http://web.iiit.ac.in/~arjunreddy.aug08','akula.arjun@gmail.com'),
		(3,'','Vasu Pulijala','MS 2nd year, ECE, IIIT Hyderabad','student','','vasu.pulijala@research.iiit.ac.in'),
		(4,'','Soma Rakesh','B.Tech 4th year, computer science, IIIT Hyderabad','student','http://web.iiit.ac.in/~rakesh.somaug08','rakesh.soma1991@gmail.com'),
		(5,'','Veera Reddy','2007 batch, computer science, IIIT Hyderabad','student','','veeracool875@gmail.com')
");
?>


