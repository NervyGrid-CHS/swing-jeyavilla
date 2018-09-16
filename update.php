<?php
$dsn = 'mysql:host=localhost;dbname=swing';
$username = 'root';
$password = '';
try{
    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {  
    echo 'Not Connected '.$ex->getMessage(); 
}
if(isset($_POST['checkbox1'])){
    $checkbox1 = $_POST['checkbox1'];
}else{
    $checkbox1 = "";
    $checkbox2 = "";
    $checkbox3 = "";
    $checkbox4 = "";
    $checkbox5 = "";
    $checkbox6 = "";
    $checkbox7 = "";
    $checkbox8 = "";
    $checkbox9 = "";
    $checkbox10 = "";
    $checkbox11 = "";
    $checkbox12 = "";
    $checkbox13 = "";
    $checkbox14 = "";
    $checkbox15 = "";
}
$cname="";
$street="";
$city="";
$state="";
$postal="";
$mail="";
$website="";
$latitude="";
$longitude="";
$bake="";
$chees="";
$arts="";
$flower="";
$sea="";
$fruit="";
$herb="";
$vegetable="";
$honey="";
$jams="";
$maple="";
$meats="";
$nuts="";
$plants="";
$soap="";


function getPosts()
{

    $posts = array();
    $posts[0] = $_POST['company'];
    $posts[1] = $_POST['street'];
    $posts[2] = $_POST['city'];
    $posts[3] = $_POST['state'];
    $posts[4] = $_POST['postal'];
    $posts[5] = $_POST['mail'];
    $posts[6]=$_POST['website'];
    $posts[7]=$_POST['latitude'];
    $posts[8]=$_POST['longitude'];
    /*$posts[9]=$_POST['checkbox1'];
    $posts[10]=$_POST['checkbox2'];
    $posts[11]=$_POST['checkbox3'];
    $posts[12]=$_POST['checkbox4'];
    $posts[13]=$_POST['checkbox5'];
    $posts[14]=$_POST['checkbox6'];
    $posts[15]=$_POST['checkbox7'];
    $posts[16]=$_POST['checkbox8'];
    $posts[17]=$_POST['checkbox9'];
    $posts[18]=$_POST['checkbox10'];
    $posts[19]=$_POST['checkbox11'];
    $posts[20]=$_POST['checkbox12'];
    $posts[21]=$_POST['checkbox13'];
    $posts[22]=$_POST['checkbox14'];
    $posts[23]=$_POST['checkbox15'];
    echo $gender;*/
    return $posts;
}
if(isset($_POST['search']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
    }  
    else
    {
        
        $searchStmt = $con->prepare('SELECT * FROM newd WHERE cname = :company');
        $searchStmt->execute(array(
                    ':company'=> $data[0]
        ));
        if($searchStmt)
        {
            $user = $searchStmt->fetch();
            if(empty($user))
            {
                echo 'No Data For This Id';
            }
      $cname=$user[0];
      $street=$user[1];
      $city=$user[2];
      $state=$user[3];
      $postal=$user[4];
      $mail=$user[5];
      $website=$user[6];
      $latitude=$user[7];
      $longitude=$user[8];
      $checkbox1=$user[9];
      $checkbox2=$user[10];
      $checkbox3=$user[11];
      $checkbox4=$user[12];
      $checkbox5=$user[13];
      $checkbox6=$user[14];
      $checkbox7=$user[15];
      $checkbox8=$user[16];
      $checkbox9=$user[17];
      $checkbox10=$user[18];
      $checkbox11=$user[19];
      $checkbox12=$user[20];
      $checkbox13=$user[21];
      $checkbox14=$user[22];
      $checkbox15=$user[23];
        } 
    }
}
?>
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
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-bars"></i></a>
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
        </div>
        	<form method="post" action="update.php">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Data Update</strong><small> Form</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" name="company" placeholder="Enter your company name" value="<?php echo $cname; ?>" class="form-control"></div>
                        <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" name="street" placeholder="Enter street name" value="<?php echo $street ?>" class="form-control"></div>
                        <div class="row form-group">
                          <div class="col-8">
                            <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" name="city" placeholder="Enter street name" value="<?php echo $city ?>" class="form-control"></div>
                          </div>
                          <div class="col-8">
                            <div class="form-group"><label for="state" class=" form-control-label">State</label><input type="text" id="state" name="state" placeholder="State" value="<?php echo $state; ?>" class="form-control"></div>
                          </div>
                          <div class="col-8">
                            <div class="form-group"><label for="postal" class=" form-control-label">Postal Code</label><input type="text" id="postal" name="postal" placeholder="Zip Code" value="<?php echo $postal; ?>" class="form-control"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body card-block">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"></div>
                            <div class="col-12 col-md-9">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email ID</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="mail" name="mail" placeholder="Enter Email" value="<?php echo $mail; ?>" class="form-control" pattern=".+@gmail.com">
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Website</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="website" name="website" placeholder="Enter Your Website" value="<?php echo $website; ?>"class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Latitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="latitude" name="latitude" placeholder="Latitude" value="<?php echo $latitude; ?>" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Longitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="longitude" name="longitude" placeholder="Longitude" value="<?php echo $longitude; ?>" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="Y" <?php echo ($checkbox1=='Y')?'checked':''?> class="form-check-input">Baked Goods
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox2" class="form-check-label ">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="Y" <?php echo ($checkbox2=='Y')?'checked':''?> class="form-check-input"> Cheese
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="Y" <?php echo ($checkbox3=='Y')?'checked':''?> class="form-check-input"> Arts & Crafts
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" value="Y" <?php echo ($checkbox4=='Y')?'checked':''?> class="form-check-input"> Flowers
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox5" name="checkbox5" value="Y" <?php echo ($checkbox5=='Y')?'checked':''?> class="form-check-input"> Sea Foods
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox6" name="checkbox6" value="Y" <?php echo ($checkbox6=='Y')?'checked':''?> class="form-check-input"> Fruits
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox7" name="checkbox7" value="Y" <?php echo ($checkbox7=='Y')?'checked':''?> class="form-check-input"> Herbs
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox8" name="checkbox8" value="Y" <?php echo ($checkbox8=='Y')?'checked':''?> class="form-check-input"> Vegetables
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox9" name="checkbox9" value="Y" <?php echo ($checkbox9=='Y')?'checked':''?> class="form-check-input"> Honey
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox10" name="checkbox10" value="Y" <?php echo ($checkbox10=='Y')?'checked':''?> class="form-check-input"> Jams
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox11" name="checkbox11" value="Y" <?php echo ($checkbox11=='Y')?'checked':''?> class="form-check-input"> Maple
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox12" name="checkbox12" value="Y" <?php echo ($checkbox12=='Y')?'checked':''?> class="form-check-input"> Meats
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox13" name="checkbox13" value="Y" <?php echo ($checkbox13=='Y')?'checked':''?> class="form-check-input"> Nuts
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox14" name="checkbox14" value="Y" <?php echo ($checkbox14=='Y')?'checked':''?> class="form-check-input"> Plants
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox15" name="checkbox15" value="Y" <?php echo ($checkbox15=='Y')?'checked':''?> class="form-check-input"> Soap
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                      <div class="card-footer">
                      	<button type="search" id="search" name="search" value="search" class="btn btn-danger btn-sm">
                          <i class="fa fa-search"></i> Search
                        </button>
                        <button type="search" id="update" name="update" value="update" class="btn btn-primary btn-sm" formaction="updat.php">
                          <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
</form>
    <!-- Right Panel -->
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>