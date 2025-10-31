<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar (light) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">UTS Laravel</a>

            <!-- Hamburger icon only (non-functional) -->
            <div class="d-flex ms-auto">
                <!-- Button kept for appearance but does nothing when clicked -->
                <button class="btn btn-outline-secondary" type="button" aria-label="Menu" aria-disabled="true" onclick="return false;">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Sidebar removed: hamburger is icon-only and non-functional per request -->

    <!-- Main container with heading, spaced from navbar -->
    <div class="container">
        <h1 class="mt-3 text-start">Halaman Home</h1>
    </div>

    <!-- Bootstrap 5 JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
