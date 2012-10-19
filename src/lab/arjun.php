<?php
mysql_connect("localhost","emt","iiit123") or die(mysql_error());
mysql_select_db("VL") or die(mysql_error());
$result = mysql_query("delete from content");

// storing values for coloumb's law experiment
$intro1 = '<p>
<b> Coulomb\'s Law </b><br>

<p>
    Coulomb\'s law is an experimental law formulated in 1785 by the French colonel, Charles Augustin de Coulomb. It deals with the force a point charge exerts on another point charge.A point charge means a charge that is located on a body whose dimensions are much
smaller than other relevant dimensions. For example, a collection of electric charges on a pinhead can be regarded as a point charge. Charges are generally measured in coulombs(C). One coulomb is approximately equivalent to 6 X 1018   electrons; it is a very large unit of charge because one electron charge
<b> e= -1.6019x10-19 C. </b>
';

$obj1 = '<ol>
    <li>To Verify the Inverse Square Law: F ~ 1/R2 </li>
    <li> To Verify the Force and Charge Relationship: F ~ q1q2 </li>
    <li> To Determine Coulomb\'s Constant: k </li>
    <li>  Neutralize force on a test charge by introducing another other charge  </li>
 </ol>
';

$manual1 = '<object width="900" height="800">
<param name="movie" value="somefilename.swf">
<embed src="12.swf" width="900" height="800">
</embed>
</object>';

$procedure1 = 'This experiment consists of four stages and each stage will teach you a new concept.<br /> 
 The experiment was desined in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts. <br />
<br />
STAGE 1:<br /> 
 In stage 1, we will see the force between two charges q1 and q2, seperated by distance r.
 Here, you can change the values  q1, q2 and r by using sliders provided at the bottom of 
 window. You have to observe the output values provied at the middle of window. Try to reason the observed
 values. You can pictorially see the variations in the graph provided at the right of window.<br />
 So in the graph you should observe the fact that force is inversely proportional to square of the distance.<br />
<br />
STAGE 2:<br />
 In stage 2, the concept is that Force is proportional to product of charges.
 This you can observe by changing parameters q1 and q2 by using sliders provided at the bottom of window. See the graph whether it was giving the same information to you or not. Also, you can conclude the fact that k remains   constant.<br />
<br />
STAGE 3:<br />
 In stage 3, observe the k value by varying the charge values. Try to figure it out whether k remains constant or not. See the graph between k and F.<br />
<br />
STAGE 4:<br />
 In this stage we see an interesting experiment. Try to add charges n to the screen by clicking mouse anywhere on the screen. Now you can see the resulting force on a charge due to other charges. We use the principle of        superposition,




';

$virExp1 = '';
$theory1 = ' <p>

   <b>Coulomb\'s law</b><br>
        Consider a system of two point charges q<sub>1</sub> and q<sub>2</sub> seperated by a distance <b>r</b> in vaccum. The force exerted by q<sub>1</sub> on q<sub>2</sub> is given by Coulomb\'s law:
<br>
<!-- <b>F<sub>12</sub> </b>=kq<sub>1</sub>q<sub>2</sub>a<sub>r<sub>12</sub></sub>/r<sup>2</sup> ; &nbsp;&nbsp; (a<sub>r<sub>12</sub></sub> is a unit vector) -->
<img src="images_new/coulomb.jpg" alt="" width="100" height="60">
<br>
<!--    </tr> </table>--><br/>

        k = coulomb\'s constant <br>
        k = 1/4&pi&epsilon<sub>0</sub> <br>
        &epsilon<sub>0</sub>=8.85x10<sup>-12</sup> C<sup>2</sup>/N-m<sup>2</sup>  ( &epsilon<sub>0</sub> is the "permittivity of free space")<br>
        hence k=9x10<sup>9</sup>        <br><br>
                                <img src="images_new/images_force2.jpg" alt="" width="300" height="115">

        <br>force on q<sub>2</sub> due to q<sub>1</sub> is <b>F<sub>21</sub></b> = -<b>F<sub>12</sub></b> and it is consistent with Newtons 3<sup>rd</sup> law.
<br><br>
In this experiment, initially F ~ 1/R<sup>2</sup> will be verified using graph :<br><br>
On keeping the value of charges fixed, if value of <b>R</b> ,i.e. distance between 2 point charges is changed we get a graph which shows F ~ 1/R<sup>2</sup><br>
<img src="images_new/coulomb5.jpg" alt="" width="200" height="200">


Hence it can be easily seen that F ~ 1/R<sup>2</sup> <br>

 <p>
 After verifying F ~ 1/R<sup>2</sup>, now F ~ q<sub>1</sub>q<sub>2</sub> will be verified: <br>
