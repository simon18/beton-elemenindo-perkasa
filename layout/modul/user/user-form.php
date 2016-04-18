<form class="form-horizontal" autocomplete="off" >
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Role <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<select class="form-control" name="irole" required>
					<option value="">~ Pilih Role ~</option>
					<option value="manager_staff">Manager Staff</option>
					<option value="staff">Staff</option>
					<option value="supplier">Supplier</option>
					<option value="sales">Sales</option>
					<option value="admin">Admin</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Username <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="iusername" class="form-control" placeholder="Username" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Password <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="password" name="ipassword" class="form-control" placeholder="Password" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">First Name <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="ifirst_name" class="form-control" placeholder="First Name" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Last Name <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="text" name="ilast_name" class="form-control" placeholder="Last Name" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Email <i class="asterisk">*</i></label>
			<div class="col-md-9">
				<input type="email" name="iemail" class="form-control" placeholder="Email" required>
			</div>
		</div>
	</div>
</form>