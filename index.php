<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cipuk - Menu & Order</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- HEADER -->
<header class="simple-header">
    <div class="logo">
        <h1>🍢 CIPUK KITA</h1>
        <p>Authentic Indonesian Snack</p>
    </div>
    <a href="https://wa.me/6285745770970" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i> Order via WA
    </a>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-text">
        <h2>Cipuk yang bikin <span class="highlight">nagih</span></h2>
        <p>Pesan langsung via WhatsApp, gausah ribet!</p>
    </div>
    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38"
         alt="Cipuk" class="hero-img">
</section>

<!-- MENU -->
<section class="menu-section">
    <h2 class="section-title">Menu Kami</h2>
    <p class="section-subtitle">Klik menu untuk langsung pesan via WhatsApp</p>

    <div class="menu-container">

        <!-- MENU 1 -->
        <div class="menu-item" onclick="orderWA('Original Cipuk',15000)">
            <div class="menu-img">
                <img src="/cipuk.jpg" alt="Original Cipuk">
            </div>
            <div class="menu-content">
                <h3>Original Cipuk</h3>
                <p>Rasa autentik resep turun-temurun</p>
                <div class="menu-footer">
                    <span class="price">Rp 15.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

        <!-- MENU 2 -->
        <div class="menu-item" onclick="orderWA('Spicy Cipuk',17000)">
            <div class="menu-img">
                <img src="/cipukpedas.jpg" alt="Spicy Cipuk">
            </div>
            <div class="menu-content">
                <h3>Spicy Cipuk</h3>
                <p>Pedas buat yang suka tantangan</p>
                <div class="menu-footer">
                    <span class="price">Rp 17.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

        <!-- MENU 3 -->
        <div class="menu-item" onclick="orderWA('Cheese Cipuk',20000)">
            <div class="menu-img">
                <img src="/cipukejuu.jpg" alt="Cheese Cipuk">
            </div>
            <div class="menu-content">
                <h3>Cheese Cipuk</h3>
                <p>Keju mozzarella yang melumer</p>
                <div class="menu-footer">
                    <span class="price">Rp 20.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

        <!-- MENU 4 -->
        <div class="menu-item" onclick="orderWA('Cipuk Kuah Rujak',25000)">
            <div class="menu-img">
                <img src="/cipukrujak.jpg" alt="Cipuk Rujak">
            </div>
            <div class="menu-content">
                <h3>Cipuk Kuah Rujak</h3>
                <p>Bumbu rujak khas Sunda, segar & unik</p>
                <div class="menu-footer">
                    <span class="price">Rp 25.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

        <!-- MENU 5 -->
        <div class="menu-item" onclick="orderWA('Cipuk Chili Oil',25000)">
            <div class="menu-img">
                <img src="/chilioil.webp" alt="Chili Oil">
            </div>
            <div class="menu-content">
                <h3>Cipuk Chili Oil</h3>
                <p>Cocok untuk sharing, pedas nagih</p>
                <div class="menu-footer">
                    <span class="price">Rp 25.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

        <!-- MENU 6 -->
        <div class="menu-item" onclick="orderWA('Cipuk Frozen',28000)">
            <div class="menu-img">
                <img src="/frozen.png" alt="Cipuk Frozen">
            </div>
            <div class="menu-content">
                <h3>Cipuk Frozen</h3>
                <p>Isi 20 pcs, siap goreng di rumah</p>
                <div class="menu-footer">
                    <span class="price">Rp 28.000</span>
                    <button class="order-btn"><i class="fab fa-whatsapp"></i> Order</button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>&copy; 2024 Cipuk Kita — Bandung</p>
</footer>

<!-- SCRIPT -->
<script>
function orderWA(item, price) {
    const phone = '6285745770970';
    const msg =
        Halo Admin Cipuk Kita!%0A%0A +
        🍢 ${item}%0A +
        💰 Rp ${price.toLocaleString()}%0A%0A +
        Masih tersedia?;

    window.open(https://wa.me/${phone}?text=${msg}, '_blank');
}
</script>

</body>
</html>