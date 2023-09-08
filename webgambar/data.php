<?php 
$conn = mysqli_connect('localhost','root','','gambar');
$query = mysqli_query($conn,"SELECT * FROM tb_gambar");

$data =[];
while($rows = mysqli_fetch_assoc($query) ){
$data[] = $rows;
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
    padding: 0;
    margin: 0;
}

.container{
    width: 100%;
    height: 1200px;
    display: grid;
    grid-template-columns: 30% 30% 30%;
    grid-template-rows: 300px 300px 300px;
    justify-content: center;
    gap: 10px;
}

.item{
    background-color: blue;
    padding: 10px 10px 10px 80px;
  
   
}


img{
    width: 220px;
    margin: auto;
    /* margin-top: 50px; */
}


</style>
<body>
    <div class="container">
      <?php foreach($data as $key) : ?>
        <div class="item" id="img<?php echo $key['id_img'] ?>">
        <img onclick="kirim('<?=$key['id_img'] ?>')" src="<?= "$key[nama_img]" ?> " alt="">
    </div>
        <?php endforeach; ?>

        <script>

function kirim(id_img){
            window.location.href = "detail.php?id_gambar="+id_img;
        }
        </script>
    </div>
</body>
</html>