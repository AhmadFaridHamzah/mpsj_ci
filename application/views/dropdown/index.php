<script type="text/javascript">
	$(document).ready(function(){
		$('#exampleMulti').multiselect({
			includeSelectAllOption: true,
			numberDisplayed:6,
		})
	})
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
        	
        	<?= form_open('samplemultiselect/save_update') ?>

        		<select id="exampleMulti" multiple="multiple" name="product[]">
        			<?php

        				$selected = "";

        				foreach ($product as $key => $value) {
        					if($value->discontinued == 1){
        						$selected = "selected";
        					}else{
        						$selected = "";
        					}

        					echo '<option value="'.$value->id.'" '.$selected.'>'.$value->product_name.'</option>';
        				}
        			?>
        		</select>

            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Save</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
