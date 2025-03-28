<?php include 'app/views/shares/header.php'; ?>

<style>
    body {
        background-image: url('https://cdn.photoroom.com/v2/image-cache?path=gs://background-7ef44.appspot.com/backgrounds_v3/white/01_-_white.jpg'); /* Thay thế đường dẫn đến hình ảnh bạn muốn sử dụng */
            background-size: cover;
            background-position: center;
        color: #34495e;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: 1.6;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        font-size: 2.8rem;
        margin-bottom: 50px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .btn-success {
        background-color: #1abc9c;
        border: none;
        border-radius: 50px;
        padding: 14px 30px;
        color: black;
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease, transform 0.3s ease;
        display: block;
        margin: 10px auto;
    }

    .btn-success:hover {
        background-color: #16a085;
        transform: translateY(-3px);
    }

    .product-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        padding: 0;
        margin: 0;
    }

    .product-item {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        padding: 25px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        position: relative;
    }

    .product-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .product-item h2 a {
        color: #2980b9;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .product-item h2 a:hover {
        color: #3498db;
    }

    .product-image {
        max-width: 200px;
        max-height: 200px;
        border-radius: 8px;
        margin-top: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border: 4px solid #e74c3c;
        display: block;
        margin-left: auto;
        margin-right: auto;
        object-fit: cover;
    }

    .product-info {
        margin-top: 15px;
    }

    .product-info p {
        font-size: 1.1rem;
        color: #7f8c8d;
        margin: 12px 0;
    }

    .product-info strong {
        color: #2c3e50;
    }

    .product-item .btn {
        width: 100%;
        margin-top: 15px;
        padding: 12px;
        font-size: 1.1rem;
        border-radius: 50px;
        text-transform: uppercase;
        font-weight: 600;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .btn-warning {
        background-color: #f39c12;
        color: black;
    }

    .btn-warning:hover {
        background-color: #e67e22;
        transform: translateY(-3px);
    }

    .btn-danger {
        background-color: #e74c3c;
        color: black;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        transform: translateY(-3px);
    }

    .btn-primary {
        background-color: #3498db;
        color: black;
    }

    .btn-primary:hover {
        background-color: #2980b9;
        transform: translateY(-3px);
    }

    .container {
        width: 90%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 50px 0;
    }

    .product-item footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .product-item footer a {
        text-transform: uppercase;
        color: #2980b9;
        font-size: 0.9rem;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product-item footer a:hover {
        color: #3498db;
    }

    @media (max-width: 767px) {
        .product-list {
            grid-template-columns: 1fr;
        }
    }

</style>

<div class="container">
    <h1>Danh sách sản phẩm</h1>
  

    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <h2>
                    <a href="/Product/show/<?php echo $product->id; ?>">
                        <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </h2>

                <?php if ($product->image): ?>
                    <img src="/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="Product Image" class="product-image">
                <?php endif; ?>

                <div class="product-info">
                    <p style="color: black;"><strong>Giá:</strong> <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>
                    <p style="color: black;"><strong>Danh mục:</strong> <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div class="mt-4">
                  <div class="d-flex gap-2 flex-wrap">
                    <?php if (SessionHelper::isAdmin()): ?>
                        <a href="/Product/edit/<?php echo $product->id; ?>"
                        class="btn btn-warning btn-sm w-100 fw-bold text-white rounded-pill
                        transition-all hover-btn">
                        <i class="fas fa-edit me-1"></i> Sửa
                        </a>
                        <a href="/Product/delete/<?php echo $product->id; ?>"
                        class="btn btn-danger btn-sm w-100 fw-bold rounded-pill transition-all
                        hover-btn delete-btn">
                        <i class="fas fa-trash me-1"></i> Xóa
                        </a>
                        <?php endif; ?>
                        <a href="/Product/addToCart/<?php echo $product->id; ?>"
                        class="btn btn-primary btn-sm w-100 fw-bold rounded-pill transition-all
                        hover-btn">
                        <i class="fas fa-cart-plus me-1"></i> Thêm vào giỏ
                        </a>
                     </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
