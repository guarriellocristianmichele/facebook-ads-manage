<!DOCTYPE html>
<html lang="en" style="min-height: 100vh">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background: linear-gradient(to top, #4481eb 0%, #04befe 100%) !important; font-family: 'Montserrat', sans-serif;">
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '162505099948123',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v16.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_EN/sdk.js"></script>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Facebook Leads Gen</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Impostazioni</h6>
                    <button id="facebookLogin" class="btn btn-info fw-bold mb-3"><i class="fa-brands fa-facebook"></i>
                        Connetti il tuo Facebook
                    </button>
                    <h6 class="card-subtitle mb-2 text-muted">Leads</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $('#facebookLogin').on('click', function () {
        FB.getLoginStatus(function (response) {
            console.log(response);
        });

        FB.login(function (response) {
            console.log(response);
        }, {scope: 'pages_manage_ads,pages_manage_metadata,pages_read_engagement,ads_management,leads_retrieval'});
    });

</script>
</body>
</html>
