<script>
    function func(){
        $('.test').toggleClass("d-none");
    }
    function showreq(){
        $('.test1').toggleClass("d-none");
    }
</script>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!--[ daily sales section ] start-->
                            <div class="col-md-6 col-xl-4">
                                <div class="card daily-sales">
                                    <div class="card-block">
                                        <h6 class="mb-4">Total Donor</h6>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-9">
                                                <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i><?php $query = $this->db->query('SELECT * FROM donor');
                                                echo $query->num_rows(); ?></h3>
                                            </div>

                                            <!-- <div class="col-3 text-right">
                                                <p class="m-b-0">67%</p>
                                            </div> -->
                                        </div>
                                        <div class="progress m-t-30" style="height: 7px;">
                                            <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[ daily sales section ] end-->
                            <!--[ Monthly  sales section ] starts-->
                            <div class="col-md-6 col-xl-4">
                                <div class="card Monthly-sales">
                                    <div class="card-block">
                                        <h6 class="mb-4">Total Donation</h6>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-9">
                                                <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i><?php $query = $this->db->query('SELECT * FROM patient');
                                                echo $query->num_rows(); ?></h3>
                                            </div>
                                            <!-- <div class="col-3 text-right">
                                                <p class="m-b-0">36%</p>
                                            </div> -->
                                        </div>
                                        <div class="progress m-t-30" style="height: 7px;">
                                            <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[ Monthly  sales section ] end-->
                            <!--[ year  sales section ] starts-->
                            <div class="col-md-12 col-xl-4">
                                <div class="card yearly-sales">
                                    <div class="card-block">
                                        <h6 class="mb-4">Stock of Blood</h6>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-9">
                                                <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i><?php $query = $this->db->query('SELECT * FROM blood_stock');
                                                echo $query->num_rows(); ?></h3>
                                            </div>
                                            <div class="test d-none col-3 text-right">
                                                <p class="m-b-0">80%</p>
                                            </div>
                                        </div>
                                        <div class="progress m-t-30" style="height: 7px;">
                                            <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[ year  sales section ] end-->
<!--[ Recent Users ] start-->
<div class="col-xl-12 col-md-6">
	<div class="card Recent-Users">
		<div class="card-header">
			<h5>Request for Blood</h5>
		</div>
		<div class="card-block px-0 py-3">
			<div onclick="showreq()" class="table-responsive">
				<!-- <p class="text-center">No request for blood.</p> -->
				<table class="test1 table table-hover">
					<tbody>
						<?php 
						if($patient){
							foreach($patient as $p){
								if($p->status == 0){
						?>
						<tr class="unread">
							<td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
							<td>
								<h6 class="mb-1"><?= $p->name ?></h6>
								<p class="m-0"><?= $p->contact ?></p>
							</td>
							<td>
								<h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>
									<?= $p->blood_group ?>
								</h6>
							</td>
							<td>
								<a href="<?= base_url() ?>patient/request/<?= $p->id ?>/0/<?= $p->blood_group ?>" class="label theme-bg2 text-white f-12">Reject</a>
								<a href="<?= base_url() ?>patient/request/<?= $p->id ?>/1/<?= $p->blood_group ?>" class="label theme-bg text-white f-12">Approve</a>
                            </td>
						</tr>
						<?php 
						} }
                            }else{
						?>
							<p class="text-center">No request for blood.</p>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--[ Recent Users ] end-->

                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->