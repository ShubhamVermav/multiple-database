<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Pages in One File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ url('css/announcment.css') }}">
    <link rel="stylesheet" href="{{ url('css/faq.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/home-section.css') }}">
    <link rel="stylesheet" href="{{ url('css/invite-category.css') }}">
    <link rel="stylesheet" href="{{ url('css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('css/premium.css') }}">
    <link rel="stylesheet" href="{{ url('css/treding-invitation.css') }}">
</head>
<body>
    <div class="web">

        <section id="nav">
            @include('pages.nav')

            <section id="home-section">
                @include('pages.home-section')
            </section>

            <section id="announcment">
                @include('pages.announcment')
            </section>

            <section id="invite-category">
                @include('pages.invite-category')
            </section>

            <section id="premium">
                @include('pages.premium')
            </section>

            <section id="treding-invitation">
                @include('pages.treding-invitation')
            </section>

            <section id="faq">
                @include('pages.faq')
            </section>

            <section id="footer">
                @include('pages.footer')
            </section>
        </section>
    </div>
</body>
</html>
