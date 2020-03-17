
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
<form action="update_company" class="text-left" method="POST" enctype="multipart/form-data">
<input type="hidden" name="type_form" value="<?=$_GET['id']?>">

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
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Sponsors</th>
                                                                              
                                                                            </tr>
                                                                            <?php foreach($spons as $spon){?>
                                                                            <tr>
                                                                                <td><input type="checkbox" class="checkspon"  value="<?=$spon?>"></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name']?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </table>
                                                                    </div>
                                                                      <div class="col-md-6">
                                                                        <?php $spons = $database->select("sponsor","*",["type"=>'advertiser']);?>
                                                                        <table class="text-left">
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Advertiser</th>
                                                                              
                                                                            </tr>
                                                                            <?php foreach($spons as $spon){?>
                                                                            <tr>
                                                                                <td><input type="checkbox"  value="<?=$spon['name']?>"></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;<?=$spon['name']?></td>
                                                                            </tr>
                                                                        <?php } ?>
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
                                                            <label>Booking ID : CC0<?=$getitem['id']?></label>
                                                            <table class="table">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price</th>
                                                                </tr>
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
                                                                                                                                    
                                                                    <?php foreach(json_decode($getitem['sponsor'])as $key=>$val){
                                                                        echo "<tr>
";                                                                          echo "<input name='sponsorName[]' class='form-control' type='hidden' value='".$val->name."'/>";
                                                                            echo "<td>".$val->name."</td>";
                                                                            echo "<td>1</td>";
                                                                            echo "<td><input name='' type='text' class='form-control' value='".$val->price."'/></td>";
                                                                            echo " </tr>";
                                                                    }?>
                                                               
                                                                 
                                                                     <?php foreach(json_decode($getitem['advertiser'])as $key=>$val){

                                                                         echo "<tr>
";
                                                                            echo "<input name='advertiserName[]' class='form-control' type='hidden' value='".$val->name."'/>";
                                                                            echo "<td>".$val->name."</td>";
                                                                            echo "<td><input type='number' class='form-control'  name='quantityAdver[]' value='1' /></td>";
                                                                            echo "<td><input type='text' class='form-control' name='priceAdver[]' value='".$val->price."'/></td>";
                                                                            echo "</tr>";
                                                                    }?>
                                                                   
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
                                                                <textarea class="form-control" rows="3"></textarea>
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
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase">Company Form Element</h1>
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
                                                            <input type="text" name="companyname" class="form-control" placeholder="Company Name" value="<?=$getCom['companyname']?>">
                                                            </div>
                                                        </div>
                                                           <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" placeholder="Put E-mail" name="email" value="<?=$getCom['email']?>">
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
            <?php foreach($getAtt as $att){?>
           <div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase"><?=$att['type_member']?> Form Element</h1>
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
                                                             <img id="show_current"  src='<?=$att['image']?>' style='max-width:100%;'> 
                                                            <input type="file" id="upload" name="logo" class="btn-upload">
                                                            <input type="hidden" id="path_file" name="logo_path" value="">
                                                             <span class="btn btn-success upload-result">Upload Image</span>
                                                            <p class="help-block hidden">Example Text Here.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group-inner">
                                                            <label>Title</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Title" value="<?=$att['title']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                            <label>First Name</label>
                                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?=$att['first_name']?>">
                                                            </div>
                                                        </div>
                                                           <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?=$att['last_name']?>">
                                                            </div>
                                                        </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Email</label>
                                                            <input name="email" type="email" class="form-control" placeholder="Email" value="<?=$att['email']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Position</label>
                                                            <input type="text" name="position_name" class="form-control" placeholder="Position" value="<?=$att['position_name']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Mobile No.</label>
                                                            <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No." value="<?=$att['mobile_no']?>">
                                                            </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Company Name</label>
                                                            <select class="form-control custom-select-value" name="company_id">     <option value="">Choose..</option>
                                                                <?php foreach($getComAll as $com){?>
                                                                            <option value="<?=$com['id']?>" <?=$com['id']==$att['company_id']?'selected':''?>><?=$com['companyname']." ".$com['city']." ".$com['country']?></option>
                                                                      <?php } ?>     
                                                            </select>
                                                            </div>
                                                            </div>
                                                             <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Member Type</label>
                                                            <select class="form-control custom-select-value" name="member_type">
                                                                <option value="">Choose..</option>
                                                                <?php foreach(json_decode(getAvalible('member_type')['detail']) as $com){?>
                                                                            <option value="<?=$com?>" <?=$com==$att['type_member']?'selected':''?>><?=$com?></option>
                                                                      <?php } ?>     
                                                            </select>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Status</label>
                                                            <select class="form-control custom-select-value" name="status">
                                                                
                                                                <option value="yes" <?=$att['status']=='yes'?'selected':''?>>Yes</option>
                                                                <option value="no" <?=$att['status']=='no'?'selected':''?>>No</option>
                                                                         
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
        <?php }?>
        <!-- end foreach attendee -->


 </form>
