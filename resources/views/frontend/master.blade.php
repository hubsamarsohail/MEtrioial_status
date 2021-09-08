<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/pitnik/logout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:41 GMT -->

@include('frontend.sections.head')

<body>

    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                 <a href="{{route('uProfileDetail')}}" title=""><img  style="height: 55px" src="{{asset('/')}}public/frontend/images/logo.png" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>

        </div>

        @include('frontend.sections.header')


        @yield('content')

        <!--wizerd form end-->

        @include('frontend.sections.footer')

        </div>
        <div class="side-panel">
            <h4 class="panel-title">General Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>use night mode</span>
                    <input type="checkbox" id="nightmode1" />
                    <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notifications</span>
                    <input type="checkbox" id="switch22" />
                    <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notification sound</span>
                    <input type="checkbox" id="switch33" />
                    <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>My profile</span>
                    <input type="checkbox" id="switch44" />
                    <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show profile</span>
                    <input type="checkbox" id="switch55" />
                    <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
            <h4 class="panel-title">Account Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>Sub users</span>
                    <input type="checkbox" id="switch66" />
                    <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>personal account</span>
                    <input type="checkbox" id="switch77" />
                    <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Business account</span>
                    <input type="checkbox" id="switch88" />
                    <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show me online</span>
                    <input type="checkbox" id="switch99" />
                    <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Delete history</span>
                    <input type="checkbox" id="switch101" />
                    <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Expose author name</span>
                    <input type="checkbox" id="switch111" />
                    <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
        </div>

</body>

<!-- Mirrored from wpkixx.com/html/pitnik/logout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:43 GMT -->

</html>
