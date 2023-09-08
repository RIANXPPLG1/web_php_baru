<?php 
$connect = mysqli_connect('localhost','root','','gambar');
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$fs = $_GET['id_gambar']; //9
$query = mysqli_query($connect,"SELECT * FROM tb_gambar WHERE id_img = ".$fs);


if ($query) {
    $data = mysqli_fetch_assoc($query);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: arial;
    }


    .card{
        width: 20%;
        height: 400px;
        background-color: white;
        border: 1px solid black;
        margin: auto;
        margin-top: 250px;
        padding: 20px;
        border-radius: 15px;
     
    }

    .wraper{
        width: 100%;
        height: 45%;
    }

    img{
        width: 150px;
    }

    p{
        text-align: justify;
    }

    div.about{
        display: flex;
    }

    h5{
        margin-left: 15px;
    }

</style>
<body>
<div class="card">
    <img src="<?php echo $data['nama_img']; ?>" alt="">
    <div class="wraper">
    <div class="about">
        <h3><?= $data['tipe_img']?></h3>
        <h5><?= $data['style_img']?></h5>


    </div>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis est molestiae dolor, quo dolorum debitis ex sit reprehenderit molestias provident nihil delectus. Obcaecati autem ab doloremque, reprehenderit laborum assumenda molestiae.</p>
    </div>
</div>


</body>
</html>