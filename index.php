<?php

$host="localhost"; 
$username="theabzo4_root";
$password="!Abhi1234";
$db_name="theabzo4_tae";
$tbl_name="counter"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect to server "); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$counter=$rows['counter'];

if(empty($counter)){
$counter=1;
$sql1="INSERT INTO $tbl_name(counter) VALUES('$counter')";
$result1=mysql_query($sql1);
}

$addcounter=$counter+1;
$sql2="update $tbl_name set counter='$addcounter'";
$result2=mysql_query($sql2);

mysql_close();
?>
<html>
<head><title>Search College Worldwide As Per IELTS/TOEFL</title><link rel="shortcut icon" href="87.png"/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <script type="text/javascript">

if (screen.width <= 699) {
window.location.href = "http://www.theabroadeducation.com/wp";
}
</script>
<link rel="stylesheet" type="text/css" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>   
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );

 $( function() {	
    $( ".datepicker1" ).datepicker();
  } );

function toggleTextbox(opt)
{	
    if (opt == 'Return')
{
        document.getElementById('txtText').disabled = false; 
        document.getElementById('txtText1').disabled = false;
} 
   else
{
        document.getElementById('txtText').disabled = true;
        document.getElementById('txtText1').disabled = true;
}
}

</script>
<script type="text/javascript">
$(document).ready(function() {

$('.masterTooltip').hover(function(){
        
        var title = $(this).attr('title');
        $(this).data('tipText', title).removeAttr('title');
        $('<p class="tooltip"></p>')
        .text(title)
        .appendTo('body')
        .fadeIn('slow');
}, function() {
        
        $(this).attr('title', $(this).data('tipText'));
        $('.tooltip').remove();
}).mousemove(function(e) {
        var mousex = e.pageX + 20; //Get X coordinates
        var mousey = e.pageY + 10; //Get Y coordinates
        $('.tooltip')
        .css({ top: mousey, left: mousex })
});
});
function validate_selected()
 {  
    var a=["UK","USA","Canada","Germany","France","Singapore","Ireland","Australia"];
    var ch=document.forms["myform"]["tickettype"].value;
    var x = document.forms["myform"]["toefl"].value;
    var y = document.forms["myform"]["ielts"].value;
    var c=document.forms["myform"]["country"].value;
switch(ch)
{
case "Yes":    
if ((x == ""||x>120||x<69)&&(y == ""||y>9||y<5))
{
        alert("Enter a valid score of TOEFL/IELTS");
        return false;
}
else if(c == "")
{
alert("Please choose a Valid Country from the list given");
        return false;
}
if (['UK', 'USA','uk', 'usa','Germany', 'germany','Canada','canada','Australia', 'australia','France', 'france','Singapore', 'singapore','Ireland', 'ireland','UK'].indexOf(c)>-1) {
return true;
}
else
{
alert("Please choose a Valid Country from the list given");
        return false;
}

break;
case "No":
if(c == "")
{
alert("Please choose a Valid Country from the list given");
        return false;
}
else if (['UK', 'USA','uk', 'usa','Germany', 'germany','Canada','canada','Australia', 'australia','France', 'france','Singapore', 'singapore','Ireland', 'ireland','UK'].indexOf(c)>-1) {
return true;
}
else
{
alert("Please choose a Valid Country from the list given");
        return false;
}
break;
}
}
</script>
<style>
a:hover
{
    text-decoration: none;
}
</style>
</head>
<body bgcolor="#77A5E0">
<table border=0 height="100%" width="100%" cellspacing="0" cellpading="0">
<tr>
<td bgcolor="#8B0000" height="10%" width="100%"><a href="index.php"
<span style="color:orange;font-size:40px;font-family:Clip;text-decoration:none">
&nbsp;&nbsp;The Abroad Education</span></a>
<img src="87.png" width="5%" width="6%">
<span style="display:inline-block;width:250;color:white">
</span>
<a href="scholarships.php" <span style="color:orange;font-family:Candara;text-decoration:none">
SCHOLARSHIPS</span></a>&nbsp;&nbsp;&nbsp&nbsp;&nbsp
<a href="countries.php"<span style="color:orange;font-family:Candara;text-decoration:none">
STUDY DESTINATIONS</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp
<a href="feedback.php"
<span style="color:orange;font-family:Candara;text-decoration:none">
FEEDBACK</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="contact.php"<span style="color:orange;font-family:Candara;text-decoration:none">
CONTACT US </span></a>
&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>
<tr>
<td background="120.jpg">
<div id="parent8">
    <div id="child8">

