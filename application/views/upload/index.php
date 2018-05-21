<script type="text/javascript">
	$(document).ready(function(){

		$("#file_user").fileinput({
			showUpload:false,
			showCaption:false,
			browseClass:"btn btn-primary"
		}); 	


		var inputFile = $('input[name=userfile]');
		var uploadUrl = $('#form-upload').attr('action');
		var progressBar = $('#progress-bar');

		$("form#form-upload").submit(function(){
				event.preventDefault();

				var filetoUpload = inputFile[0].files[0];

				if(filetoUpload != "undefined"){

					var formData = new FormData($(this)[0]);


					$.ajax({

						url: uploadUrl,
						type: 'post',
						data: formData,
						dataType: "json",
						processData: false,
						contentType: false,
						success:function(data){
							if(data.status == 0){
								 swal({

						            title:"Tiada File Upload",
						            text: "Tiada data yang di muat naik",
						            type: "error",
						            showCancelButton: false,
						            confirmButtonColor : '#DD6B55',
						            closeOnConfirm: false

						        })
							}else{
								 swal({

						            title:"File berjaya di Upload",
						            text: "File Berjaya di muat naik",
						            type: "success",
						            showCancelButton: false,
						            confirmButtonColor : '#DD6B55',
						            closeOnConfirm: false

						        })
							}
						},
						xhr: function (){
							var xhr = new XMLHttpRequest();

							xhr.upload.addEventListener("progress",function(event){

								if(event.lengthComputable){
									var percentComplete = Math.round((event.loaded / event.total) * 100);

									$(".progress").show();
									progressBar.css({width: percentComplete + "%" });
									progressBar.text(percentComplete+"%");
								}

						},false)

						return xhr;

					}

					});
				}

		});

		$('body').on('change.bs.fileinput',function(e){
			$(".progress").hide();
			progressBar.css({width:"0%" });
			progressBar.text("0%");
		});

	});
</script>
<section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

        	<?php

        		$attribute = [

        			'method' => 'post',
        			'id' => 'form-upload',
        			'enctype' => 'multipart/form-data'

        		];
        	?>
        
        	<?= form_open('uploadprogress/ajax_upload',$attribute) ?>

        	<div class="row">

        		<div class="form-group col-xs-12 col-sm-6 col-md-6">
        			<p>
        				Title


        				<?php
 							$title = [
 								'name' => 'title',
 								'id'=> 'title',
 								'class'=>'form-control',
 								'value'=>set_value('title'),
 								'placeholder'=>'Title',
 							];

 							echo form_input($title);

        				?>

        			</p>


        		</div>

        		<div class="form-group col-xs-12 col-sm-6 col-md-6">
        			<p>
        				Description


        				<?php
 							$description = [
 								'name' => 'description',
 								'id'=> 'description',
 								'class'=>'form-control',
 								'value'=>set_value('description'),
 								'placeholder'=>'Title',
 							];

 							echo form_input($description);

        				?>

        			</p>


        		</div>

        	</div>

        	<div class="form-group">
        		<?php

        			$userfile = [

        				'id'=>'file_user',
        				'name'=>'userfile',
        				'type'=>'file'

        			];

        			echo form_upload($userfile);
        		?>
        	</div>

        	<div class="progress" style="display:none;">
        		<div id="progress-bar" class="progress-bar progress-bar-success progress-bar-stripped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 30%">20%</div>
        	</div>

        	<div class="form-group">
        		<input id="upload-btn" type="submit" class="btn btn-success" name="submit" value="upload Image">
        	</div>


            </form>
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
