<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InviteCrafter</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body, html {
            height: 100%;
        }

        .main_container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        form {
            width: 100%;
            max-width: 300px;
        }

        .form-floating {
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
        }

        .logo img {
            width: 100px;
            height: auto;
            margin-bottom: 1rem;
        }

        .text {
            margin-bottom: 1rem;
        }

        .checkbox {
            margin: 10px 0;
        }






        * {
    box-sizing: border-box;
    margin: 0;
}

body {
    width: 100%;
    min-height: 200vh;
}

.container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 15px;
}
@media (max-width: 576px) {
    .container {
        max-width: 540px;
    }
}

html, body {
  height: 100%;
  overflow: visible;
}


.header {
  position: sticky;
  top: 0;
  z-index: 999;
  background: white;
  border: 2px solid blue;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); 
}

.header .container {
    display: flex;
    flex-direction: row;
    font-size: 16px;
    width: 100%;
    align-items: center;
    justify-content: space-between;
}

.navbar-nav {
    display: flex;
    flex-direction: row;
    list-style: none;
    padding-left: 0;
    font-weight: 500;
    margin: 0; 
}

.nav-item {
    padding: 0 10px;
}

.navbar-nav .nav-item {
    list-style: none;
    margin: 0rem 1rem;
}

.navbar-nav .nav-item:hover {
    color: #fbcc53;
    cursor: pointer;
}

/* .navbar-nav .nav-item .nav-link:hover {
    color: #fbcc53;
} */

button.btn.nav-btn {
    font-weight: 500;
    border: 2px solid #fcc046;
    border-radius: 7px;
    padding: 6px 17px;
    font-size: 10px;
}

.sale_logo {
    display: flex;
    align-items: center;
}

.sale_logo .marathi {
    margin-left: 15px;
}