<br>
On keeping <b>R</b>, i.e. distance between 2 point charges constant, now if values of q<sub>1</sub> or q<sub>2</sub> or both are varied it can be seen from the graph that change in value of <b>F</b>
will be according to the change in product of charges.<br> </p>

<img src="images_new/coulomb6.jpg" alt="" width="300" height="200">
<br>
It can be seen that F ~ q<sub>1</sub>q<sub>2</sub>
<br>
Now concept of <b>Principle of Superposition</b> will be discussed <br>  <br>

        <b>Principle of Superposition</b>
        <br>
<p>
Coulomb\'s law can be applied to any pair of point charges. When more than 2 charges are present, the net force on any one of the charge is the vector sum of forces exerted on it by other charges. For ex:<br> If 3 charges are present the net force experienced by q<sub>3</sub> due to q<sub>2</sub>  and q<sub>1</sub> will be <br>
<b>F<sub>3</sub></b>=<b>F<sub>13</sub> </b>+<b> F<sub>23</sub></b> <br><br>. For a system of N charges the net force by the j <sup>th</sup> particle would be <br><br>
<img src="images_new/f_s.jpg" alt="" width="130" height="70" align="middle">
<br><br>
<br>
 where <b>F<sub>ij</sub></b> denotes the force between particle i and j. < /p>


<div style="margin-left:0px">
Example 1)  Three charges are arranged as shown in the figure. Find force on the charge q<sub>3</sub>assuming that q<sub>1</sub> = 6.0x10<sup>6</sup> ,q<sub>2</sub>=-q1, q<sub>3</sub>= q<sub>1</sub>/2 , and r=2.0x10<sup>-2</sup> m.
<br>
<img src="images_new/quest.jpg" alt="" width="230" height="200">
  <br> <b>F<sub>3</sub></b> = <b>F<sub>13</sub></b> + <b>F<sub>23</sub></b>  <br > <br>  <img src="images_new/coulomb1.jpg" alt="" width="200" height="70">
        <br>

<b>a<sub>r<sub>13</sub></sub></b> = cos&theta <b>a<sub>x</sub></b>  + sin&theta <b>a<sub>y</sub></b>,
<br>
<b>a<sub>r<sub>13</sub></sub></b> = (<b>a<sub>x</sub></b>  +<b>a<sub>y</sub></b> )/2<sup>1/2</sup>,&nbsp;<br>
 <b>a<sub>r<sub>23</sub></sub></b>=<b>a<sub>x</sub></b><br><br>
Hence <b>F<sub>3</sub></b>=3.0N  <br><br>
 &phi=tan<sup>-1</sup>(<b>F<sub>3,y</sub></b>/<b>F<sub>3,x</sub></b>) =151.3<sup>0</sup>.
<br></div>
';

$quiz1 = '
        <p>
   <b>Subjective Type Questions</b>
<br>
        <b>Q1)</b> Find force of attraction between nucleus and electron of Hydrogen atom ?<br><br>

        <b>Q2 )</b> Find force between 2 quarks seperated by a distance of 1.0E-16 metres?(given charge of a quark is 2e/3).
<br><br>

        <b>Q3)</b> Two charges feel repulsive force of 96 N.What will be the force if seperation,r is quadrupled.
<br><br>

        <b>Q4)</b> An oil drop of radius r= 1.64x10<sup>-6</sup>m and mass density &rho<sub>oil</sub>= 8.51x10<sup>2</sup>kg/m<sup>3</sup> is allowed to fall from rest and then enters into a region of constant external field <b>E</b> applied in the downward direction. The oil drop has an unknown electric charge q. The magnitude of the electric field is adjusted until the gravitational force <b>F</b><sub>g</sub> = m<b>g</b> = -m<b>g</b> a<sub>j</sub> on the oil drop is exactly balanced by electric force, <b>F<sub>e</sub></b>=q<b>E</b></sub>. Suppose this balancing occurs when the electric field is <b>E</b>=-E<sub>y</sub> a<sub>j</sub> = -(1.92x10<sub>5</sub>N/C) a<sub>j</sub> with E<sub>y</sub>= 1.92x10<sup>5</sup> N/C.
<br>
a) Find mass of oil drop ?
<br>
b) What is charge on oil drop in units of electronic charge(e)?
<br><br>
<br />
<b>Objective Type Questions</b>
<br>
Q1) If there is a force of 5X10<sup>-9</sup>N acting to the left on an electron, the electric field intensity at the location of electron will be:<br>
&nbsp; 1) Zero <br>
&nbsp; 2) 8X10<sup>-31</sup> to the left <br>
&nbsp; 3) 3.1X10<sup>7</sup> N/C to the left <br>
&nbsp; 4) 3.1X10<sup>7</sup> N/C to the right <br>
<br>

