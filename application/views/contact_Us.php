<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('common/header.php');?>
  <header>
  	<title>Contact Us</title>
		<?php $this->load->view('common/main_menu.php');?>
  </header>
<body>
</br>
</br>
<div class="container">
			
      <!--map beegan-->
      <div class="row">
      <div class="col-md-8">
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress themes</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(6.8993033,79.92218890000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.8993033, 79.92218890000004)});infowindow = new google.maps.InfoWindow({content:"<b>TurnKey</b><br/>761/4,Pannipitiya Road<br/> thalawathugoda" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
     <!--map close-->
     </div>
     <div class="col-md-4" style="left: -150px; height: 250px; background-color:#fff">
       <h4><b>Location</b></h4>
       <p>
        <b>Green Lands Holdings(Pvt)Ltd.</b></br>
         <b>No.761/4,</b></br>
         <b>Pannipitiya Road,</b></br>
         <b>Thalawathugoda,</b></br>
         <b>Sri Lanka</b></br>
         <b>Tel:</b></br>
         <b>+94113098840</b></br>
         <b>+94712300666</b></br>
         <b>+94779032642</b></br>
         <b>Email:<a href="sl.greenlands@gmail.com">sl.greenlands@gmail.com</a></b></br>
       </p>
     </div>
     </div>
     
     
    <div class="myform">
      <!--email-->
      <?php 
if(isset($_POST['submit'])){
    $to = "damithdrg@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>


<form action="" method="post" style="margin-top: 20px;">
  <table>
    <tr>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        First Name:
      </td>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        <input type="text" name="first_name" style="margin-top: 5px;">
      </td>
    </tr>
    <tr>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        Last Name:
      </td>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        <input type="text" name="last_name" style="margin-top: 5px;">
      </td>
    </tr>
    <tr>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        Email:
      </td>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        <input type="text" name="email" style="margin-top: 5px;">
      </td>
    </tr>
    <tr>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        Message:
      </td>
      <td style="margin-top: 5px; margin-bottom: 5px;">
        <textarea rows="5" name="message" cols="30" style="margin-top: 5px;"></textarea>
      </td>
    </tr>
    <tr style="margin-top: 5px; margin-bottom: 5px;">
      <td>
        <input type="submit" name="submit" value="Submit" style="margin-top: 5px;">
      </td>
    </tr>
    </table>
  </form>
    </div>
    </div>
	


	<?php $this->load->view('common/footer.php');?>
</body>
</html>