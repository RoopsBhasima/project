@extends('master')
    @section('content')
    <div class="social">
 	<i class="fab fa-facebook"></i>
 	<i class="fab fa-youtube"></i>
 	<i class="fab fa-snapchat"></i>
 	<i class="fab fa-twitter"></i>
 	<i class="fab fa-instagram"></i>
 </div>
	<div class="container">
		<div class="bannermenu_fix">
<div class="row">
	<div class="col100 banner"></div>
</div>
<div class="hr"></div>
<div class="row">
	<div class="col100 menu">
		<ul>
			<li><a href="index">Home</a></li>
			<li><a href="about">About</a></li>
			<li><a href="#">Contacts</a></li>
		</ul>
	</div>
</div>
</div><!-- Banner menu fix close -->
<div class="scrollable">
<div class="row">
<div class="myheading">Contact</div>
<div class="row">
	<div class="col50"><img src="slider.jpg" alt="Slider" title="Slider" /></div>
	<div class="col50 highlight">
		<div class="row">
			<div class="col75">
				<p>BY PHONE
(Monday to Friday, 9am to 6pm PST) 

North America Toll-Free:
1-877-930-7483 

International:
1-604-637-0780</p>
				 </div>
	</div>
    </div>
    </div>
<div class="clear"></div>
<div class="hr"></div>
<div class="row">
	<div class="col25"><img src="col.jpg"/><p> This is the description</p></div>
	<div class="col25"><img src="col.jpg"/><p> This is the description</p></div>
	<div class="col25"><img src="col.jpg"/><p> This is the description</p></div>
	<div class="col25"><img src="col.jpg"/><p> This is the description</p></div>
</div>
<div class="clear"></div> <!-- This is used to clear float left of col..-->
<div class="footer">
	<div class="col100">&copy; 2019, All Rights Reserved.</div>
</div>
</div>
</div>
</div>

    @endsection

    @section('title')
    Contact
    @endsection