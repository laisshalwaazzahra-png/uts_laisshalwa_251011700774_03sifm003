
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'NFT Marketplace')</title>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet">


    <style>
        body {
            background: #f5f6fa;
        }

        .navbar {
            background: #17152f;
        }

        .hero {
            background: linear-gradient(135deg, #17152f, #673de6);
            color: white;
            border-radius: 20px;
        }

        .nft-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: transform .2s;
        }

        .nft-card:hover {
            transform: translateY(-5px);
        }

        .nft-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        footer {
            background: #17152f;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            NFT Marketplace
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nfts.index') }}">
                        Koleksi NFT
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-4 flex-grow-1">
    @yield('content')
</main>

<footer class="text-center py-3 mt-4">
    <div class="container">
        <p class="mb-1">NFT Marketplace</p>
        <small>laisshalwa251011700774</small>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
