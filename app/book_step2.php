<?php
$_SESSION['booking1']= array(["pass"=>$_POST['earlyBird'],
  "multi"=>$_POST['multiple-number'],
  "spouse"=>$_POST['multiple-spouse'],
  "fixed"=>$_POST['multiple-table']
]);
echo print_r($_SESSION['booking1']); 
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
  
  <form action="book_step3" method="POST">
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
                  <input type="checkbox" name="platinum" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Platinum Sponsor (x1)</span>
                </td>
                <td>
                  <span class="label-t-form">$4,000</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="gold" class="form-check-input" value="true" >
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Gold Sponsor (x2)</span>
                </td>
                <td>
                  <span class="label-t-form">$3,000</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="welcome" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Welcome Network
Everning Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$3,000</span>
                </td>
                <td></td>
              </tr>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="meeting" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Meeting Scheduler Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$3,000</span>
                </td>
                <td></td>
              </tr>
               <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="silver" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Silver Sponsor (x1)</span>
                </td>
                <td>
                  <span class="label-t-form">$2,000</span>
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
                  <input type="checkbox" name="coffee" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Coffee Break Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$2,000</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="beer" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Beer-zone Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$2,000</span>
                </td>
                <td></td>
              </tr>
             

              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="shirt" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">T-shirt Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$2,000</span>
                </td>
                <td></td>
              </tr>
                     <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="landyard" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Landyard Sponsor</span>
                </td>
                <td>
                  <span class="label-t-form">$1,500</span>
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
                  <input type="checkbox" name="insideFront" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Inside Front Cover</span>
                </td>
                <td>
                  <span class="label-t-form">$1,500</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="insideBack" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Inside Back Cover</span>
                </td>
                <td>
                  <span class="label-t-form">$1,500</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="spread" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Spread</span>
                </td>
                <td>
                  <span class="label-t-form">$1,000</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="fullPage" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Full Page</span>
                </td>
                <td>
                  <span class="label-t-form">$800</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="halfPage" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Half Page</span>
                </td>
                <td>
                  <span class="label-t-form">$600</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="quarterPage" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Quarter Page</span>
                </td>
                <td>
                  <span class="label-t-form">$400</span>
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
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button>
          <a href="#top-form"><button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">Next Step</button></a>
        </p>
      </div>
    </div>
    
  </form>
      
    </div>
  </div>  
</div>
</div>

   