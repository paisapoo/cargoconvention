<?php
$_SESSION['booking3']= array([
"attendee_title"=>$_POST['titleName'],
"attendee_first"=>$_POST['firstName'],
"attendee_last"=>$_POST['lastName'],
"attendee_position"=>$_POST['position'],
"vegetarian"=>$_POST['vegetarian'],
"vegan"=>$_POST['vegan'],
"halal"=>$_POST['halal'],
"kosher"=>$_POST['kosher'],
"glute"=>$_POST['glute'],
"lactose"=>$_POST['lactose'],
"otherStep3"=>$_POST['otherStep3'],
"allergies"=>$_POST['allergies'],
"spouse_title"=>$_POST['titleS'],
"spouse_name"=>$_POST['fistS'],
"spouse_last"=>$_POST['lastS'],
"vegetarianS"=>$_POST['vegetarianS'],
"veganS"=>$_POST['veganS'],
"halalS"=>$_POST['halalS'],
"kosherS"=>$_POST['kosherS'],
"gluteS"=>$_POST['gluteS'],
"lactoseS"=>$_POST['lactoseS'],
"otherStep3S"=>$_POST['otherStep3S'],
"allergiesS"=>$_POST['allergiesS'],
]);
print_r($_session['booking3'])
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
  <form action="book_step5" method="POST">
      <div class="row setup-content" id="step-4">
      <div class="col-md-12 form-boder">
        
           <p class="form-title">Company Information</p>
          <hr class="or-line">
          <div class="form-group">
          <div class="form-row">
            <div class="form-group col-md-4">
                  <label for="inputEmail4">Company</label>
                  <input type="text" name="nameCom" class="form-control" placeholder="Company Name">
            </div>
                <!-- <div class="form-group col-md-3">
                  <label for="inputEmail4">Position</label>
                  <input type="text"  class="form-control" placeholder="Your Position">
            </div> -->
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Email</label>
                  <input type="email" name="emailCom" class="form-control" placeholder="Your Business Email">
            </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Company Phone</label>
                  <input type="text" name="phoneCom" class="form-control" placeholder="Company Telephone No.">
            </div>
          </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                  <label for="inputEmail4">Mobile Phone</label>
                  <input type="text" name="mobileCom" class="form-control" placeholder="Company Mobile No.">
            </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Website</label>
                  <input type="text" name="websiteCom" class="form-control" placeholder="Company Website">
            </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">IATA Number</label>
                  <input type="text" name="iataCom" class="form-control" placeholder="IATA No.">
            </div>
          
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                  <label for="inputEmail4">Address</label>
                  <input type="text" name="addressCom" class="form-control" placeholder="Company Address">
            </div>
                <div class="form-group col-md-3">
                  <label for="inputEmail4">City</label>
                  <input type="text" name="cityCom" class="form-control" placeholder="Based City">
            </div>
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Country</label>
                  <select class="custom-select" id="inputGroupSelect01" name="countryCom">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
                 
                  <label for="inputEmail4">Current Networks*</label>
                  <input type="text" name="currentNetCom" class="form-control" placeholder="Please enter name of the network your company is in">
          
            </div>
          </div>
          <p class="form-title-th t-16">
            Specialization
          </p>
            <div class="row">
              <div class="col-md-6">
                <table>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="courier" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Courier & Express</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="dangerous" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Dangerous Goods</span>
                </td>
                
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="events" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Events Logistics</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="exhibition" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Exhibition Logistics</span>
                </td>
               
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="household" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Household Removals</span>
                </td>
                
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="liquid" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Liquid Bulk Handling</span>
                </td>
                
                <td></td>
              </tr>
                    <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="live" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Live Animals</span>
                </td>
                
                <td></td>
              </tr>
                    <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="nvocc" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">NVOCC</span>
                </td>
                
                <td></td>
              </tr>
                    <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="perishable" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Perishable Goods</span>
                </td>
                
                <td></td>
              </tr>
                    <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="pharmaceuticals" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Pharmaceuticals</span>
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
                  <input type="checkbox" name="project" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Project Forwarding</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="ships" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Ships Spares and Marine Forwarding</span>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="time" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Time Critical</span>
                </td>
                
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="wholesale" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Wholesale Forwarding</span>
                </td>
                
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="customs" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Customs Brokerr</span>
                </td>
               
                <td></td>
              </tr>
              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="seafreight" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Seafreight Consolidators (LCL)</span>
                </td>
                
                <td></td>
              </tr>
                       <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="airfreight" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Airfreight Consolidators</span>
                </td>
                
                <td></td>
              </tr>
                       <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="importer" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Importer of Record Services (IOR)</span>
                </td>
                
                <td></td>
              </tr>
                       <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="exporter" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Exporter of Record Services (EOR)</span>
                </td>
                
                <td></td>
              </tr>
                       <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="ecommerce" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form"> E-Commerce Logistics</span>
                </td>
                
                <td></td>
              </tr>
   
            </table>
              </div>
            </div>
            
          </div>
        </div>
       
        <div class="col-md-12 form-boder">
          <div class="form-group">
           <p class="form-title-th t-16">
            Services
          </p>
            <div class="row">
              <div class="col-md-6">
                <table>
                  <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="courierSe" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Courier & Express</span>
                </td>
                <td></td>
              </tr>
                <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="freightMeSe" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Freight Media</span>
                </td>
                <td></td>
              </tr>
                              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="freightPaSe" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Freight Payment Security Provider</span>
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
                  <input type="checkbox" name="freightTeSe" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Freight Technology Provider</span>
                </td>
                <td></td>
              </tr>
                <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="freightEvSe" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Freight Events</span>
                </td>
                <td></td>
              </tr>
                              <tr>
                <td>
                  <label class="check-input">
                  <input type="checkbox" name="nom-profit" class="form-check-input" value="true">
                  <span class="checkmark"></span>
                </label>
                </td>
                <td>
                  <span class="label-t-form">Non-Profit Charity</span>
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
        <p class="form-title-sec">How did you learn about us?</p>
              <div class="form-row">
               <div class="col-md-4">
                 <select class="custom-select" id="inputGroupSelect01" name="howLearn">
                  
                  <option value="1">Email Invitation</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
               </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <br>
                <label for="inputEmail" class="form-title-th">Your Message</label>
                          <textarea class="form-control" placeholder="Please enter your message to us" rows="5" name="textMessage"></textarea>
              </div>
            </div>
        </div>
      </div>
        <div class="col-md-12">
      <p class="b-center">
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button>
          <a href="#top-form"><button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">Next Step</button>
          </a>
        </p>
      </div>
    </div>
  
  
    
  </form>
      
    </div>
  </div>  
</div>
</div>
