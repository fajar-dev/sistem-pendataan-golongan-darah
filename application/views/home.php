<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url()?>/assets/home/img/icon.png" type="image/gif" sizes="16x16">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/home/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Sistem Pendataan Golongan Darah</title>
  </head>
  <body>
    <header>
      <div class="header-topbar"></div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-body rounded">
        <div class="container py-2">
          <a class="navbar-brand" href="<?php echo base_url()?>">
            <img src="<?php echo base_url()?>assets/home/img/pmi.png" alt="logo" width="150">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a href="<?php echo base_url()?>" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-danger tombol w-100 mt-4 mt-lg-3 mb-2"><i class="fa fa-user-plus" aria-hidden="true"></i> Jadi Pendonor</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Pendonor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <form method="post" action="<?php echo base_url();?>home/tambah_data">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                      </div>
                      <div class="mb-3">
                        <label for="hp" class="form-label">No.HP</label>
                        <input type="number" class="form-control" name="hp" id="hp" placeholder="Nomor HP aktif" required>
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="form-label">Golongan Darah</label>
                        <select class="form-select" name="goldar" aria-label="Default select example" required>
                          <option disabled>--Jenis Golongan Darah--</option>
                          <option value="A">A</option>
                          <option value="A-">A-</option>
                          <option value="A+">A+</option>
                          <option value="AB">AB</option>
                          <option value="AB-">AB-</option>
                          <option value="AB+">AB+</option>
                          <option value="B">B</option>
                          <option value="B-">B-</option>
                          <option value="B+">B+</option>
                          <option value="O">O</option>
                          <option value="O-">O-</option>
                          <option value="O+">O+</option>
                        </select>
                      </div>
                      <div class=" mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                          Saya bersedia menjadi pendonor sukarela ataupun pengganti
                        </label>
                      </div>
                      <div class="text-center mt-4 mb-3">
                        <button type="button" class="btn btn-secondary tombol" data-bs-dismiss="modal" aria-label="Close">Close</button>  
                        <button type="submit" class="btn btn-danger tombol">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    <main class="mt-4 mb-5 pb-5">
      <section class="mb-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <form class="row g-3 justify-content-center my-5" method="POST" action="<?php echo base_url()?>home/tampilkan" >
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden">Golongan Darah</label>
                  <select class="form-select form-select-lg" aria-label="Default select example" name="goldar">
                                            <option selected>Jenis Golongan Darah</option>
                                            <option value="A">A</option>
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="AB">AB</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B">B</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="O">O</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                  </select>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-danger mb-3 btn-lg">Tampilkan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="data">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header bg-custom py-3">
                  Data Golongan Darah 
                </div>
                <div class="card-body table-responsive my-3 mx-lg-4">
                  <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="text-danger">
                            <th>#</th>
                            <th>Golongan Darah</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                              $no=1;
                              foreach($hasil as $data){
                            ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo htmlentities($data->goldar, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                        </tr>
                            <?php
                              }
                            ?>
                    </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-drag mt-5 py-4 text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="text-white">Copyright &copy; 2021, KSR-PMI Unit 04 UNIMAL  </span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
      //navbar-------------------
        $(document).ready(function() {
          $('#example').DataTable({
            "displayLength": 25,
          });
        } );
    </script>
    <?php if($this->session->flashdata('msg')=='tambah'):?>
        <script type="text/javascript">
                    Swal.fire(
                      'Terima Kasih',
                      'Data anda sudah kami input <br> Terima kasih telah berpartisipasi',
                      'success'
                    )
        </script>
  <?php else:?>
  <?php endif;?>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>
