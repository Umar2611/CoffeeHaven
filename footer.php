<footer class="footer">
  <div class="footer-container">
    <div class="footer-grid">
      <!-- Logo and Description -->
      <div class="footer-logo-section">
	  <a class="navbar-brand" href="#"> COFFEE HAVEN </a>
        <p class="footer-description ">
		  Coffee Heaven menyediakan layanan kopi terbaik untuk para pecinta kopi. Kami berkomitmen untuk memberikan pengalaman ngopi yang tak terlupakan, dengan biji kopi berkualitas tinggi dan pelayanan yang ramah.
        </p>
      </div>

      <!-- Navigation Links -->
      <div class="footer-links">
        <h3 class="footer-title">Quick Links</h3>
        <ul class="footer-nav">
          <li><a href="/SMM">Daftar Kopi</a></li>
          <li><a href="/Website">Promo</a></li>
          <li><a href="/Advertisement">Keranjang</a></li>
          <li><a href="/Bantuan">Bantuan</a></li>
          <li><a href="/Contact">About Us</a></li>
          <li><a href="/Login">Login</a></li>
        </ul>
      </div>

      <!-- Social Media Links -->
      <div class="footer-social">
        <h3 class="footer-title">Follow Us</h3>
        <ul class="social-links">
          <li><a href="https://facebook.com">Facebook</a></li>
          <li><a href="https://twitter.com">Twitter</a></li>
          <li><a href="https://instagram.com">Instagram</a></li>
        </ul>
		<ul class="social-links">
			<li>
				<a href="">Contact Us</a>
				<ul  class="contact">
				<li><a href="https://wa.me/+6285773840413">WhatsApp - 085773840413</a></li>
				<li><a href="https://instagram.com">Instagram - @coffeeheaven</a></li>
				<li><a href="">Email - coffee@heaven.id</a></li>
				</ul>
			</li>
		</ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <span>2025</span> Coffee Heaven. All Rights Reserved.</p>
    </div>
  </div>
</footer>
 
<!-- STYLE -->
<style>
  .footer {
	background-color: #2e1a08;
    color: white;
    padding: 40px 0;
    font-family: sans-serif;
  }

  .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
  }

  .footer-grid {
    display: grid;
    gap: 40px;
  }

  @media (min-width: 768px) {
    .footer-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }

  .footer-logo {
    height: 80px;
    object-fit: contain;
    border-radius: 8px;
    margin-bottom: 16px;
  }

  .navbar-brand {
	margin-top:20px ;
	  color:#fff; 
	  font-weight: bold; 
	  padding:0;
  }

  .footer-logo-section {
	  display: flex;
	  flex-direction: column;
	  
  }

  .footer-description {
    font-size: 14px;
    color: #d0b296 ;
	text-align: justify;
  }

  .footer-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 16px;
  }

  .footer-nav,
  .social-links {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-nav li,
  .social-links li {
    margin-bottom: 8px;
  }

  .footer-nav a,
  .social-links a {
    color: white;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s;
  }

  .footer-nav a:hover,
  .social-links a:hover {
    color: #f97316;  
  }

  .footer-bottom {
    margin-top: 40px;
    border-top: 1px solid #4a5568;
    padding-top: 16px;
    text-align: center;
    font-size: 14px;
    color: #a0aec0;
  }

  .contact{
	margin-top: 1em;
  }
</style>
