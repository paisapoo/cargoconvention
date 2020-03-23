
 <link rel="stylesheet" href="css/admin/modals.css">
   
 <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><span class="bread-blod">Edit Booking</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
<form action="update_booking" class="text-left" method="POST" enctype="multipart/form-data">
<input type="hidden" name="type_form" value="<?=$_GET['id']?>">
<div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase">Profile Form Element</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>

                                            <!-- <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner text-left">
                                                
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                             <div class="form-group-inner">
                                                            <label>Profile</label>
                                                            <style>
                                                                .btn-upload{
                                                                   margin:1em 0;
                                                                }
                                                            </style>
                                                             <div id="upload-demo" style="width:100%"></div>
                                                            <div id="upload-demo-i" style="width:100%"></div>
                                                             <img id="show_current"  src='<?=$getCom['image']?>' style='max-width:100%;'> 
                                                            <input type="file" id="upload" name="logo" class="btn-upload">
                                                            <input type="hidden" id="path_file" name="logo_path" value="">
                                                             <span class="btn btn-success upload-result">Upload Image</span>
                                                            <p class="help-block hidden">Example Text Here.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="row">
                                            
                                                        <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Company Name</label>
                                                            <input type="text" name="companyname" class="form-control" placeholder="Company Name" value="<?=$getCom ['companyname']?>">
                                                            </div>
                                                        </div>
                                                           <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" placeholder="Put E-mail" name="email" value="<?=$getCom ['email']?>">
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Address</label>
                                                            <input name="address" type="text" class="form-control" placeholder="Address" value="<?=$getCom['address']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>City</label>
                                                            <input type="text" name="city" class="form-control" placeholder="Cities" value="<?=$getCom['city']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Country</label>
                                                            <input type="text" name="country" class="form-control" placeholder="Countries" value="<?=$getCom['country']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Phone</label>
                                                             <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?=$getCom['phone']?>">
                                                            </div>
                                                            </div>
                                                             <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Mobile No.</label>
                                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile No." value="<?=$getCom['mobile']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Status</label>
                                                            <select class="form-control custom-select-value" name="status">
                                                                <option value="">choose..</option>
                                                                <option value="yes" <?=$getCom['status']=='yes'?'selected':''?>>Yes</option>
                                                                <option value="no" <?=$getCom['status']=='no'?'selected':''?>>No</option>
                                                                         
                                                            </select>
                                                            </div>
                                                            </div>
                                                    </div>
                                                    <!-- row -->

                                                        
                                                        </div>
                                                        <!-- right col-md-10 -->
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase"><?=$getCom['type_member']?> Form Details</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner text-left">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                         <label>Specialization</label>
                                                            <textarea class="form-control" name="specialization" placeholder="specialization" rows="3" style="text-align: left;"><?=$getCom['specialization']?></textarea>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                            <label>Services</label>
                                                            <textarea class="form-control" rows="3" placeholder="Services"><?=$getCom['services']?></textarea>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                                <?php 
                                                                if($getCom['detail'] != ''){
                                                                foreach(json_decode($getCom['detail']) as $key => $detail){
                                                                    if($detail!=''){
                                                                    $die .= $key." : ".$detail.", ";
                                                                    }
                                                                }?>
                                                            <label>Other Detail from Register</label>
                                                            <input type="text" class="form-control" placeholder="dietary" value="<?=$die?>" readonly>
                                                        <?php }?>
                                                            </div>
                                                            </div>
                                                          <div class="col-md-12">
                                                            <div class="form-group-inner">
                                            
                                                            <label>Comment</label>
                                                           <textarea class="form-control" name="comment" rows="5"><?=$getCom['comment']?></textarea>
                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd" style="background:#113b58;">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase" style="color:#fff;">Booking Form Details</h1>
                                        <div class="sparkline12-outline-icon">
                                            <a href="#" data-toggle="modal" data-target="#InformationproModalalert"><span class="btn btn-success">+ Item</span></a>
                                                 <div id="InformationproModalalert" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body" style="padding:1em 2em;">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <?php $spons = $database->select("sponsor","*",["type"=>'sponsor']);?>
                                                                        <table class="text-left">
                                                                            <input type="hidden" name="allspon" value='<?=json_encode($spons)?>'>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Sponsors</th>
                                                                                  
                                                                            </tr>
                                                                                
                                                                            <?php
                                                                            if($_GET['id']!='new'){
                                                                             foreach(json_decode($getitem['sponsor']) as $adver){
                                                                                $ss[] = $adver->name;
                                                                            };
                                                                        }
                                                                             foreach($spons as $spon){?>
                                                                            <tr>
                                                                         <?php if($_GET['id']!='new'){?>
                                                                                <td><input type="checkbox" class="checkspon"  value='<?=json_encode($spon)?>' <?=in_array($spon['name'],$ss)?'checked':''?>></td>
                                                                           
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name']?></td>
                                                                                 <?php }else{ ?>
                                                                                    <td><input type="checkbox" class="checkspon"  value='<?=json_encode($spon)?>'></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name']?></td>
                                                                            <?php } ?>
                                                                            </tr>
                                                                        <?php  } ?>

                                                                        </table>
                                                                    </div>
                                                                      <div class="col-md-6">
                                                                         
                                                                        <?php $spons = $database->select("sponsor","*",["type"=>'advertiser']);?>
                                                                        <table class="text-left">
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Advertiser</th>
                                                                              
                                                                            </tr>
                                                                            <?php 
                                                                            if($_GET['id']!='new'){
                                                                            foreach(json_decode($getitem['advertiser']) as $adver){
                                                                                $advers[] = $adver->name;
                                                                            };
                                                                        }

                                                                            foreach($spons as $spon){?>
                                                                            <tr>
                                                                                <?php if($_GET['id']!='new'){?>
                                                                                <td><input type="checkbox" class="checkadver"  value='<?=json_encode($spon)?>' <?=in_array($spon['name'],$advers)?'checked':''?>></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name'].$r?></td>
                                                                            <?php }else{ ?>
                                                                                <td><input type="checkbox" class="checkadver"  value='<?=json_encode($spon)?>'></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name'].$r?></td>
                                                                            <?php } ?>
                                                                            </tr>
                                                                        <?php  } ?>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                           <!-- <div class="modal-footer"> -->
                                                               <!--  <a data-dismiss="modal" href="#">Cancel</a> -->
                                                               <!--  <a href="#">Add</a>
                                                            </div>  -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner text-left"> 
                                                     
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                           <?php if($_GET['id']!='new'){?> <label>Booking ID : CC0<?=$getitem['id']?></label> <?php } ?>
                                                            <table class="table" id="moreSpon">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price </th>
                                                                </tr>
                                                                 <?php if($_GET['id']!='new'){?>
                                                                <tr>
                                                                    <td>
                                                                        Attendees
                                                                    </td>
                                                                    <?php foreach(json_decode($getitem['attendee']) as $key=> $attend){?>
                                                                    <td><input type="<?=$key=='quantity'?'number':'text'?>" name="attendee[]" class="form-control" value="<?=$attend?>"></td>
                                                                    <?php } ?>
                                                                </tr>

                                                                <!-- attendee -->
                                                                <tr>
                                                                    <td>Spouses</td>
                                                                     <?php foreach(json_decode($getitem['spouse']) as $key=> $attend){?>
                                                                    <td><input type="<?=$key=='quantity'?'number':'text'?>" value="<?=json_decode($getitem['spouse'])->quantity!=0?$attend:'0'?>" name="spount[]" class="form-control"></td>
                                                                    <?php } ?>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fixed Table</td>
                                                                     <?php foreach(json_decode($getitem['fix_table']) as $key=> $attend){?>
                                                                    <td><input type="<?=$key=='quantity'?'number':'text'?>" name="fix_table[]" value="<?=json_decode($getitem['fix_table'])->quantity!=0?$attend:'0'?>" class="form-control">
                                                                        
                                                                    </td>
                                                                    <?php } ?>
                                                                </tr>
                                                                       <?php if(json_decode($getitem['sponsor']) != ''){?>                                                             
                                                                    <?php foreach(json_decode($getitem['sponsor'])as $key=>$val){
                                                                        echo "<tr class='$val->input'>
";                                                                          echo "<input name='$val->input' class='form-control' type='hidden' value='".$val->name."'/>";
                                                                            echo "<td>".$val->name."</td>";
                                                                            echo "<td>1</td>";
                                                                            echo "<td><input type='text' class='form-control' name='".$val->input."_pr' value='".$val->price."'/></td>";
                                                                            echo " </tr>";
                                                                    } } ?>
                                                                       <?php if(!empty(json_decode($getitem['advertiser']))){?>   
                                                                      
                                                                     <?php foreach(json_decode($getitem['advertiser'])as $key=>$val){

                                                                         echo "<tr class='$val->input'>
";
                                                                            echo "<input name='$val->input' class='form-control' type='hidden' value='".$val->name."'/>";
                                                                            echo "<td>".$val->name."</td>";
                                                                            echo "<td><input type='number' class='form-control'  name='".$val->input."_qu' value='".$val->quantity."' /></td>";
                                                                            echo "<td><input type='text' class='form-control' name='".$val->input."_pr' value='".$val->price."'/></td>";
                                                                            echo "</tr>";
                                                                  }  }?>
                                                                   <?php }else{ ?>
                                                                   <!-- if =! new -->
                                                                    <tr>
                                                                        <td>
                                                                        Attendees
                                                                        </td>                                                                   
                                                                        <td><input type="number" name="attendee[]" class="form-control" value="0"></td>
                                                                        <td><input type="text" name="attendee[]" class="form-control" value="0"></td>            
                                                                     </tr>
                                                                     <tr>
                                                                    <td>Spouses</td>
                                                                     
                                                                    <td><input type="nubmer" name="spount[]" class="form-control" value="0"></td>
                                                                    <td><input type="text" name="spount[]" class="form-control" value="0"></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Fixed Table</td>
                                                                    
                                                                    <td><input type="number" name="fix_table[]" value="0" class="form-control"></td>
                                                                    <td><input type="text" name="fix_table[]" value="0" class="form-control"></td>
                                                                    
                                                                </tr>

                                                               <?php } ?>
                                                                <!-- if =! new -->
                                                                
                                                            </table>
                                                            <table class="table">
                                                                <tr>
                                                                       
                                                                        <td><span class="text-danger"><b>Discount</b></span></td>
                                                                        <td></td>
                                                                        <td><span class="text-danger"><input type="text" name="discounts" value="<?=$getitem['discount']?>" class="form-control" /> </span></td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td><b>Total</b></td>
                                                                        <td></td>
                                                                        <td><b><input type="text" class="form-control" name="amount" value='<?=$getitem['amount']?>' /></b></td>
                                                                    </tr>
                                                            </table>
                                                            </div>
                                                        </div>
                                                        <!-- col-md-12 -->
                                                        <div class="col-md-12">
                                                             <div class="form-group-inner">
                                                                <label>Comment</label>
                                                                <textarea name="comment" class="form-control" rows="3"><?=$getitem['detail']?></textarea>
                                                             </div>
                                                        </div>
                                                 
                                                       
                                                            <div class="col-md-6">
                                                             <div class="form-group-inner">
                                                                <label>Paid Status</label>
                                                                  <select class="form-control custom-select-value" name="status">
                                                                <option value="">choose..</option>
                                                                <option value="yes" <?=$getitem['status']=='yes'?'selected':''?>>Yes</option>
                                                                <option value="no" <?=$getitem['status']=='no'?'selected':''?>>No</option>
                                                                         
                                                            </select>
                                                             </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  <div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
 </form>


   <div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                     <div class="all-form-element-inner text-left"> 
                        <div class="sparkline12-list shadow-reset">
                       
                          <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase">Attendee Form Element</h1>
                                        <div class="sparkline12-outline-icon">
                                             <a href="edit_attendee?id=new"><span class="btn btn-custon-rounded-three btn-success" style="color:#fff;">ADD +</span></a>
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>

                                            <!-- <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span> -->
                                        </div>
                                    </div>
                                </div>                          
                    <div class="row">

                        <div class="col-lg-12 text-left">
                            <?php if($_GET['id']!='new'){?>
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Size Shirt</th>
                                    <th>Type</th>
                                    <th></th>
                                   
                                </tr>
                                <?php foreach($getAtts as $getAtt){?>
                                <tr>
                                    <td><?=$getAtt['id']?></td>
                                    <td><?=$getAtt['title']?></td>
                                    <td><?=$getAtt['first_name']?></td>
                                    <td><?=$getAtt['last_name']?></td>
                                    <td><?=$getAtt['size_shirt']?></td>
                                    <td><?=$getAtt['type_member']?></td>
                                    <td><a target="_blank" href="edit_attendee?id=<?=$getAtt['id']?>"><button type="button" class="btn btn-custon-rounded-three btn-success"> <i class="fa fa-edit"></i></button></a></td>
                                    
                                </tr>
                            <?php } ?>
                            </table>
                        <?php } ?>
                        </div>
                    </div>
                
            </div>
         </div>
    </div>
 </div>