<span>Find Your Dream College Here</span>
</div>
</div>
<div id="parent">
    <div id="child">
<form action="searchvalidation.php" method="POST" name="myform" onsubmit="return validate_selected()">
  <input type="radio" name="tickettype" value="Yes" onclick="toggleTextbox('Return')">English Lan-Certification Required&nbsp;&nbsp;
  <input type="radio" name="tickettype" value="No" checked onclick="toggleTextbox('One Way')">English Lan-Certification Not Required
</div></div>
<div id="parent2">
    <div id="child2">
<input type="text" name="country" placeholder="Select Country" class="masterTooltip" title="USA,UK,Australia,Canada,Germany,Ireland,Singapore,France" id='country'>
<input type="text" placeholder="Enter TOEFL Score(Overall)" id="txtText1" name="toefl" class="masterTooltip" title="Enter your overall TOEFL score between 69 to 120 " disabled="disabled">
<span style="color:white;font-family:Candara;text-decoration:none">
OR</span>
<input type="text" placeholder="Enter IELTS Band(Overall)" class="masterTooltip" title="Enter your overall IELTS band between 5.0 to 9.0 " name="ielts" id="txtText" disabled="disabled">
<input type="submit" value="Search">
</div></div></form></td></tr></table>
<div id="parent9">
    <div id="child9"><b>&nbsp;&nbsp;&nbsp; Dream &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; Explore &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; Learn </b>
</div>
</div>
<div id="parent11">
    <div id="child11">
<img src="141.png" width="25%"></img>&emsp;&emsp;&emsp;&emsp;
</div>
</div>
<div id="parent10">
    <div id="child10">
<img src="151.png" width="13%"></img>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<img src="149.png" width="15%"></img>
</div>
</div>
<div id="parent13">
    <div id="child13">
<img src="152.png" width="75%"></img>
</div>
</div>
<div id="parent12">
    <div id="child12">
<span style="color:white;font-family:Candara;font-size:50px">Benefits of Studying Abroad</span><br>
<span style="color:white;font-family:Candara;font-size:20px">You may have heard about studying overseas but are new to actually surfing this site. StudyAbroad.com has a fantastic way for you to search for Study Abroad Programs by level, type and country. It's easy and visual so you won't get lost.</span><br><br>
<span style="color:white;font-family:Candara;font-size:32px">Globalize Yourself</span><br><br>
<span style="color:white;font-family:Candara;font-size:20px">While studying abroad, you will be given the opportunity to further your academic study in a foreign country. There are a variety of programs to choose from: some immerse you directly in a foreign culture and language, while others ease you into a culture shock with support services designed specifically for study abroad students. With so many unique programs, it may be easy to find a good fit for your personality and goals. Take this opportunity to expose yourself to the world.</span><br><br>
<span style="color:white;font-family:Candara;font-size:32px">Broaden Your Experience</span><br><br>
<span style="color:white;font-family:Candara;font-size:20px">It is easy to have a limited view of the world we live in, but international travel can relieve you of this. You will learn how your home country fits into humanity, and through the eyes of a different culture, you can more precisely reflect upon your own culture. While learning another country&apos;s traditions, you will understand the significance of keeping your own traditions alive while sharing them with others. During your time abroad, you may be presented with the opportunity to travel around your host country or neighboring countries,take advantage of this. Executing travel plans and seeing unforgettable sights may help you see the world through a new set of eyes.</span><br><br>
<span style="color:white;font-family:Candara;font-size:32px">Take the Challenge</span><br><br>
<span style="color:white;font-family:Candara;font-size:20px">Studying abroad comes with its challenges which directly relate to the benefits of studying abroad. No matter where you end up, you will more than likely be out of your comfort zone as you face obstacles like homesickness, spending and budgeting foreign currency and simply living in a new, unfamiliar place. These may seem like small feats now, but in retrospect you&apos;ll be proud of the accomplishments you have overcome. You&apos;ll most likely return home a wiser individual and ready to face any future challenges head on.</span><br><br>
<span style="color:white;font-family:Candara;font-size:32px">Make Friends From Around The World</span><br><br>
<span style="color:white;font-family:Candara;font-size:20px">It&apos;s likely that the university you choose for your international studies will have a large community of students both from the local area and all around the globe. If you take full advantage of this opportunity, you could graduate having established lasting friendships with people based in many different countries, great for future trips, and also a good basis for an international professional network. As Dalferes says, &quot;Spending time studying abroad can provide an excellent opportunity to make new contacts and build invaluable relationships with peers from around the world.&quot;</span><br><br>
<span style="color:white;font-family:Candara;font-size:32px">Become Truly Independent</span><br><br>
<span style="color:white;font-family:Candara;font-size:20px">The experience of university is, for most new students, a steep learning curve in gaining independence. But studying abroad takes that a whole step further, challenging students to really develop as individuals. Dee Roach says, &quot;You obviously have to cope on your own when you are studying abroad. You have to be able to look after yourself and sort out your own affairs.&quot;</span><br><br><br><br><br><br><br>
<a href="https://www.ielts.org/"><span style="color:white;font-family:Candara;font-size:20px">About IELTS</span></a><br><br>
<a href="https://www.ets.org/toefl"><span style="color:white;font-family:Candara;font-size:20px">About TOEFL</span></a><br>
</div>
</div>
<div id="parent14">
    <div id="child14">
