<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="aboutus.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

<title>Contact Us</title>
</head>

<body>

<header>

<div id="menu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="news.html">News</a></li>
<li><a href="#">About</a></li>
<li><a href="contactus.html">Contact Us</a></li>
<li><a href="upcoming.html">Upcoming...</a></li>
</ul>
</div>

</header>

<div id="formEdit">
<form method="post" action="php/sendform.php">
	<p align="left">Name:<br/>
		<input type="text" name="fromName" size="40"/>
    </p>
        <p align="left">Email Address:<br/>
            <input type="text" name="fromEmail" size="40"/>
        </p>
        <p align="left">Subject:<br/>
            <input type="text" name="fromSubject" size="40"/>
        </p>
        <p align="left">Message:<br/>
			<textarea name="fromContent" cols="60" row="2" rows="8"/></textarea></p>
    
        <p>	<input type="submit" value="Send" name="send" style="float: left"> &nbsp;
			<input type="reset" value="Reset" name="reset" style="float: left">
        </p>
       
</form>


</div>





<div id="footContain">
<footer>


	<ul>
		<li>Latest Topics</li>
		<li><a href="#">Back to the Future 2 hype October 21, 2015</a></li>
		<li><a href="#">NASA confirmed: Water found on Mars</a></li>
        <li><a href="#">Microsoft to introduce VR compatibility in Windows 10</a></li>
	</ul>
    <ul>
    	<li>About Us</li>
        <li><a href="#">Lead Developer</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Join Us</a></li>
    </ul>
    <ul>
    	<li>Social</li>
        <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://th3vileone.github.io/ITE120/" data-via="avbowo">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
        <li class="fa fa-facebook-official"><a href="http://www.facebook.com/sharer/sharer.php?u=http://th3vileone.github.io/ITE120/">
   <span class="customFB">Facebook</span>
</a></li>
</br>
		<li class="fa fa-google-plus"><a href="https://plus.google.com/share?url=http://th3vileone.github.io/ITE120/"><span class="customGP">Google+</span></a></li>
    </ul>
   
    
	
<p class="fa fa-copyright"> <span class="footlate"><small>AIV120 2015</small></span></p>

</footer>
</div>

</body>
</html>
