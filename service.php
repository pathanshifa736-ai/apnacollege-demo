<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PureWash Laundry | Services</title>
  <style>
    * {margin:0; padding:0; box-sizing:border-box;}
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f0faff;
      color: #1a1a1a;
    }

    header {
      background-color: #b3e5fc;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 6%;
    }

    .logo img {width: 160px;}
    .nav-links {list-style:none; display:flex; gap:25px;}
    .nav-links a {text-decoration:none; color:#01579b; font-weight:500; transition:0.3s;}
    .nav-links a:hover {color:#0288d1;}
    .cta-btn {
      background:#0288d1; color:white; border:none; padding:10px 18px; border-radius:20px;
      cursor:pointer; font-weight:500; transition:0.3s;
    }
    .cta-btn:hover {background:#0277bd;}

    .services-section {
      padding: 60px 10%;
      text-align: center;
    }
    .services-section h2 {
      color: #01579b;
      margin-bottom: 30px;
      font-size: 2rem;
    }
    .service-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
    }
    .service-card {
      background:white; border-radius:12px; box-shadow:0 2px 6px rgba(0,0,0,0.1); padding:25px; transition:0.3s;
    }
    .service-card:hover {transform:translateY(-5px); box-shadow:0 4px 10px rgba(0,0,0,0.15);}
    .service-card img {width:80px; height:80px; margin-bottom:15px;}
    .service-card h3 {color:#0288d1; margin-bottom:10px;}

    .modal {
      display:none; position:fixed; top:0; left:0; width:100%; height:100%;
      background: rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:2000;
    }
    .modal-content {
      background:white; padding:30px 40px; border-radius:12px; width:90%; max-width:400px;
      text-align:center; box-shadow:0 5px 15px rgba(0,0,0,0.2); position:relative;
    }
    .close-btn {position:absolute; top:10px; right:15px; font-size:20px; cursor:pointer; color:#555;}
    .modal-content h2 {color:#0288d1; margin-bottom:20px;}
    .modal-content input, .modal-content textarea {
      width:100%; padding:10px; margin-bottom:15px; border:1px solid #b3e5fc; border-radius:6px; outline:none;
    }
    .modal-content button {
      background:#0288d1; color:white; border:none; padding:10px 18px; border-radius:8px; cursor:pointer; transition:0.3s;
    }
    .modal-content button:hover {background:#0277bd;}

    footer {
      background:#b3e5fc; padding:20px; text-align:center; margin-top:60px;
    }
    footer p {color:#01579b;}
  </style>
</head>
<body>

  <header>
    <nav>
      <div class="logo"><img src="logo-2.png" alt="PureWash Logo"></div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <button class="cta-btn" id="openModal">Request Service</button>
    </nav>
  </header>

  <section class="services-section">
    <h2>Our Laundry & Cleaning Services</h2>
    <div class="service-cards">

      <div class="service-card">
        <img src="icons/washing.png" alt="Washing">
        <h3>Washing & Folding</h3>
        <p>Fresh clothes folded neatly and delivered to your doorstep.</p>
      </div>

      <div class="service-card">
        <img src="icons/drycleaning.jpg" alt="Dry Cleaning">
        <h3>Dry Cleaning</h3>
        <p>Gentle care for delicate fabrics and premium garments.</p>
      </div>

      <div class="service-card">
        <img src="icons/iron.png" alt="Ironing">
        <h3>Ironing & Pressing</h3>
        <p>Perfectly ironed clothes with professional steam ironing.</p>
      </div>

      <div class="service-card">
        <img src="icons/pickup.png" alt="Pickup Delivery">
        <h3>Pickup & Delivery</h3>
        <p>Free pickup and doorstep delivery for a hassle-free experience.</p>
      </div>

      <div class="service-card">
        <img src="icons/deepclean.png" alt="Deep Cleaning">
        <h3>Deep Cleaning</h3>
        <p>Thorough stain removal and fabric sanitization.</p>
      </div>

      <div class="service-card">
        <img src="icons/carpet.png" alt="Curtain Cleaning">
        <h3>Carpet & Curtain Cleaning</h3>
        <p>Powerful cleaning for curtains, carpets, and sofas.</p>
      </div>

      <div class="service-card">
        <img src="icons/shoe.png" alt="Shoe Cleaning">
        <h3>Shoe Cleaning</h3>
        <p>Professional cleaning for all types of shoes and sneakers.</p>
      </div>

      <div class="service-card">
        <img src="icons/stain.png" alt="Stain Removal">
        <h3>Stain Removal</h3>
        <p>Effective stain removal for clothes, upholstery, and linens.</p>
      </div>

    </div>
  </section>

  <div class="modal" id="serviceModal">
    <div class="modal-content">
      <span class="close-btn" id="closeModal">&times;</span>
      <h2>Request Service</h2>
      <form>
        <input type="text" placeholder="Your Name" required>
        <input type="text" placeholder="Phone Number" required>
        <textarea rows="3" placeholder="Service details (e.g. dry cleaning, ironing)" required></textarea>
        <button type="submit">Submit Request</button>
      </form>
    </div>
  </div>

  <footer>
    <p>© 2025 PureWash Laundry | All Rights Reserved.</p>
  </footer>

  <script>
    const modal = document.getElementById("serviceModal");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    openModal.addEventListener("click", () => modal.style.display = "flex");
    closeModal.addEventListener("click", () => modal.style.display = "none");
    window.addEventListener("click", (e) => { if(e.target === modal) modal.style.display = "none"; });
  </script>

</body>
</html>