<span style="color:white;font-family:Candara;font-size:50px">Top Study Destinations</span><br><br>
&emsp;&emsp;&nbsp;<img class="img-circle" src="136.jpg"><br><br><br>
&emsp;&emsp;&nbsp;<img class="img-circle" src="113.jpg"><br><br><br>
&emsp;&emsp;&nbsp;<img class="img-circle" src="126.jpg"><br><br><br>
&emsp;&emsp;&nbsp;<img class="img-circle" src="167.jpg"><br><br><br>
&emsp;&emsp;&nbsp;<img class="img-circle" src="168.jpg">
</div></div>
<div id="parent15">
<div id="child15">
    <a href="usa.php"><span style="color:white;text-decoration:none">USA</span></a>
</div></div>
<br><br><br><br><br><br><br>
<div id="parent16">
    <div id="child16">
<a href="uk.php"><span style="color:white;text-decoration:none">UK</span></a>
</div></div>
<br><br><br><br><br><br>
<div id="parent17">
    <div id="child17">
<a href="france.php"><span style="color:white;text-decoration:none">France</span></a>
</div></div>
<br><br><br><br><br><br><br>
<div id="parent18">
    <div id="child18">
<a href="aus.php"><span style="color:white;text-decoration:none">Australia</span></a>
</div></div>
<br><br><br><br><br><br><br>
<div id="parent19">
    <div id="child19">
<a href="germany.php"><span style="color:white;text-decoration:none">Germany</span></a>
</div></div>
<div id="parent20">
    <div id="child20">
<br>&emsp;&emsp;<a href="about.php"<span style="font-size:17px;color:white"> About us</span></a>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<span style="font-size:17px;color:white"> Connect With Us</span>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&nbsp;
<a href="subscribe.php"<span style="font-size:17px;color:white"> Subscribe to the Newsletter</span></a>
<br><br>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php"<span style="font-size:17px;color:white"> Contact us </span></a>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="faq.php" <span style="font-size:17px;color:white"> FAQ </span></a><br><br><br><br><br>
&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
<span style="font-size:17px;color:white"> All Rights Reserved by TheAbroadEducation.com </span>
<br>
<span style="color:white;">
<?php
echo "This site is visited ";
echo $counter;
echo " times."
?></span>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;
<a href="https://www.facebook.com/abhisharma774"><span style="color:white;">Developed by Abhishek Sharma</span></a>
</div></div>
<div id="parent21">
    <div id="child21">
<a href="https://www.facebook.com/theabroadeducation" target="_self"> <img src="fb.png" width="6%" /></a>&nbsp;
<a href="https://twitter.com/theabroadedu"><img src="twitter.png" width="4.5%" /></a>&nbsp;
<a href="https://www.instagram.com/theabroadeducationindia"><img src="insta.png" width="4.5%" /></a>&nbsp;
</div></div></body></html>
