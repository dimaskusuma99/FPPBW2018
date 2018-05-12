
<!DOCTYPE html>
<html>
<?php  $this->load->view('marketing/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('marketing/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-bell"></i> <span>Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('request_limbah')?>"><i class="fa fa-circle-o"></i> Request Limbah</a></li>
            <li class="active"><a href="<?php echo base_url('request_batako')?>"><i class="fa fa-circle-o"></i> Request Batako</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Request</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Permintaan Batako</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                <thead>
                <tr role="row">
                  <th>Nama Customer</th>
                  <th>Alamat</th>
                  <th>Provinsi</th>
                  <th>Kabupaten</th>
                  <th>Kode pos</th>
                  <th>Status</th>
                  <th>No. Identitas</th>
                  <th>Email</th>
                  <th>No telepon</th>
                  <th>Fax</th>
                  <th>Date</th>
                  <th>Progres</th>
                  <th>Option</th>
                </thead>
                  <?php 
                    $no = 1;
                    foreach($batako as $u){ 
                        ?>
                        <tr>
                            <td><?php echo $u->nama_customer ?></td>
                            <td><?php echo $u->alamat ?></td>
                            <td><?php echo $u->provinsi ?></td>
                            <td><?php echo $u->kabupaten ?></td>
                            <td><?php echo $u->kode_pos ?></td>
                            <td><?php echo $u->status ?></td>
                            <td><?php echo $u->nomor_identitas ?></td>
                            <td><?php echo $u->email ?></td>
                            <td><?php echo $u->no_telp ?></td>
                            <td><?php echo $u->fax ?></td>
                            <td><?php echo $u->date ?></td>
                            <td><?php echo $u->progres ?></td>
                            <td>
                              <a href="<?php echo base_url('request_batako/edit/'.$u->id_batako) ?>" class="btn btn-block btn-info">Edit</a>
                              <a href=# class="btn btn-block btn-danger" onclick="deleted('<?php echo $u->id_batako; ?>')">Hapus</a>
                            </td>
                        </tr> 
                        <?php } ?> 
              </table>
            </div>
          </div>
        </div>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm("Are you sure delete this data?");
      if(proc){
        document.location='<?php echo base_url('request_batako/hapus/')?>'+param;
      }
  }
</script>

<?php $this->load->view('marketing/footer') ?>
</body>
</html>

