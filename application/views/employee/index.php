
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
        	
        	<a href="<?= site_url('admin/employee/create') ?>" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Edit Employee">
          	        Create</a>

          <a href="<?= site_url('admin/employee/sent_email') ?>" class="btn btn-warning pull-right" data-toggle="tooltip" data-placement="top" title="Edit Employee">
                    Sent Email</a>


        	<table id="example2" class="table table-bordered table-hover">
        	  <thead>
        	  <tr>
        	    <th>Bil</th>
                  <th>Company</th>
                  <th>Lastname</th>
                  <th>FirstName</th>
                  <th>Email</th>
                  <th>Action</th>
        	  </tr>
        	  </thead>
        	  <tbody>
        	 	<?php foreach($employee as $key => $emp){ ?>
               	 <tr>
          	        <td><?= $key+1 ?></td>
          	        <td><?= $emp->company ?></td>
          	        <td><?= $emp->last_name ?></td>
          	        <td><?= $emp->first_name ?></td>
          	        <td><?= $emp->email_address ?></td>
          	        <td>

                   <?= form_open('admin/employee/delete/'.encryptInUrl($emp->id)); ?>

          	        	<a href="<?= site_url('admin/employee/edit/'.encryptInUrl($emp->id)) ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit Employee">
          	        	<i class="fa fa-pencil-square" aria-hidden="true"></i>
          	        	</a>


          	        	<button type="button" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="Delete Employee">
          	        		<i class="fa fa-trash" aria-hidden="true"></i>
          	        	</button>
                    </form>
          	        </td>
          	      </tr>
               	<?php } ?>
        	  </tbody>
        	  <tfoot>
        	  <tr>
        	    <th>Bil</th>
                  <th>Company</th>
                  <th>Lastname</th>
                  <th>FirstName</th>
                  <th>Email</th>
                  <th>Action</th>
        	  </tr>
        	  </tfoot>
        	</table>
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
