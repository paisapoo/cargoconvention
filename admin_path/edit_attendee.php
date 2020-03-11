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
                                           
                                            <li><span class="bread-blod">Edit Attendee List & Spouse</span>
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
<form action="update_attendee" class="text-left">
<div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase"><?=$getitem['type_member']?> Form Element</h1>
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
                                                            <img src="<?=$getitem['image']?>" width="100%">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group-inner">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" placeholder="Title" value="<?=$getitem ['title']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name" value="<?=$getitem ['first_name']?>">
                                                            </div>
                                                        </div>
                                                           <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" value="<?=$getitem ['last_name']?>">
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" placeholder="Email" value="<?=$getitem['email']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Position</label>
                                                            <input type="text" class="form-control" placeholder="Position" value="<?=$getitem['position_name']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group-inner">
                                                            <label>Company Name</label>
                                                            <select class="form-control custom-select-value" name="company_id">
                                                                <?php foreach($getCom as $com){?>
                                                                            <option value="<?=$com['id']?>" <?=$com['id']==$getitem['company_id']?'selected':''?>><?=$com['companyname']." ".$com['city']." ".$com['country']?></option>
                                                                      <?php } ?>     
                                                            </select>
                                                            </div>
                                                            </div>
                                                             <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Member Type</label>
                                                            <select class="form-control custom-select-value" name="member_type">
                                                                <?php foreach(json_decode(getAvalible('member_type')['detail']) as $com){?>
                                                                            <option value="<?=$com?>" <?=$com==$getitem['type_member']?'selected':''?>><?=$com?></option>
                                                                      <?php } ?>     
                                                            </select>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group-inner">
                                                            <label>Status</label>
                                                            <select class="form-control custom-select-value" name="member_type">
                                                                
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
                                                        <div class="col-md-2">
                                                            <div class="form-group-inner">
                                                        <label>Size T-shirt</label>
                                                            <input type="text" class="form-control" placeholder="Position" value="<?=$getitem['size_shirt']?>" >
                                                            </div>
                                                        </div>
                                                            <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                            <label>Allergies</label>
                                                            <input type="text" class="form-control" placeholder="Position" value="<?=$getitem['allergies']?>">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                            <div class="form-group-inner">
                                                                <?php foreach(json_decode($getitem['detail']) as $key => $detail){
                                                                    if($detail!=''){
                                                                    $die .= $key." : ".$detail."||";
                                                                    }
                                                                }?>
                                                            <label>Dietary Restrictions</label>
                                                            <input type="text" class="form-control" placeholder="Position" value="<?=$die?>" >
                                                            </div>
                                                            </div>
                                                          <div class="col-md-12">
                                                            <div class="form-group-inner">
                                            
                                                            <label>Comment</label>
                                                           <textarea class="form-control" name="comment" rows="5">
                                                               <?=$getitem['comment']?>
                                                           </textarea>
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

 </form>
