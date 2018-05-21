
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
        <!-- <form href="" method="post" class="form-horizontal"> -->
              
 			<?= form_open('admin/employee/create_process/',['class'=>'form-horizontal']); ?>

 			<div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company</label>

                  <div class="col-sm-10">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->

                     <?php

                     	$company = [
                     		'name'=>'company',
                     		'id'=>'company',
                     		'class' => 'form-control',
                     		'value'=>set_value('company'),
                     		'placeholder' => 'Company',
                     	];

                     	echo form_input($company);
                     	echo form_error('company',"<p class='text-danger'>","</p>");

                     ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->

                     <?php

                     	$last_name = [
                     		'name'=>'last_name',
                     		'id'=>'last_name',
                     		'class' => 'form-control',
                     		'value'=>set_value('last_name'),
                     		'placeholder' => 'last name',
                     	];

                     	echo form_input($last_name);
                     	echo form_error('last_name',"<p class='text-danger'>","</p>");

                     ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->

                     <?php

                     	$first_name = [
                     		'name'=>'first_name',
                     		'id'=>'first_name',
                     		'class' => 'form-control',
                     		'value'=>set_value('first_name'),
                     		'placeholder' => 'first name',
                     	];

                     	echo form_input($first_name);
                     	echo form_error('first_name',"<p class='text-danger'>","</p>");

                     ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->

                     <?php

                     	$email = [
                     		'name'=>'email_address',
                     		'id'=>'email_address',
                     		'class' => 'form-control',
                     		'value'=>set_value('email_address'),
                     		'placeholder' => 'Email',
                     	];

                     	echo form_input($email);
                     	echo form_error('email_address',"<p class='text-danger'>","</p>");

                     ?>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