Q2) In 1 mole or 18gms of Water, the total negative charge of all the electrons is :<br>
&nbsp; 1) Zero, because it is electrically neutral <br>
&nbsp; 2) Less tham 1 C <br>
&nbsp; 3) Almost 100,000 C <br>
&nbsp; 4) Almost 1 million C <br>
<br>

Q3) If a charge \'q\' is placed at the centre of the line joining two equal point charges
, each equal to +Q. This system of 3 charges will be in equilibrium if \'q\' is equal to:<br>
&nbsp; 1) +Q <br>
&nbsp; 2) +Q/2 <br>
&nbsp; 3) -Q/4 <br>
&nbsp; 4) +Q/4 <br>
<br>

<br>

Q4) Electrical charge interaction can be summarized by:<br>
&nbsp; 1) - charge repels other - charge.<br>
&nbsp; 2) + charge repels other + charge.    <br>
&nbsp; 3) - charge and + charge attract each other. <br>
&nbsp; 4)  All of these.    <br>
<br>

Q5)  Consider two point charges that are separated by a distance, 2r. If this distance between them is increased to 5 r, the force between the charges is:<br>
&nbsp; 1) 1/25 as great as it had been  <br>
&nbsp; 2) 4/25 as great as it had been    <br>
&nbsp; 3) 1/9 as great as it had been    <br>
&nbsp; 4) 25 times as great as it had been <br>
<br>

Q6) Consider three identical metal spheres that are mounted on insulating stands. Sphere X is neutral, sphere Y has a charge -1q, and sphere Z has a charge +4q. X and Y are touched together and then separated. <br>

&nbsp; 1) Each is now charged, with a charge -0.5 q.   <br>
&nbsp; 2) Each is now charged, with a charge -1 q    <br>
&nbsp; 3) Sphere X is neutral, sphere Y has a charge -1q <br>
&nbsp; 4) Sphere X has charge -1 q, sphere Y is now neutral <br>

</div>';

$ref1 = '
<ol>
 <li> &nbsp;&nbsp;"Elements of electromagnetics" by  <i>Sadiku</i>.  </li>
 <li> &nbsp;&nbsp;"Electromagnetics With Applications"  by <i>John Daniel Kraus</i>.</li>
 <li> &nbsp;&nbsp;"Fundamentals of Applied Electromagnetics (6th Edition)" by <i>Fawwaz T. Ulaby</i>.</li>
';


$intro1 = mysql_real_escape_string($intro1);
$obj1 = mysql_real_escape_string($obj1);
$manual1 = mysql_real_escape_string($manual1);
$procedure1 = mysql_real_escape_string($procedure1);
$virExp1 = mysql_real_escape_string($virExp1);
$theory1 = mysql_real_escape_string($theory1);
$quiz1 = mysql_real_escape_string($quiz1);
$ref1 = mysql_real_escape_string($ref1);



// storing values for coloumb's law experiment

$intro2 = '<b> Electrostatic Field </b>
<p>

        In 1<sup>st</sup> experiment using Coulomb\'s law we have seen force due to point charges. In this experiment we will estimate electric fields distribution due to various charges. Then
        calculation of <b>E</b> at a specific point will also be done.

        </p>
';

$obj2 = ' To find Electric Field due to a :<br>
    <ol>
    <li> Point Charge </li>
 <li> Line Charge </li>
  <li> Surface Charge </li>
 <li>  Volume Charge  </li>
 </ol>

';


$manual2 = '<object width="950" height="800">
<param name="movie" value="somefilename.swf">
<embed src="22.swf" width="950" height="800">
</embed>
</object>';

$procedure2 = '';

$virExp2 = '';

$theory2 = ' <p>

Electric Field due to a <b>Point Charge</b> <br><br>
Electric Field intensity (or Electric Field strength) <b>E</b> is the force per unit charge when placed in electric field. <br>
Thus, <b>E</b> can be for a point charge as: <br>

<img src="electric_field.jpg" alt="center" width="150" height="70"><br><br><br>

The Electric Field intensity is in the direction of Force and is measured in newtons/coulomb or volts/meter. The Electric Field at a point
<b>r</b> due to a point charge located at <b>r<sup>\'</sup></b> is obtained as: <br>

<img src="electric_field1.jpg" alt="center" width="150" height="70"><br><br><br>

Example 1) Point charges 1 mC and -1 mC are located at (3, 2, - 1 ) and (-1, -1, 4) respectively.
<br>
Calculate electric field on 1mC charge due to -1 mC charge ?<br>
<br>Solution 1)
<br>
<br><img src="electric_field2.jpg" alt="center" width="350" height="130"><br><br><br>

