<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard - JobJunction</title>
    <meta name="description" content="Discover job opportunities and manage your career with JobJunction's employee dashboard.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/employee_dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="dashboard-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h2>JobJunction</h2>
                    <span class="dashboard-badge">Employee</span>
                </div>
                <div class="search-bar">
                    <div class="search-container">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search jobs, companies, skills...">
                    </div>
                </div>
                <div class="header-actions">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">5</span>
                    </div>
                    <div class="messages">
                        <i class="fas fa-comment-dots"></i>
                        <span class="message-count">2</span>
                    </div>
                    <div class="profile-menu">
                        <div class="profile-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="profile-dropdown">
                            <a href="#"><i class="fas fa-user-circle"></i> View Profile</a>
                            <a href="#"><i class="fas fa-cog"></i> Settings</a>
                            <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
            <div class="user-profile-card">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-info">
                    <h3>{{ $data->fullname }}</h3>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item active">
                        <a href="#job-feed">
                            <i class="fas fa-home"></i>
                            <span>Job Feed</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#my-applications">
                            <i class="fas fa-file-alt"></i>
                            <span>My Applications</span>
                            <span class="nav-badge">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#saved-jobs">
                            <i class="fas fa-bookmark"></i>
                            <span>Saved Jobs</span>
                            <span class="nav-badge">8</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#job-alerts">
                            <i class="fas fa-bell"></i>
                            <span>Job Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile">
                            <i class="fas fa-user-edit"></i>
                            <span>Edit Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume">
                            <i class="fas fa-file-pdf"></i>
                            <span>Resume Builder</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="quick-stats">
                <h4>Quick Stats</h4>
                <div class="stat-item">
                    <span class="stat-number">12</span>
                    <span class="stat-label">Applications</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">3</span>
                    <span class="stat-label">Interviews</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">47</span>
                    <span class="stat-label">Profile Views</span>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Job Feed Section -->
            <section id="job-feed" class="dashboard-section active">
                <div class="section-header">
                    <h1>Recommended Jobs</h1>
                    <div class="filter-options">
                        <select class="filter-select">
                            <option value="all">All Jobs</option>
                            <option value="recent">Recent</option>
                            <option value="relevant">Most Relevant</option>
                            <option value="salary">High Salary</option>
                        </select>
                        <button class="filter-btn">
                            <i class="fas fa-filter"></i>
                            Filters
                        </button>
                    </div>
                </div>

                <!-- Job Feed -->
                <div class="job-feed">
                    @forelse($all_jobs as $job)
                    <!-- Job Post -->
                    <article class="job-post">
                        <div class="job-header">
                            
                            <div class="job-meta">
                                <h3 class="job-title">{{ $job->job_title }}</h3>
                                <div class="job-details">
                                    <span class="location"><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                                    <span class="job-type">{{ $job->job_type }}</span>
                                    <span class="posted-time">{{ $job->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="job-actions">
                                <button class="action-btn save-btn" title="Save Job">
                                    <i class="fas fa-bookmark"></i>
                                </button>
                                <button class="action-btn more-btn" title="More Options">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>

                        <div class="job-content">
                        
                            
                            <div class="job-description">
                                <h4>Job Description:</h4>
                                <p>{{ $job->job_description }}</p>
                            </div>
                            
                            @if($job->requirements)
                            <div class="job-requirements">
                                <h4>Requirements:</h4>
                                <p>{{ $job->requirements }}</p>
                            </div>
                            @endif
                            
                            <div class="job-tags">
                                <span class="tag">{{ $job->job_type }}</span>
                                <span class="tag">{{ $job->experience_level }}</span>
                            </div>
                            
                            <div class="salary-range">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>{{ $job->salary_range }}</span>
                            </div>
                            
                            @if($job->application_deadline)
                            <div class="application-deadline">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Apply by: {{ \Carbon\Carbon::parse($job->application_deadline)->format('M d, Y') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="job-footer">
                            <div class="engagement-stats">
                                <span><i class="fas fa-eye"></i> 0 views</span>
                                <span><i class="fas fa-users"></i> 0 applicants</span>
                            </div>
                            
                            <div class="action-buttons">
                                <form action="{{route('job.action')}}" method="post">
                                @csrf
                                <input type="text" name="profile_id" value="{{ $data->id }}" hidden>
                                <input type="text" name="job_id" value="{{ $job->id }}" hidden>
                                <button class="btn-secondary">Learn More</button>
                                <button class="btn-primary" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                    Apply Now
                                </button>
                                </form>
                            </div>
                        </div>
                    </article>
                    @empty
                    <!-- No Jobs Found -->
                    <div class="no-jobs-found">
                        <div class="empty-state">
                            <i class="fas fa-briefcase"></i>
                            <h3>No Jobs Available</h3>
                            <p>There are currently no job postings available. Please check back later.</p>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Load More Button -->
                <div class="load-more-container">
                    <button class="btn-outline load-more-btn">
                        <i class="fas fa-sync-alt"></i>
                        Load More Jobs
                    </button>
                </div>
            </section>

            <!-- My Applications Section -->
            <section id="my-applications" class="dashboard-section">
                <div class="section-header">
                    <h1>My Applications</h1>
                    <p>Track the status of your job applications</p>
                </div>

                <div class="applications-list">
                    <div class="application-item">
                        <div class="application-header">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/50x50/4F959D/FFFFFF?text=TI" alt="TechInnovate">
                            </div>
                            <div class="application-info">
                                <h3>Senior Software Developer</h3>
                                <p>TechInnovate Solutions</p>
                                <span class="application-date">Applied 3 days ago</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge under-review">Under Review</span>
                        </div>
                        <div class="application-actions">
                            <button class="btn-outline">View Details</button>
                            <button class="btn-secondary">Withdraw</button>
                        </div>
                    </div>

                    <div class="application-item">
                        <div class="application-header">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/50x50/205781/FFFFFF?text=DM" alt="Digital Marketing Pro">
                            </div>
                            <div class="application-info">
                                <h3>Digital Marketing Manager</h3>
                                <p>Digital Marketing Pro</p>
                                <span class="application-date">Applied 1 week ago</span>
                            </div>
                        </div>
                        <div class="application-status">
                            <span class="status-badge interview">Interview Scheduled</span>
                        </div>
                        <div class="application-actions">
                            <button class="btn-outline">View Details</button>
                            <button class="btn-primary">Join Interview</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Saved Jobs Section -->
            <section id="saved-jobs" class="dashboard-section">
                <div class="section-header">
                    <h1>Saved Jobs</h1>
                    <p>Jobs you've bookmarked for later</p>
                </div>

                <div class="saved-jobs-grid">
                    <div class="saved-job-card">
                        <div class="job-header">
                            <div class="company-logo">
                                <img src="https://via.placeholder.com/50x50/98D2C0/FFFFFF?text=UI" alt="UI Design Studio">
                            </div>
                            <button class="unsave-btn">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                        <h3>UI/UX Designer</h3>
                        <p>Creative Design Studio</p>
                        <span class="location">Remote</span>
                        <div class="action-buttons">
                            <button class="btn-primary">Apply Now</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Right Sidebar -->
        <aside class="right-sidebar">
            

            <div class="tips-card">
                <h4>Career Tips</h4>
                <div class="tips-list">
                    <div class="tip-item">
                        <i class="fas fa-lightbulb"></i>
                        <p>Optimize your profile with relevant keywords</p>
                    </div>
                    <div class="tip-item">
                        <i class="fas fa-lightbulb"></i>
                        <p>Follow up on your applications</p>
                    </div>
                </div>
            </div>
        </aside>
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

        // Save/Unsave job functionality
        document.querySelectorAll('.save-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.classList.toggle('saved');
                const icon = this.querySelector('i');
                if (this.classList.contains('saved')) {
                    icon.style.color = '#4F959D';
                } else {
                    icon.style.color = '#666';
                }
            });
        });

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

        // Search functionality
        document.querySelector('.search-container input').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            // Add search logic here
            console.log('Searching for:', searchTerm);
        });

        // Load more jobs
        document.querySelector('.load-more-btn').addEventListener('click', function() {
            // Add loading animation
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
            
            // Simulate loading delay
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-sync-alt"></i> Load More Jobs';
                // Add new job posts here
            }, 2000);
        });

        // Apply button functionality
        document.querySelectorAll('.btn-primary').forEach(btn => {
            if (btn.textContent.includes('Apply Now')) {
                btn.addEventListener('click', function() {
                    // Add apply logic here
                    this.innerHTML = '<i class="fas fa-check"></i> Applied';
                    this.disabled = true;
                    this.style.backgroundColor = '#2ed573';
                });
            }
        });
    </script>
</body>
</html>