<!DOCTYPE html>
<html lang="en">
<head>
<marquee style="color: #ffffff; font-style: italic; margin-bottom: 10px; border: 1px solid #007bff; background-color: #007bff; padding: 5px; border-radius: 5px;">
    <i class="fas fa-star"></i> Công nghệ Thông minh, Cuộc sống Thông minh , Chạm vào Tương lai, Chạm vào Công nghệ
</marquee>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .banner {
            background-image: url('https://png.pngtree.com/background/20230416/original/pngtree-website-technology-line-dark-background-picture-image_2443641.jpg'); /* Thay thế đường dẫn đến hình ảnh bạn muốn sử dụng */
            background-size: cover;
            background-position: center;
    color: #ffffff;
    text-align: center;
    padding: 100px 0;  /* Thêm padding để làm nổi bật nội dung */
}
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            
            color: #007bff !important;
            font-weight: bold;
        }
        .nav-link {
            
            color: #333333 !important;
        }
        .nav-link:hover {
            
            color: #007bff !important;
        }
        .container {
            background-image: url('https://cdn.photoroom.com/v2/image-cache?path=gs://background-7ef44.appspot.com/backgrounds_v3/white/01_-_white.jpg'); /* Thay thế đường dẫn đến hình ảnh bạn muốn sử dụng */
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .card {
            background-image: url('https://png.pngtree.com/background/20230416/original/pngtree-website-technology-line-dark-background-picture-image_2443641.jpg'); /* Thay thế đường dẫn đến hình ảnh bạn muốn sử dụng */
            background-size: cover;
            background-position: center;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            
            transform: scale(1.02);
        }
        .card-img-top {
            
            border-radius: 8px 8px 0 0;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            color: #666666;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-microchip"></i> T&T Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Product"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Product/Cart"><i class="fas fa-shoping-cart"></i>🛒 Giỏ Hàng </a>                        
                    </li>
                    <li class="nav-item">
                    <?php if (SessionHelper::isAdmin()): ?>
                        <li class="nav-item">
                            <li class="nav-item d-inline">
                            <a class="nav-link" href="/Product/add"><i class="fas fa-plus-circle"></i>Thêm sản phẩm</a>
                            </li>
                            <li class="nav-item d-inline">
                            <a class="nav-link" href="/Category">📂 Danh sách danh mục</a>
                            </li>
                        </li>
                    <?php endif; ?>   
                    <?php
                       if (SessionHelper::isLoggedIn()) {
                        echo "<a class='nav-link'>" . htmlspecialchars($_SESSION['username']) . "
                        (" . SessionHelper::getRole() . ")</a>";
                        } else {
                        echo "<a class='nav-link' href='/account/login'>😁 Đăng nhập</a>";
                        }
                        ?>
                        </li>
                        <li class="nav-item">
                        <?php
                        if (SessionHelper::isLoggedIn()) {
                        echo "<a class='nav-link' href='/account/logout'>🙂 Đăng
                        xuất</a>";
                        }
                        ?>                        
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="banner">
        <div>
        <h1 style="color: white;">Chào mừng đến với T&T Shop</h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
