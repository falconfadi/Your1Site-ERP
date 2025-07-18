<body
    class="vertical-layout vertical-menu-modern {{ $configData['verticalMenuNavbarType'] }} {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{ $configData['sidebarClass'] }} {{ $configData['footerType'] }} {{ $configData['contentLayout'] }}"
    data-open="click" data-menu="vertical-menu-modern"
    data-col="{{ $configData['showMenu'] ? $configData['contentLayout'] : '1-column' }}" data-framework="laravel"
    data-asset-path="{{ asset('/') }}">


    <!-- BEGIN: Header-->
    @include('panels.navbar')

    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @if (isset($configData['showMenu']) && $configData['showMenu'] === true)
        @include('panels.sidebar')
    @endif
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content {{ $configData['pageClass'] }} py-1">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        @if ($configData['contentLayout'] !== 'default' && isset($configData['contentLayout']))
            <div class="content-area-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : '' }}">
                <div class="{{ $configData['sidebarPositionClass'] }}">
                    <div class="sidebar">
                        @yield('content-sidebar')
                    </div>
                </div>
                <div class="{{ $configData['contentsidebarClass'] }}">
                    <div class="content-wrapper">
                        <div class="content-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="content-wrapper {{ $configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : '' }}">
                @if ($configData['pageHeader'] === true && isset($configData['pageHeader']))
                    @include('panels.breadcrumb')
                @endif

                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        @endif

    </div>
    <!-- End: Content-->

    @if (isset($configData['blankPage']) && $configData['blankPage'] == false)
        @include('content/pages/customizer')
    @endif

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    {{-- include footer --}}
    @include('panels/footer')

    {{-- include default scripts --}}
    @include('panels/scripts')

    <script type="text/javascript">
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error)
                    <script>
                        toastr['error']({!! json_encode($error) !!}, {
                            closeButton: true,
                            tapToDismiss: false,
                            timeOut: 5,
                        });
                    </script>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('error'))
        <script>
            toastr['error']({!! json_encode(Session::get('error')) !!}, {
                closeButton: true,
                tapToDismiss: false,
                timeOut: 5,
            });
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            toastr['success']({!! json_encode(Session::get('success')) !!}, {
                closeButton: true,
                tapToDismiss: false,
                timeOut: 5,
            });
        </script>
    @endif

</body>

</html>
