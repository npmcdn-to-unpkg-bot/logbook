<!-- QUERIES -->
<?php
session_start();
include_once('../../connect_db.php');
$id = $_GET['id'];
$query = "SELECT * FROM logbook WHERE id = '$id'";
  //execute the query
$result = $db->query( $query );
if (!$result)
{
  die("could not query the database: <br />".$db->error);
}
$row = $result->fetch_object();

$coba = $_SESSION['id'];
$query2 = "SELECT * FROM user WHERE username = '$coba'";
    //execute the query
$result2 = $db->query( $query2 );
if (!$result2)
{
  die("could not query the database: <br />".$db->error);
}
$row2 = $result2->fetch_object();
?>

<?php

if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
{
  if (isset($_SESSION['unit']) && $_SESSION['unit'] == $row->kode_unit)
  {

  }
  else
  {
    echo 'tetottt';
    exit;
  }

} else if (isset($_SESSION['role']) && $_SESSION['role'] == -1) {
  header ('Location: ../../page_403.php');
  exit;
} else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
  header ('Location: ../../page_403.php');
  exit;
}
else
{
  header ('Location: ../../page_4033.php');
  exit;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../../assets/gi.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Isi Hasil Logbook</title>

  <!-- Bootstrap -->
  <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

  <link rel="stylesheet" type="text/css" href="../../css/print.css" media="print" />

  <!-- Custom Theme Style -->
  <link href="../../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md" onload="setInterval('displayServerTime()', 1000);">


  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><span>Garuda Indonesia</span></a>
          </div>

          <div class="clearfix"></div>

          

          <?php
          include('sidebar.php');
          ?>

          
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="../images/img.jpg" alt=""><?php echo''.$row2->username.''; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="../acc_logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li role="presentation">
                <a href="javascript:window.print()">
                  <i class="fa fa-print"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input Hasil Logbook </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="programs.php"><button class="btn btn-primary btn-xs">Kembali</button></a>
              </li>
            </ul>
            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <form action="post_hasil_logbook.php" method="POST"><br>
              <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                  <input readonly class="form-control" type="text" name="id" id="id" value="<?php echo $row->id ?>">
                </div> 
              </div> <br/>
              <?php
              // aktivitas0
              if (is_null($row->aktifitas0)) {
              } else {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktivitas</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas0;?>">

                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6">
                      <label for="target1">Target</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target0; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <label>Satuan Target</label>
                    <input readonly type="text" id="target" value="<?php echo $row->satuan0;?>" class="form-control">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6">
                      <label for="hasil1">Hasil</label>
                      <input type="text" id="target" name="hasil1" class="form-control" value="<?php echo $row->hasil0; ?>">
                    </div>
                  </div>
                </div><br>
                <?php 
              } 

              // aktivitas1
              if (is_null($row->aktifitas1) || $row->aktifitas1 == '') {
              } else {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktivitas</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas1;?>">

                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6">
                      <label for="target1">Target</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target1;?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <label>Satuan Target</label>
                    <input readonly type="text" id="target" value="<?php echo $row->satuan1;?>" class="form-control">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6">
                      <label for="hasil2">Hasil</label>
                      <input type="text" id="target" name="hasil2" class="form-control" value="<?php echo $row->hasil1; ?>">
                    </div>
                  </div>
                </div> <br>
                <?php  
              } 

              // aktivitas2
              if (is_null($row->aktifitas2) || $row->aktifitas2 == '') {
              } else {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktivitas</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas2;?>">

                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6">
                      <label for="target1">Target</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target2;?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <label>Satuan Target</label>
                    <input readonly type="text" id="target" value="<?php echo $row->satuan2;?>" class="form-control">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6">
                      <label for="hasil3">Hasil</label>
                      <input type="text" id="target" name="hasil3" class="form-control" value="<?php echo $row->hasil2; ?>">
                    </div>
                  </div>
                </div> <br>
                <?php  
              } 

              // aktivitas3
              if (is_null($row->aktifitas3) || $row->aktifitas3 == '') {
              } else {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktivitas</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas3;?>">

                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6">
                      <label for="target1">Target</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target3;?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <label>Satuan Target</label>
                    <input readonly type="text" id="target" value="<?php echo $row->satuan3;?>" class="form-control">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6">
                      <label for="hasil4">Hasil</label>
                      <input type="text" id="target" name="hasil4" class="form-control" value="<?php echo $row->hasil3; ?>">
                    </div>
                  </div>
                </div> <br>
                <?php 
              } 

              // aktivitas4
              if (is_null($row->aktifitas4) || $row->aktifitas4 == '') {
              } else {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktivitas</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas4;?>">

                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6">
                      <label for="target1">Target</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target4;?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <label>Satuan Target</label>
                    <input readonly type="text" id="target" value="<?php echo $row->satuan4;?>" class="form-control">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6">
                      <label for="hasil5">Hasil</label>
                      <input type="text" id="target" name="hasil5" class="form-control" value="<?php echo $row->hasil4; ?>">
                    </div>
                  </div>
                </div> <br>
                <?php  
              } 
              ?>

              <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
                  <button type="submit" value="Submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Corporate Culture Information Systems - GA
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="../../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../../vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../../vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../../vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../../vendors/Flot/jquery.flot.js"></script>
  <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../../vendors/Flot/jquery.flot.time.js"></script>
  <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../../vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../js/moment/moment.min.js"></script>
  <script src="../js/datepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../../build/js/custom.min.js"></script>

  <!-- /JQVMap -->

  <!-- Skycons -->
  <script>
    $(document).ready(function() {
      var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
      "clear-day", "clear-night", "partly-cloudy-day",
      "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
      "fog"
      ],
      i;

      for (i = list.length; i--;)
        icons.set(list[i], list[i]);

      icons.play();
    });
  </script>
  <!-- /Skycons -->

  <!-- Doughnut Chart -->
  <script>

    $(document).ready(function (){
      $("#clickme").click(function (){
        $('html, body').animate({
          scrollTop: $("#deskripsi").offset().top
        }, 500);
      });
    });

    $(document).ready(function(){
      var options = {
        legend: false,
        responsive: false
      };

      new Chart(document.getElementById("canvas1"), {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
          "Economy Class",
          "Business Class",
          "First Class"
          ],
          datasets: [{
            data: [3412, 768, 475],
            backgroundColor: [
            "#9B59B6",
            "#26B99A",
            "#3498DB"
            ],
            hoverBackgroundColor: [
            "#B370CF",
            "#36CAAB",
            "#49A9EA"
            ]
          }]
        },
        options: options
      });
    });
  </script>
  <!-- /Doughnut Chart -->

  <!-- bootstrap-daterangepicker -->
  <script>
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      };

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <!-- /bootstrap-daterangepicker -->

  <!-- gauge.js -->
  <script>
    var opts = {
      lines: 12,
      angle: 0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#1D212A'
      },
      limitMax: 'false',
      colorStart: '#1ABC9C',
      colorStop: '#1ABC9C',
      strokeColor: '#F0F3F3',
      generateGradient: true
    };
    var target = document.getElementById('foo'),
    gauge = new Gauge(target).setOptions(opts);

    gauge.maxValue = 6000;
    gauge.animationSpeed = 32;
    gauge.set(3200);
    gauge.setTextField(document.getElementById("gauge-text"));
  </script>
  <!-- /gauge.js -->

  <script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
      }
    </script>

  </body>
  </html>
