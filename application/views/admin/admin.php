<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sistem Golongan Darah</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right ml-auto">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url()?>assets/admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo base_url('login/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Pendataan Goldar</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">SPGD</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url('admin')?>" class="nav-link"><i class="fas fa-database"></i><span>Data Pendonor</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url('login/logout')?>" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
              </li>
            </ul>

        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pendonor</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header text-danger">
                    <h4 class="text-danger">Data Gologan Darah</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tanggal Input</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Golongan Darah</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                              $no=1;
                              foreach($hasil as $data){
                            ?>
                          <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo htmlentities($data->tgl_input, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                            <td><?php echo htmlentities($data->goldar, ENT_QUOTES, 'UTF-8');?></td>
                            <td>
                              <a href="#" class="btn btn-warning" id="modal-1" data-toggle="modal" data-target="#exampleModal<?php echo $data->id?>">Edit</a>
                                <!-- Modal -->
                              <a href="<?php echo base_url()?>admin/hapus/<?php echo $data->id?>" class="btn btn-danger btn-del">Hapus</a>
                            </td>
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
          </div>
        </section>
      </div>
                                    <?php
                                      foreach($hasil as $data){
                                    ?>
                                  <div class="modal fade" id="exampleModal<?php echo $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Golongan Darah</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="<?php echo base_url()?>admin/edit/<?php echo $data->id?>" method="POST">
                                          <input type="hidden" value="<?php echo $data->id?>" name="id">
                                          <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>"  name="nama" required>
                                          </div>
                                          <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" value="<?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?>" name="alamat" required>
                                          </div>
                                          <div class="form-group">
                                            <label>No.HP</label>
                                            <input type="text" class="form-control" value="<?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?>" name="hp" required>
                                          </div>
                                          <div class="form-group">
                                            <label>Golongan Darah</label>
                                            <select class="form-control" name="goldar">
                                            <?php if($data->goldar=='A'):?>
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
                                            <?php elseif($data->goldar=='A-'):?>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
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
                                            <?php elseif($data->goldar=='A+'):?>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='AB'):?>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='AB-'):?>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='AB+'):?>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="B">B</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='B'):?>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='B-'):?>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="B+">B+</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='B+'):?>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O">O</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='O'):?>
                                                <option value="O">O</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='O-'):?>
                                                <option value="O-">O-</option>
                                                <option value="O">O</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                            <?php elseif($data->goldar=='O+'):?>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="O">O</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB">AB</option>
                                                <option option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="AB-">AB-</option>
                                            <?php else:?>
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
                                            <?php endif;?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-danger">Save changes</button>
                                        </div>
                                      </form>
                                      </div>
                                    </div>
                                  </div>
                                  <?php
                                      }
                                  ?>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div>IT Developer KSR-PMI Unit 04 UNIMAL
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url()?>assets/admin/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url()?>assets/admin/js/scripts.js"></script>
  <script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url()?>assets/admin/js/page/modules-datatables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <?php if($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Berhasil Dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    })
        </script>
  <?php elseif($this->session->flashdata('msg')=='success-edit'):?>
    <script type="text/javascript">
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Berhasil Diedit',
                        showConfirmButton: false,
                        timer: 1500
                    })
        </script>
  <?php else:?>
  <?php endif;?>      
  <script>
    $('.btn-del').on('click',function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'Delete?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'delete'
        }).then((result) => {
            if (result.value) {
            document.location.href = href;
            }
        })
        })
    </script>

</body>
</html>
