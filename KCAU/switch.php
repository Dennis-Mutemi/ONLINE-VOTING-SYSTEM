<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Switch Role</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form>
		<div class="form-group row">
				<label for="colFormLabelSm" class="col-sm-5 col-form-label">Select user:</label>
				<div class="col-sm-7">
					<input type="text" class="form-control form-control-sm" id="js_val" readonly>
					<input type="hidden" class="form-control form-control-sm" id="js_userid" readonly><br>
					<input type="text" class="form-control form-control-sm" oninput="search(this.value)" placeholder="Search...."><br>
					<div id="js_displayval">

					</div>
					
				</div>
		</div>
		<div class="form-group row">
				<label for="colFormLabelSm" class="col-sm-5 col-form-label">Switch Role To:</label>
				<div class="col-sm-7">
					<Select type="text" class="form-control form-control-sm">
					   <option value="">Switch Role To</option>
						<option value="Admin">Admin</option>
						<option value="Normal">Normal</option>						
					</select>
				</div>
		</div>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Switch</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>