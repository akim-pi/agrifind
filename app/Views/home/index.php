<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Landing Page</title>
  <!--Font dan Icons-->
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--CSS-->
  <link href="/css/landing.css" rel='stylesheet'>

</head>

<body id="body1">
  <div class="bg">


    <!--Navigasi-->

    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/foto/Group 4.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
          <strong style="color:black;">AgriFind</strong>
        </a>

        <form action="" class="d-flex" method="get">

          <!-- <input class="search" class="form-control" type="search" placeholder="Search" aria-label="Search"> -->

          <!-- <button class="btn btn-outline"><i class="material-icons">search</i></button> -->

        </form>

        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 250px;">
          <ul class="navbar-nav" class="d-flex">
            <li class="nav-item active">
              <a class="nav-link" href="#body2"><strong>About Us</strong><span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><strong>Contact</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#body3"><strong>Info</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#faq"><strong>FAQ</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="\auth\login"><strong>Log In</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="signup" href="\auth\signup"><strong>Sign Up</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <h2 style="font-size:120px; font-family:Playfair-Display; margin-left: 200px">find your<br>success</h2>
    </main>
  </div>
  <footer>
    <div class="foter" style="background:gray;">
      <br>
      <br>
    </div>
  </footer>
  <!--About Us-->
  <section id="body2">

    <div>
      <img class="logo" src="/foto/logo 2.png" style="margin-left: 200px;">
      <h1 class="Agrifind" style="margin-left: 200px;"><strong>What is
          <br> Agrifind?</strong></h1>
    </div>
    <div class="teks">
      <p>
        AgriFind is a web-based application functioned to search and find any<br>
        IPB University students with a specific skills and ability needed to fulfill
        their project.<br>
        This web separates different categories of students depending on their<br>
        batch and department to effortlessly determined demanded criteria.<br>
        AgriFind offers various features such as quick-search, filter and many
        more
      </p>
    </div>

  </section>
  <footer>

  </footer>
  <!--Info-->
  <section id="body3">
    <br><br>
    <h1 class="whyus"><strong>Why Us?</strong></h1>
    <br>
    <br>
    <div class="container">
      <div class="box">Easy</div>
      <div class="box">Fast</div>
      <div class="box">Win</div>
      <div class="box">Free</div>
    </div>

  </section>

  <!--FAQ-->
  <section id="faq">

    <h1 class="FAQ">Frequently Asked Question</h1>
    <div class="accordion" id="accordionExample" style="margin-bottom:50px;">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

            How to put our achievement?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>Click setting, and choose achievement. You can choose add icon to add your achievement
              or choose delete icon to delete your achievement, after finish click save to save all your achievement. </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How do i forgot password?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>Click forgot password and enter your email addrress. Next, make a new password at
              the colomn and confirm the new password. after that click change password and then open your email to check the notification</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How do i edit my profile?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>Click setting, and choose general. You can see general setting page and add anything you want to people know about your profile. after finish, click save changes and your profile will update.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--Contact-->
    <footer id="contact" style="background:#16694A; ">
      <h2>Contact Us</h2>

      <div class="bagian">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.4514 4.16674C22.3567 4.15699 22.2613 4.15699 22.1667 4.16674H2.72222C2.5976 4.16866 2.4738 4.18735 2.35416 4.22229L12.3889 14.2153L22.4514 4.16674Z" fill="black" />
          <path d="M23.4792 5.13208L13.3681 15.2015C13.1078 15.4602 12.7558 15.6054 12.3889 15.6054C12.022 15.6054 11.6699 15.4602 11.4097 15.2015L1.38889 5.20847C1.35808 5.32169 
                        1.34175 5.43836 1.34028 5.55569V19.4446C1.34028 19.8129 1.48661 20.1662 1.74707 20.4267C2.00754 20.6871 2.36081 20.8335 2.72917 20.8335H22.1736C22.542 20.8335 22.8952 20.6871 23.1557 
                        20.4267C23.4162 20.1662 23.5625 19.8129 23.5625 19.4446V5.55569C23.557 5.41101 23.5289 5.26808 23.4792 5.13208ZM3.68056 19.4446H2.71528V18.4515L7.76389 
                        13.4446L8.74306 14.4237L3.68056 19.4446ZM22.1597 19.4446H21.1875L16.125 14.4237L17.1042 13.4446L22.1528 18.4515L22.1597 19.4446Z" fill="black" />
        </svg> agrifind.ipb@gmail.com
        <p>
          <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 12.3739H24.75C24.75 6.60262 20.3929 2.25 14.6138 2.25V4.5C19.1835 4.5 22.5 7.81087 22.5 12.3739Z" fill="black" />
            <path d="M14.625 9.00002C16.9909 9.00002 18 10.0091 18 12.375H20.25C20.25 8.7469 18.2531 6.75002 14.625 
                            6.75002V9.00002ZM18.4747 15.1234C18.2586 14.9269 17.9745 14.8221 17.6825 14.8312C17.3905 
                            14.8402 17.1135 14.9623 16.9099 15.1718L14.2177 17.9404C13.5697 17.8166 12.267 17.4105 10.926 
                            16.0729C9.585 14.7308 9.17887 13.4247 9.0585 12.7811L11.8249 10.0879C12.0346 9.88442 12.1569 
                            9.60732 12.1659 9.31526C12.175 9.02319 12.07 8.73907 11.8732 8.52303L7.71637 3.95215C7.51954 
                            3.73543 7.24599 3.60397 6.95379 3.58569C6.6616 3.56742 6.37379 3.66377 6.1515 3.85427L3.71025 
                            5.9479C3.51575 6.1431 3.39966 6.40291 3.384 6.67802C3.36712 6.95927 3.04537 13.6215 8.21137 18.7898C12.7181 23.2954 18.3634 23.625 19.9181 23.625C20.1454 23.625 20.2849 
                            23.6183 20.322 23.616C20.5971 23.6006 20.8567 23.484 21.051 23.2886L23.1435 20.8463C23.3341 20.6241 23.4307 20.3364 23.4126 20.0442C23.3946 19.752 23.2633 19.4784 23.0467 
                            19.2814L18.4747 15.1234Z" fill="black" />
          </svg> 081234567899
        </p>
      </div>
    </footer>
  </section>
</body>

</html>