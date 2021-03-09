<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
               
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="tugas2.php" class="form-horizontal ">
                  <h1 class="text-primary">ELEKTRO SHOP</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama_pembeli" class="col-sm-4 col-form-label"><b>Nama Pembeli</b></label>
                    <div class="col-sm-8">
                   
                      <input type="text" class="form-control" name="nama pembeli">
                     
                    </div>
                  </div>
                <!------------------------>

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                      <div class="col-sm-8">

                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="ASUS ROG MONSTER G703GXR" name="produk" value="ASUS ROG MONSTER G703GXR" required>
                          <label class="form-check-label" for="ASUS ROG MONSTER G703GXR">
                          ASUS ROG MONSTER G703GXR
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="MSI WP565" name="produk" value=" MSI WP565" required>
                          <label class="form-check-label" for=" MSI WP565">
                          MSI WP565
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="  ACER PREDATOR HELIOS PH717" name="produk" value="  ACER PREDATOR HELIOS PH717" required>
                          <label class="form-check-label" for="  ACER PREDATOR HELIOS PH717">
                          ACER PREDATOR HELIOS PH717
                          </label>
                        </div>

                      </div>  <!---col-->
                    </div> <!---row-->
                  </fieldset> 
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input type="number" for="produk__" class="form-control" name="jumlah" value="" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Pesan</b></label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <label for="">Jenis Kurir</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Pilih Jenis Kurir :</option>
                    <option value="">j&t</option>
                    <option value="">jne</option>
                    <option value="">Pos</option>
                    <option value="">Grab</option>
                    <option value="">Gojek</option>
                </select>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="biaya_kurir">Biaya Kurir</label>
                    <input type="text" name="biaya kurir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="biaya_asuransi">Biaya Asuransi</label>
                    <input type="text" name="biaya asuransi" value="" class="form-control">
                </div>
                <br>
                  <button href="" type="submit" class="btn btn-primary pl-5 pr-5" name="proses">Kirim</button>

                </form>

              </div> <!-----col-6-->
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">ASUS ROG MONSTER G703GXR : Rp. 84.999.000,-</li>
                    <li class="p-2 bg-light">MSI WP565 : Rp. 73.999.000,-</li>
                    <li class="p-2">ACER PREDATOR HELIOS PH717 : Rp. 67.999.000,-</li>
                    <li class="bg-primary p-2 text-white">Noted : Harga sewaktu-waktu bisa saja berubah </li>
                  </ul>
              </div>

              
            
            </div> <!---row-->
        </div> <!---containe-fluid-->

        <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
          <h4 class="animate_animated animatebounce animateinfinite	infinite animate_delay-4s	4s">Total Belanjaan Anda!</h4>
          <br>
        </div>
        
        <?php
        
        $nama_pembeli = $_POST['nama pembeli :'];
        $produk = $_POST['produk :'];
        $jumlah = $_POST['jumlah :'];
        $tanggal = $_POST['tanggal :'];
        $jenis_kurir = $_POST['jenis kurir :'];
        $alamat = $_POST['alamat :'];
        $biaya_kurir = $_POST['biaya kurir :'];
        $biaya_asuransi = $_POST['biaya asuransi :'];

        echo '<br/> nama pembeli :'. $nama_pembeli;
        echo '<br/> produk :'. $produk;
        echo '<br/> jumlah :'. $jumlah;
        echo '<br/> tanggal :'. $tanggal;
        echo '<br/> jenis kurir :'. $jenis_kurir;
        echo '<br/> alamat :'. $alamat;
        echo '<br/> biaya kurir :'. $biaya_kurir;
        echo '<br/> biaya asuransi :'. $biaya_asuransi;

        if($produk == 'ASUS ROG MONSTER G703GXR ') 
        {
          echo '<br> total: '. 84999000 * $jumlah;
      
       }
       else if($produk == 'MSI WP565 ') 
       {
          echo '<br> total: '. 73999000 * $jumlah;
      
       }
       else  
       {
          echo '<br> total: '. 67999000 * $jumlah;
      
       }
       
       ?>     
</body>
</html>