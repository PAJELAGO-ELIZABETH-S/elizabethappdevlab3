<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                    <a href="/login">Login</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="<?= base_url() ?>html/images/toggle-icon.png"></span>
                <a class="logo" href="index.html"><img src="<?= base_url() ?>html/images/logo.png"></a></a>
                <form class="form-inline ">
                    <div class="login_text">
                        <ul>
                            <li><a href="#"><img src="<?= base_url() ?>html/images/search-icon.png"></a></li>
                        </ul>
                    </div>
                </form>
            </nav>
        </div>
    </div>
    <!-- header section end -->