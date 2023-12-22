<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>landing page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-digimedia-v3.css" />
    <link rel="stylesheet" href="../assets/css/animated.css" />
    <link rel="stylesheet" href="../assets/css/owl.css" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link
      rel="stylesheet"
      href="../assets/vendor/css/core.css"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendor/css/theme-default.css"
      class="template-customizer-theme-css"
    />

    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
  </head>

  <body>
    <!-- Content -->
    <div class="header-area header-sticky mb-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start #gGANTI LOGO E-->
              <a href="/" class="logo">
                <img
                  src="../assets/images/logo_new (2).png"
                  alt=""
                  style="width: 350px"
                />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="/#top" class="active">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="/#about">About</a>
                </li>
                <li class="scroll-to-section">
                  <a href="/#services">Fitur</a>
                </li>
                <li class="scroll-to-section">
                  <a href="/#portfolio">Tanaman</a>
                </li>
                <li class="scroll-to-section">
                  <div class="border-first-button">
                    {{-- <a href="/login">Login</a> --}}
                  </div>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container-xxl" style="padding-top: 110px">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <div class="app-brand-link gap-2">
                  <img
                    class="card-img"
                    src="../assets/img/icons/brands/logo.png"
                    alt="Card image cap"
                  />
                  <span class="app-brand-text demo text-body fw-bolder">
                    AgroTech
                  </span>
                </div>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 text-center">Lupa Password 🌿</h4>
              <p class="mb-4 text-center">Silahkan masukkan password baru!</p>

              <!-- <form id="formAuthentication" class="mb-3" action="" method="POST"> -->
              <form method="POST" action="{{ route("password.update") }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}" />
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    readonly
                    id="email"
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{ $email ?? old("email") }}"
                    required
                    autocomplete="email"
                    autofocus
                  />
                  @error("email")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      id="password"
                      type="password"
                      class="form-control"
                      name="password"
                      required
                      autocomplete="new-password"
                    />
                    <span class="input-group-text cursor-pointer">
                      <i class="bx bx-hide"></i>
                    </span>
                  </div>
                  @error("password")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password_confirmation">
                    Konfirmasi Password
                  </label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      id="password-confirm"
                      type="password"
                      class="form-control"
                      name="password_confirmation"
                      autocomplete="new-password"
                      required
                    />
                    <span class="input-group-text cursor-pointer">
                      <i class="bx bx-hide"></i>
                    </span>
                  </div>
                  @error("password")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit">
                  Daftar
                </button>
              </form>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
