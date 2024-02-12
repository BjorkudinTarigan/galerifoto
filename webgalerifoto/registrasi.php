<?php
include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #fd7e00;
            color: white;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 a {
            color: white;
            text-decoration: none;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
        }

        li {
            margin-right: 20px;
        }

        .section {
            padding: 40px 0;
        }

        .box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #fd7e00;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #fd7e00;
        }

        footer {
            background-color: #fff;
            color: black;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="index.php">GALERI FOTO</a></h1>
            <ul>

                <li><a href="registrasi.php">Daftar</a></li>
                <li><a href="login.php">Masuk</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Daftar Akun</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama User" class="input-control" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" required>
                    <input type="text" name="pass" placeholder="Password" class="input-control" required>
                    <input type="text" name="tlp" placeholder="Nomor Telpon" class="input-control" required>
                    <input type="text" name="email" placeholder="E-mail" class="input-control" required>
                    <input type="text" name="almt" placeholder="Alamat" class="input-control" required>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $nama = ucwords($_POST['nama']);
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    $telpon = $_POST['tlp'];
                    $mail = $_POST['email'];
                    $alamat = ucwords($_POST['almt']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_admin VALUES (
					                        null,
											'" . $nama . "',
											'" . $username . "',
											'" . $password . "',
											'" . $telpon . "',
											'" . $mail . "',
											'" . $alamat . "')
											
											");
                    if ($insert) {
                        echo '<script>alert("Registrasi berhasil")</script>';
                        echo '<script>window.location="login.php"</script>';
                    } else {
                        echo 'gagal ' . mysqli_error($conn);
                    }
                }
                ?>
            </div>

        </div>
    </div>
    </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <center>
                <small>Copyright &copy; 2024 -Galeri Foto J3ms.</small>
            </center>
        </div>
    </footer>
</body>

</html>