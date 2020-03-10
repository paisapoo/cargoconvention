
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
  
  <form action="save_step2" method="POST">
     <div class="row setup-content" id="step-2">
      <div class="col-md-12 form-boder">
        
           <p class="form-title"> Become a Sponsor</p>
          <hr class="or-line">
          <div class="form-group">
            <p class="form-title-sec">Sign up as a Sponsor</p>
            <p>The more you invest into your branding, the better you connect with the community. Take the chance to get more exposure at The 1st Cargo Convention by availing any of the sponsorship items below.</p>

            <div class="row">

              <div class="col-md-6">
                <table>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="platinum" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['platinum']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('platinum')['name']?> (x<?=getSponsor('platinum')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('platinum')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="gold" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['gold']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('gold')['name']?> (x<?=getSponsor('gold')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('gold')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="welcome" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['welcome']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('welcome')['name']?> (x<?=getSponsor('welcome')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('welcome')['price'])?></span>
                </td>
                <td></td>
              </tr>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="meeting" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['meeting']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('meeting')['name']?> (x<?=getSponsor('meeting')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('meeting')['price'])?></span>
                </td>
                <td></td>
              </tr>
               <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="silver" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['silver']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('silver')['name']?> (x<?=getSponsor('silver')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('silver')['price'])?></span>
                </td>
                <td></td>
              </tr>
              
            </table>
              </div>
              <div class="col-md-6">
                             <table>
               <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="coffee" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['coffee']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('coffee')['name']?> (x<?=getSponsor('coffee')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('coffee')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="beer" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['beer']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('beer')['name']?> (x<?=getSponsor('beer')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('beer')['price'])?></span>
                </td>
                <td></td>
              </tr>
             

              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="shirt" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['shirt']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('shirt')['name']?> (x<?=getSponsor('shirt')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('shirt')['price'])?></span>
                </td>
                <td></td>
              </tr>
                     <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="lanyard" class="form-check-input" value="true" <?=$_SESSION['booking2'][0]['lanyard']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('lanyard')['name']?> (x<?=getSponsor('lanyard')['quetity']?>)</span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('lanyard')['price'])?></span>
                </td>
                <td></td>
              </tr>
   
            </table>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <p class="form-title-sec">Sign up as an Advertiser</p>
            <p>Let your company be known worldwide. The 1st Cargo Convention offers you several advertising options to help you market your company. Don't miss out on these and make the right decision!</p>
            <div class="row">
    
              <div class="col-md-6">
                <table>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="insideFront" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['insideFront']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('insideFront')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('insideFront')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="insideBack" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['insideBack']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('insideBack')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('insideBack')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="spread" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['spread']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('spread')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('spread')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="fullPage" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['fullPage']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('fullPage')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('fullPage')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="halfPage" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['halfPage']=='true'?"checked":""?>> 
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('halfPage')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('halfPage')['price'])?></span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="quarterPage" class="form-check-input" value="true" <?=$_SESSION['booking_adver'][0]['quarterPage']=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"><?=getSponsor('quarterPage')['name']?></span>
                </td>
                <td>
                  <span class="label-t-form">$<?=number_format(getSponsor('quarterPage')['price'])?></span>
                </td>
                <td></td>
              </tr>
   
            </table>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-12"  >
      <p class="b-center">
        <a href="register">
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button></a>
          <a href="#top-form"><button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">Next Step</button></a>
        </p>
      </div>
    </div>
    
  </form>
      
    </div>
  </div>  
</div>
</div>

   