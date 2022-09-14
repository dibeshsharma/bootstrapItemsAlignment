<!-- 
Bootstrap 5.1.3
Developer : Dibesh Sharma
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Setup</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/style.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="d-flex flex-row bd-highlight bd-highlight containerB1">

        <div class="d-flex flex-column bd-highlight w-50">
            <div class="p-2 bd-highlight childDiv d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column bd-highlight">
                    <div class="p-2 bd-highlight"><i class="bi-globe"></i></div>
                    <div class="p-2 bd-highlight">Globe1</div>
                </div>
            </div>
            <div class="p-2 bd-highlight childDiv d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column bd-highlight">
                    <div class="p-2 bd-highlight"><i class="bi-globe"></i></div>
                    <div class="p-2 bd-highlight">Globe</div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column bd-highlight w-50">
            <div class="p-2 bd-highlight childDiv d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column bd-highlight">
                    <div class="p-2 bd-highlight"><i class="bi-globe spinner-error"></i></div>
                    <div class="p-2 bd-highlight">Globe</div>
                </div>
            </div>
            <div class="p-2 bd-highlight childDiv d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column bd-highlight">
                    <div class="p-2 bd-highlight"><i class="bi-globe"></i></div>
                    <div class="p-2 bd-highlight">Globe</div>
                </div>
            </div>
        </div>

        <div class="vertical-center d-flex justify-content-center w-100">
            <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

    </div>
</body>
</html>