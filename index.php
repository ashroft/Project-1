<?php
include_once 'header.php';
include_once 'sidebar.php';


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum1.php" class="nav-link">
                <i class="fa fa-folder-open"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              </ul>
              <ul class="nav nav-treeview">
                <a href="praktikum2.php" class="nav-link">
                <i class="fa fa-folder-open"></i>
                  <p>Praktikum 2</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="praktikum3.php" class="nav-link">
                <i class="fa fa-folder-open"></i>
                  <p>Praktikum 3</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="praktikum4.php" class="nav-link">
                <i class="fa fa-folder-open"></i>
                  <p>Praktikum 4</p>
                </a>
              </ul>
              <ul class="nav nav-treeview">
                <a href="praktikum5.php" class="nav-link">
                <i class="fa fa-folder-open"></i>
                  <p>Praktikum 5</p>
                </a>
              </ul>
              </div>
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tugas</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?php
                include_once 'form_pasien.php';
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>