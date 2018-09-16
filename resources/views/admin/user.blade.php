@extends('layouts.main')
@section('title','Admin | user')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
      <h1>
      Manage User
        <!--<small>advanced tables</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{action('AdminController@index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{action('AdminController@user')}}">User</a></li>
        <li class="active">Manage User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage User Table</h3>
              <button type="button" style="float:right;" class="btn btn-info"><i class="fa fa-plus"> add</i></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example" class="stripe row-border order-column" style="width:100%">
        <thead>
            <tr>
            <th><center>Name</center></th>
                  <th><center>Phone</center></th>
                  <th><center>E-mail</center></th>
                  <th><center>Username</center></th>
                  <th><center>Password</center></th>
                  <th><center>Note</center></th>
                  <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0811111111</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>D</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Z</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>C</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>Tiger</center></td>
                <td><center>0999999999</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>B</center></td>
                <td><center>0822222222</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
            <tr>
                <td><center>A</center></td>
                <td><center>0812345678</center></td>
                <td><center>xxx@xxx.com</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>xxx</center></td>
                <td><center>
                    <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-success btn-sm" onclick=""><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick=""><i class="fa fa-ban"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick=""><i class="fa fa-trash"></i></button>
                    </center>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
                  <th>Phone</th>
                  <th>E-mail</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Note</th>
                  <th></th>
            </tr>
        </tfoot>
    </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
     <strong>Copyright &copy; 2018 <a href="#">KU-CLOUD</a>.</strong> All rights
    reserved.
  </footer>

  
        <!-- /.control-sidebar-menu -->

      </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- page script -->

@endsection