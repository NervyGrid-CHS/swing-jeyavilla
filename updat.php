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
    $posts[9]=$_POST['checkbox1'];
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
    //echo $gender;
    return $posts;
}
if(isset($_POST['update']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
        
    }  
    else {
        
        $updateStmt = $con->prepare('UPDATE newd SET cname = :cname, street = :street, city = :city,state = :state,zip=:postal,email = :mail,website = :website,lat = :latitude,lon = :longitude,bakedgoods = :checkbox1,cheese = :checkbox2,arts_crafts = :checkbox3,flowers = :checkbox4,sea_foods = :checkbox5,fruits = :checkbox6,herbs = :checkbox7,Vegetables = :checkbox8,honey = :checkbox9,jams = :checkbox10,maple = :checkbox11,meats = :checkbox12,nuts = :checkbox13,plants = :checkbox14,soap = :checkbox15 WHERE cname = :cname');
        	$updateStmt->execute(array(
                    ':cname'=> $data[0],
                    ':street'=> $data[1],
                    ':city'=> $data[2],
                    ':state'=> $data[3],
                    ':postal'=> $data[4],
                    ':mail'=> $data[5],
                    ':website'=> $data[6],
                    ':latitude'=> $data[7],
                    ':longitude'=> $data[8],
                    ':checkbox1'=> $data[9],
                    ':checkbox2'=> $data[10],
                    ':checkbox3'=> $data[11],
                    ':checkbox4'=> $data[12],
                    ':checkbox5'=> $data[13],
                    ':checkbox6'=> $data[14],
                    ':checkbox7'=> $data[15],
                    ':checkbox8'=> $data[16],
                    ':checkbox9'=> $data[17],
                    ':checkbox10'=> $data[18],
                    ':checkbox11'=> $data[19],
                    ':checkbox12'=> $data[20],
                    ':checkbox13'=> $data[21],
                    ':checkbox14'=> $data[22],
                    ':checkbox15'=> $data[23]
                    //echo $gender;
        ));
        if($updateStmt)
        {
                header('Location: result.html');
        }
        
    }
}
?>