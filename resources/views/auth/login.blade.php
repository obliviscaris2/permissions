<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('adminassets/assets/bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- <link rel="stylesheet" href="wwwroot/css/site.css" asp-append-version="true" />
    <link rel="stylesheet" href="~/LifeInsuranceCore.styles.css" asp-append-version="true" />*@ -->

    <!-- ===============================================-->
    <!--    assets from dashboard-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('adminassets/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('adminassets/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('adminassets/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('adminassets/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('adminassets/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('adminassets/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('adminassets/assets/js/config.js') }}"></script>
    <script src="{{ asset('adminassets/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets from dashboard-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('adminassets/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('adminassets/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('adminassets/assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('adminassets/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('adminassets/assets/nepali.datepicker.v3.7/css/nepali.datepicker.v3.7.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('adminassets/assets/datatables.net/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('adminassets/assets/datatables.net/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('adminassets/assets/datatables.net/css/buttons.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/assets/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminassets/vendors/flatpickr/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminassets/css/custom.css') }}" asp-append-version="true" />


    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>



            <main class="main" id="top">
                <div class="container-fluid">
                    <div class="row min-vh-100 flex-center g-0">
                        <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
                                src="{{ asset('adminassets/assets/img/icons/spot-illustrations/bg-shape.png') }}"
                                alt="" width="250"><img class="bg-auth-circle-shape-2"
                                src="{{ asset('adminassets/assets/img/icons/spot-illustrations/shape-1.png') }}"
                                alt="" width="150">
                            <div class="card overflow-hidden z-index-1">
                                <div class="card-body p-0">
                                    <div class="row g-0 h-100">
                                        <div class="col-md-5 text-center bg-card-gradient">
                                            <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                                <div class="bg-holder bg-auth-card-shape"
                                                    style="background-image:url(adminassets/assets/img/icons/spot-illustrations/half-circle.png);">
                                                </div>
                                                <!--/.bg-holder-->
                                                <div class="z-index-1 position-relative"><a
                                                        class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder"
                                                        href="#">Test</a>
                                                    <img height="200" width="200"
                                                        src="#">
                                                    {{-- <p class="opacity-75 text-white">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p> --}}
                                                </div>
                                            </div>
                                            {{-- <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                  <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light" href="../../../pages/authentication/card/register.html">Get started!</a></p>
                  <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a class="text-decoration-underline text-white" href="#!">terms</a> and <a class="text-decoration-underline text-white" href="#!">conditions </a></p>
                </div> --}}
                                        </div>
                                        <div class="col-md-7 d-flex flex-center">
                                            <div class="p-4 p-md-5 flex-grow-1">
                                                <div class="row flex-between-center">
                                                    <div class="col-auto">
                                                        <h3>Account Login</h3>
                                                    </div>
                                                </div>
                                                <form method="post" action="{{ url('login') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label" for="card-email">Email
                                                            address</label>
                                                        <input class="form-control" id="card-email" type="email"
                                                            name="email" value="{{ old('email') }}">

                                                        <br>
                                                        {{-- <span style="color:red">{{ $message }}</span> --}}
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between">
                                                            <label class="form-label"
                                                                for="card-password">Password</label>
                                                        </div>
                                                        <input class="form-control" id="card-password"
                                                            type="password" name="password"
                                                            value="{{ old('password') }}">

                                                        <br>
                                                        {{-- <span>{{ $message }}</span> --}}
                                                    </div>
                                                    <div class="row flex-between-center">
                                                        <div class="col-auto">
                                                            <div class="form-check mb-0"><input
                                                                    class="form-check-input" type="checkbox"
                                                                    id="card-checkbox" checked="checked"
                                                                    name="remember">
                                                                <label class="form-check-label mb-0"
                                                                    for="card-checkbox">Remember me</label>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/card/forgot-password.html">Forgot Password?</a></div> --}}
                                                    </div>
                                                    <div class="mb-3"><button
                                                            class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                            name="submit">Log in</button></div>
                                                </form>
                                                {{-- <div class="position-relative mt-4">
                    <hr>
                    <div class="divider-content-center">or log in with</div>
                  </div>
                  <div class="row g-2 mt-2">
                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><svg class="svg-inline--fa fa-google-plus-g fa-w-20 me-2" data-fa-transform="grow-8" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" style="transform-origin: 0.625em 0.5em;"><g transform="translate(320 256)"><g transform="translate(0, 0)  scale(1.5, 1.5)  rotate(0 0 0)"><path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" transform="translate(-320 -256)"></path></g></g></svg><!-- <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Font Awesome fontawesome.com --> google</a></div>
                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><svg class="svg-inline--fa fa-facebook-square fa-w-14 me-2" data-fa-transform="grow-8" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5em;"><g transform="translate(224 256)"><g transform="translate(0, 0)  scale(1.5, 1.5)  rotate(0 0 0)"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Font Awesome fontawesome.com --> facebook</a></div>
                  </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->




            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->



            <!-- ===============================================-->
            <!--    JavaScripts from dashboard-->
            <!-- ===============================================-->

            <script src="{{ asset('adminassets/assets/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/assets/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript">
            </script>
            <script src="{{ asset('adminassets/assets/toastr/toastr.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/assets/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript">
            </script>
            <script src="{{ asset('adminassets/assets/datatables.net/js/dataTables.responsive.min.js') }}" type="text/javascript">
            </script>
            <script src="{{ asset('adminassets/assets/datatables.net/js/dataTables.buttons.min.js') }}" type="text/javascript">
            </script>
            <script src="{{ asset('adminassets/assets/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/vendors/popper/popper.min.js') }}"></script>
            <script src="{{ asset('adminassets/vendors/bootstrap/bootstrap.min.js') }}"></script>
            <script src="{{ asset('adminassets/vendors/anchorjs/anchor.min.js') }}"></script>
            <script src="{{ asset('adminassets/vendors/is/is.min.js') }}"></script>
            <script src="{{ asset('adminassets/vendors/echarts/echarts.min.js') }}"></script>
            <script src="{{ asset('adminassets/vendors/fontawesome/all.min.js') }}"></script>
            <script src="{{ asset('adminassets/wwwroot/vendors/lodash/lodash.min.js') }}"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="{{ asset('adminassets/vendors/list.js/list.min.js') }}"></script>
            <script src="{{ asset('adminassets/assets/js/theme.js') }}"></script>
            <script src="{{ asset('adminassets/assets/nepali.datepicker.v3.7/js/nepali.datepicker.v3.7.min.js') }}"
                type="text/javascript"></script>
            <script src="{{ asset('adminassets/assets/select2/dist/js/select2.min.js') }}"></script>
            <script src="{{ asset('adminassets/assets/jquery-mask/dist/jquery.mask.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/scripts/language.js') }}"></script>
            <script src="{{ asset('adminassets/scripts/common.js') }}"></script>
            <script src="{{ asset('adminassets/assets/js/flatpickr.js') }}"></script>

            <script type="text/javascript">
                InitializeUnicodeNepali();
            </script>

            <script>
                $(function() {
                    var current = location.pathname;
                    $('.navbar .nav-item .nav-link ').each(function() {
                        var $this = $(this);
                        // if the current path is like this link, make it active
                        if ($this.attr('href').indexOf(current) !== -1) {
                            $this.closest("nav-link.dropdown-indicator.collapsed").removeClass('collapsed');
                            $this.closest(".nav.false.collapse").addClass('show');
                            $this.addClass('active');
                        }
                    })
                })
            </script>
</body>

</html>
