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
} else if ($_SESSION['role'] == -1) {
  echo 'You are not logged in as User <br>';
  echo'<a href="../../process/acc_logout.php">LOGOUT</a><br>';
  echo'<a href="../index.php">BACK</a>';
  exit;
}
else
{
  echo 'You are not logged In <br>';
  echo'<a href="../../index.php">LOGIN</a>';
  exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Detail Logbook</title>

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



          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php">Halaman Utama</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> CC Program <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="programs.php">Corporate Culture Program</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-cog"></i> Pengaturan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="edit_username2.php">Ubah Username</a></li>
                    <li><a href="edit_password2.php">Ubah Password</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

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
            <h2>Detail Logbook </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a><button class="btn btn-primary btn-xs" id="clickme">Lihat Evaluasi</button></a>
              </li>
              <li><a><button onclick="goBack()" class="btn btn-primary btn-xs">Kembali</button></a>
              </li>

            </ul>
            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <table class="table table-hover">
              <tr>
                <th colspan="2" class="center"><h4>Log Book</h4></th>
              </tr>
              <tr>
                <th>Kode Unik Log Book</th>
                <td><?php echo''.$row->id.'';?></td>
              </tr>
              <tr>
                <th>Kode Unit</th>
                <td><?php echo''.$row->kode_unit.'';?></td>
              </tr>
              <tr>
                <th>Nama Program</th>
                <td><?php echo''.$row->nama_program.'';?></td>
              </tr>
              <tr>
                <th>Deskripsi Program</th>
                <td><?php echo''.$row->deskripsi_program.'';?></td>
              </tr>
              <tr>
                <th>Start</th>
                <td><?php echo''.$row->start.'';?></td>
              </tr>   
              <tr>
                <th>End</th>
                <td><?php echo''.$row->end.'';?></td>
              </tr>
            </table>

            <br>

            <table class="table table-hover">
              <tr>
                <th colspan="2" class="center"><h4>Tujuan & Target Program</h4></th>
              </tr>
              <tr>
                <th>Tujuan Merubah Perilaku</th>
                <td><?php echo''.$row->tujuan_merubah_perilaku.'';?></td>
              </tr>
              <tr>
                <th>Target Merubah Perilaku</th>
                <td><?php echo''.$row->target_merubah_perilaku.'';?></td>
              </tr>
              <tr>
                <th>Tujuan Nilai Tambah</th>
                <td><?php echo''.$row->tujuan_nilai_tambah.'';?></td>
              </tr>
              <tr>
                <th>Target Nilai Tambah</th>
                <td><?php echo''.$row->target_nilai_tambah.'';?></td>
              </tr>   
              <tr>
                <th>Tujuan Capai Kinerja</th>
                <td><?php echo''.$row->tujuan_capai_kinerja_0.','.$row->tujuan_capai_kinerja_1.','.$row->tujuan_capai_kinerja_2.','.$row->tujuan_capai_kinerja_3.'';?></td>
              </tr>
              <tr>
                <th>Target Capai Kinerja</th>
                <td><?php echo''.$row->target_capai_kinerja.'';?></td>
              </tr>
            </table>

            <br>

            <table class="table table-hover">
              <tr>
                <th colspan="2" class="center"><h4>Metode Monitoring & Reinforcement</h4></th>
              </tr>
              <tr>
                <th>Metode Monitoring</th>
                <td><?php echo''.$row->metode_monitoring.'';?></td>
              </tr>
              <tr>
                <th>Metode Enforcement Positif</th>
                <td><?php echo''.$row->metode_enforcement_positif.'';?></td>
              </tr>
              <tr>
                <th>Metode Enforcement Negatif</th>
                <td><?php echo''.$row->metode_enforcement_negatif.'';?></td>
              </tr>
            </table>

            <br>

            <table class="table table-hover">
              <tr>
                <th colspan="2" class="center"><h4>Change Agent Team</h4></th>
              </tr>
              <tr>
                <th rowspan="2">Ketua</th>
                <td><?php echo''.$row->nama_ketua.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_ketua.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2">Sekretaris & Bendahara</th>
                <td><?php echo''.$row->nama_sekre_bendahara.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_sekre_bendahara.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_0.'';?></th>
                <td><?php echo''.$row->nama_0.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_0.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_1.'';?></th>
                <td><?php echo''.$row->nama_1.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_1.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_2.'';?></th>
                <td><?php echo''.$row->nama_2.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_2.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_3.'';?></th>
                <td><?php echo''.$row->nama_3.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_3.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_4.'';?></th>
                <td><?php echo''.$row->nama_4.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_4.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_5.'';?></th>
                <td><?php echo''.$row->nama_5.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_5.'';?></td>
                </tr>
              </tr>
              <tr>
                <th rowspan="2"><?php echo''.$row->posisi_6.'';?></th>
                <td><?php echo''.$row->nama_6.'';?></td>
                <tr>
                  <td><?php echo''.$row->email_6.'';?></td>
                </tr>
              </tr>
            </tr>
            <tr>
              <th rowspan="2"><?php echo''.$row->posisi_7.'';?></th>
              <td><?php echo''.$row->nama_7.'';?></td>
              <tr>
                <td><?php echo''.$row->email_7.'';?></td>
              </tr>
            </tr>
          </table>

          <br>
          <label for="deskripsi">Evaluasi Logbook</label>
          <div class="input-field col s12">
            <textarea id="deskripsi" class="form-control" readonly placeholder="<?php if (isset($row->komentar)) {echo $row->komentar;} else {echo '';}?>" name="komentar" ></textarea>
          </div>

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
  function goBack() {
    window.history.back();
  }

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
