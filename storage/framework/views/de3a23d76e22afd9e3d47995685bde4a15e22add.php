<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin</title>


  <link href="<?php echo e(asset('NiceAdmin/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/css/bootstrap-theme.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/css/elegant-icons-style.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('NiceAdmin/css/font-awesome.min.css')); ?>" rel="stylesheet" />

  <link href="<?php echo e(asset('NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet')); ?>" />
  <!-- easy pie chart-->
  <link href="<?php echo e(asset('NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo e(asset('NiceAdmin/css/owl.carousel.css')); ?>" type="text/css">
  <link href="<?php echo e(asset('NiceAdmin/css/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo e(asset('NiceAdmin/css/fullcalendar.css')); ?>">
  <link href="<?php echo e(asset('NiceAdmin/css/widgets.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/css/style-responsive.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('NiceAdmin/css/xcharts.min.css')); ?>" rel=" stylesheet">
  <link href="<?php echo e(asset('NiceAdmin/css/jquery-ui-1.10.4.min.css')); ?>" rel="stylesheet">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <?php echo $__env->make('NiceTemplate.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('NiceTemplate.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section id="main-content">
      <?php echo $__env->yieldContent('content'); ?>
      
    </section>
   

  

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo e(asset('NiceAdmin/js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/js/jquery-ui-1.10.4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/js/jquery-1.8.3.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('NiceAdmin/js/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo e(asset('NiceAdmin/js/bootstrap.min.js')); ?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo e(asset('NiceAdmin/js/jquery.scrollTo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/js/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo e(asset('NiceAdmin/assets/jquery-knob/js/jquery.knob.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/js/jquery.sparkline.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')); ?>"></script>
  <script src="<?php echo e(asset('NiceAdmin/js/owl.carousel.js')); ?>"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo e(asset('NiceAdmin/js/fullcalendar.min.js')); ?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo e(asset('NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.js')); ?>"></script>
    <!--script for this page only-->
    <script src="<?php echo e(asset('NiceAdmin/js/calendar-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery.rateit.min.js')); ?>"></script>
    <!-- custom select -->
    <script src="<?php echo e(asset('NiceAdmin/js/jquery.customSelect.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/assets/chart-master/Chart.js')); ?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo e(asset('NiceAdmin/js/scripts.js')); ?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo e(asset('NiceAdmin/js/sparkline-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/easy-pie-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/xcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery.autosize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery.placeholder.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/gdp-data.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/morris.min.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/sparklines.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/charts.js')); ?>"></script>
    <script src="<?php echo e(asset('NiceAdmin/js/jquery.slimscroll.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
      //knob

      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
