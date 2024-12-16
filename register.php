<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-register.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            
            <!-- Login Section -->
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="login-form-container p-4">
                    <h3 class="mb-4">Get Started Now</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="email" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                             <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">I agree to the <a href="#">terms & policy</a></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning mb-3">Signup</button><br/><br/>
                        <button type="button" class="btn btn-outline-dark mb-1 btn-login"><img src="assets/image/google-logo.png" alt="" class="icon"> Sign in with Google</button>
                        <button type="button" class="btn btn-outline-dark mb-1 btn-login img-btn-login"><img src="assets/image/apple-logo.png" alt="" class="icon"> Sign in with Apple</button>
                        <p class="text-center">Have an account? <a href="login.php" class="text-decoration-none">Sign In</a></p>
                    </form>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-md-8 d-none d-md-flex align-items-center justify-content-center p-0">
                <div class="image-section">
                    <img src="assets/image/registerpage.jpg" alt="Keraton Yogyakarta" class="img-fluid rounded-start">
                    <div class="image-caption p-4">
                        <h4>Keraton Yogyakarta</h4>
                        <p>The placement of the pavilions, the courtyards and even the trees all have significance within the traditional spiritual view of the world by the local people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
