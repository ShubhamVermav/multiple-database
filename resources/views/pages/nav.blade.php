<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InviteCrafter</title>
</head>
<body>
    <header class="header">
        <nav class="container navbar navbar-expand-md navbar-light pt-2 justify-content-between">

            <!-- Logo ---------------------->
            <div class="nav-logo">
                <img src="{{ asset('images/Invitecrafterheader-07.png') }}" alt="image" width="157" height="25">
            </div>

            <!-- Sale ----------- -->
            <div class="sale_logo">
                <img class="logocard" src="{{ asset('images/cards_gif.gif') }}" alt="image" width="90" height="45">
                <img class="marathi ms-2" src="{{ asset('images/marathi_gif.gif') }}" alt="image" width="90" height="45">
            </div>


            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse sliding-menu mt-2" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgba(0, 0, 0, 0.884);">Wedding</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#" class="dropdown-item">Wedding Ceremony</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="#">Birthday</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">House Warming</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color:rgba(0, 0, 0, 0.884);">More</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#" class="dropdown-item">Baby Shower</a></li>
                            <li><a href="#" class="dropdown-item">Greetings</a></li>
                            <li><a href="#" class="dropdown-item">Super Hero Birthday</a></li>
                            <li><a href="#" class="dropdown-item">Anniversary Celebration</a></li>
                            <li><a href="#" class="dropdown-item">Marathi Wedding</a></li>
                            <li><a href="#" class="dropdown-item">Hindi Wedding</a></li>
                            <li><a href="#" class="dropdown-item">Premium Invitations</a></li>
                            <li><a href="#" class="dropdown-item">Inauguration</a></li>
                            <li><a href="#" class="dropdown-item">Kitty Party</a></li>
                            <li><a href="#" class="dropdown-item">Marriage Biodata</a></li>
                            <li><a href="#" class="dropdown-item">Sunderkand</a></li>
                            <li><a href="#" class="dropdown-item">Thread Ceremony</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Right: Login + Toggle -->
                 <div class="imageContainer d-xl-block d-none" >
                    <a href="login">
                       <button class="btn nav-btn">Login Now</button>
                    </a>
                </div>

                <div class="imageContainer d-xl-none d-block">
                    <a href="login">
                       <button class="btn nav-btn login_now mr-3">Login</button>
                    </a>
                </div>
            <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="width: 20px; height: 20px;"></span>
                    </button>
            </div>
        </nav>

        
        <div class="sub-navbar">
            <div class="container d-flex justify-content-center flex-column flex-xxl-row align-items-xxl-baseline">
                <p class="sub-cat">
                    Get 20% OFF use coupon
                    <span class="coupon_code" >INVITE20</span>
                </p>
                <ul class="sub-navbar-nav">
                    <li class="nav-item">Marathi </li>
                    <li class="nav-item">Hindi</li>
                    <li class="nav-item">Jain</li>
                    <li class="nav-item">Rajasthani</li>
                    <li class="nav-item punjabi">Punjabi</li>
                    <li class="nav-item tilak">Tilak</li>
                    <li class="nav-item engg">Engagement</li>
                </ul> 
            </div>
        </div>
          
    </header>
</body>