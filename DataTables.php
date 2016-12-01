<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Data Buku dengan Data tables</title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/dataTables.bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="page-header">
                    <h2>Data Buku dengan Data tables</h2>
                </div>
                <table class="table table-bordered table-responsive" id="myTable">
                    <thead>
                        <tr><td>no</td>
                            <td>kode buku</td>
                            <td>judul</td>
                            <td>penerbit</td>
                            <td>jumlah</td>
                        </tr>
                    <tbody>
                        <?php
                        include './DBConnection.php';
                        $load = mysqli_query($koneksi, "select * from buku") or die(mysqli_error());
                        $no = 1;
                        while($data = mysqli_fetch_array($load)){
                        ?>
                        
                        <tr>
                            <td><?php echo $no?></td>
                            <td><?php echo $data['kd_buku']?></td>
                            <td><?php echo $data['judul']?></td>
                            <td><?php echo $data['penerbit']?></td>
                            <td><?php echo $data['jumlah']?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
        <script src="bootstrap/jquery-1.11.0.js"></script>
        <script src="bootstrap/jquery.dataTables.js"></script>
        <script  src="bootstrap/dataTables.bootstrap.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function (){
                $("#myTable").dataTable();
            });
        </script>
    </body>
</html>
