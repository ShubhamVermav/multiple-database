<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InviteCrafter</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/invite-category.css') }}">
</head>
<body>
     <div class="invite-category">
        <div class="container">
            <div class="row mt-5">
                <h3 class="heading">INVITATION CATEGORIES</h3>
                <h4 class="sub-heading">BROWSE MOST LOVED CATEGORY</h4>
                <p class="heading-para">Use your own photos, texts, event details. Download and share it with your loved
                    ones on WhatsApp, Facebook and more.
                </p>
            </div>
            <div class="row gy-3 my-3 box-card">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_wedding_invitation.webp")}}" alt="wedding-invitation" class="img-fluid" loading="lazy" >
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_marathi_wedding.webp")}}" alt="new_marathi_wedding" class="img-fluid" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_hindi_wedding.webp")}}" alt="wedding-invitation" class="img-fluid" loading="lazy">
                        </a>
                    </div>
                </div>  
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_jain_wedding.webp")}}" alt="new_jain_wedding" class="img-fluid" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_rajasthani_wedding.webp")}}" alt="new_rajasthani_wedding" class="img-fluid" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="card">
                        <a href="#" style="text-decoration:none">
                            <img src="{{asset("images/cards/new_birthday_invitation.webp")}}" alt="new_birthday_invitation" class="img-fluid" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mx-auto invite-btn pt-3 ">
                <a href="#"><button type="button" class="invite_btn btn btn-warning">Explore All</button></a>
            </div>
        </div>
    </div>

</body>