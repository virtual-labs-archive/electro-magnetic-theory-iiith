<?php
include_once("config.inc.php");
$cid = mysql_connect($db_host,$db_user,$db_password);
if (!$cid) {

die("ERROR: " . mysql_error() . "\n");
}
mysql_select_db($db);
$drop_experiment_table = mysql_query("DROP TABLE IF EXISTS experiment");
$create_table_experiment = mysql_query("create table experiment( id int(11), Srno varchar(100), title varchar(300), text varchar(3000), link varchar(3000), manual_link varchar(3000));");

$a = '
<br />
<div class="panel1">  
<table>
        <tr>
<td> <img src="images/images/exp1.jpg" width="300" height="180" /></td> 
               
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
Coulomb\'s law is law of physics describing the electrostatic interaction between electrically charged particles. It was studied and first published in 1783 by French physicist Charles Augustin de Coulomb and was essential for the development of the theory of electromagnetism.<br/>
</div>
<br/></td>
      </tr>
   </table>
</div>
';
$a =  mysql_real_escape_string($a);
#print "insert into experiment values(1,\"Coulomb's Law\",\"$a\",\"./Experiment.php?code='C001'\")";
print $a;
$stuff = mysql_query("insert into experiment values(1,'C001',\"Coulomb's Law\",\"$a\",\"./Experiment.php?code=C001\",'final_expt/expt1.pdf')");

$a = '
<br />
<div class="panel2">   
   <table>
	<tr>
      <td>
        <img src="images/images/expt21.png" width="300" height="180" /></td>
         <td style="padding:10px;font-weight:lighter;"valign="top">&nbsp;<div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
In 1<sup>st</sup> experiment using Coulomb\'s law we have seen force due to point charges. In this experiment we will estimate electric fields due to various charge distributions.<br /></div>
<br/></td>
	</tr>
	</table>
</div>
';
$a =  mysql_real_escape_string($a);
print $a;
$stuff = mysql_query("insert into experiment values(2,'C002',\"Electrostatic Fields I\",\"$a\",\"./Experiment.php?code=C002\",'final_expt/expt2_1.pdf')");



$a = '
<br />   
<div class="panel3">
   <table>
	<tr>
      <td>
        <img src="images/images/wxp2.png" width="300" height="180" /></td>
         <td style="padding:10px;font-weight:lighter;"valign="top">&nbsp;<div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">
<div style=\"font-family:monospace;font-size:16px;\">
<br />
In this experiment we will continue to evaluate electric fields for surface charge, volume charges and conductor. 
 <br/></td>
	</tr>
	</table>
</div>
';

$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(3,'C003',\"Electrostatic Fields II\",\"$a\",\"./Experiment.php?code=C003\",'final_expt/expt2_2.pdf')");

$a = '
<br />   
<div class="panel4">
   <table>
        <tr>
      <td>
        <img src="images/images/wxp3.png" width="300" height="180" /></td>
         <td style="padding:10px;font-weight:lighter;"valign="top">&nbsp;<div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">
<div style=\"font-family:monospace;font-size:16px;\">
<br />
Till now we have considered the existence of Electric field in a homogeneous medium. If the field exists in a region consisting of two different media, the conditions that the field must satisfy at the interface separating the media are called "Boundary conditions". 
These conditions are helpful in determining the field on one side of boundary conditions if the field on the other side is known.
 <br/></td>
        </tr>
        </table>
</div>
';


$a =  mysql_real_escape_string($a);

print $a;
$stuff = mysql_query("insert into experiment values(4,'C004',\"Boundary Conditions\",\"$a\",\"./Experiment.php?code=C004\",'final_expt/expt3.pdf')");

$a = '
<br />
<div class="panel5">  
<table>
        <tr>
<td> <img src="images/images/exp5.png" width="300" height="180" /></td> 
               
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
Just as electric fields can exist in free space, they can exist in material media. 
Materials are broadly classified in terms of their electrical properties as conductors, semiconductors and insulators. Non-conducting materials are usually referred to as insulators or dielectrics.
</div>
<br/></td>
      </tr>
   </table>
