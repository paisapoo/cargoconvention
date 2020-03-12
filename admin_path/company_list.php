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
                                           
                                            <li><span class="bread-blod">Companies Lists</span>
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
 <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                              <a href="edit_company?id=new"><span class="btn btn-custon-rounded-three btn-success" style="color:#fff;">ADD +</span></a>
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <!-- <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    
                                                    <th data-field="id">ID</th>
                                                    <th data-field="companyname" >Company Name</th>
                                                    <th data-field="email" >Email</th>
                                                    <th data-field="address">Address</th>
                                                    <th data-field="city">City</th>
                                                    <th data-field="country" >Country</th>
                                                    <th data-field="phone">Phone</th>
                                                    <th data-field="mobile" >Mobile No</th>
                                                    <th data-field="action">Status</th>
                                                    <th data-field="edit"></th>
                                                    <th data-field="delete"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($getitem as $attend){?>
                                                <tr>
                                                    
                                                    <td><?=$attend['id']?></td>
                                                    <td><?=$attend['companyname']?></td>
                                                    <td><?=$attend['email']?></td>
                                                    <td><?=$attend['address']?></td>
                                                    <td><?=$attend['city']?></td>
                                                    <td><?=$attend['country']?></td>
                                                    <td><?=$attend['phone']?></td>
                                                    <td><?=$attend['mobile']?></td>
                                                    <td><?=$attend['status']?></td>
                                                    <td><a target="_blank" href="edit_company?id=<?=$attend['id']?>"><button type="button" class="btn btn-custon-rounded-three btn-success"> <i class="fa fa-edit"></i></button></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item?');" href="delete_item?table=companies&&id=<?=$attend['id']?>&&loca=company_list"><button type="button" class="btn btn-custon-rounded-three btn-danger"></span> <i class="fa fa-trash-o"></i></button></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->