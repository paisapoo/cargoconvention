
 <div class="form-steps" style="padding:2em 0;background-color:#e8f0f7; color:#000">
      <div class="container">
        <div class="w-80" style="width: 80%; margin:0 auto">
          <div id="msform" style="background-color:#fff;padding-top:2em;padding-bottom:2em;box-shadow:0 0 14px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-md-12 form-boder" style="border-bottom:1px solid #d8d8d8;margin-bottom:2em;">
             <p style="text-align: center;">
                  <img src="https://cargoconvention.x2log.com/images/logo/cargocon_logo-02.png" class="invoice-logo" style="width:200px;margin:0 auto;">
               </p>
                  <p class="form-title" style="font-size:30px;font-weight:500;line-height:1.5;color:#0a395a;text-align:center;">Registration Form</p>
                  <hr class="or-line" style="width: 200px;margin-bottom:2em;
    height: 4px;
    background-color: #f37422;">
     <div class="form-group" id="show-attendee" style="padding:0 3em;margin-bottom: 1rem;">
                <p style="text-align: left;font-size: 25px;font-weight: 700;">Booking ID: CC0<?=$booking_id?></p>
              </div>
              <div class="form-group" id="show-attendee" style="padding:0 3em;margin-bottom: 1rem;">
                <?php for($i = 0;$i < $_SESSION['booking1'][0]['multi'];$i++){?>
                  <p class="form-title-thx" style="font-size:20px;color:#0a395a;font-weight:500;line-height:1.8;">Personal Information No.<?=$i+1?></p>
                  <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                    <li class="list-inline-item">
                      <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Full Name:</span><?=$_SESSION['booking3'][0]['attendee_title'][$i]." ".$_SESSION['booking3'][0]['attendee_first'][$i]." ".$_SESSION['booking3'][0]['attendee_last'][$i]?></li>
                    <li class="list-inline-item">
                      <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Position:</span><?=$_SESSION['booking3'][0]['attendee_position'][$i]?></li>
                    <li class="list-inline-item">
                      <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Size T-shirt:</span><?=$_SESSION['booking3'][0]['attendee_t-shirt'][$i]?></li>
                  </ul>
                  <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                    <li class="list-inline-item">
                      <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Dietary Restrictions:</span><?=dietary($i)?></li>
                    <li class="list-inline-item">
                      <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Food Allergies:</span><?=$_SESSION['booking3'][0]['allergies'][$i]?></li>
                  </ul>
                  <?php } ?>
                  </div>
                </div>
                <?php if($_SESSION['booking1'][0]['spouse']){?>
                  <div class="col-md-12 form-boder" style="border-bottom:1px solid #d8d8d8;margin-bottom:2em; position:relative;width:100%;">
                    <div class="form-group" id="show-spouse" style="padding:0 3em;margin-bottom: 1rem;">
                      <?php for($i=0;$i < $_SESSION['booking1'][0]['spouse'];$i++){?>
                        <p class="form-title-thx" style="font-size:20px;color:#0a395a;font-weight:500;line-height:1.8;">Spouse's Information No.<?=$i+1?></p>
                        <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                          <li class="list-inline-item">
                            <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Full Name:</span><?=$_SESSION['booking3'][0]['spouse_title'][$i]." ".$_SESSION['booking3'][0]['spouse_name'][$i]." ".$_SESSION['booking3'][0]['spouse_last'][$i]?></li>
                        </ul>
                        <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                          <li class="list-inline-item">
                            <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Dietary Restrictions:</span><?=dietarySpouse($i)?></li>
                          <li class="list-inline-item">
                            <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Food Allergies:</span><?=$_SESSION['booking3'][0]['allergiesS'][$i]?></li>
                        </ul>
                        <?php } ?>
                        </div>
                      </div>
                      <?php } ?>
                        <div class="col-md-12 form-boder" style="border-bottom:1px solid #d8d8d8;margin-bottom:2em;position:relative;width:100%;">
                          <div class="form-group" style="padding:0 3em;margin-bottom: 1rem;">
                            <p class="form-title-thx" style="font-size:20px;color:#0a395a;font-weight:500;line-height:1.8;">Company Imformation</p>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Company Name:</span><?=$_SESSION['booking4'][0]['nameCom']?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Email:</span><?=$_SESSION['booking4'][0]['emailCom']?></li>
                            </ul>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Telephone: </span><?=$_SESSION['booking4'][0]['phoneCom']?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Mobile: </span><?=$_SESSION['booking4'][0]['mobileCom']?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Website: </span><?=$_SESSION['booking4'][0]['websiteCom']?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">IATA: </span><?=$_SESSION['booking4'][0]['iataCom']?></li>
                            </ul>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Address: </span><?=$_SESSION['booking4'][0]['addressCom']?></li>
                            </ul>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">City: </span><?=$_SESSION['booking4'][0]['cityCom']?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Country: </span><?=getCountry($_SESSION['booking4'][0]['countryCom'])?></li>
                            </ul>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Network:</span><?=$_SESSION['booking4'][0]['currentNetCom']?></li>
                            </ul>
                            <ul class="list-inline" style="margin-top:0;margin-bottom:1rem;padding-left:0;list-style:none;">
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Specialization:</span><?=specialization()?></li>
                              <li class="list-inline-item">
                                <span class="title-re" style="font-weight:500;padding-right:5px;color:#0a395a;">Services:</span><?=services()?></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-12 form-boder" style="border-bottom:1px solid #d8d8d8;margin-bottom:2em;position:relative;width:100%;padding-right:15px;padding-left:15px;">
                          <div class="form-group" style="padding:0 3em;margin-bottom: 1rem;">
                            <p class="form-title-thx" style="font-size:20px;color:#0a395a;font-weight:500;line-height:1.8;">Selected Plan</p>
                            <table>
                              <tr>
                                <td>
                                  <span class="title-re text-bold" style="font-weight:500;padding-right:5px;color:#0a395a;font-weight:700;margin-right:20px;">Multiple Passes </span>
                                </td>
                                <td>x<?=$_SESSION['booking1'][0]['multi']?></td>
                                <td>
                                  <?php $attendee = $_SESSION['booking1'][0]['pass'][0];
                   $multi = $_SESSION['booking1'][0]['multi'];
                    $passTime = $attendee*$multi;
                  if($multi > 1){
                    $passTime = $passTime-($passTime * 0.10);  
                  }?>
                <span class="price" style="font-weight:700;margin-left:20px;">$<?=number_format($passTime,2)?></span> <?=$multi>1?'<span class="text-success">(10% discount)</span>':''?>
              </td>
                                </tr>
                                <tr>
                                  <td>
                                    <span class="title-re text-bold" style="font-weight:500;padding-right:5px;color:#0a395a;font-weight:700;margin-right:20px;">Spouse Passes </span>
                                  </td>
                                  <td>x<?=$_SESSION['booking1'][0]['spouse']==''?0:$_SESSION['booking1'][0]['spouse']?></td>
                                  <td>
                                    <?php $price_spo = $database->get("book_price","price",['type'=>'spo_pass']);
                  $multi = $_SESSION['booking1'][0]['spouse']==""?0:$_SESSION['booking1'][0]['spouse'];
                   $pass2 = $multi * $price_spo;
                ?>
                <span class="price" style="font-weight:700;margin-left:20px;">$<?=number_format($pass2,2)?></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <span class="title-re text-bold" style="font-weight:500;padding-right:5px;color:#0a395a;font-weight:700;margin-right:20px;">Fixed Table</span>
                                    </td>
                                    <td>x<?=$_SESSION['booking1'][0]['fixed']==""?0:$_SESSION['booking1'][0]['fixed']?></td>
                                    <td>
                                      <?php $multi = $_SESSION['booking1'][0]['fixed']==""?0:$_SESSION['booking1'][0]['fixed'];
                    $pass3 = $multi * $database->get("book_price","price",['type'=>'fix_pass']);
                ?>
                <span class="price" style="font-weight:700;margin-left:20px;">$<?=number_format($pass3,2)?></span>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-12 form-boder" style="border-bottom:1px solid #d8d8d8;margin-bottom:2em;position:relative;width:100%;padding-right:15px;padding-left:15px;">
                                <div class="form-group" style="padding:0 3em;margin-bottom: 1rem;">
                                  <p class="form-title-thx" style="font-size:20px;color:#0a395a;font-weight:500;line-height:1.8;">Sponsorships & Advertisement</p>
                                  <table>
                                    <?php $cargoSpon = sponserCal();
            foreach($cargoSpon as $spon){?>
                                      <tr>
                                        <td>
                                          <span class="title-re text-bold" style="font-weight:500;padding-right:5px;color:#0a395a;font-weight:700;margin-right:20px;"><?=$spon['name']?></span>
                                        </td>
                                        <td>x&nbsp;1</td>
                                        <td>
                                          <span class="price" style="font-weight:700;margin-left:20px;">$<?=number_format($spon['price'],2)?></span>
                                        </td>
                                      </tr>
                                      <?php $sponTotal += $spon['price']; } ?>
                                        <?php $advertisers = advertiser();
              foreach($advertisers as $adver){
          ?>
                                          <tr>
                                            <td>
                                              <span class="title-re text-bold" style="font-weight:500;padding-right:5px;color:#0a395a;font-weight:700;margin-right:20px;"><?=$adver['name']?></span>
                                            </td>
                                            <td>x&nbsp;1</td>
                                            <td>
                                              <span class="price" style="font-weight:700;margin-left:20px;">$<?=number_format($adver['price'])?></span>
                                            </td>
                                          </tr>
                                          <?php $adverTotal += $adver['price']; } ?>
                                          </table>
                                        </div>
                                      </div>
                                      
                                        <div class="col-md-12">
                                          <div class="form-group" style="padding:0 3em;position:relative;width:100%;padding-right:15px;padding-left:15px;margin-bottom: 1rem;">
                                            <p class="form-title-sec text-bold" style="font-size:25px;color:#0a395a;font-weight:500;line-height:1.8;cursor:pointer;">Total: $<?=number_format($amount,2)?></p>
                                            <table class="table-100" style="width:100% !important;">
                                              <tr>
                                                <td>
                                                
                                                    <input type="checkbox" name="confirm_checkbok" class="form-check-input" checked>
                                             
                                                </td>
                                                <td style="padding-left:20px;">
                                                  I hereby agree that upon registering for the Cargo Convention, I am taking full responsibility of my actions and I fully understand that the organizer, One Monocle Intelligent Management and the entire Cargo Convention team will not be held responsible in any event of injury, accident, personal loss and/or illness during the event.
              </td>
                                              </tr>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="col-md-12" style="position:relative;width:100%;padding-right:15px;padding-left:15px;">
                                          <p class="b-center" style="text-align:center;">
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>