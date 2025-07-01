<style>
  body {
    font-family: 'Poppins', sans-serif;
	background-image: url('image/home/login.jpg');
    color: #3b2e27;
  }
  div{
	font-family: 'Poppins', sans-serif;
  }

  .login-container {
  background-color: rgb(0, 0, 0, 0.2);  
  backdrop-filter: blur(2px);
  -webkit-backdrop-filter: blur(2px);  
  
  max-width: 400px;
  margin: 200px auto 180px auto;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 8px 18px rgba(0,0,0,0.1); 
}


  .login-container h2 {
    font-size: 2rem;
    font-weight: 600;
    border-bottom: 4px solid #FFF;
    color: #FFF;
    padding-bottom: 12px;
    margin-bottom: 30px;
  }

  .form-group label {
    font-weight: 500;
    color: #fff;
    margin-bottom: 8px;
    display: block;
  }

  .form-control {
    width: 100%;
    padding: 12px 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
    margin-bottom: 24px;
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
    margin-right: 12px;
  }

  .btn-success {
    background-color: #a87c5f;
    border: none;
    color: #fff;
  }

  .btn-success:hover {
    background-color: #8c6148;
  }

  .btn-primary {
    background-color: #f4bc7b;
    border: none;
    color: #3b2a1e;
  }

  .btn-primary:hover {
    background-color: #e5a965;
  }
</style>

<?php 
  include 'header.php';
  include 'fonts.php';
?>

<div class="login-container">
  <h2>Login</h2>

  <form action="proses/login.php" method="POST">
    <div class="form-group">
      <label for="username">Username</label>
      <input 
        type="text" 
        class="form-control" 
        id="username" 
        placeholder="Username" 
        name="username" 
        required
      >
    </div>

    <div class="form-group">
      <label for="pass">Password</label>
      <input 
        type="password" 
        class="form-control" 
        id="pass" 
        placeholder="Password" 
        name="pass" 
        required
      >
    </div>

    <button type="submit" class="btn btn-success">Login</button>
    <a href="register.php" class="btn btn-primary">Daftar</a>
  </form>
</div>

<?php 
  include 'footer.php';
?>
