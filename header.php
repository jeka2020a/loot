    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><a href="#"><img class="img-fluid" src="assets/img/cryptonlogo.svg" alt="img"></a></div>
                    <div class="searchform d-none d-md-inline-flex">
                        <form>
                            <input type="text" name="SearchItem" placeholder="Search items, collections and creators">
                            <button><img src="assets/img/searchicon.svg" alt="img"></button>
                        </form>
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                        <div class="hamburger-toggle">
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </button>
                    <nav class="navbar navbar-expand-xl">
                        <div class="collapse navbar-collapse" id="navbar-content">
                            <div class="logo d-md-none"><a href="#"><img class="img-fluid" src="assets/img/cryptonlogo.svg" alt="img"></a></div>
                            <div class="searchform d-md-none">
                                <form>
                                    <input type="text" name="SearchItem" placeholder="Search items, collections and creators">
                                    <button><img src="assets/img/searchicon.svg" alt="img"></button>
                                </form>
                            </div>
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Homepage</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="homestyle1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="homestyle2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="homestyle3.html">Style 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Discover</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="discover1.html">Discover style 1</a></li>
                                        <li><a class="dropdown-item" href="discover2.html">Discover style 2</a></li>
                                        <li><a class="dropdown-item" href="discover3.html">Discover style 3</a></li>
                                        <li class="active"><a class="dropdown-item" href="itemstyle.html">Item style</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item d-none d-sm-none d-xl-block">
                                    <a class="nav-link" aria-current="page" href="activity.html">Activity</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="/">Home</a></li>
                                        <li><a class="dropdown-item" href="/blog">Blog</a></li>
                                        <li><a class="dropdown-item" href="/faq">FAQ</a></li>
                                        <li><a class="dropdown-item" href="/arbitration">Arbitration</a></li>
                                        <li><a class="dropdown-item" href="/services">Services</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown d-xl-none">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="/signin">Sign in</a></li>
                                      <li><a class="dropdown-item" href="/signup">Sign up</a></li>
                                      <?php session_start(); if ($_SESSION['user']['username'] != null){echo "<li><a class=dropdown-item href=/logout>log out</a></li>";}?>
                                      
                                      <li><a class="dropdown-item" href="#">Forgot password</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Inform center</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="aboutus.html">About Us</a></li>
                                        <li><a class="dropdown-item" href="blogstyle1.html">Blog style 1</a></li>
                                        <li><a class="dropdown-item" href="blogstyle2.html">Blog style 2</a></li>
                                        <li><a class="dropdown-item" href="articlestyle1.html">Article style 1</a></li>
                                        <li><a class="dropdown-item" href="articlestyle2.html">Article style 2</a></li>
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                        <li><a class="dropdown-item" href="privacypolicy.html">Privacy Policy</a></li>
                                        <li><a class="dropdown-item" href="404page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">RU</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="#.html">Русский</a></li>
                                        <li><a class="dropdown-item" href="#.html">English</a></li>
                                        <li><a class="dropdown-item" href="#.html">Español</a></li>
                                        <li><a class="dropdown-item" href="#.html">Français</a></li>
                                        <li><a class="dropdown-item" href="#.html">Deutsch</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="loginWallet d-none d-md-inline-flex">
                        <div class="dropdown me-md-3 me-lg-2 me-xl-1 me-xxl-3">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/usericon.svg" alt="img">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item" href="/signin">Sign in</a></li>
                              <li><a class="dropdown-item" href="/signup">Sign up</a></li>
                              <li><a class="dropdown-item" href="/logout">log out</a></li>
                              <li><a class="dropdown-item" href="#">Forgot password</a></li>
                          </ul>
                        </div>
                        <a class="btn" href="wallet.html">
                            <img src="assets/img/walleticon.svg" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>