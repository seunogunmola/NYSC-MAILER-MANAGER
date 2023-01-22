<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
        <!--plugins-->
        <link href="{{ asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }} "
            rel="stylesheet" />
        <link
            href="{{ asset('admin/simplebar/css/simplebar.css" rel="stylesheet') }}" />
        <link href="{{ asset('admin/perfect-scrollbar/css/perfect-scrollbar.css') }}"
            rel="stylesheet" />
        <link href="{{ asset('admin/metismenu/css/metisMenu.min.css') }} " rel="stylesheet" />
        <!-- loader-->
        <link href="{{ asset('admin/css/pace.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('admin/js/pace.min.js') }} "></script>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="{{ asset('admin/css/dark-theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/semi-dark.css') }} " />
        <link rel="stylesheet" href="{{ asset('admin/css/header-colors.css') }}" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        <title>{{ env('APP_NAME') }}</title>
    </head>

    <body>
        <!--wrapper-->
        <div class="wrapper">
            <!-- SIDEBAR -->
            @include('admin.layouts.sidebar')
            <!-- SIDEBAR -->

            <!-- HEADER -->
            @include('admin.layouts.header')
            <!-- HEADER -->


            <!-- CONTENT -->
            @yield('content')
            <!-- CONTENT -->

            <!-- FOOTER -->
            @include('admin.layouts.footer')
            <!-- FOOTER -->
        </div>
        <!--end wrapper-->
        <!--start switcher-->
        <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
                </div>
                <hr />
                <h6 class="mb-0">Theme Styles</h6>
                <hr />
                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                        <label class="form-check-label" for="lightmode">Light</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                        <label class="form-check-label" for="darkmode">Dark</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                        <label class="form-check-label" for="semidark">Semi Dark</label>
                    </div>
                </div>
                <hr />
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                    <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
                </div>
                <hr />
                <h6 class="mb-0">Header Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>

                <hr />
                <h6 class="mb-0">Sidebar Backgrounds</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end switcher-->
        <!-- Bootstrap JS -->
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{ asset('admin/js/jquery.min.js') }} "></script>
        <script src="{{ asset('admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}">
        </script>
        <script src="{{ asset('admin/plugins/chartjs/js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}">
        </script>
        <script src="{{ asset('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}">
        </script>
        <script
            src="{{ asset('admin/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}">
        </script>
        <script src="{{ asset('admin/plugins/sparkline-charts/jquery.sparkline.min.js') }}">
        </script>
        <script src="{{ asset('admin/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.js') }}"></script>

        <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js') }} ">
        </script>
        <script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.min.js') }}">
        </script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });

        </script>
        <script>
            $(function () {
                $(".knob").knob();
            });

        </script>
        <script src="{{ asset('admin/js/index.js') }}"></script>
        <!--app JS-->
        <script src="{{ asset('admin/js/app.js') }}"></script>

        <!--NOTIFICATION TOASTER-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
        </script>
        @if(Session::has('message'))
            <script>
                var type = "{{ Session::get('alert','info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }

            </script>
        @endif


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            $(function () {
                $(document).on('click', '#delete', function (e) {
                    e.preventDefault();
                    var link = $(this).attr("href");


                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Delete This Data?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                });

            });

        </script>
    </body>

</html>