Electric field due to <b>Line Charge</b><br><br>
Consider a line charge element <i>dQ</i> with uniform charge density &rho<sub>L</sub> extending from A to B along z-axis.The charge element <i>dQ</i> associated with the element <i>dl</i> = <i>dz</i> of the line is
dQ = &rho<sub>L</sub>dl &nbsp; Hence the total charge is Q = &int&rho<sub>L</sub>dl.  &nbsp;&nbsp;(line charge)
<!--    </tr> </table>--><br/>
                        <img src="exp2_line.jpg" alt="center" width="360" height="180"><br><br><br><br>

The electric field at any arbit point can be given by :<br>

                <img src="electric_field3.jpg" alt="center" width="150" height="60">
<br><br>
Let the field point be (x,y,z) and source point be (x\',y\',z\')
<br>
dl=dz\'<br>
 &nbsp; <b>R</b> = (x,y,z)-(0,0,z\') <br>
&nbsp; <b>R</b> =  x<b>a</b><sub>x</sub> + y<b>a</b><sub>y</sub> + (z-z\')<b>a</b><sub>z</sub>
<br>
&nbsp; <b>R</b> = &rho<b>a</b><sub>&rho</sub> + (z-z\')<b>a</b><sub>z</sub>
<br>
<br>

&nbsp; R<sup>2</sup>=|<b>R</b>|<sup>2</sup>,<br>
&nbsp; <b>a</b><sub>R</sub>/R<sup>2</sup> = <b>R</b>/|<b>R</b>|<sup>3</sup> <br>
<br>
Hence<br>

<img src="electric_field4.jpg" alt="center" width="300" height="50"><br><br>

 Thus for finite line charge :
<br><br>
<b>E</b> = (&rho<sub>L</sub>/4&pi&epsilon<sub>0</sub>&rho)[-(sin&alpha<sub>2</sub> - sin&alpha<sub>1</sub>)<b>a</b><sub>&rho</sub> + (cos&alpha<sub>2</sub> - cos&alpha<sub>1</sub>)<b>a</b><sub>z</sub>]
<br><br>

So for an infinite line charge, point B is at (0,0,&infin) and A at(0,0,-&infin) so that &alpha<sub>1</sub> = &pi/2, &alpha<sub>2</sub> = -&pi/2; and z component vanishes. so <b>E</b> is <br><br>
<b>E</b>= (&rho<sub>L</sub>/2&pi&epsilon<sub>0</sub>)<b>a</b><sub>rho</sub> .
<br><br>
Here <b>E</b> is obtained for infinite line charge along z-axis so that &rho and <b>a</b><sub>rho</sub> have their usual meaning. If line is not along z-axis, &rho is perpendicular distance from the line to the point of interest and <b>a</b><sub>&rho</sub> is a unit vector along distance directed from line charge to field point.
<br>
<br>

Electric field due to a <b>Surface Charge</b>:
<br>
Consider an infinite sheet of charge in the xy-plane with uniform charge density &rho<sub>s</sub>. The charge associated with an elemental area d<i>S</i> is
<br>
d<i>Q</i> = &rho<sub>s</sub> d<i>S</i>
<br>
So the total charge is Q = &int&rho<sub>s</sub> d<i>S</i>
<img src="exp2_surface.jpg" alt="center" width="350" height="260"><br><br>
Thus the contribution to the <b>E</b> at point P(0,0,h) by the elemental surface is
<br><br>
d<b>E</b> = d<i>Q</i> <b>a</b><sub>R</sub>/4&pi&epsilon<sub>0</sub>R<sup>2</sup>.
<br><br>
<b>R</b> = &rho(-<b>a</b><sub>&rho</sub>)+h<b>a</b><sub>z</sub>, R= |<b>R</b>| = [&rho<sup>2</sup> + h<sup>2</sup>]<sup>1/2</sup> <br>
<br><b>a</b><sub>R</sub>= <b>R</b>/R,<i>dQ</i> = &rho<sub>s</sub>dS = &rho<sub>s</sub>&rho d&phi d&rho <br><br>
<b>E</b>= &int dE<sub>z</sub>
<br><br>
<b>E</b> = &rho<sub>s</sub><b>a<sub>z</sub></b>/2&epsilon<sub>0</sub> <br><br>
This is only z-component of Electric field if the charge is in x-y plane. For infinite sheet of charge<br>
 <b>E</b> = &rho<sub>s</sub><b>a</b><sub>n</sub>/2&epsilon<sub>0</sub>
<br><br>
For a parallel plate capacitor <b>E</b>= &rho<sub>s</sub><b>a<sub>n</sub></b>/&epsilon<sub>0</sub>. <br>
        <br/>
Electric field due to <b>Volume Charge Distribution</b><br>
Let the volume charge distribution with uniform charge density &rho<sub>v</sub>, So charge <i>dQ</i> associated with the elemental volume <i>dv</i> is <br>
d<i>Q</i> = &rho<sub>v</sub><i>dv</i><br>
<img src="exp2_volume.jpg" alt="center" width="350" height="260">
<br>
<br><br>

The total charge in a sphere of radius \'a\' is
<br><br>
Q = &int &rho<sub>v</sub><i>dv</i> = &rho<sub>v</sub> &int<i>v</i>
<br><br>
Q = &rho<sub>v</sub> 4&pi a<sup>3</sup>/3 ;<br>
<br>
The Electric field at point (0,0,z) is <br>
d<b>E</b> = &rho<sub>v</sub><i>dv</i><b>a<sub>R</sub></b>/4&pi&epsilon<sub>0</sub>R<sup>2</sup>
<br><br>
&nbsp;<b>a<sub>R</sub></b> = cos&alpha <b>a</b><sub>z</sub> + sin&alpha <b>a</b><sub>&rho</sub>.Due to symmetry of charge distribution we have <b>E</b><sub>x</sub> + <b>E</b><sub>y</sub> =0.
<br><br>
<b>E</b><sub>z</sub> = &int d<b>E</b>cos&alpha = (&rho<sub>v</sub>)/4&pi&epsilon<sub>0</sub> &int dv cos&alpha/R<sup>2</sup> <br>
dv = r<sup>\'2</sup>sin&theta<sup>\'</sup>dr<sup>\'</sup>d&theta<sup>\'</sup>d&phi<sup>\'</sup> <br>
R<sup>\'</sup> = z<sup>2</sup> + r<sup>\'2</sup> - 2zr<sup>\'</sup>cos&theta <sup>\'</sup><br>
r<sup>\'</sup> = z<sup>2</sup> + R<sup>2</sup> - 2zRcos&alpha <br>
<br>
using all the substitutions and solving the integration the electric field at (0,0,z) is: <br>
<b>E</b><sub>z</sub> = <b>E</b> = Q<b>a</b><sub>z</sub>/ 4&pi&epsilon<sub>0</sub>z<sup>2</sup> <br>

<br>
</div>'
;

$quiz2 = '
        <p>
   <b>Subjective Type Questions</b>
<br><br>
        <b>Q1</b> The finite sheet 0<x<1, 0<y<1, on the z=0 plane has a charge density &rho<sub>s</sub>= xy(x<sup>2</sup> + y<sup>2</sup> + 25)<sup>3/2</sup> nC/m<sup>2</sup>. Find the total charge on the sheet ?<br><br>

        <b>Q2</b> Determine <b>D</b> at (4,0,3) if there is a point charge -5&pi mC at (4,0,0) and a line charge 3&pi mC/m along y-axis.
<br><br>

        <b>Q3</b>Consider a sphere of radius R = 8.0m with a charge Q = 3.0 &micro C uniformly distributed throughout the volume. What is the electric field at a distance r = 4.0m ?
<br><br>

        <b>Q4</b> Find Electric field for a uniformly charged sphere of radius \'a\' and uniform charge density &rho C/m<sup>3</sup>  using Gauss law ?
<br><br><br>

<b>Objective Type Questions</b>

<br>

Q1)  The electric field is zero: <br>
&nbsp; 1) inside any conductor.    <br>
&nbsp; 2) inside any conductor with a static charge.  <br>
&nbsp; 3) inside any material, conductor or insulator, with a static charge.<br>
&nbsp; 4) Never.    <br>
&nbsp; 5) Always.   <br>

