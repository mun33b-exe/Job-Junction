<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Dashboard - JobJunction</title>
    <meta name="description" content="Manage your job postings and recruit top talent with JobJunction's employer dashboard.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/employeer_dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="dashboard-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h2>JobJunction</h2>
                    <span class="dashboard-badge">Employer</span>
                </div>
                <div class="header-actions">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">3</span>
                    </div>
                    <div class="profile-menu">
                        <div class="profile-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="profile-dropdown">
                            <a href="#"><i class="fas fa-cog"></i> Settings</a>
                            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Dashboard -->
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="dashboard-sidebar">
            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item active">
                        <a href="#dashboard">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#post-job">
                            <i class="fas fa-plus-circle"></i>
                            <span>Post Job</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#manage-jobs">
                            <i class="fas fa-briefcase"></i>
                            <span>Manage Jobs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#applications">
                            <i class="fas fa-file-alt"></i>
                            <span>Applications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#analytics">
                            <i class="fas fa-chart-bar"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#company-profile">
                            <i class="fas fa-building"></i>
                            <span>Company Profile</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Dashboard Overview Section -->
            <section id="dashboard" class="dashboard-section active">
                <div class="section-header">
                    <h1>Dashboard Overview</h1>
                    <p>Welcome back! Here's what's happening with your job postings.</p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stat-content">
                            <h3>12</h3>
                            <p>Active Jobs</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <h3>48</h3>
                            <p>Total Applications</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="stat-content">
                            <h3>1,234</h3>
                            <p>Job Views</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="stat-content">
                            <h3>5</h3>
                            <p>Hired</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="activity-section">
                    <h2>Recent Activity</h2>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>New application</strong> for Software Developer position</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Job viewed</strong> Marketing Manager - 15 times today</p>
                                <span class="activity-time">4 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Job approved</strong> UI/UX Designer position is now live</p>
                                <span class="activity-time">1 day ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Post Job Section -->
            <section id="post-job" class="dashboard-section">
                <div class="section-header">
                    <h1>Post a New Job</h1>
                    <p>Fill in the details to create a new job posting</p>
                </div>

                <form class="job-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="job-title">
                                <i class="fas fa-briefcase"></i>
                                Job Title
                            </label>
                            <input type="text" id="job-title" name="job_title" placeholder="e.g. Senior Software Developer" required>
                        </div>
                        <div class="form-group">
                            <label for="job-type">
                                <i class="fas fa-clock"></i>
                                Job Type
                            </label>
                            <select id="job-type" name="job_type" required>
                                <option value="">Select job type</option>
                                <option value="full-time">Full Time</option>
                                <option value="part-time">Part Time</option>
                                <option value="internship">Internship</option>
                                <option value="contract">Contract</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="salary-range">
                                <i class="fas fa-money-bill-wave"></i>
                                Salary Range
                            </label>
                            <input type="text" id="salary-range" name="salary_range" placeholder="e.g. PKR 50,000 - 80,000">
                        </div>
                        <div class="form-group">
                            <label for="location">
                                <i class="fas fa-map-marker-alt"></i>
                                Location
                            </label>
                            <input type="text" id="location" name="location" placeholder="e.g. Karachi, Pakistan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="job-description">
                            <i class="fas fa-align-left"></i>
                            Job Description
                        </label>
                        <textarea id="job-description" name="job_description" rows="6" placeholder="Describe the role, responsibilities, and requirements..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="requirements">
                            <i class="fas fa-list-check"></i>
                            Requirements
                        </label>
                        <textarea id="requirements" name="requirements" rows="4" placeholder="List the key requirements and qualifications..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="experience-level">
                                <i class="fas fa-star"></i>
                                Experience Level
                            </label>
                            <select id="experience-level" name="experience_level">
                                <option value="entry">Entry Level</option>
                                <option value="mid">Mid Level</option>
                                <option value="senior">Senior Level</option>
                                <option value="executive">Executive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="application-deadline">
                                <i class="fas fa-calendar-alt"></i>
                                Application Deadline
                            </label>
                            <input type="date" id="application-deadline" name="application_deadline">
                        </div>
                    </div>

                    <!-- Photo Upload Section -->
                    <div class="form-group">
                        <label for="job-image">
                            <i class="fas fa-image"></i>
                            Job Post Image (Optional)
                        </label>
                        <div class="file-upload-area">
                            <input type="file" id="job-image" name="job_image" accept="image/*" class="file-input">
                            <div class="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Click to upload or drag and drop</p>
                                <span>PNG, JPG or GIF (max. 2MB)</span>
                            </div>
                            <div class="image-preview" style="display: none;">
                                <img src="" alt="Preview">
                                <button type="button" class="remove-image">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary">Save as Draft</button>
                        <button type="submit" class="btn-primary">
                            <span>Publish Job</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </section>

            <!-- Manage Jobs Section -->
            <section id="manage-jobs" class="dashboard-section">
                <div class="section-header">
                    <h1>Manage Jobs</h1>
                    <p>View and manage your job postings</p>
                </div>

                <div class="jobs-table">
                    <div class="table-header">
                        <div class="search-filter">
                            <input type="text" placeholder="Search jobs..." class="search-input">
                            <select class="filter-select">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
                                <option value="expired">Expired</option>
                            </select>
                        </div>
                    </div>

                    <div class="jobs-list">
                        <div class="job-item">
                            <div class="job-info">
                                <h3>Senior Software Developer</h3>
                                <p>Full Time • Karachi • Posted 3 days ago</p>
                            </div>
                            <div class="job-stats">
                                <span class="stat">12 Applications</span>
                                <span class="stat">234 Views</span>
                            </div>
                            <div class="job-status">
                                <span class="status-badge active">Active</span>
                            </div>
                            <div class="job-actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        <div class="job-item">
                            <div class="job-info">
                                <h3>Marketing Manager</h3>
                                <p>Full Time • Lahore • Posted 1 week ago</p>
                            </div>
                            <div class="job-stats">
                                <span class="stat">8 Applications</span>
                                <span class="stat">156 Views</span>
                            </div>
                            <div class="job-status">
                                <span class="status-badge active">Active</span>
                            </div>
                            <div class="job-actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        <div class="job-item">
                            <div class="job-info">
                                <h3>UI/UX Designer</h3>
                                <p>Part Time • Remote • Posted 2 weeks ago</p>
                            </div>
                            <div class="job-stats">
                                <span class="stat">5 Applications</span>
                                <span class="stat">89 Views</span>
                            </div>
                            <div class="job-status">
                                <span class="status-badge draft">Draft</span>
                            </div>
                            <div class="job-actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Applications Section -->
            <section id="applications" class="dashboard-section">
                <div class="section-header">
                    <h1>Applications</h1>
                    <p>Review and manage job applications</p>
                </div>

                <div class="applications-grid">
                    <div class="application-card">
                        <div class="applicant-header">
                            <div class="applicant-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="applicant-info">
                                <h3>Ahmed Hassan</h3>
                                <p>Software Developer</p>
                                <span class="application-date">Applied 2 days ago</span>
                            </div>
                        </div>
                        <div class="application-details">
                            <p><strong>Position:</strong> Senior Software Developer</p>
                            <p><strong>Experience:</strong> 3 years</p>
                        </div>
                        <div class="application-actions">
                            <button class="btn-outline">View Resume</button>
                            <button class="btn-primary">Contact</button>
                        </div>
                    </div>

                    <div class="application-card">
                        <div class="applicant-header">
                            <div class="applicant-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="applicant-info">
                                <h3>Fatima Khan</h3>
                                <p>Marketing Specialist</p>
                                <span class="application-date">Applied 1 day ago</span>
                            </div>
                        </div>
                        <div class="application-details">
                            <p><strong>Position:</strong> Marketing Manager</p>
                            <p><strong>Experience:</strong> 2 years</p>
                        </div>
                        <div class="application-actions">
                            <button class="btn-outline">View Resume</button>
                            <button class="btn-primary">Contact</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Tab/Section Navigation
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.dashboard-section').forEach(section => {
                section.classList.remove('active');
            });
            
            // Remove active class from nav items
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Show selected section
            document.getElementById(sectionId).classList.add('active');
            
            // Add active class to clicked nav item
            event.target.closest('.nav-item').classList.add('active');
        }

        // Sidebar navigation
        document.querySelectorAll('.sidebar-nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const sectionId = this.getAttribute('href').substring(1);
                showSection(sectionId);
            });
        });

        // File upload functionality
        const fileInput = document.getElementById('job-image');
        const uploadPlaceholder = document.querySelector('.upload-placeholder');
        const imagePreview = document.querySelector('.image-preview');
        const removeImageBtn = document.querySelector('.remove-image');

        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.querySelector('img').src = e.target.result;
                    uploadPlaceholder.style.display = 'none';
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });

        removeImageBtn.addEventListener('click', function() {
            fileInput.value = '';
            uploadPlaceholder.style.display = 'block';
            imagePreview.style.display = 'none';
        });

        // Drag and drop functionality
        const fileUploadArea = document.querySelector('.file-upload-area');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            fileUploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            fileUploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            fileUploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            fileUploadArea.classList.add('highlight');
        }

        function unhighlight(e) {
            fileUploadArea.classList.remove('highlight');
        }

        fileUploadArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            
            // Trigger change event
            const event = new Event('change', { bubbles: true });
            fileInput.dispatchEvent(event);
        }

        // Profile dropdown toggle
        document.querySelector('.profile-menu').addEventListener('click', function() {
            this.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.profile-menu')) {
                document.querySelector('.profile-menu').classList.remove('active');
            }
        });
    </script>
</body>
</html>