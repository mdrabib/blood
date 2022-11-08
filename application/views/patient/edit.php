<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<div class="pcoded-content">
			<div class="pcoded-inner-content">
				<!-- [ breadcrumb ] start -->
				<div class="page-header">
					<div class="page-block">
						<div class="row align-items-center">
							<div class="col-md-12">
								<div class="page-header-title">
									<h3 class="m-b-10">Patient</h3>
								</div>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="feather icon-home"></i></a></li>
									<li class="breadcrumb-item"><a href="<?= base_url('patient') ?>">Patient</a></li>
									<li class="breadcrumb-item"><a href="<?= base_url('patient/edit') ?>">Update</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- [ breadcrumb ] end -->
				<div class="main-body">
					<div class="page-wrapper">
						<!-- [ Main Content ] start -->
						<div class="row">

							<!-- [ Hover-table ] start -->
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<h5>Update Patient</h5>
									</div>
			
									<?php if($this->session->flashdata('msg')){
										echo $this->session->flashdata('msg');
									} ?>
									<div class="card-body">
										<?= form_open() ?>
											<input type="hidden" name="id" value="<?= set_value('id', $patient->id) ?>">
											<div class="form-group row">
												<div class="col-sm-6">
													<input type="text" class="form-control" value="<?= set_value('name',$patient->name); ?>" name="name" id="name" placeholder="Full Name">
													<span class="help-block"><small><?= form_error('name'); ?></small></span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<input type="text" id="contact" name="contact" class="form-control" value="<?= set_value('contact',$patient->contact); ?>" placeholder="Contact No.">
													<span class="help-block"><small><?= form_error('contact'); ?></small></span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<input type="text" id="address" name="address" class="form-control" value="<?= set_value('address',$patient->address); ?>" placeholder="Address">
													<span class="help-block"><small><?= form_error('address'); ?></small></span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<input type="text" id="area" name="area" class="form-control" value="<?= set_value('area',$patient->area); ?>" placeholder="Area">
													<span class="help-block"><small><?= form_error('area'); ?></small></span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<select class="form-control" name="blood_group" id="blood_group">
														<option><?= set_value('blood_group',$patient->blood_group); ?></option>
														<option value="O-">O-</option>
														<option value="O+">O+</option>
														<option value="B-">B-</option>
														<option value="B+">B+</option>
														<option value="A-">A-</option>
														<option value="A+">A+</option>
														<option value="AB-">AB-</option>
														<option value="AB+">AB+</option>
													</select>
												</div>
												<span class="help-block"><small>
												<? form_error('blood_group'); ?></small></span>
											</div>
											<div class="form-group row">
												<div class="col-sm-6">
													<input type="date" name="collect_date" class="form-control" value="<?= set_value('collect_date',$patient->collect_date); ?>" placeholder="Collect Date">
													<span class="help-block"><small><?= form_error('collect_date'); ?></small></span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</form>
									</div> <!-- card-body -->
								</div> <!-- card -->
							</div> <!-- col -->
						</div> <!-- End row -->	
					</div>  <!-- End Wrapper -->
				</div> <!-- End Main Body -->
			</div>
		</div>
	</div>
</section>
<!-- [ Main Content ] end -->