<br>
Q2) Nine negative charges, each of magnitude Q are arranged symmetrically along the circumference of a circle of radius R. The electric field at the centre of the circle is <br>
&nbsp; 1) kQ/R<sup>2</sup> <br>
&nbsp; 2) 9kQ/R<sup>2</sup><br>
&nbsp; 3) -9kQ/R<sup>2</sup><br>
&nbsp; 4) -9kQ/R<sup>2</sup> cos(2&pi/9)<br>
&nbsp; 5) Zero <br>
<br>
Q3) Positive charge +Q is uniformly distributed on the upper half a rod and a negative charge -Q is uniformly distributed on the lower half. What is the direction of the electric field at point P, on the
perpendicular bisector of the rod?
<br>
&nbsp; 1) Downwards <br>
&nbsp; 2) Upwards <br>
&nbsp; 3) Left <br>
&nbsp; 4) Right <br>
&nbsp; 5) 45<sup>0</sup> with the perpendicular axis <br>

<br>
Q4) Two point charges, q1 and q2, are placed a distance r apart. The electric field is zero at a point P between the charges on the line segment connecting them. We conclude that: <br>
&nbsp; 1) q1 and q2 must have the same magnitude and sign <br>
&nbsp; 2) P must be midway between q1 and q2<br>
&nbsp; 3) q1 and q2 must have opposite signs and may have different magnitudes <br>
&nbsp; 4) q1 and q2 must have equal magnitudes and opposite signs <br>
&nbsp; 5) q1 and q2 must have the same sign but may have different magnitudes <br>
<br>

