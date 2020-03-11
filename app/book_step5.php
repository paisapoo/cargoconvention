
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
</div>
  <form action="confirm_booking" method="POST">
      <div class="row setup-content" id="step-5">
      <div class="col-md-12 form-boder">
         <p class="form-title">Review & Submit</p>
          <hr class="or-line">
        
       
        <div class="form-group" id="show-attendee">
          <?php for($i = 0;$i < $_SESSION['booking1'][0]['multi'];$i++){?>
       <p class="form-title-thx">Personal Information No.<?=$i+1?></p>
       <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Full Name:</span><?=$_SESSION['booking3'][0]['attendee_title'][$i]." ".$_SESSION['booking3'][0]['attendee_first'][$i]." ".$_SESSION['booking3'][0]['attendee_last'][$i]?></li>
        <li class="list-inline-item"><span class="title-re">Position:</span><?=$_SESSION['booking3'][0]['attendee_position'][$i]?></li>
        <li class="list-inline-item"><span class="title-re">Size T-shirt:</span><?=$_SESSION['booking3'][0]['attendee_t-shirt'][$i]?></li>
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Dietary Restrictions:</span><?=dietary($i)?></li>
        <li class="list-inline-item"><span class="title-re">Food Allergies:</span><?=$_SESSION['booking3'][0]['allergies'][$i]?></li>
       
      </ul>
          <?php } ?>
        </div>
      
      </div>
      <?php 
     
      if($_SESSION['booking1'][0]['spouse']){?>
      <div class="col-md-12 form-boder">
        <div class="form-group" id="show-spouse">
          <?php for($i=0;$i < $_SESSION['booking1'][0]['spouse'];$i++){?>
   <p class="form-title-thx">Spouse’s Information No.<?=$i+1?></p>
          <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Full Name:</span><?=$_SESSION['booking3'][0]['spouse_title'][$i]." ".$_SESSION['booking3'][0]['spouse_name'][$i]." ".$_SESSION['booking3'][0]['spouse_last'][$i]?></li>
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Dietary Restrictions:</span><?=dietarySpouse($i)?></li>
         <li class="list-inline-item"><span class="title-re">Food Allergies:</span><?=$_SESSION['booking3'][0]['allergiesS'][$i]?></li>
      </ul>
 <?php } ?>
     
        </div>
      </div>
    <?php } ?>
      <div class="col-md-12 form-boder">
        <div class="form-group">
          <p class="form-title-thx">Company Imformation</p>
          <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Company Name:</span><?=$_SESSION['booking4'][0]['nameCom']?></li>
         <li class="list-inline-item"><span class="title-re">Email:</span><?=$_SESSION['booking4'][0]['emailCom']?></li>
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Telephone: </span><?=$_SESSION['booking4'][0]['phoneCom']?></li>
          <li class="list-inline-item"><span class="title-re">Mobile: </span><?=$_SESSION['booking4'][0]['mobileCom']?></li>
         <li class="list-inline-item"><span class="title-re">Website: </span><?=$_SESSION['booking4'][0]['websiteCom']?></li>
             <li class="list-inline-item"><span class="title-re">IATA: </span><?=$_SESSION['booking4'][0]['iataCom']?></li>
      </ul>
        <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Address: </span><?=$_SESSION['booking4'][0]['addressCom']?></li>
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">City: </span><?=$_SESSION['booking4'][0]['cityCom']?></li>
         <li class="list-inline-item"><span class="title-re">Country: </span><?=getCountry($_SESSION['booking4'][0]['countryCom'])?></li>
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Network:</span><?=$_SESSION['booking4'][0]['currentNetCom']?></li>
        
        
      </ul>
      <ul class="list-inline">
        <li class="list-inline-item"><span class="title-re">Specialization:</span><?=specialization()?></li>
         <li class="list-inline-item"><span class="title-re">Services:</span><?=services()?></li>
              
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
              <td>x&nbsp;<?=$_SESSION['booking1'][0]['multi']?></td>
              <td>
                <?php 
                   $attendee = $_SESSION['booking1'][0]['pass'][0];
                   $multi = $_SESSION['booking1'][0]['multi'];
                  
                    $passTime = $attendee*$multi;
                    $discounts = $database->get("avalible","*",["name"=>'discount']);
                  if($multi > 1){
                    $passTime = $passTime-($passTime * number_format($discounts['detail'],2));  
                  }?>
                <span class="price">$<?=number_format($passTime,2)?></span> <?=$multi>1?'<span class="text-success">(10% discount)</span>':''?>

              </td>
            </tr>
            <tr>
              <td>
                <span class="title-re text-bold">Spouse Passes </span>
              </td>
              <td>x&nbsp;<?=$_SESSION['booking1'][0]['spouse']==''?0:$_SESSION['booking1'][0]['spouse']?></td>
              <td>
                <?php 
                  $price_spo = $database->get("book_price","price",['type'=>'spo_pass']);
                  $multi = $_SESSION['booking1'][0]['spouse']==""?0:$_SESSION['booking1'][0]['spouse'];
                
                   $pass2 = $multi * $price_spo;
                ?>
                <span class="price">$<?=number_format($pass2,2)?></span> 

              </td>
            </tr>
            <tr>
              <td>
                <span class="title-re text-bold">Fixed Table</span>
              </td>
              <td>x&nbsp;<?=$_SESSION['booking1'][0]['fixed']==""?0:$_SESSION['booking1'][0]['fixed']?></td>
              <td>
                <?php 
                   $multi = $_SESSION['booking1'][0]['fixed']==""?0:$_SESSION['booking1'][0]['fixed'];
                    $pass3 = $multi * $database->get("book_price","price",['type'=>'fix_pass']);
                ?>
                <span class="price">$<?=number_format($pass3,2)?></span> 

              </td>
            </tr>
          </table>
      
        </div>
      </div>
      <div class="col-md-12 form-boder">
        <div class="form-group">
          <p class="form-title-thx">Sponsorships & Advertisement</p>
          <table>
            <?php

             $cargoSpon = sponserCal();
        
            foreach($cargoSpon as $spon){?>
            <tr>
              <td>
                <span class="title-re text-bold"><?=$spon['name']?></span>
              </td>
              <td>x&nbsp;1</td>
              <td>
                <span class="price">$<?=number_format($spon['price'],2)?></span>
              </td>
            </tr>
          <?php $sponTotal += $spon['price']; } ?>
          <?php $advertisers = advertiser();

              foreach($advertisers as $adver){
          ?>
                <tr>
              <td>
                <span class="title-re text-bold"><?=$adver['name']?></span>
              </td>
              <td>x&nbsp;1</td>
              <td>
                <span class="price">$<?=number_format($adver['price'])?></span>
              </td>
            </tr>
          <?php $adverTotal += $adver['price']; } ?>
          </table>
        </div>
      </div>
    <?php $amount = $passTime+$pass2+$pass3+$sponTotal+$adverTotal;
    $_SESSION['amount'] = $amount?>
      <div class="col-md-12">
        <div class="form-group">
          <p class="form-title-sec text-bold">Total: $<?=number_format($amount,2)?></p>
          <table class="table-100">
            <tr>
              <td>
            <label class="check-input">
                  <input type="checkbox" name="confirm_checkbok" class="form-check-input">
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
          <a href="book_step4"><button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button></a>
          <button class="btn btn-active-form nextBtn btn-lg pull-right disabled" type="submit" disabled="disabled">submit</button>
        </p>
      </div>
  </div>
  </form>
      
    </div>
  </div>  
</div>
</div>

  