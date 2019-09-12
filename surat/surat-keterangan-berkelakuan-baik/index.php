<?php 
  include ('../part/header.php');
?>
<body class="bg-light">
<div>
  <navbar class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand ml-4 mt-3" href="../../" style="font-size:25pt">e-<b>SuratDesa</b></a>
    <button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
        <li class="nav-item">
          <a class="nav-link" href="../../">HOME</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp;BUAT SURAT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../tentang/">TENTANG <b>e-SuratDesa</b></a>
        </li>
        <li class="nav-item active ml-5">
          <a class="btn btn-light text-info" href="../login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>
        </li>
      </ul>
    </div>
  </navbar>
</div>

<div class="container" style="max-height:cover; padding-top:60px; position:relative; min-height: 100%;" align="center">
<div class="card col-md-4">
            <div class="card-content">
              <div class="card-body">
                <form action="https://surat-app.bismalabs.co.id/surat/surat-pengantar-skck/" method="post"> 
                  <img src="../../assets/img/logo-jombang1.png"><hr>                                                                                                                
                  <label style="font-weight: 700"><i class="fas fa-id-card"></i> NIK  <i>(Nomor Induk Kependudukan)</i></label>
                  <input type="text" class="form-control form-control-md" name="nik" value="" id="iconLeft2" placeholder="Masukkan Nomor NIK">
                  <div class="form-control-position">
                    <i class="ft-search primary font-medium-4"></i>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-info btn-md"><i class="fa fa-exchange-alt"></i> CEK NIK</button>
                </form>
              </div>
            </div>
          </div>
</div>

<!-- <div class="container" align="center">
  <div style="max-height:cover; padding-top:30px; padding-bottom:60px; position:relative; min-height: 100%;">
    <div class="row">
      <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <form action="https://surat-app.bismalabs.co.id/surat/surat-pengantar-skck/" method="post" accept-charset="utf-8">
                  <input type="hidden" name="csrf_token" value="0b3b2c5a6d669b990783e51b6d91ac96" />                                                                                                                  
                  <label style="font-weight: 700">NIK  <i>(Nomor Induk Kependudukan)</i></label>
                  <input type="text" class="form-control form-control-md" name="nik" value="" id="iconLeft2" placeholder="Masukkan Nomor NIK">
                  <div class="form-control-position">
                    <i class="ft-search primary font-medium-4"></i>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary btn-md"><i class="fa fa-exchange"></i> CEK NIK</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div> -->
<?php 
  include ('../part/footer.php');
?>