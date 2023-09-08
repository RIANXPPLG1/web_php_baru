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
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/neomatrixcode" type="text/css"/>
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'NeomatrixCodeRegular';
        }

        body{
            background-color: black;
        }


        .card{
            width: 60%;
            height: 300px;
            margin: auto;
            margin-top: 200px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 7px 7px 30px #01b8ec;
            padding: 10px;
            display: flex;
        }

        .gambar{
            background-color: red;
            border-radius: 15px;
            width: 40%;
            height: 90%;
            background-size: cover;
            background-position: center;
            background-image:url("<?php echo $data['nama_img']; ?>");

        }

        .keterangan{
            margin-left: 10px;
            width: 55%;
            height: 90%;
            border-radius: 15px;
            padding: 0px 20px;
            border: 1px solid black;
            overflow: scroll;
            
        }
        .keterangan::-webkit-scrollbar{
            display: none;
        }


        @media(max-width:865px){
            .card{
                flex-direction: column;
                width: 60%;
                height: 400px;
                text-align: justify;
            }

            .gambar{
                margin: auto;
                width: 80%;
            }

            .keterangan{
                width: 80%;
                height: 30%;
            }
        }
    </style>
</head>
<body>
        <div class="card">
            <div class="gambar"></div>
            <div class="keterangan">
                <h1><?php echo $data["tipe_img"];?></h1>
                <h3><?= $data["style_img"];?></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus veniam a natus incidunt dignissimos laudantium autem, est tempore neque quis. Doloribus, iusto. Reprehenderit non molestias, in nobis optio voluptatem iste?</p>
            </div>
        </div>

</body>
</html>