<script type="text/javascript">
$(document).ready(function(){

	 $('#calendar').fullCalendar({
    	// put your options and callbacks herer*
    	header: {
    		left: 'prev,next,today',
    		center : 'title',
    		right : 'month,agendaDay,listWeek',
    	},
    	// timeFormat: 'H(:mm)',
    	locale: 'ms-my',
    	timezone: 'Asia/Kuala_Lumpur',
    	// displayEventTime: false,
    	events:<?= $event ?>,
  	});

	 $('.printCalendar').click(function(){
	 		window.print();
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

        	<a href="<?= site_url('admin/takwim') ?>" class="btn btn-warning pull-right printCalendar" data-toggle="tooltip" data-placement="top" title="Print">Print</a>

        	<br><br>
        	
        	<div id='calendar'></div>
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
