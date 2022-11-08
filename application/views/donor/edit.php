<div class="wrapper">
    <div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-md-8">
							<h4 class="page-title m-0">Profile</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="card ml-5">
					<?php if($this->session->flashdata('msg')){
						echo $this->session->flashdata('msg');
					} ?>
					<div class="card-body">
						<?= form_open() ?>							
							<input type="hidden" name="id" value="<?= set_value('id', $donoru->id) ?>">
							<div class="form-group row">
								<label class="col-sm-2 control-label" for="name">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" value="<?= set_value('name', $donoru->name) ?>" name="name" id="name">
									<span class="help-block"><small><?= form_error('name'); ?></small></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label" for="contact">Contact</label>
								<div class="col-sm-10">
									<input type="text" id="contact" name="contact" class="form-control" value="<?= set_value('contact)', $donoru->contact) ?>">
									<span class="help-block"><small><?= form_error('contact'); ?></small></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label" for="address">Address</label>
								<div class="col-sm-10">
									<input type="text" id="address" name="address" class="form-control" value="<?= set_value('address)', $donoru->address) ?>">
									<span class="help-block"><small><?= form_error('address'); ?></small></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label" for="area">Area</label>
								<div class="col-sm-10">
									<input type="text" id="area" name="area" class="form-control" value="<?= set_value('area)', $donoru->area) ?>">
									<span class="help-block"><small><?= form_error('area'); ?></small></span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label" for="area">Blood Group</label>
								<div class="col-sm-6">
									<select class="form-control" name="blood_group" id="blood_group">
										<option><?= set_value('blood_group',$donoru->blood_group); ?></option>
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
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</div>
						</form>
					</div> <!-- card-body -->
				</div> <!-- card -->
			</div> <!-- col -->
		</div> <!-- End row -->
	</div>
</div>
<!-- end wrapper -->