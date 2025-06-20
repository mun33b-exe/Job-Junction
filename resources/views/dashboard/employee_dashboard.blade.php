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
                            <span class="nav-badge">{{ $applied_jobs_count ?? 0 }}</span>
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
            </nav>            <div class="quick-stats">
                <h4>Quick Stats</h4>
                <div class="stat-item">
                    <span class="stat-number">{{ $applied_jobs_count ?? 0 }}</span>
                    <span class="stat-label">Applications</span>
                </div>
            </div>
        </aside>        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-error" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif
            
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
                            </div>                            <div class="action-buttons">
                                <button class="btn-secondary" onclick="alert('Learn More functionality to be implemented')">Learn More</button>
                                <form action="{{route('job.action')}}" method="post" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="profile_id" value="{{ $data->id }}">
                                    <input type="hidden" name="job_id" value="{{ $job->id }}">
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
                </div>                <div class="applications-list">
                    @forelse($applied_jobs as $application)
                    <div class="application-item">
                        <div class="application-header">
                            
                            <div class="application-info">
                                <h3>{{ $application->job->job_title }}</h3>
                                <p>{{ $application->job->location }}</p>
                                <span class="application-date">Applied {{ $application->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        
                    </div>
                    @empty
                    <div class="no-applications">
                        <div class="empty-state">
                            <i class="fas fa-file-alt"></i>
                            <h3>No Applications Yet</h3>
                            <p>You haven't applied to any jobs yet. Start browsing and apply to jobs that interest you!</p>
                            <button class="btn-primary" onclick="showSection('job-feed')">Browse Jobs</button>
                        </div>
                    </div>
                    @endforelse
                </div>
            </section>            <!-- Saved Jobs Section -->
            <section id="saved-jobs" class="dashboard-section">
                <div class="section-header">
                    <h1>Saved Jobs</h1>
                    <p>Jobs you've bookmarked for later</p>
                </div>

                <div class="saved-jobs-grid">
                    @forelse($saved_jobs ?? [] as $saved)
                    <div class="saved-job-card">
                        <div class="job-header">
                            <div class="company-logo">
                                @if($saved->job->job_image)
                                    <img src="{{ asset('storage/' . $saved->job->job_image) }}" alt="{{ $saved->job->job_title }}">
                                @else
                                    <div style="width: 50px; height: 50px; background: var(--calm-teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                        {{ strtoupper(substr($saved->job->job_title, 0, 2)) }}
                                    </div>
                                @endif
                            </div>
                            <button class="unsave-btn" onclick="unsaveJob({{ $saved->id }})">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                        <h3>{{ $saved->job->job_title }}</h3>
                        <p>{{ Str::limit($saved->job->job_description, 100) }}</p>
                        <span class="location">
                            <i class="fas fa-map-marker-alt"></i> {{ $saved->job->location }}
                        </span>
                        <div class="salary-info">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>{{ $saved->job->salary_range }}</span>
                        </div>
                        <div class="action-buttons">
                            <form action="{{route('job.action')}}" method="post" style="display: inline;">
                                @csrf
                                <input type="hidden" name="profile_id" value="{{ $data->id }}">
                                <input type="hidden" name="job_id" value="{{ $saved->job->id }}">
                                <button class="btn-primary" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                    Apply Now
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="no-saved-jobs">
                        <div class="empty-state">
                            <i class="fas fa-bookmark"></i>
                            <h3>No Saved Jobs</h3>
                            <p>You haven't saved any jobs yet. Browse jobs and save the ones you're interested in!</p>
                            <button class="btn-primary" onclick="showSection('job-feed')">Browse Jobs</button>
                        </div>
                    </div>
                    @endforelse
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
        });        // Apply button functionality - Remove this section as it interferes with form submission
        // The forms should handle their own submission without JavaScript interference
          // Add loading state for apply buttons
        document.querySelectorAll('form[action*="job.action"]').forEach(form => {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Applying...';
                    submitBtn.disabled = true;
                }
            });
        });

        // Function to show job details in a modal or expand view
        function showJobDetails(jobId) {
            // For now, show an alert with job ID
            // Later this can be implemented with a modal or detailed view
            alert('View job details for Job ID: ' + jobId + '\n\nThis functionality will show detailed job information in a modal.');
        }        // Function to withdraw application
        function withdrawApplication(applicationId) {
            if (confirm('Are you sure you want to withdraw this application? This action cannot be undone.')) {
                // For now, show an alert
                // Later this should make an AJAX request to withdraw the application
                alert('Withdraw functionality for Application ID: ' + applicationId + '\n\nThis will be implemented to make an AJAX request to withdraw the application.');
            }
        }

        // Function to unsave a job
        function unsaveJob(savedJobId) {
            if (confirm('Are you sure you want to remove this job from your saved jobs?')) {
                // For now, show an alert
                // Later this should make an AJAX request to unsave the job
                alert('Unsave functionality for Saved Job ID: ' + savedJobId + '\n\nThis will be implemented to make an AJAX request to remove the job from saved jobs.');
            }
        }
    </script>
</body>
</html>