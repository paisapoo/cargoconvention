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
                                           
                                            <li><span class="bread-blod">Edit News</span>
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
<form action="update_news" class="text-left" method="POST" enctype="multipart/form-data">
<input type="hidden" name="type_form" value="<?=$_GET['id']?>">
<div class="basic-form-area mg-b-15">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1 class="text-uppercase">Detail Form Element  News ID : <?=$_GET['id']?></h1>
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
                                                        <div class="col-md-6">
                                                            <img src="<?=$item['image']?>" class="img-thumbnail">
                                                            <div class="form-gromp">
                                                            <input type="file" class="" name="news_banner">
                                                           </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <lable>News Title</lable>
                                                            <input type="text" name="title_news" class="form-control" value="<?=$item['title']?>">
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <label>Status</label>
                                                            <select class="form-control custom-select-value" name="status">
                                                                <option value="">choose..</option>
                                                                <option value="yes" <?=$item['status']=='yes'?'selected':''?>>Yes</option>
                                                                <option value="no" <?=$item['status']=='no'?'selected':''?>>No</option>
                                                                         
                                                            </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Contents</label>
                                                                        <textarea name="content" class="form-control" id="editor"  rows="10"><?=$item['content']?></textarea>
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
                            <div class="col-md-12" align="right">
                                <br>
                                <button class="btn btn-success" type ="sumbit">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</form>