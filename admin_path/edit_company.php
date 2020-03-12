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
                                           
                                            <li><span class="bread-blod">Edit Companies</span>
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
                                                             <img id="show_current"  src='<?=$getitem['image']?>' style='max-width:100%;'> 
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
                                                            <input type="text" name="companyname" class="form-control" placeholder="Company Name" value="<?=$getitem ['companyname']?>">
                                                            </div>
                                                        </div>
                                                           <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" placeholder="Put E-mail" name="email" value="<?=$getitem ['email']?>">
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Address</label>
                                                            <input name="address" type="text" class="form-control" placeholder="Address" value="<?=$getitem['address']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>City</label>
                                                            <input type="text" name="city" class="form-control" placeholder="Cities" value="<?=$getitem['city']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Country</label>
                                                            <input type="text" name="country" class="form-control" placeholder="Countries" value="<?=$getitem['country']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Phone</label>
                                                             <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?=$getitem['phone']?>">
                                                            </div>
                                                            </div>
                                                             <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Mobile No.</label>
                                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile No." value="<?=$getitem['mobile']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <div class="form-group-inner">
                                                            <label>Status</label>
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
                                        <h1 class="text-uppercase"><?=$getitem['type_member']?> Form Details</h1>
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
                                                            <textarea class="form-control" name="specialization" placeholder="specialization" rows="3" style="text-align: left;"><?=$getitem['specialization']?></textarea>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                            <label>Services</label>
                                                            <textarea class="form-control" rows="3" placeholder="Services"><?=$getitem['services']?></textarea>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <div class="form-group-inner">
                                                                <?php 
                                                                if($getitem){
                                                                foreach(json_decode($getitem['detail']) as $key => $detail){
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
                                                           <textarea class="form-control" name="comment" rows="5"><?=$getitem['comment']?></textarea>
                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                               <button type="submit" class="btn btn-custon-rounded-four btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 </form>