Q5) 10 C of charge are placed on a spherical conducting shell. A  -3 C point charge is placed at the center of the cavity. The net charge in
coulombs on the outer surface of the shell is: <br>
&nbsp; 1) -7 <br>
&nbsp; 2) 3 <br>
&nbsp; 3) 7 <br>
&nbsp; 4) 10 <br>
&nbsp; 5) 1 <br>

<br>

Q6) The intensity of electric field between two parallel charged plates is 5N per coulomb than the fore exerted on a 2.0 coulomb charge placed between the plates is <br>
&nbsp; 1) 0.40 <br>
&nbsp; 2) 2.5 <br>
&nbsp; 3) 7 <br>
&nbsp; 4) 10 <br>

<br>
</div>
';

$ref2 = '<ol>
 <li> &nbsp;&nbsp;"Elements of electromagnetics" by  <i>Sadiku</i>.  </li>
 <li> &nbsp;&nbsp;"Electromagnetics With Applications"  by <i>John Daniel Kraus</i>.</li>
 <li> &nbsp;&nbsp;"Fundamentals of Applied Electromagnetics (6th Edition)" by <i>Fawwaz T. Ulaby</i>.</li>
';


$intro2 = mysql_real_escape_string($intro2);
$obj2 = mysql_real_escape_string($obj2);
$manual2 = mysql_real_escape_string($manual2);
$procedure2 = mysql_real_escape_string($procedure2);
$virExp2 = mysql_real_escape_string($virExp2);
$theory2 = mysql_real_escape_string($theory2);
$quiz2 = mysql_real_escape_string($quiz2);
$ref2 = mysql_real_escape_string($ref2);



// third experiment

$intro3 = '<p>
        <table>
        <tr><strong>
Till now we have considered the existence of Electric field in a homogeneous medium, especially air. If the field exists in a region consisting of two different media, the conditions that the field must satisfy at the interface seperating the media are called "Boundary consitions". <br>
These conditions are helpful in determining the field on one side of boundary conditions if the field on the other side is known.

        </strong></tr>

        <object align="middle">
        <img  src="intro_image.jpg" width="400" height="250" />
        <tr>
        </table>
        </p>';


$obj3 = '<p>
        <table>
        <tr><strong>
<br>
To:<br><br>
Determine Electric field intensity and Flux density at boundary of the following mediums:<br> <br>
1) <b>Dielectric(&epsilon<sub>r1</sub>) and dielectric(&epsilon<sub>r2</sub>)</b><br><br>
2) <b>Dielectric and conductor</b><br>
        </strong></tr>
        <br><br><br>
        <tr>

        <object align="middle">
        <!--<img  src="obj.jpg" width="500" height="250" /> -->
        </object>

        </tr>
        </table>
        </p>';

$manual3 = '<object width="950" height="800">
<param name="movie" value="somefilename.swf">
<embed src="32.swf" width="950" height="800">
</embed>
</object>';


$procedure3 = 'In this experiment, we will determine the fieldon one side of boundary conditions if field on the other side is known. The experiment was desined in a way, so that you can quickly change the parameters and observe the results. This makes you to have a more clear picture of the concepts. <br />

Start the experiment by pressing the start button at the top of the window.<br />
Now click on the screen using mouse. You will observe a red colored ray starting from the point and directs towards the origin. After crossing the boundary the ray may diverge from its path with green color.<br />

This ray is nothing but the electric field line.
The divergence of the ray is due to change in the medium at the boundary.<br />

Now, your task is to experiment with all posiible dielectrics.<br />
So, you have two sliders provided at the bottom of the window. These two stands for the dielectrics.<br />

Notice that if both regions have same dielectric, the ray will not be diverged from its path.







';


$virExp3 = '';

$theory3 = '

To determine boundary conditions <b>Maxwell\'s equations</b> will be used:<br><br>
&#8750<b>E</b>.d<b>l</b> = 0 <br>
&#8750<b>D</b>.d<b>S</b> = Q<sub>enclosed</sub> <br><br>
<b>E</b> is the Electric field <br>
<b>D</b> is Electric flux density. 
<br><br>

