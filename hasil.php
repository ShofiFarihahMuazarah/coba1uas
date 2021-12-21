<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Target</title>
</head>
<body>
        <?php
            $nama="";
            $tempatlahir="";
            $tanggallahir="";
            $jeniskelamin="";
            $email="";
            $fakultas="";
            $jurusan="";
            $kritik="";
            $saran="";
                    
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $nama = $_POST['nama'];
                $tempatlahir= $_POST['tempat_lahir'];
                $tanggallahir= $_POST['tanggal_lahir'];
                $jeniskelamin= $_POST['jk'];
                $email= $_POST['email'];
                $fakultas= $_POST['fakultas'];
                $jurusan= $_POST['jurusan'];
                $kritik= $_POST['kritik'];
                $saran= $_POST['saran'];
            }
        ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Fakultas</th>
                            <th>Jurusan</th>
                            <th>Kritik</th>
                            <th>Saran</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <?php echo"
                            <td>$nama</td>
                            <td>$tempatlahir</td>
                            <td>$tanggallahir</td>
                            <td>$jeniskelamin</td>
                            <td>$email</td>
                            <td>$fakultas</td>
                            <td>$jurusan</td>
                            <td>$kritik</td>
                            <td>$saran</td>"
                            ?>
                        </tr>
                        <!--<td></td>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>