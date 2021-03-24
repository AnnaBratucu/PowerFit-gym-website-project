<?php
  include 'inc/header.php';
  ?>

<head>
 <link href="css/style1.css" rel="stylesheet">


</head>

<body>
<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">

<h2 class="text-center wowload fadeInUp">Calorie Counter</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-play-circle"></i> Introduction </h4>
    <p>Calorie counts are the first thing you probably look at when you look at a nutrition facts label. Food provides energy that comes in the form of calories (or kilocalories). All foods provide calories, whether they have a nutrition label or not, and it’s much easier to achieve your weight goals when you know how many.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="glyphicon glyphicon-scale"></i> It's useful</h4>
  <p>You can use an app on your phone or computer. Even if you don't consistently use a calorie counter, it’s a good idea to try it out for at least a day or two, preferably a typical weekday and a typical weekend day, to know if you're meeting your daily calorie goal.</p>    
  </div>
  </div>

  <div class="services">
  <h3 class="text-center wowload fadeInUp">Use it to find how many calories you need of:</h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
      
        <li>
            <span><img src="images/i.png" alt="" /><b>Fat</b></span>
        </li>
        <li>
            <span><img src="images/64x64.png" alt="" /><b>Protein</b></span>
        </li>
        <li>
            <span><img src="images/b.png" alt="" /><b>Carbohydrate</b></span>
        </li>        
        <li>
            <span><img src="images/w.png" alt="" /><b>Alcohol</b></span>
        </li>
    </ul>
  </div>
</div>
<!-- #Cirlce Ends -->

   
   <div class="container">
   <br>
   <br>
<div class="resp_code" align='center' style="margin-left: 285px;">
<table id ='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%;">
<tr><td align=center><br><b>Calorie Calculator</b><br><br><form name="frm" action="" class='frms noborders'><table><tr><td style="color: #3D366F; font-size:13px;">Age:</td><td><input type="text" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)"></td><td><font color="#3D366F" size="2">years</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Gender:</td><td><input type="radio" name="gen" id="gen" checked><font color="#3D366F" size="0.7">Male     </font><input type="radio" name="gen" id="gen"><font color="#3D366F" size="0.7">  Female</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Height:</td><td><select style='width:50%;' name="foot" id="foot" onchange="hcon()"><option value="1">1'</option><option value="2">2'</option><option value="3">3'</option><option value="4">4'</option><option value="5">5'</option><option value="6">6'</option><option value="7">7'</option></select><select style='width:40%;'name="inch" id="inch" onchange="hcon()"><option value="1">1"</option><option value="2">2"</option><option value="3">3"</option><option value="4">4"</option><option value="5">5"</option><option value="6">6"</option><option value="7">7"</option><option value="8">8"</option><option value="9">9"</option><option value="10">10"</option><option value="11">11"</option></select></td></tr><tr><td style="color: #3D366F; font-size:13px;">Cms :</td><td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td></tr><tr><td style="color: #3D366F; font-size:13px;">Weight:</td><td><input type="text" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)"></td><td><select name="wtype" id="wtype"><option value="kg">Kg</option><option value="pounds">Pounds</option></select></td></tr><tr><td style="color: #3D366F; font-size:13px;">Activeness:</td><td><select style='width:100px;' name="loa" id="loa"><option value="1">Sedentary</option><option value="2">Light Active</option><option value="3">Moderately Active</option><option value="4">Very Active</option><option value="5">Extra Active</option></select></td></tr><tr><td colspan='2' align="center"><input class='blue_button' type="button" align="center" value="Calculate The Calorie" onclick="cc()"><span id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"><a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="https://www.hscripts.com"></a></span></td></tr></table></form>
<br><table align="center" border="0" class="frms noborders"><caption><b>Calorie Result</b></caption><tr><td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td><td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td><td><select name="caltype" id="caltype" onChange="convert()"><option value="g">Grams</option><option value="kg">Kilograms</option><option value="pounds">Pounds</option></select></td></tr></table><div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div><table class="frms noborders"><tr><td style="color: #3D366F; font-size:13px;">Fat:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Protein:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Carbohydrate:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Alcohol:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font></td></tr></table>
</tr></td>
</table>
</div>



</div>

</body>




<?php
  include 'inc/footer.php';
  ?>