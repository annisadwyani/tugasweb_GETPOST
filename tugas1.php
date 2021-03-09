<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>input Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Formulir Penilaian Mahasiswa </h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="" >Mata Kuliah</label>
                <select name="mata kuliah" class="form-select form-control" class="form-control">
                    <option selected>Pilih Mata Kuliah :</option>
                    <option value="Web Programming" name="mata kuliah" >Web Programming</option>
                    <option value="Database" name="mata kuliah" >Database</option>
                    <option value="Computer Networks" name="mata kuliah" >Computer Neworks</option>
                    <option value="PKN" name="mata kuliah" >PKN</option>
                    <option value="UI/UX" name="mata kuliah" >UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> Nilai UTS </label>
                    <input type="text" name="uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai Tugas</label>
                    <input type="text" name="assignment" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>

            <?php 
                $nama = $_GET['nama'];
                $nim= $_GET['nim'];
                $mata_kuliah = $_GET['mata kuliah'];
                $uts = $_GET['uts'];
                $uas = $_GET['uas'];
                $tugas = $_GET['tugas'];

                $proses = $_GET['proses'];

                $total = $uts + $uas + $assignment;
                $hasil = $total / 3;

                if($hasil >= 85){
                    $grade = "A";
                }
                elseif($hasil >= 80 && $hasil <= 84){
                    $grade = "B";
                }
                elseif($hasil >= 60 && $hasil < 80){
                    $grade = "C";
                }
                elseif($hasil >= 40 && $hasil < 60){
                    $grade = "D";
                }
                else{
                    $grade = "E";
                }

            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Hasil
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $nama ?></li>
                    <li class="list-group-item">Nim : <?= $nim ?></li>
                    <li class="list-group-item">Mata Kuliah: <?= $mata_kuliah ?></li>
                    <li class="list-group-item"> Nilai UTS : <?= $uts ?> </li>
                    <li class="list-group-item">Nilai UAS: <?= $uas ?> </li>
                    <li class="list-group-item">Nilai Tugas: <?= $tugas ?></li>
                    <li class="list-group-item">Total Nilai: <?= $hasil ?>  </li>
                    <li class="list-group-item">Nilai dalam Huruf: <?= $grade ?></li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Nilai
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 80 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Kurang Dari 40 </li>
                    
                    
                </ul>
                </div>
            </div>
        
    </div>
</body>
</html>