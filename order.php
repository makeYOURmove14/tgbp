<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order - TGBP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <?php
        const PAGE = 'order';
        require_once 'partials/navbar.php';
    ?>

    <div class="container mt-3">
        <div class="mb-4">
            <h2>Order</h2>
            <p>GET YOUR NBA SHOES</p>
        </div>

        <form method="POST" action="invoice.php">
            <!-- Full Name -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="full-name">Full Name:</label>
                <input type="text" class="form-control" id="full-name" name="full-name" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <!-- Mode -->
            <div class="mb-3">
                <label class="text-secondary fw-bold">Mode:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="pickup" name="mode" value="Pickup" checked>
                    <label for="pickup" class="form-check-label">Pickup</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="delivery" name="mode" value="Delivery">
                    <label for="delivery" class="form-check-label">Delivery</label>
                </div>
            </div>

            <!-- Item and Size -->
            <div class="mb-3">
                <div class="row">
                    <!-- Item -->
                    <div class="col-sm-6">
                        <label class="text-secondary fw-bold" for="civil-status">Item:</label>
                        <select class="form-control" id="item" name="item">
                            <option value="Air Jordan 35">Air Jordan 35</option>
                            <option value="Nike Kobe 5 Protro">Nike Kobe 5 Protro</option>
                            <option value="Nike KD 13">Nike KD 13</option>
                            <option value="Under Armour Curry Flow 8">Under Armour Curry Flow 8</option>
                        </select>
                    </div>

                    <!-- size -->
                    <div class="col-sm-6 mt-3 mt-sm-0">
                        <label class="text-secondary fw-bold" for="full-name">size:</label>
                        <input type="number" class="form-control" id="size" name="size" value="30" min="30" max="47">
                    </div>
                </div>

            </div>

            <!-- COLOR -->
            <div class="mb-3">
                <label class="text-secondary fw-bold mb-2">COLOR AVAILABLE</label>
                <br>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="piolo" name="COLOR AVAILABLE[]" value="RED">
                    <label for="piolo" class="form-check-label">RED</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="liza" name="COLOR AVAILABLE[]" value="BLACK">
                    <label for="liza" class="form-check-label">BLACK</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="daniel" name="COLOR AVAILABLE[]" value="WHITE">
                    <label for="daniel" class="form-check-label">WHITE</label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mb-3 pt-2">
                <button type="submit" class="btn btn-secondary btn-lg" name="checkout">Checkout</button>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>