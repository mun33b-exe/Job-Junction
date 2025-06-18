<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobJunction - Your Gateway to Success | Jobs for University Students in Pakistan</title>    <meta name="description" content="Find your dream job with JobJunction - Pakistan's premier job portal for university students. Connect with top employers and launch your career today.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <h2>JobJunction</h2>
                </div>
                <div class="nav-links">
                    <a href="#jobs">Find Jobs</a>
                    <a href="#employers">For Employers</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="nav-buttons">
                    <form action="{{route('login.view')}}" method="post">
                        @csrf
                        <input type="submit" value="Login In" class="btn btn-outline">
                    </form>
                    <form action="{{route('signup.view')}}" method="post">
                        @csrf
                        <input type="submit" value="Sign Up" class="btn btn-primary">
                    </form>
                    
                </div>
                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Your Gateway to Success</h1>
                    <p>Connect with top employers across Pakistan. Find internships, part-time jobs, and graduate opportunities tailored for university students.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">Start Your Journey</a>
                        <a href="#" class="btn btn-secondary">Browse Jobs</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat">
                            <span class="stat-number">10,000+</span>
                            <span class="stat-label">Active Jobs</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Companies</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">50,000+</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-placeholder">
                        <i class="fas fa-briefcase"></i>
                        <p>Professional Career Opportunities</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Job Categories -->
    <section class="job-categories">
        <div class="container">
            <h2>Popular Job Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Technology & IT</h3>
                    <p>Software Development, Web Design, Data Analysis</p>
                    <span class="job-count">2,500+ jobs</span>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Marketing & Sales</h3>
                    <p>Digital Marketing, Sales, Content Creation</p>
                    <span class="job-count">1,800+ jobs</span>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Finance & Accounting</h3>
                    <p>Banking, Investment, Financial Analysis</p>
                    <span class="job-count">1,200+ jobs</span>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education & Training</h3>
                    <p>Teaching, Research, Academic Writing</p>
                    <span class="job-count">900+ jobs</span>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Healthcare</h3>
                    <p>Medical, Nursing, Healthcare Administration</p>
                    <span class="job-count">800+ jobs</span>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Business & Management</h3>
                    <p>Consulting, Project Management, Operations</p>
                    <span class="job-count">1,500+ jobs</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Why Choose JobJunction?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3>Student-Focused</h3>
                    <p>Exclusively designed for university students with opportunities that fit your academic schedule and career goals.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Verified Employers</h3>
                    <p>All companies are thoroughly vetted to ensure legitimate opportunities and safe working environments.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Career Growth</h3>
                    <p>Access to internships, part-time positions, and graduate programs that accelerate your career development.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Support</h3>
                    <p>Join a network of ambitious students and professionals who support each other's career journey.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>Success Stories</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"JobJunction helped me land my first internship at a leading tech company. The platform made it so easy to connect with employers!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Muhammad Muneeb Ur Rehman</h4>
                            <span>Software Engineering Student, CUI</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"I found my dream job in digital marketing through JobJunction. The personalized job recommendations were spot on!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Rayyan Bhatti</h4>
                            <span>Business Administration, IBA Karachi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The platform connected me with amazing mentors and opened doors to opportunities I never knew existed."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Saif Ul Hassan</h4>
                            <span>Economics Student, GCU Lahore</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Launch Your Career?</h2>
                <p>Join thousands of students who have found their dream jobs through JobJunction. Your future starts here.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Create Your Profile</a>
                    <a href="#" class="btn btn-outline-white">Explore Jobs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Employers Section -->
    <section class="employers">
        <div class="container">
            <h2>For Employers</h2>
            <div class="employer-content">
                <div class="employer-text">
                    <h3>Find Top Talent from Leading Universities</h3>
                    <p>Connect with motivated students and fresh graduates from Pakistan's top universities. Post jobs, review applications, and build your team with the next generation of professionals.</p>
                    <ul class="employer-benefits">
                        <li><i class="fas fa-check"></i> Access to pre-screened candidates</li>
                        <li><i class="fas fa-check"></i> University partnership programs</li>
                        <li><i class="fas fa-check"></i> Flexible hiring solutions</li>
                        <li><i class="fas fa-check"></i> Dedicated account management</li>
                    </ul>
                    <a href="#" class="btn btn-secondary">Post a Job</a>
                </div>
                <div class="employer-image">
                    <div class="employer-placeholder">
                        <i class="fas fa-handshake"></i>
                        <p>Partner with Top Universities</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>JobJunction</h3>
                    <p>Connecting university students with their dream careers across Pakistan.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>For Students</h4>
                    <ul>
                        <li><a href="#">Find Jobs</a></li>
                        <li><a href="#">Career Advice</a></li>
                        <li><a href="#">Resume Builder</a></li>
                        <li><a href="#">Interview Tips</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>For Employers</h4>
                    <ul>
                        <li><a href="#">Post Jobs</a></li>
                        <li><a href="#">Search Candidates</a></li>
                        <li><a href="#">Employer Branding</a></li>
                        <li><a href="#">Recruitment Solutions</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 JobJunction. All rights reserved. | Made with ❤️ for Pakistani students</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for mobile menu toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            
            mobileMenuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
            });
        });
    </script>
</body>
</html>