Now decompose the electric field intensity <b>E</b> into two orthogonal components:<br>
<b>E</b> = <b>E</b><sub>t</sub> + <b>E</b><sub>n</sub>
<br>
<b>E</b><sub>t</sub> is tangential component of Electric field
<br> <b>E</b><sub>n</sub> is normal component of Electric field.
<br><br>
Similarly,
<br><b>D</b> = <b>D</b><sub>t</sub> + <b>D</b><sub>n</sub> 
<br>
<b>D</b><sub>t</sub> is the tangential component of Electric field intensity 
<br> <b>D</b><sub>n</sub> is the normal component of Electric field intensity.
<br><br>
Now let us move to 2 types of boundary conditions: <br>
1) Dielectric - Dielectric boundary conditions. <br>
2) Dielectric - Conductor boundary conditions. <br>
<br><br>

<br><br>
        <b>Dielectric - Dielectric boundary conditions</b>
        <br><br>
Consider the <b>E</b> field existing in a region of two different dielectric characterized by &epsilon<sub>1</sub> = &epsilon<sub>0</sub>&epsilon<sub>r1</sub> and &epsilon<sub>2</sub> = &epsilon<sub>0</sub>&epsilon<sub>r2</sub>. <br>
<img src="exp4_theory1.jpg" alt="" width="500" height="180" align="middle">
<br><br><br><br><br>
<b>E</b><sub>1</sub> = <b>E</b><sub>1t</sub> + <b>E</b><sub>1n</sub><br>
<b>E</b><sub>2</sub> = <b>E</b><sub>2t</sub> + <b>E</b><sub>2n</sub> <br>
<br>
<br>

        <br/>
Now the equation<br>
 &#8750<b>E</b>.d<b>l</b> = 0 <br>
is applied for a closed path <i>abcda</i> assuming the path is very small with respect to variation in <b>E</b>.<br>

<b>E</b><sub>1t</sub>&#9651w -<b>E</b><sub>1n</sub>&#9651h/2 - <b>E</b><sub>2n</sub>&#9651h/2 - <b>E</b><sub>2t</sub>&#9651w + <b>E</b><sub>2n</sub>&#9651h/2 + <b>E</b><sub>1n</sub>&#9651h/2 <br>
E<sub>t</sub> = |E<sub>t</sub>|<br>
E<sub>n</sub> = |E<sub>n</sub>|. <br>
As, &#9651h-->0 <br>
So, <b>E</b><sub>1t</sub> = <b>E</b><sub>2t</sub> <br><br>
Thus, the tangential components of <b>E</b> are on the two sides of the boundary. In other words, <b>E</b><sub>t</sub> undergoes no changes and so continuous through the boundary.<br><br>

And since <b>D</b> = &epsilon<b>E</b> = <b>D</b><sub>t</sub> + <b>D</b><sub>n</sub>.<br> So, 
<br>
<b>D</b><sub>1t</sub>/&epsilon<sub>1</sub> = <b>D</b><sub>2t</sub>/&epsilon<sub>2</sub> <br>
Hence <b>D</b><sub>t</sub> remains discontinuous across the interface.  
<br><br>
Now continuity of normal component across the interface will be checked.<br>
<br> 
<br>
<br><br>
<img src="exp4_theory.jpg" alt="" width="350" height="150" align="middle">
<br><br><br><br><br>
From the figure we can see a cylindrical Gaussian surface  <br>
&#9651h-->0 gives <br>
&#9651Q = &rho<sub>s</sub>&#9651<b>S</b> = D<sub>1n</sub>&#9651<b>S</b>  - D<sub>2n</sub>&#9651<b>S</b>.<br>
Hence,<br> D<sub>1n</sub> - D<sub>2n</sub> = &rho<sub>s</sub> <br>
 &rho<sub>s</sub> is the free charge density placed deliberately at the boundary.<br> <b>D</b> is directed from region 2 to region 1.<br>
 If no free charges exists at the interface then &rho<sub>s</sub> =0.
<br>
So,<br> D<sub>1n</sub> = D<sub>2n</sub>
<br><br>
       <br>


Thus the normal component of <b>D</b> is continuous across the interface; that is <b>D</b> undergoes no change at the boundary. Since <b>D</b> = &epsilon <b>E</b> so <br><br>
&epsilon<sub>1</sub>E<sub>1n</sub> = &epsilon<sub>2</sub>E<sub>2n</sub> <br><br>
Hence showing normal component of <b>E</b> is discontinuous at the boundary.Thus <br>
<br>1) <b>E</b><sub>1t</sub> = <b>E</b><sub>2t</sub> <br>
<br>2) D<sub>1n</sub> - D<sub>2n</sub> = &rho<sub>s</sub> <br>
<br>3) &epsilon<sub>1</sub>E<sub>1n</sub> = &epsilon<sub>2</sub>E<sub>2n</sub> <br><br>
are collectively called the boundary conditions. <br> 
<br><br>
<b>Conductor - Dielectric boundary conditions </b>
<br>
<img src="f_s.jpg" alt="" width="400" height="160" align="middle">
<br><br><br><br><br>
The conductor is assumed to be perfect. So, <br> 
<b>E</b> = 0, inside the conductor surface.<br>
Similar procedures are applied, which 
were applied for Dielectric - Dielectric interface. <br>
But, the difference is that <br>
<b>E</b> = 0 here <br>
For the path <i>abcda</i>, considering &#9651h-->0, it is found that<br>  
<b>E</b><sub>t</sub> = 0, <br>
<b>D</b> =0. Hence,<br>
D<sub>n</sub> = &#9651Q/&#9651S = &rho<sub>s</sub> <br>
D<sub>n</sub> = &rho<sub>s</sub> <br> ';


