<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - JobJunction | Access Your Account</title>
    <meta name="description" content="Sign in to your JobJunction account and continue your career journey. Access exclusive job opportunities across Pakistan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="signup-container">
        <!-- Left Side - Branding -->
        <div class="signup-branding">
            <div class="branding-content">
                <div class="logo">
                    <h1>JobJunction</h1>
                    <p class="tagline">Your Gateway to Success</p>
                </div>
                <div class="branding-text">
                    <h2>Welcome Back!</h2>
                    <p>Sign in to continue your career journey and discover new opportunities waiting for you.</p>
                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Access your saved jobs</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-bell"></i>
                            <span>Get personalized job alerts</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-line"></i>
                            <span>Track your applications</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <span>Connect with employers</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"JobJunction made my job search so much easier. I found my perfect role within weeks!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="author-info">
                                <strong>Rayyan Bhatti</strong>
                                <span>Software Engineer, Karachi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="signup-form-container">
            <div class="signup-form-content">                <div class="form-header">
                    <h2>Sign In</h2>
                    <p>Enter your credentials to access your account</p>
                </div>

                <!-- Display Success/Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="signup-form" action="{{route('auth.user')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            Password
                        </label>
                        <div class="password-input">
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group login-options">
                        <div class="checkbox-group remember-me">
                            <label class="checkbox-label">
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="link forgot-password">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn-signup">
                        <span>Sign In</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>                <div class="signup-footer">
                    <form action="{{route('signup.view')}}" method="post">
                    @csrf
                        <p>Don't have an account? 
                            <input type="submit" class="link" value="Sign Up"/>
                        </p>
                    </form>
                </div>

                <div class="social-signup">
                    <div class="divider">
                        <span>Or sign in with</span>
                    </div>
                    <div class="social-buttons">
                        <button class="social-btn google-btn">
                            <i class="fab fa-google"></i>
                            Google
                        </button>
                        <button class="social-btn linkedin-btn">
                            <i class="fab fa-linkedin"></i>
                            LinkedIn
                        </button>
                    </div>
                </div>

                <!-- Quick Access for Different User Types -->
                <div class="quick-access">
                    <div class="access-header">
                        <h4>Quick Access</h4>
                    </div>
                    <div class="access-buttons">
                        <button class="access-btn student-access">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Student Portal</span>
                        </button>
                        <button class="access-btn employer-access">
                            <i class="fas fa-building"></i>
                            <span>Employer Portal</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional CSS for Login-specific styling -->

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Form validation feedback
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                this.style.borderColor = '#ff4757';
            } else if (email) {
                this.style.borderColor = '#2ed573';
            }
        });

        // Quick access button handlers
        document.querySelector('.student-access').addEventListener('click', function() {
            // Add student-specific login logic here
            console.log('Student portal access');
        });

        document.querySelector('.employer-access').addEventListener('click', function() {
            // Add employer-specific login logic here
            console.log('Employer portal access');
        });        // Enhanced form submission
        document.querySelector('.signup-form').addEventListener('submit', function(e) {
            const submitBtn = document.querySelector('.btn-signup');
            
            // Add loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
            
            // Allow form to submit normally - remove preventDefault
            // The form will submit to the server
        });
    </script>
</body>
</html>