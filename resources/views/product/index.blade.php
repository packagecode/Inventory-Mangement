@extends('master.master')

@section('cssScript')

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Product name</th>
                                <th>Product Qty</th>
                                <th>Sell Price</th>
                                <th>Parcelse Price</th>
                                <th>status</th>
                                <th>Profit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1 ?>
                            @foreach($results as $result)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$result->product_name}}</td>
                                    <td>{{$result->alart_qty}}</td>
                                    <td>{{$result->sell_price}}</td>
                                    <td>{{$result->parcelse_price}}</td>
                                    <td>{{$result->status}}</td>
                                    <td>{{$result->profit}}</td>
                                    <td>
                                        <a href="/product/{{$result->id}}" class="btn btn-info btn-sm">Details</a>
                                        <a href="/product/{{$result->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete/{{$result->id}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Product name</th>
                                <th>Product Qty</th>
                                <th>Sell Price</th>
                                <th>Parcelse Price</th>
                                <th>status</th>
                                <th>Profit</th>
                                <th>Action</th>
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
@endsection

@section('jsScript')


    <!-- jQuery 3 -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection
