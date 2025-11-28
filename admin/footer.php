<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cotton Moon Laundry</title>

  <!-- Bootstrap CSS (gunakan ini agar konsisten dengan index) -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

  <style>
    .footer-section {
      background-color: #f2eddf;
      padding: 30px 0;
    }

    .footer-title {
      font-weight: bold;
      color: #333;
      text-transform: uppercase;
    }

    .footer-icon {
      color: #000;
      font-size: 20px;
      margin: 0 10px;
    }

    .footer-icons-container {
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }

    .footer-links li {
      list-style: none;
      margin-bottom: 10px;
    }

    .footer-links a {
      color: #555;
      text-decoration: none;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .footer-hours td {
      padding: 10px;
      color: #333;
    }

    .footer-hours td:first-child {
      font-weight: bold;
    }

    .footer-bottom {
      background-color: rgba(177, 143, 143, 0.1);
      padding: 20px 0;
      color: black;
    }
    .footer-social-left {
      display: flex;
      justify-content: flex-start;  
      gap: 15px;
      padding-left: 15px;
      margin-top: 30px;             

    .footer-icon:hover {
      color: #555;
    }
    .footer-icon {
      color: white;
      background-color: #333;    
      font-size: 16px;
      width: 33px;
      height: 35px;
      line-height: 35px;
      text-align: center;
      border-radius: 50%;          
      transition: background-color 0.3s, color 0.3s;
    }

    .footer-icon:hover {
      background-color: #555;
      color: #fff;
    }


  </style>
</head>
<body>

  <!-- Footer -->
  <div class="footer-section">
    <div class="container">
      <div class="row">
        <!-- About -->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="footer-title">About Cotton Moon</h5>
          <p>Cotton Moon Laundry offers gentle, eco-friendly care to keep your clothes fresh and soft.</p>
          <p>Experience the comfort of perfectly cared-for clothes at Cotton Moon Laundry.</p>

          <div class="footer-social-left">
            <a href="https://vm.tiktok.com/ZSHv1j8stwyDm-oBGDj/" class="footer-icon" target="_blank">
              <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://www.instagram.com/faazwa.li?igsh=MWFwbTljNzFqbWh4NA==" class="footer-icon" target="_blank">
              <i class="fab fa-instagram"></i>
            <a href="https://github.com/fahnidazw" class="footer-icon" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </div>


        </div>

        <!-- Contact -->
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="footer-title">Contact Us</h5>
          <ul class="footer-links">
            <li><i class="fas fa-home"></i> Lunareth, Celestia Avenue, Xanthevia.</li>
            <li><i class="fas fa-envelope"></i> cottonMoon@gmail.com</li>
            <li><i class="fas fa-phone"></i> +00 137 782 82</li>
            <li><i class="fas fa-print"></i> +00 783 011 76</li>
          </ul>
        </div>

        <!-- Opening Hours -->
        <div class="col-lg-4 col-md-12 mb-4">
          <h5 class="footer-title">Opening Hours</h5>
          <table class="table footer-hours">
            <tr><td>Mon - Thu:</td><td>7am - 10pm</td></tr>
            <tr><td>Fri - Sat:</td><td>8am - 10pm</td></tr>
            <tr><td>Sunday:</td><td>9am - 11pm</td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container text-center">
      <p>© 2025 Copyright: 
        <a href="#" style="color: black;">Cotton Moon</a>
      </p>
    </div>
  </div>

</body>
</html>
