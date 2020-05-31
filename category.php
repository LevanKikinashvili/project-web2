<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>კატეგორიები</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
    
          <style>
    
    body {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    -webkit-appearance: none;
    background-color: #000000f2;
        color: white;
}
    
    </style>
    
    <style>
    
        .middletext {
    font-size: 15px;
    color: #9b9df5;
    font-weight: bold;
}
    a {
    color: #9b9df5;
    text-decoration: none;
}
    </style>
    
    <style>
        
    button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
    background-color: #70b8e8;
    color: black;
    border-color: #000000;
        width: 100%;
}
        
    </style>
    
    <style>
    .header-info h2 a {
    display: inline-block;
    color: #fff;
    padding: 0.5em 2em;
    background: #00000040;
    text-decoration: none;
}
    </style>
    
    
<style>
    
    .header-top {
    background: #000000c7;
    min-height: 32px;
    padding: 1.5em 0;
    position: fixed;
    z-index: 9999;
    width: 100%;
    clear: both;
    border-bottom: 1px solid rgba(128, 128, 128, 0.17);
}
    </style>
    
    <style>
        
    .about {
    padding-top: 6%;
    background-color: #000000f2;
}
    </style>
    
    <style>
    .about-grids h4 {
    font-size: 1.4em;
    font-weight: 500;
    color: #60B0E6;
}
    </style>
    
    <style>
    
        .top-tours-head {
    padding-top: 6%;
    background-color: #000000f2;
}
    
    </style>
    
    <style>
    .copyright {
    background: #000000f2;
    min-height: 48px;
}
    </style>
    
    <style>
    .contact-head {
    padding-top: 6%;
    background-color: #000000f2;
}
    </style>
    
    <style>
    .address h5 a {
    text-decoration: none;
    color: white;
}
body 
    </style>
    
        <style>
    .contact form input[type="text"], .contact textarea {
    color: #ffffff;
    border: 1px solid #1b1b1b;
    outline: 0;
    padding: 0.5em;
    width: 100%;
    background-color: #1b1b1b;
}
    </style>
    
    <style>
    #filters li span.active, #filters li span {
    color: #559ccc;
    text-decoration: none;
    display: block;
    border: 1px solid #000000f2;
    font-size: 1.15em;
    font-weight: 500;
    cursor: pointer;
    margin: 0 0.3em;
    border-radius: 2px;
}
.top-tours-head span {
    background: rgba(128, 128, 128, 0.41);
    width: 5.5%;
    height: 1px;
    display: inline-block;
    vertical-align: text-bottom;
}
    </style>
    
    <style>
    
    .top-nav ul li a {
    color: #60B0E6;
    text-decoration: none;
    padding: 0.4em 1.5em;
    display: block;
    font-size: 1.1em;
    font-weight: 400;
        border: none;
}
    </style>

    <style>
    .contact form input[type="submit"] {
    width: 35px;
    height: 35px;
    display: block;
    padding: 0 7em 0 3em;
    float: right;
    border: none;
    outline: none;
    margin-top: 2em;
    font-size: 1.2em;
    color: white;
}
    </style>
    
    <style>
    .about-grids p {
    margin-left: 4em;
    width: 87%;
    line-height: 23px;
    color: #ffffff;
}
    </style>
    
    
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>კატეგორიები</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="100%">
<tr><td class="headingText">მოგესალმებით MYTOUR-ზე </td></tr>
<tr><td class="paraText" width="900px">დაგეგმე და დაჯავშნე შენთვის იდიალური ტური.
ეწვიე იმ ადგილს რომელზეც ოცნებობდი, გააკეთე რაც გიყვარს, ნახე რაც გიყვარს, My Tour ის დახმარებით შეგიძლიათ ნახოთ თქვენთვის სასურველი ადგილები ხელსაყრელ ფასად.ტურების განმავლობაში ნახავთ მრავალ ადგილს, რომელიც აქამდე ნანახი არ გქონდათ, სასტუმროებს და ა.შ.</td></tr> 
    <br>
    <img src="https://images.wallpaperscraft.com/image/man_mountains_tourist_134697_1920x1080.jpg" alt="Travel" width="100%">
    </table> <br>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>