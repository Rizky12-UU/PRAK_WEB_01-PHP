<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Handling</title>
</head>
<body>
    <form action="FormPost.php" method="POST">
    <h1 class="text-white bg-primary p-4 text-center">Form Belanja</h1>
    </div>

    <div class="container-fluid"> 
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Barang</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Mesin Cuci</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Kulkas</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Barang</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Tanggal Belanja </label>
                    <input type="date" name="date" value="" class="form-control">
                </div>

 
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="address" id="" cols="30" rows="5"></textarea>
                </div>

                <input type="submit" value="Simpan" name="" class="btn btn-dark">

            </form>
            <?php
                $nama = $_POST['customer'];
                $barang = $_POST['produk'];
                $total_barang = $_POST['total_item'];
                $alamat = $_POST['address'];
                $tanggal= $_POST['date'];
                if ($barang == 'tv') {
                    $total += 5300000 * $total_barang ;
                    echo $total ;
                } 
                elseif($barang == 'mesincuci') {
                    $total += 6200000 * $total_barang;
                } 
                else {
                    $total =+ 4500000 * $total_barang;
                }
            ?>
        </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header text-white bg-dark text-center">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?=$nama?></li>
                    <li class="list-group-item">Item : <?=$total_barang?> <?=$barang?></li>
                    <li class="list-group-item">Tanggal Pembelian : <?=$tanggal?> </li>
                    <li class="list-group-item">Alamat : <?=$alamat?></li>
                    <li class="list-group-item">Total Harga : <?=$total?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header text-white bg-dark text-center">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.5.300.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp.6.200.000</li>
                    <li class="list-group-item">Kulkas : Rp. 4.500.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>