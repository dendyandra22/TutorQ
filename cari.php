<?php
$link = mysqli_connect("localhost","root","","tutorq");
if (!$link) {
    die('ada error');
}
$jenjang = $_POST['jenjang'];
$matpel  = $_POST['matpel'];
$domisili  = $_POST['domisili'];

$query = " SELECT * FROM tutor WHERE jenjang = '$jenjang' AND matpel = '$matpel' AND domisili = '$domisili' ";
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)){    
    session_start();
    $n = mysqli_num_rows($result);
    $_SESSION['n'] = $n;     
    $i = 0; 
    while($data = mysqli_fetch_assoc($result)){
        $_SESSION['card'] = $data['card']; 
        $i++;

    }
      
    header("location:newtutor.php");
}
else{
    //$_SESSION['n'] = 1;
    $_SESSION['card'] = 'Maaf tutor tidak tersedia';
    header("location:newtutor.php");
}
mysqli_close($link);
?>

<?php                
                error_reporting(0);
                $n = $_SESSION['n'];
                $i = 0;
                while($i<$n){
                    $card = $_SESSION['card'];   
                    echo $card; 
                    $i++;
                }
                                                    
                ?>
            
