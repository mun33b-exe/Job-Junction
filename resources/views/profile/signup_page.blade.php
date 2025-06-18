<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - JobJunction | Join Pakistan's Premier Job Portal</title>
    <meta name="description" content="Create your JobJunction account and start your career journey. Connect with top employers across Pakistan.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
                    <h2>Start Your Career Journey Today</h2>
                    <p>Join thousands of university students across Pakistan who have found their dream jobs through JobJunction.</p>
                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Access to exclusive job opportunities</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Connect with top employers</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Career guidance and resources</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Build your professional network</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"JobJunction helped me land my dream internship at a leading tech company!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="author-info">
                                <strong>Muhammad Muneeb Ur Rehman</strong>
                                <span>Software Engineering Student, CUI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Signup Form -->
        <div class="signup-form-container">
            <div class="signup-form-content">
                <div class="form-header">
                    <h2>Create Your Account</h2>
                    <p>Fill in your details to get started</p>
                </div>

                <form class="signup-form" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">
                            <i class="fas fa-user"></i>
                            Full Name
                        </label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">
                            <i class="fas fa-phone"></i>
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="role">
                            <i class="fas fa-briefcase"></i>
                            I am a
                        </label>
                        <select id="role" name="role" required>
                            <option value="">Select your role</option>
                            <option value="employee">Employee (Job Seeker)</option>
                            <option value="employer">Employer (Company)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i>
                            Password
                        </label>
                        <div class="password-input">
                            <input type="password" id="password" name="password" placeholder="Create a strong password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-bar"></div>
                            </div>
                            <span class="strength-text">Password strength</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">
                            <i class="fas fa-lock"></i>
                            Confirm Password
                        </label>
                        <div class="password-input">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirm_password')">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="terms" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="#" class="link">Terms of Service</a> and <a href="#" class="link">Privacy Policy</a>
                        </label>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" required>
                            <span class="checkmark"></span>
                            Subscribe to our newsletter for job alerts and career tips
                        </label>
                    </div>

                    <button type="submit" class="btn-signup">
                        <span>Create Account</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>

                <div class="signup-footer">
                    <p>Already have an account? <a href="#" class="link">Sign In</a></p>
                </div>

                <div class="social-signup">
                    <div class="divider">
                        <span>Or sign up with</span>
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
            </div>
        </div>
    </div>

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

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.querySelector('.strength-bar');
            const strengthText = document.querySelector('.strength-text');
            
            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            const strengthLabels = ['Very Weak', 'Weak', 'Fair', 'Good', 'Strong'];
            const strengthColors = ['#ff4757', '#ff6b7a', '#ffa502', '#2ed573', '#20bf6b'];
            
            strengthBar.style.width = (strength * 20) + '%';
            strengthBar.style.backgroundColor = strengthColors[strength - 1] || '#ddd';
            strengthText.textContent = strengthLabels[strength - 1] || 'Password strength';
        });

        // Confirm password validation
        document.getElementById('confirm_password').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            
            if (confirmPassword && password !== confirmPassword) {
                this.setCustomValidity('Passwords do not match');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html>