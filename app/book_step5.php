<?php 
$_SESSION['booking4']= array([
"nameCom"=>$_POST['nameCom'],
"emailCom"=>$_POST['emailCom'],
"phoneCom"=>$_POST['phoneCom'],
"mobileCom"=>$_POST['mobileCom'],
"websiteCom"=>$_POST['websiteCom'],
"iataCom"=>$_POST['iataCom'],
"addressCom"=>$_POST['addressCom'],
"cityCom"=>$_POST['cityCom'],
"countryCom"=>$_POST['countryCom'],
"currentNetCom"=>$_POST['currentNetCom'],
"courier"=>$_POST["courier"],
"dangerous"=>$_POST['dangerous'],
"events"=>$_POST['events'],
"exhibition"=>$_POST['exhibition'],
"household"=>$_POST['household'],
"liquid"=>$_POST['liquid'],
"live"=>$_POST['live'],
"nvocc"=>$_POST['nvocc'],
"perishable"=>$_POST['perishable'],
"pharmaceuticals"=>$_POST['pharmaceuticals'],
"project"=>$_POST["project"],
"ships"=>$_POST['ships'],
"time"=>$_POST['time'],
"wholesale"=>$_POST['wholesale'],
"customs"=>$_POST['customs'],
"seafreight"=>$_POST['seafreight'],
"airfreight"=>$_POST['airfreight'],
"importer"=>$_POST['importer'],
"exporter"=>$_POST["exporter"],
"ecommerce"=>$_POST['ecommerce'],
"courierSe"=>$_POST['courierSe'],
"freightMeSe"=>$_POST['freightMeSe'],
"freightPaSe"=>$_POST['freightPaSe'],
"freightTeSe"=>$_POST['freightTeSe'],
"freightEvSe"=>$_POST['freightEvSe'],
"nom-profit"=>$_POST['nom-profit'],
"howLearn"=>$_POST['howLearn'],
"textMessage"=>$_POST['textMessage']

]);

?>

<link rel="stylesheet" type="text/css" href="css/register.css">
<section class="banner" >
  <div class="container">
    <p class="t-banner text-center wow fadeInUp">
      Online Registration
    </p>
    <hr class="or-line-140" id="top-form">
  </div>
</section>
<!-- banner heade -->
<div class="form-steps" >
  <div class="container">
    <div class="w-80">
      <div id="msform">
  <!-- progressbar -->
  <?php include "register_progress.php"?>
  
<div>
  <?php
print_r($_SESSION['booking1']);
print_r($_SESSION['booking2']);
print_r($_SESSION['booking_adver']);
print_r($_SESSION['booking3']);
print_r($_SESSION['booking4']);

  ?>
</div>
  <form action="book_done" method="POST">
      <div class="row setup-content" id="step-5">
      <div class="col-md-12 form-boder">
         <p class="form-title">Review & Submit</p>
          <hr class="or-line">
        
        
        <div class="form-group" id="show-attendee">
       <p class="form-title-thx">Personal Information No.<?=$i?></p>
          <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Full Name:</span><?=$attendee['attendee_title']?><li>
        <li class="list-inline-item"><span class="title-re">Position:</span>Mr. Full Name</li>
        <li class="list-inline-item"><span class="title-re">Mobile No.:</span>Mr. Full Name</li>
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Dietary Restrictions:</span>Vegan</li>
        <li class="list-inline-item"><span class="title-re">Food Allergies:</span>None</li>
       
      </ul>
  
        </div>
      
      </div>
      <div class="col-md-12 form-boder">
        <div class="form-group" id="show-spouse">
   <p class="form-title-thx">Spouse’s Information No.<?=$i?></p>
          <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Full Name:</span>Mr. Full Name</li>
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Dietary Restrictions:</span>Mr. Full Name</li>
         <li class="list-inline-item"><span class="title-re">Food Allergies:</span>Mr. Full Name</li>
      </ul>
 
     
        </div>
      </div>
      <div class="col-md-12 form-boder">
        <div class="form-group">
          <p class="form-title-thx">Company Imformation</p>
          <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Company Name:</span>Freight XYZ</li>
         <li class="list-inline-item"><span class="title-re">Email:</span>contact@freight.xyz.com</li>
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Telephone: </span>66 84445667</li>
         <li class="list-inline-item"><span class="title-re">Website: </span>www.freightxyz.com</li>
             <li class="list-inline-item"><span class="title-re">IATA: </span>0000</li>
      </ul>
        <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Address: </span>Khwaeng Khlong Toei, Khet Khlong Toei, Krung Thep Maha Nakhon 10110</li>
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">City: </span>Bangkok</li>
         <li class="list-inline-item"><span class="title-re">Country: </span>Thailand</li>
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Network:</span>X2 Logistics</li>
        
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Specialization:</span>Project forwarding</li>
         <li class="list-inline-item"><span class="title-re">Services:</span>Freight Network</li>
              
      </ul>
        </div>
      </div>
       <div class="col-md-12 form-boder">
        <div class="form-group">
          <p class="form-title-thx">Selected Plan</p>
          <table>
            <tr>
              <td>
                <span class="title-re text-bold">Multiple Passes </span>
              </td>
              <td>x&nbsp;5</td>
              <td>
                <span class="price">$3,000</span>
              </td>
            
          </table>
      
        </div>
      </div>
      <div class="col-md-12 form-boder">
        <div class="form-group">
          <p class="form-title-thx">Sponsorships & Advertisement</p>
          <table>
            <tr>
              <td>
                <span class="title-re text-bold">Platinum Sponsor </span>
              </td>
              <td>x&nbsp;5</td>
              <td>
                <span class="price">$3,000</span>
              </td>
            </tr>
                <tr>
              <td>
                <span class="title-re text-bold">Full Page Advert</span>
              </td>
              <td>x&nbsp;5</td>
              <td>
                <span class="price">$3,000</span>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <p class="form-title-sec text-bold">Total: $31,000</p>
          <table class="table-100">
            <tr>
              <td>
            <label class="check-input">
                  <input type="checkbox" name="earlyBird" class="form-check-input">
                  <span class="checkmark"></span>
                </label>
              </td>
              <td>
                I hereby agree that upon registering for the Cargo Convention, I am taking full responsibility of my actions and I fully understand that the organizer, One Monocle Intelligent Management and the entire Cargo Convention team will not be held responsible in any event of injury, accident, personal loss and/or illness during the event.
              </td>
            </tr>
          </table>
        </div>
      </div>
        <div class="col-md-12"  >
      <p class="b-center">
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button>
          <button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">submit</button>
        </p>
      </div>
  </div>
  </form>
      
    </div>
  </div>  
</div>
</div>

  