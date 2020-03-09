
    <form action="save_step1" method="POST">
    <div class="row setup-content" id="step-1" >
      <div class="col-md-12">
        <div class="col-md-12">
          <p class="form-title"> Choose your plan</p>
          <hr class="or-line">
          <div class="form-group">
           
            <table>
                <?php 
                $passData = $database->select("book_price","*",['type'=>'att_pass']);
                        foreach($passData as $pass){
                ?>
            	<tr>
            		<td>
            			<label class="check-input">
            			<input type="checkbox" name="att_pass[]" class="form-check-input" value="<?=$pass['price']?>" <?=$pass['status']=='no'?'disabled=""':'required'?> <?php
                            if($_SESSION['booking1'][0]['pass']){
                        echo in_array($pass['price'],$_SESSION['booking1'][0]['pass'])?'checked':'';}?>>
            			<span class="checkmark <?=$pass['status']=='no'?'disform-check':''?>"></span>
            		</label>
            		</td>
            		<td>
            			<span class="label-t-form <?=$pass['status']=='no'?'disform':''?>"><?=$pass['name']?></span>
            		</td>
            		<td>
            			<span class="label-t-form <?=$pass['status']=='no'?'disform':''?>">$<?=number_format($pass['price'])?></span>
            		</td>
            	</tr>
            <?php }?>
  
            		<tr>
            		<td>
            			<label class="check-input">
            			<input type="checkbox" id="multi-check1" class="form-check-input multi-check1" <?=$_SESSION['booking1'][0]['multi']>1?'checked':''?>>
            			<span class="checkmark"></span>
            		</label>
            		</td>
            		<td><span class="label-t-form">Multiple Passes</span></td>
            		<td></td>
            	</tr>
            	<tr class="multi1">
                    <td></td>
                    <td><span class="multi-select">select amount <input type="number" name="multiple-number" min="0" value="<?=$_SESSION['booking1'][0]['multi']?>" /></span></td> 
                    <td><span class="amount">$0</span></td>    
                </tr>
                <?php $spouseData = $database->get("book_price","*",['type'=>'spo_pass']);
                if($spouseData){
                    
                ?>
            	<tr>
            		<td>
            	 <label class="check-input">

            			<input type="checkbox"  class="form-check-input multi-check2"  value="<?=$spouseData['price']?>" <?=$_SESSION['booking1'][0]['spouse']>0?'checked':''?>>
            			<span class="checkmark"></span>
            		</label>
            		</td>
            		<td><span class="label-t-form"><?=$spouseData['name']?></span></td>
            		<td><span class="label-t-form">$<?=number_format($spouseData['price'])?></span></td>
            	</tr>
           <?php }?>

                <tr class="multi2">
                    <td></td>
                    <td><span class="multi-select">select amount <input type="number" name="multiple-spouse" min="0" value="<?=$_SESSION['booking1'][0]['spouse']?>" /></span></td> 
                    <td><span class="amount">$0</span></td>    
                </tr>
            <?php  $fixedT = $database->get("book_price","*",['type'=>'fix_pass','status'=>'yes']);
            if($fixedT){
           ?>
            	<tr>
            		<td>
            			<label class="check-input">
            			<input type="checkbox" class="form-check-input multi-check3"  value="<?=$fixedT['price']?>" <?=$_SESSION['booking1'][0]['fixed']>0?'checked':''?>>
            			<span class="checkmark"></span>
            		</label>
            		</td>
            		<td><span class="label-t-form"><?=$fixedT['name']?></span></td>
            		<td><span class="label-t-form">$<?=number_format($fixedT['price'])?></span></td>
            	</tr>
            <?php } ?>
                <tr class="multi3">
                    <td></td>
                    <td><span class="multi-select">select amount <input type="number" name="multiple-table" min="0" value="<?=$_SESSION['booking1'][0]['fixed']?>" /></span></td> 
                    <td><span class="amount">$0</span></td>    
                </tr>
            </table>
          </div>
         
          <p class="b-center"><a href="#top-form"><button class="btn btn-active-form nextBtn btn-lg pull-right" type="submit">Next step</button></a></p>
        </div>
      </div>
    </div>
    </form>