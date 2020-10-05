@extends('layouts.templete')
@section('title','contract')
@section('content')
<div class="c-body">
    <main class="c-main">
      <div class="container-fluid">
        <div class="fade-in">
          <div class="card">
            <div class="card-header"> DataTables
              <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Date registered</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Anton Phunihel</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Alphonse Ivo</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Thancmar Theophanes</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Walerian Khwaja</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Clemens Janko</td>
                    <td>2012/02/01</td>
                    <td>Staff</td>
                    <td><span class="badge badge-danger">Banned</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Chidubem Gottlob</td>
                    <td>2012/02/01</td>
                    <td>Staff</td>
                    <td><span class="badge badge-danger">Banned</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Hristofor Sergio</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Tadhg Griogair</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Pollux Beaumont</td>
                    <td>2012/01/21</td>
                    <td>Staff</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Adam Alister</td>
                    <td>2012/01/21</td>
                    <td>Staff</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Carlito Roffe</td>
                    <td>2012/08/23</td>
                    <td>Staff</td>
                    <td><span class="badge badge-danger">Banned</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Sana Amrin</td>
                    <td>2012/08/23</td>
                    <td>Staff</td>
                    <td><span class="badge badge-danger">Banned</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Adinah Ralph</td>
                    <td>2012/06/01</td>
                    <td>Admin</td>
                    <td><span class="badge badge-dark">Inactive</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Dederick Mihail</td>
                    <td>2012/06/01</td>
                    <td>Admin</td>
                    <td><span class="badge badge-dark">Inactive</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Hipólito András</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Fricis Arieh</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Scottie Maximilian</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Bao Gaspar</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Tullio Luka</td>
                    <td>2012/02/01</td>
                    <td>Staff</td>
                    <td><span class="badge badge-danger">Banned</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Felice Arseniy</td>
                    <td>2012/02/01</td>
                    <td>Admin</td>
                    <td><span class="badge badge-dark">Inactive</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Finlay Alf</td>
                    <td>2012/02/01</td>
                    <td>Admin</td>
                    <td><span class="badge badge-dark">Inactive</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  <tr>
                    <td>Theophilus Nala</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><a class="btn btn-success" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                        </svg></a><a class="btn btn-info" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                        </svg></a><a class="btn btn-danger" href="#">
                        <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                        </svg></a></td>
                  </tr>
                  
                </tbody>
                  
              </table>
          
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
    <!-- CoreUI and necessary plugins-->
  <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
  <!--[if IE]><!-->
  <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
  <!--<![endif]-->
  <!-- Plugins and scripts required by this view-->
  <script src="vendors/jquery/js/jquery.slim.min.js"></script>
  <script src="vendors/datatables.net/js/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="js/datatables.js"></script>
@stop

    