$quiz3 = '<strong>
<b>Questions</b>
<br><br>
        <b>Q1</b> Region y<=0 consists of a perfect conductor while region y>=0 is a dielectric medium (&epsilon<sub>1r</sub> = 2). If there is a surface charge of 2nC/m<sup>2</sup> on the conductor, determine <b>E</b> and <b>D</b> at <br>
1) A(3, -2, 2)<br> 
2) B(-4, 1, 5)
<br><br>
        
        <b>Q2</b> 2 extensive homogeneous isotropic meet on a plane z = 0. For z>=0, &epsilon<sub>r1</sub> = 4 and for z<=0, &epsilon<sub>r2</sub> = 3. A uniform electric field <b>E</b><sub>1</sub> = 5<b>a</b><sub>x</sub> - 2<b>a</b><sub>y</sub> + 3<b>a</b><sub>z</sub> kV/m exists for z>=0. Find <b>E</b><sub>2</sub> for z<=0 ??
<br><br>
';


$ref3 = '<ol>
 <li> &nbsp;&nbsp;"Elements of electromagnetics" by  <i>Sadiku</i>.  </li>
 <li> &nbsp;&nbsp;"Electromagnetics With Applications"  by <i>John Daniel Kraus</i>.</li>
 <li> &nbsp;&nbsp;"Fundamentals of Applied Electromagnetics (6th Edition)" by <i>Fawwaz T. Ulaby</i>.</li>
';



$intro3 = mysql_real_escape_string($intro3);
$obj3 = mysql_real_escape_string($obj3);
$manual3 = mysql_real_escape_string($manual3);
$procedure3 = mysql_real_escape_string($procedure3);
$virExp3 = mysql_real_escape_string($virExp3);
$theory3 = mysql_real_escape_string($theory3);
$quiz3 = mysql_real_escape_string($quiz3);
$ref3 = mysql_real_escape_string($ref3);


// database insertion
mysql_query("insert into content values
		(1,'C001','T001','CN001','P001','Introduction','Sushanth Poojary','$intro1','1'),
		(2,'C001','T002','CN001','P001','Objective','Sushanth Poojary','$obj1','1'),
		(3,'C001','T003','CN001','P001','Manual','Sushanth Poojary','$manual1','1'),
		(4,'C001','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure1','1'),
		(5,'C001','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp1','1'),
		(6,'C001','T006','CN001','P001','Theory','Sushanth Poojary','$theory1','1'),
		(7,'C001','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz1','1'),
		(8,'C001','T008','CN001','P001','References','Sushanth Poojary','$ref1','1')
");

mysql_query("insert into content values
		(9,'C002','T001','CN001','P001','Introduction','Sushanth Poojary','$intro2','1'),
		(10,'C002','T002','CN001','P001','Objective','Sushanth Poojary','$obj2','1'),
		(11,'C002','T003','CN001','P001','Manual','Sushanth Poojary','$manual2','1'),
		(12,'C002','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure2','1'),
		(13,'C002','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp2','1'),
		(14,'C002','T006','CN001','P001','Theory','Sushanth Poojary','$theory2','1'),
		(15,'C002','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz2','1'),
		(16,'C002','T008','CN001','P001','References','Sushanth Poojary','$ref2','1')
");

mysql_query("insert into content values
		(17,'C003','T001','CN001','P001','Introduction','Sushanth Poojary','$intro3','1'),
		(18,'C003','T002','CN001','P001','Objective','Sushanth Poojary','$obj3','1'),
		(19,'C003','T003','CN001','P001','Manual','Sushanth Poojary','$manual3','1'),
		(20,'C003','T004','CN001','P001','Procedure','Sushanth Poojary','$procedure3','1'),
		(21,'C003','T005','CN001','P001','Virtual Experiment','Sushanth Poojary','$virExp3','1'),
		(22,'C003','T006','CN001','P001','Theory','Sushanth Poojary','$theory3','1'),
		(23,'C003','T007','CN001','P001','Quiz','Sushanth Poojary','$quiz3','1'),
		(24,'C003','T008','CN001','P001','References','Sushanth Poojary','$ref3','1')
");
echo "connected to database<br />"
?>