.navbar-collaps {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav-icon {
    display: none;
}

@media(max-width: 1200px) {
    .navbar-nav .nav-item {
        display: none;
    }
    
    .nav-icon {
        display: inline-block;
    }
}

@media (max-width: 767px) {
    .sale_logo .logocard {
        display: none;
    }
    
    .sub-navbar-nav .nav-item {
        margin: 0px 0px !important;
    }
    
    .sub-navbar .sub-cat {
        font-size: 14px !important;
    }
    
    .sub-navbar-nav .engg, 
    .sub-navbar-nav .tilak {
        display: none;
    }
    button.btn.nav-btn {
        border-radius: 5px;
        padding: 6px 7px;
        font-size: 10px;
    }
    .sale_logo .marathi {
        padding-left: 0;
    }
}

@media (max-width: 420px) {
    .sub-navbar-nav .punjabi {
        display: none;
    }
}

/* Sub navbar CSS */
.sub-navbar {
    font-size: 16px;
    margin-top: 15px;
    font-weight: 500;
    box-shadow: 0 20px 10px -20px rgba(0,0,0,0.45) inset;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 55px;
    padding: 10px 0;
}

@media (max-width: 1400px) {
    .sub-navbar {
        min-height: 70px !important;
    }
    
    .sub-navbar-nav {
        margin-top: 10px;
    }
}

.sub-navbar-nav {
    display: flex;
    flex-direction: row;
    list-style: none;
    padding: 0;
    margin: 0;
}

.sub-navbar .nav-item {
    list-style: none;
    margin: 0px 10px;
}

.sub-navbar-nav .nav-item:hover {
    color: #fbcc53;
    cursor: pointer;
}

.sub-navbar .sub-cat {
    color: red;
    font-size: 18px;
    font-weight: 900;
    text-align: center;
    margin: 0;
}

.sub-navbar .coupon_code {
    color: brown;
    margin-left: 8px;
    font-size: 24px;
    font-weight: 100;
}


    </style>
   
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/html.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    {{-- <main class="main_container">
        <form action="">
            <div class="logo">
                <img src="" alt="Image">
            </div>
            <h2 class="text">Please sign in</h2>

            <div class="form-floating">
                <input class="form-control" type="email" placeholder="Email address">
            </div>

            <div class="form-floating">
                <input class="form-control" type="password" placeholder="Password">
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember_me"> Remember me
                </label>
            </div>

            <div class="form-floating">
                <button class="btn btn-lg btn-primary form-control" type="submit">Sign in</button>
            </div>
        </form>
    </main> --}}
    
    <header class="header">
        <nav class="container">

            <div class="nav-logo">
                <img src="{{asset("images/Invitecrafterheader-07.png")}}" alt="image" width="157" height="25">
            </div>

            <div class="sale_logo">
                <img src="{{asset("images/cards_gif.gif")}}" alt="image" width="90" height="45">
                <img class="marathi" src="{{asset("images/marathi_gif.gif")}}" alt="image" width="90" height="45">
            </div>

            <div class="navbar-collaps">
                <ul class="navbar-nav d-flex flex-row mb-xl-0 mr-2" >
                    <li class="nav-item dropdown px-2">
                       <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgba(0, 0, 0, 0.884);">Wedding</a>
                       <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#" class="dropdown-item"> Wedding Ceremony</a></li>
                          <li><a href="#" class="dropdown-item">Mehndi</a></li>
                          <li><a href="#" class="dropdown-item">Haldi</a></li>
                          <li><a href="#" class="dropdown-item">Tilak</a></li>
                          <li><a href="#" class="dropdown-item">Sangeet</a></li>
                          <li><a href="#" class="dropdown-item">Engagement</a></li>
                          <li><a href="#" class="dropdown-item">Marathi</a></li>
                          <li><a href="#" class="dropdown-item">South Indian</a></li>
                          <li><a href="#" class="dropdown-item">Save the Date</a></li>
                          <li><a href="#" class="dropdown-item">Rajasthani</a></li>
                          <li><a href="#" class="dropdown-item">Jain</a></li>
                          <li><a href="#" class="dropdown-item">Punjabi</a></li>
                          <li><a href="#" class="dropdown-item">Bridal Shower</a></li>
                          <li><a href="#" class="dropdown-item">Reception</a></li>
                       </ul>
                    </li>
                    <li class="nav-item px-2 mt-2">Birthday</li>
                    <li class="nav-item px-2 mt-2">House Warming</li>
                    <li class="nav-item dropdown px-2">
                       <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgba(0, 0, 0, 0.884);">More</a>
                       <ul  class="dropdown-menu dropdown-menu-end">
                         <li><a href="#" class="dropdown-item">Baby Shower</a></li>
                         <li><a href="#" class="dropdown-item">Greetings</a></li>
                         <li><a href="#" class="dropdown-item">Super Hero Birthday</a></li>
                         <li><a href="#" class="dropdown-item">Anniversary Celebration</a></li>
                         <li><a href="#" class="dropdown-item">Marathi Wedding</a></li>
                         <li><a href="#" class="dropdown-item">Hindi Wedding</a></li>
                         <li><a href="#" class="dropdown-item">Premium Invitations</a></li>
                         <li><a href="#" class="dropdown-item">Inaugration</a></li>
                         <li><a href="#" class="dropdown-item">Kitty Party</a></li>
                         <li><a href="#" class="dropdown-item">Marriage Biodata</a></li>
                         <li><a href="#" class="dropdown-item">Sunderkand</a></li>
                         <li><a href="#" class="dropdown-item">Thread Ceremony</a></li>
                       </ul>
                    </li>
                </ul> 
                
            </div>
            <div class="">
                <a href="#" class="nav-login mx-3">
                login
                </a>
            </div>
        </nav>
        <div class="sub-navbar pt-2">
            <p class="sub-cat">
                Get 20% OFF use coupon
                <span class="coupon_code" >INVITE20</span>
            </p>
            <ul class="sub-navbar-nav">
                <li class="nav-item">Marathi </li>
                <li class="nav-item">Hindi</li>
                <li class="nav-item">Jain</li>
                <li class="nav-item">Rajasthani</li>
                <li class="nav-item">Punjabi</li>
                <li class="nav-item">Tilak</li>
                <li class="nav-item">Engagement</li>
            </ul> 
        </div>
    </header>
         <div class="sub-navbar2 mt-4">
            <p class="sub-cat">
                Get 20% OFF use coupon
                <span class="coupon_code" >INVITE20</span>
            </p>
            <ul class="sub-navbar-nav">
                <li class="nav-item">Marathi </li>
                <li class="nav-item">Hindi</li>
                <li class="nav-item">Jain</li>
                <li class="nav-item">Rajasthani</li>
                <li class="nav-item">Punjabi</li>
                <li class="nav-item">Tilak</li>
                <li class="nav-item">Engagement</li>
            </ul> 
        </div>
             <div class="sub-navbar2 mt-4">
            <p class="sub-cat">
                Get 20% OFF use coupon
                <span class="coupon_code" >INVITE20</span>
            </p>
            <ul class="sub-navbar-nav">
                <li class="nav-item">Marathi </li>
                <li class="nav-item">Hindi</li>
                <li class="nav-item">Jain</li>
                <li class="nav-item">Rajasthani</li>
                <li class="nav-item">Punjabi</li>
                <li class="nav-item">Tilak</li>
                <li class="nav-item">Engagement</li>
            </ul> 
        </div>
             <div class="sub-navbar2 mt-4">
            <p class="sub-cat">
                Get 20% OFF use coupon
                <span class="coupon_code" >INVITE20</span>
            </p>
            <ul class="sub-navbar-nav">
                <li class="nav-item">Marathi </li>
                <li class="nav-item">Hindi</li>
                <li class="nav-item">Jain</li>
                <li class="nav-item">Rajasthani</li>
                <li class="nav-item">Punjabi</li>
                <li class="nav-item">Tilak</li>
                <li class="nav-item">Engagement</li>
            </ul> 
        </div>
             <div class="sub-navbar2 mt-4">
            <p class="sub-cat">
                Get 20% OFF use coupon
                <span class="coupon_code" >INVITE20</span>
            </p>
            <ul class="sub-navbar-nav">
                <li class="nav-item">Marathi </li>
                <li class="nav-item">Hindi</li>
                <li class="nav-item">Jain</li>
                <li class="nav-item">Rajasthani</li>
                <li class="nav-item">Punjabi</li>
                <li class="nav-item">Tilak</li>
                <li class="nav-item">Engagement</li>
            </ul> 
        </div>
<p class="accordion-header" id="faqOne">
  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faqs" aria-expanded="false">
    <div class="POPULAR_SEARCHES">FREQUENTLY ASKED QUESTIONS</div>
    <span class="icon ms-auto"><i class="fas fa-chevron-down"></i></span>
  </button>
</p>


</body>
</html>
