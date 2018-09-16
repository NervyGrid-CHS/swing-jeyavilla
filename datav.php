<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Madurai Food Guide</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dash.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Entry</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                       <ul>
                            <li><a href="newd.html">New Data Entry</a></li>
                            <li><a href="update.php">Update Data</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Data View</h3>
                    <li class="menu-item-has-children dropdown">
                       <ul>
                            <li><a href="datav.php">View the Data</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Backup & Restore</h3>
                    <li class="menu-item-has-children dropdown">
                      <ul>
                            <li><a href="backup.php">Backup of the Data</a></li>
                            <li><a href="restore.php">Restore the Data</a></li>
                        </ul>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="dropdown for-message">
                          <div class="dropdown-menu" aria-labelledby="message">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/favicon.png" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                            <?php
                            // Database Connection
                            require("php/db_connection.php");

                            // List Users
                            $query = "SELECT * FROM newd";
                            if (!$result = mysqli_query($con, $query)) {
                                exit(mysqli_error($con));
                            }
                            if (mysqli_num_rows($result) > 0) {
                            $number = 1;
                            $users = '<table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Email/Website</th>
                        <th>Map</th>
                        <th>Baked Goods</th>
                        <th>Cheese</th>
                        <th>Arts & <br>Crafts</th>
                        <th>Flowers</th>
                        <th>Sea Foods</th>
                        <th>Fruits</th>
                        <th>Herbs</th>
                        <th>Vegetables</th>
                        <th>Honey</th>
                        <th>Jams</th>
                        <th>Maple</th>
                        <th>Meat</th>
                        <th>Nuts</th>
                        <th>Plants</th>
                        <th>Soap</th>
                      </tr>
                    </thead>';
                    while ($row = mysqli_fetch_assoc($result)) {
                    $users .= '<tbody>
                      <tr>
                        <td>'.$row['cname'].'</td>
                        <td style="font-size: 15px">'.$row['street']."<br>".$row['city']."<br>".$row['state'].'</td>
                        <td >'.$row['email']."<br>".$row['website'].'</td>
                        <td>Long:'.$row['lon']."<br>Lati:".$row['lat'].'</td>
                        <td>'.$row['bakedgoods'].'</td>
                        <td>'.$row['cheese'].'</td>
                        <td>'.$row['arts_crafts'].'</td>
                        <td>'.$row['flowers'].'</td>
                        <td>'.$row['sea_foods'].'</td>
                        <td>'.$row['fruits'].'</td>
                        <td>'.$row['herbs'].'</td>
                        <td>'.$row['vegetables'].'</td>
                        <td>'.$row['honey'].'</td>
                        <td>'.$row['jams'].'</td>
                        <td>'.$row['maple'].'</td>
                        <td>'.$row['meats'].'</td>
                        <td>'.$row['nuts'].'</td>
                        <td>'.$row['plants'].'</td>
                        <td>'.$row['soap'].'</td>
                      </tr>
                    </tbody>';
                        }
                        $users .= '</table>';
                        }
                    ?>
                    <?php echo $users ?>
                  </table>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
</body>
</html>
