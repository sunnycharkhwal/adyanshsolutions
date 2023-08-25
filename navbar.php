  <!-- nav -->
  <span class="screen-darken"></span>
  <div class="d-lg-none">
      <div class="mobile_menu_div_top">
          <div class="row m-0">
              <div class="col-6"><img class="logo_mobile" src="img/logo.png" alt="logo"></div>
              <div class="col-6 mobile_menu_div ">
                  <i class="fas fa-bars" data-trigger="navbar_main"></i>
              </div>
          </div>
      </div>
  </div>
  <div class="nav_my_top">
      <div class="row m-0">
          <div class="col-xxl-9 col-xl-9 col-lg-10 ps-0">
              <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark nav_bg">
                  <div class="container-fluid">
                      <div class="offcanvas-header d-block d-xxl-none d-xl-none d-lg-none">
                          <button class="btn-close float-end mt-4"></button>
                      </div>
                      <div class="container">
                          <ul class="navbar-nav">
                              <li>
                                  <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'nav-link text-white' : 'nav-link'; ?>" href="index.php">home </a>
                              </li>
                              <li>
                                  <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'nav-link text-white' : 'nav-link'; ?>" href="about.php">about us </a>
                              </li>
                              <li>
                                  <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'contat_us.php' ? 'nav-link text-white' : 'nav-link'; ?>" href="contat_us.php">contact us</a>
                              </li>
                              <li class="nav-item dropdown my_dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products
                                  </a>
                                  <ul class="dropdown-menu fade-up">
                                      <li>
                                          <a class="dropdown-item" href="index.php#it">
                                              <span>IT & Non-IT Supplies</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                              <span>EV-Chargers</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown my_dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">E-Mobility
                                  </a>
                                  <ul class="dropdown-menu fade-up">
                                      <li>
                                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'E-Rickshaws.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="#!">
                                              <span>E-Rickshaws</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'E-Loaders.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="#!">
                                              <span>E-Loaders</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'Electric.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="#!">
                                              <span>Electric 2-
                                                  Wheelers</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown my_dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services
                                  </a>
                                  <ul class="dropdown-menu fade-up">
                                      <li>
                                          <a class="dropdown-item" href="index.php#ss">
                                              <span>Support Services</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="index.php#pcs">
                                              <span>Professional Consultancy Services</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown my_dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Electric
                                      Charging Solution
                                  </a>
                                  <ul class="dropdown-menu fade-up">
                                      <li>
                                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'ev_charger_franchise.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_charger_franchise.php">
                                              <span>EV-Charger-Franchisee</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'smart_lot_telematics.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="smart_lot_telematics.php">
                                              <span> Smart IOT & Telematics</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-2 d-none d-xxl-block d-xl-block d-lg-block">
              <a href="contat_us.php" class="nav_contact_btn"> Get a quote</a>
          </div>
      </div>
  </div>
  <!-- nav end -->