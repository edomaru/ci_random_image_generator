<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Form Image Generator
			</div>
			<div class="panel-body">						
				<?php echo form_open("", array("class" => "form-horizontal")) ?>				
					<div class="form-group">
						<label for="text" class="col-md-3">Width</label>
						<div class="col-md-3">
							<input type="text" name="image_width" value="" id="image_width" class="form-control">
						</div>						
					</div>					
					<div class="form-group">
						<label for="text" class="col-md-3">Height</label>
						<div class="col-md-3">
							<input type="text" name="image_height" value="<?php echo set_value("image_height") ?>" id="image_height" class="form-control">
						</div>						
					</div>					
					<div class="form-group">
						<label for="text" class="col-md-3">Image Type</label>
						<div class="col-md-3">
							<?php $types = array(
								'.jpg' => "JPG",
								'.png' => "PNG",
								'.gif' => "Gif"
							); ?>
							<?php echo form_dropdown("image_type", $types, "", 'class="form-control"') ?>									
						</div>
					</div>
					<div class="form-group">
						<label for="text" class="col-md-3">Image Text</label>
						<div class="col-md-9">
							<input type="text" name="image_text" value="" id="image_text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="image_count" class="col-md-3">How many?</label>
						<div class="col-md-3">
							<?php foreach (range(1, 20) as $i) { $number[$i] = $i; } ?>
							<?php echo form_dropdown("image_count", $number, "", 'class="form-control"') ?>
						</div>
					</div>
					<div class="form-group">
						<label for="image_count" class="col-md-3">Provider</label>
						<div class="col-md-5">
							<?php $provider = array(
								"http://placehold.it" => "http://placehold.it",
								"http://dummyimage.com" => "http://dummyimage.com"
							); ?>
							<?php echo form_dropdown("provider", $provider, "", 'class="form-control"') ?>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<div class="col-md-offset-3 col-md-5">
							<button type="submit" class="btn btn-primary">Generate</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-md-6 -->
</div>
<!-- /.row -->