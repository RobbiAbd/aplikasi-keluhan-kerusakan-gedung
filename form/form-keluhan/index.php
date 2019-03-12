<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Form Keluhan Kerusakan</title>

		<!-- Bootstrap css online -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	
		<!-- form keluhan css -->
	<link rel="stylesheet" href="../../assets/css/form-keluhan.css">

</head>

<style>

  .display-form
  { 
  /*display none untuk menghilangkan
    fungsi pilih file di device selain max 576px*/
  display: none;
  }
  @media only screen and (max-width: 576px)  
  {
  .display-form
  {
    /*memunculkan fungsi pilih file*/
  display: contents;
  }
  }
</style>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Laporkan keluhan anda disini </div>
      <div class="card-body">

              <form method="post" action="../../handle/handle-form-keluhan/" enctype="multipart/form-data">
      <div class="form-group">
      <div class="form-label-group">
              <!-- form input nama user -->
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required" size="15" maxlength="15">
                <label for="nama">Nama <span class="text-muted small">(required)</span></label>
      </div>
      </div>


    


<!--     <div class="form-group ">
    <div class="display-form"> -->
    <!-- memilih foto dari galeri HP -->
<!--     <label for="exampleFormControlFile1">Ambil foto dari galeri  <span class="text-muted small">(handphone)</span></label>
    <input type="file" name="userfile" class="form-control-file" id="exampleFormControlFile1">
    </div>
    </div> -->

      <!-- input email -->
      <div class="form-group">
      <div class="form-label-group">
              <!-- form input email user -->
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required">
                <label for="email">Email <span class="text-muted small">(required)</span></label>
      </div>
      </div>

                    <!-- input foto kerusakan -->
     <div class="form-group">
              <label class="small" for="customFile">Ambil Foto</label>
     <div class="custom-file">
              <input class="custom-file-input" style="opacity: 1; margin-top: 4px; margin-left: 3px; font-family: cursive;" id="customFile" name="userfile" type="file" accept="image/*" capture />
              <label class="custom-file-label" for="customFile"></label>
    </div>
    </div>
           
      <div class="form-group">
              <!-- pilihan jenis / kategori keluhan user -->
                <label for="exampleFormControlSelect1" class="small">Kategori Keluhan Fasilitas</label>
              <select name="kategori_keluhan" class="form-control" id="exampleFormControlSelect1">
                    <option selected="gedung">gedung</option>
                    <option selected="umum">umum</option>
                    <option selected="sarana">sarana</option>
                    <option selected="prasarana">prasarana</option>
                    <option selected="lainnya">lainnya</option>
                    <option selected="">---</option>
              </select>
     </div>

      <div class="form-group">
            <!-- inputan keterangan tambahan user -->
            <label for="exampleFormControlTextarea1" class="small">Tambahkan keterangan <span class="text-muted small">(required)</span></label>
            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" required="required"></textarea>
      </div>
            
      
            <!-- button action -->
            <input type="submit" name="submit" class="btn btn-primary  btn-block" value="Laporkan">
          </form>
          
          <!-- link kembali ke landing page -->
      <div class="text-center">
            <a class="d-block small mt-3" href="../../">kembali ke landing page</a>
      </div>

      </div>
      </div>

    </div>


















	<!-- Bootstrap JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>