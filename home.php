<?php
session_start ();
include("config.php");
include "header.php"
?>
<div id="site_content">		
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
          <h2>  <marquee alt="up">Latest News</marquee></h2>
     <p>  <a href="#" title="NEWS" style="color:#708090" text-decoration="none";>Police Commissioner visits Imo state </a></p>			
       <p><a href="#" title="NEWS" style=color:#708090>Herdsmen invade a village in kilifi</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>President Uhuru Kenyatta sacks His speech writer</a></p> 
	 <p><a href="#" title="NEWS" style=color:#708090>Breaking: Two childrens have lost</a></p>			
	<p> <a href="#" title="NEWS" style=color:#708090>"Robbers invades the kilifi town</a></p> 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>FAQs</h2>
            <p><a href="econtact" title="Emergency" style=color:#708090 text-decoration:none;>Emergency Numbers? <br></a>
			 <p><a href="#" title="How to" style=color:#708090 text-decoration:none;> How to report crime? <br>
			  <p><a href="#" title="Police Recruitment" style=color:#708090 text-decoration:none;>Police Recruitment?</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="700" height="350" src="images/pi.png" alt="&quot;The Police commissioner&quot;" /></li>
		  <li><img width="700" height="350" src="images/chopper.jpg" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/slider3.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/slider4.jpg" alt="&quot;Enter your caption here&quot;" /></li>
		  <li><img width="700" height="350" src="images/slider1-thumb001.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li><img width="700" height="350" src="images/slider4-thumb004.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul>
      </div>	
<div class="detail">						
		<table width="96%" cellpadding="0" cellspacing="0" >
		<tr>
		<td width="650" height="89" >
		<h2>Welcome, <?php echo ($_SESSION['username']); 
		?>... <?php echo ($_SESSION['type'])?></h2>
		 <p><?php //echo base64_decode($_GET[msg]);?>
		 </tr>
		</table>
        </div>	  
	</div><!--close site_content--> 
 <?php include("footer.php");?>
</div><!--close container-->
  </body>
</html>