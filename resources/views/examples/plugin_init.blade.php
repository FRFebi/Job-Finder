@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code (DataTables Plugin) -->
    <!--
        The following JS code was taken from the assets/_es6/pages/be_tables_datatables.js file, found in the HTML version.
        In the same way, you can use any custom JS code you need to init the examples showcased in the HTML version.

        If you are not planning on using the custom JS code in your main JS file and let Laravel Mix handle it (and you would
        like to use the JS code as showcased in this page), you will have to compile the code to ES5 first to make sure it runs
        correctly on all popular browsers. Feel free to check out the online compiler at https://babeljs.io/repl if you would
        like to use it this way.
    -->
    <script>
        jQuery(function(){
            // Override a few DataTable defaults
            jQuery.extend( jQuery.fn.dataTable.ext.classes, {
                sWrapper: "dataTables_wrapper dt-bootstrap4"
            });

            // Init full DataTable
            jQuery('.js-dataTable-full').dataTable({
                pageLength: 5,
                lengthMenu: [[5, 10, 20], [5, 10, 20]],
                autoWidth: false
            });
        });
    </script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">DataTables Example</h2>
            <h3 class="h5 text-muted mb-0">Plugin Integration</h3>
        </div>

        <!-- Info -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-content">
                        <p class="text-muted">
                            This page showcases how easily you can add a plugin’s JS/CSS assets and init it using custom JS code.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized at the top of this page -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th style="width: 15%;">Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < 21; $i++)
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
                            <td class="font-w600">
                                <a href="javascript:void(0)">John Doe</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client{{ $i }}<em class="text-muted">@example.com</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ rand(2, 10) }} days ago</em>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
