
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
  <form action="save_step3" method="POST">
   <div class="row setup-content" id="step-3">
         <div class="col-md-12 ">
        <div class="form-group">
         <p class="form-title"> Personal Information</p>
          <hr class="or-line">
            </div>
            </div> 
        <div class="col-md-12">
          <div id="accordion">
            
              <?php for($i= 0 ;$i < $_SESSION['booking1'][0]['multi'] ;$i++){?>
                <div class="form-group">
                    <p class="form-title-sec" data-toggle="collapse" data-target="#collapseAtt<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">Attendee Details No.<?=$i +1?><span class="float-right">+</span></p>
                </div>    
                <div id="collapseAtt<?=$i?>" class="collapse form-boder <?=$i==0?'show':''?>" aria-labelledby="headingOne" data-parent="#accordion">
                 <div class="col-md-12 ">
                  <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                          <label for="inputEmail4">Title</label>
                           <select class="custom-select" id="inputGroupSelect02" name="titleName[]">
                            <option value="Mr" <?=$_SESSION['booking3'][0]['attendee_title'][$i]=='Mr'?"selected":""?>>Mr</option>
                            <option value="Miss" <?=$_SESSION['booking3'][0]['attendee_title'][$i]=='Miss'?"selected":""?>>Miss</option>
                            <option value="Mrs" <?=$_SESSION['booking3'][0]['attendee_title'][$i]=='Mrs'?"selected":""?>>Mrs</option>
                           
                          </select>
                        </div>
                        <div class="form-group col-md-5">
                         <label for="inputPassword4">First Name</label>
                          <input type="text" class="form-control" placeholder="Please enter your first name" name="firstName[]" value="<?=$_SESSION['booking3'][0]['attendee_first'][$i]?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="inputPassword4">Last Name</label>
                          <input type="text" class="form-control"  placeholder="Please enter your last name" name="lastName[]" value="<?=$_SESSION['booking3'][0]['attendee_last'][$i]?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="inputPassword4">Position</label>
                          <input type="text" class="form-control"  placeholder="Your Position" name="position[]" value="<?=$_SESSION['booking3'][0]['attendee_position'][$i]?>">
                        </div>
                      </div>
                   </div>
                   <!-- end form-firstname -->
        <div class="form-group">
            <p class="form-title-th">Dietary Restrictions</p>
            <div class="row">
              <div class="col-md-6">
                <table>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="vegetarian[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['vegetarian'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Vegetarian</span>
                </td>
                <td>
               
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="vegan[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['vegan'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Vegan</span>
                </td>
                <td>
                  
                </td>
                <td></td>
              </tr>
              <tr>
               <td>
                  <label class="check-input">
                  <input type="checkbox" name="halal[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['halal'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Halal</span>
                </td>
                <td>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="kosher[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['kosher'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Kosher</span>
                </td>
                <td>
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
                  <input type="checkbox" name="glute[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['glute'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                 <span class="label-t-form">Gluten-free</span>
                </td>
                <td>
                  
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="lactose[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['lactose'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Lactose Intolerant</span>
                </td>
                <td>
                 
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <span class="label-t-form">Others:</span>
                </td>
                <td>
                  <input type="text" name="otherStep3[]" class="form-control" placeholder="Please enter your specific restrictions" value="<?=$_SESSION['booking3'][0]['otherStep3'][$i]?>">
                </td>
                <td></td>
              </tr>
            </table>
              </div>
            </div>
            
          </div>
          <!-- end dietary -->
            <div class="form-group">
            <p class="form-title-th">Food Allergies</p>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" name="allergies[]" placeholder="Food Allergies" value="<?=$_SESSION['booking3'][0]['allergies'][$i]?>">
               <br>
              </div>
            </div>
            
          </div>
          <!-- end food all -->

                 </div>
                 <!-- end col-md-12 -->
               </div>
                <!-- end collap one -->
              <?php }?>
                <?php for($i=0;$i < $_SESSION['booking1'][0]['spouse'] ;$i++){?>
              <div class="form-group">
                    <p class="form-title-sec" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">Spouse Details No.<?=$i+1?><span class="float-right">+</span></p>
                </div>               
               
                <div id="collapse<?=$i?>" class="collapse form-boder" aria-labelledby="headingOne" data-parent="#accordion">
                 <div class="col-md-12 ">
                  <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                          <label for="inputEmail4">Title</label>
                           <select class="custom-select" id="inputGroupSelect02" name="titleS[]">

                            <option value="Mr" <?=$_SESSION['booking3'][0]['spouse_title'][$i]=='Mr'?"selected":""?>>Mr</option>
                            <option value="Miss" <?=$_SESSION['booking3'][0]['spouse_title'][$i]=='Miss'?"selected":""?>>Miss</option>
                            <option value="Mrs" <?=$_SESSION['booking3'][0]['spouse_title'][$i]=='Mrs'?"selected":""?>>Mrs</option>
                           
                          </select>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="inputPassword4">First Name</label>
                          <input type="text" class="form-control" placeholder="Please enter your first name" name="fisrtS[]" value="<?=$_SESSION['booking3'][0]['spouse_name'][$i]?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="inputPassword4">Last Name</label>
                          <input type="text" class="form-control"  placeholder="Please enter your last name" name="lastS[]" value="<?=$_SESSION['booking3'][0]['spouse_last'][$i]?>">
                        </div>
                      </div>
                   </div>
                   <!-- end form-firstname -->
        <div class="form-group">
            <p class="form-title-th">Dietary Restrictions</p>
            <div class="row">
              <div class="col-md-6">
                <table>
                  <tr>
              <td>
                  <label class="check-input">
                  <input type="checkbox" name="vegetarianS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['vegetarianS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Vegetarian</span>
                </td>
                <td>
               
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="veganS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['veganS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Vegan</span>
                </td>
                <td>
                  
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="halalS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['halalS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Halal</span>
                </td>
                <td>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="koshorS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['koshorS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Kosher</span>
                </td>
                <td>
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
                  <input type="checkbox" name="gluteS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['gluteS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Gluten-free</span>
                </td>
                <td>
                  
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="lactoseS[]" class="form-check-input" value="true" <?=$_SESSION['booking3'][0]['lactoseS'][$i]=='true'?"checked":""?>>
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Lactose Intolerant</span>
                </td>
                <td>
                 
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <span class="label-t-form">Others:</span>
                </td>
                <td>
                  
              <input type="text" name="otherStep3S[]" class="form-control" placeholder="Please enter your specific restrictions" value="<?=$_SESSION['booking3'][0]['otherStep3S'][$i]?>">
                </td>
                <td></td>
              </tr>
            </table>
              </div>
            </div>
          </div>
          <!-- end dietary -->
            <div class="form-group">
          <p class="form-title-th">Food Allergies</p>
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" name="allergiesS[]" placeholder="Food Allergies"  value="<?=$_SESSION['booking3'][0]['allergiesS'][$i]?>">
               <br>
              </div>
            </div>
            
          </div>
          <!-- end food all -->

                 </div>
                 <!-- end col-md-12 -->
                </div>
                <!-- end collap one -->
              <?php }?>

 <div class="col-md-12">
        <p class="b-center">
        <a href="book_step2">
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button></a>
         <a href="#top-form"> <button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">Next Step</button></a>
        </p>
      </div>
          </div>
        </div>
    
      </div>
      </form>
    </div>
  </div>  
</div>

   
         
            
 




       

