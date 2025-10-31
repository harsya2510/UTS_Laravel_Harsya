<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS Laravel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar dengan container-fluid -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">UTS Laravel</a>

            <!-- Tombol hamburger untuk membuka sidebar -->
            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightSidebar" aria-controls="rightSidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar offcanvas dari kanan -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="rightSidebar" aria-labelledby="rightSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightSidebarLabel">UTS Laravel</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Menu links -->
            <div class="mb-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary {{ request()->is('produk*') ? 'active' : '' }}" href="/produk">Produk</a>
                    </li>
                </ul>
            </div>

            <!-- Search form -->
            <form class="d-flex mt-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- Main content container -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap 5 JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>