</div>
';

$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(5,'C005',\"Electric Field in Material Space \",\"$a\",\"./Experiment.php?code=C005\",'final_expt/expt4.pdf')");

$a = '
<br />
<div class="panel6">  
<table>
        <tr>
<td> <img src="images/images/exp4.png" width="300" height="180" /></td> 
               
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
In the fifth century B.C, the Greeks knew that there are some rocks that attract bits of iron. They are very plentiful in the district of Magnesia, and so that\'s where the name "magnet" and "magnetism" comes from. The rocks contain iron oxide, which we call magnetite.<br /><br />
</div>
<br/></td>
      </tr>
   </table>
</div>
';

$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(6,'C006',\"Magnetostatic Fields \",\"$a\",\"./Experiment.php?code=C006\",'final_expt/expt5.pdf')");


$a = '
<br />
<div class="panel7">  
<table>
        <tr>
<td> <img src="images/images/exp6.png" width="300" height="180" /></td> 
               
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
Till now we have seen static magnetic fields. We found that various current distributions(moving charge) produces magnetic fields. It was of great interest to the scientists to find out if magnetic field would produce current. Joseph Henry and Miachel Faraday independently worked on this and Henry was the first to find that it is possible. But Faraday published his results earlier than Henry hence the Faraday\'s law.
</div>
<br/></td>
      </tr>
   </table>
</div>
';
$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(7,'C007',\"Application of Faraday's Laws \",\"$a\",\"./Experiment.php?code=C007\",'final_expt/expt6.pdf')");

$a = '
<br />
<div class="panel8">  
<table>
        <tr>
               
<td> <img src="images/images/wave7.png" width="300" height="180" /></td> 
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
Till now we have learned about static charges, moving charges which produces Electromagnetic waves, Maxwell\'s equation, faradays law and lot more. Now, we will learn about the propagation of electromagnetic waves which is widely used in TV signals, radar beams, microwaves and all types of communication. 
</div>
<br/></td>
      </tr>
   </table>
</div>
';
$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(8,'C008',\"Wave Propagation \",\"$a\",\"./Experiment.php?code=C008\",'final_expt/expt7.pdf')");

$a = '
<br />
<div class="panel9">  
<table>
        <tr>
               
<td> <img src="images/images/altitude.png" width="300" height="180" /></td> 
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
As by now, we have holistic understanding of the electromagnetic waves, materials, boundary condition, waveguides etc. In this, we will discuss on one of the widely used practical application of electromagnetic waves i.e to calculate the distance of between two flying planes and to measure the height of the plane from the ground level. 
</div>
<br/></td>
      </tr>
   </table>
</div>
';
$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(9,'C009',\"Distance and Altitude Measurement \",\"$a\",\"./Experiment.php?code=C009\",'final_expt/expt8.pdf')");

$a = '
<br />
<div class="panel10">  
<table>
        <tr>
               
<td> <img src="images/images/plane_wave.png" width="300" height="180" /></td> 
<td style="padding:10px;font-weight:lighter;"valign="top">&nbsp; <div style="background-color:#e5eecc;border:solid 1px #c3c3c3;padding:5px">

<div style=\"font-family:monospace;font-size:16px;\">
<br />
We have discussed in detail about the waves propagation in various type of medium i.e.  lossy, lossless, conductor and insulator  and the various factor associated with it like wave number, propagation constant etc. Now, its time to study about the reflection of the plane wave at oblique incidence and later we will discuss about the special case of normal incidence.
</div>
<br/></td>
      </tr>
   </table>
</div>
';
$a =  mysql_real_escape_string($a);

$stuff = mysql_query("insert into experiment values(10,'C010',\"Plane Waves - Reflection and Refraction \",\"$a\",\"./Experiment.php?code=C010\",'final_expt/expt9.pdf')");

?>
