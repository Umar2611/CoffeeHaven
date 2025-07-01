<style>
  body {
    font-family: 'Poppins', sans-serif;
    
    background-color: #fdfaf6;
    color: #3b2e27;
  }

  div{
	font-family: 'Poppins', sans-serif;
  }

  .auth-wrapper {
    display: flex;
    
  }

  .auth-image {
    flex: 1;
    background-image: url('image/home/register.jpg');
    background-size: cover;
    background-position: center;
  }

  .auth-form {
    flex: 1;
    display: flex;
    justify-content: center; 
    background-color: #fff;
  }

  .register-container {
    width: 100%; 
    backdrop-filter: blur(6px);
    padding: 10rem;  
  }

  .register-container h2 {
    font-size: 2rem;
    font-weight: 600;
    color: #391e10;
    border-bottom: 4px solid #a87c5f;
    padding-bottom: 12px;
    margin-bottom: 30px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: 500;
    color: #3b2e27;
    margin-bottom: 6px;
    display: block;
  }

  .form-control {
    width: 100%;
    padding: 12px 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
    transition: border 0.2s ease;
  }

  .form-control:focus {
    border-color: #a87c5f;
    outline: none;
  }

  .btn {
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 500;
    font-size: 1rem;
    text-decoration: none;
    margin-top: 10px;
    display: inline-block;
  }

  .btn-success {
    background-color: #a87c5f;
    border: none;
    color: #fff;
  }

  .btn-success:hover {
    background-color: #8c6148;
  }

  @media screen and (max-width: 768px) {
    .auth-wrapper {
      flex-direction: column;
    }

    .auth-image {
      height: 300px;
    }
  }
</style>

<?php 
include 'header.php';
include 'fonts.php';
 ?>

<div class="auth-wrapper">
  <div class="auth-image"></div>

  <div class="auth-form">
    <div class="register-container">
      <h2>Register</h2>

      <form action="proses/register.php" method="POST">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

        <div class="form-group">
          <label for="telp">No Telepon</label>
          <input type="text" class="form-control" id="telp" name="telp" placeholder="+62" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label for="konfirmasi">Konfirmasi Password</label>
          <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Password" required>
        </div>

        <button type="submit" class="btn btn-success">Register</button>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
