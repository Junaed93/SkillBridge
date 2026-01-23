<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proposal Overview - SkillBridge</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    .dashboard-container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
      font-family: Arial, sans-serif;
    }

    /* HERO */
    .profile-hero {
      background: linear-gradient(120deg, #eaf5ec, #f5f7fa);
      border-radius: 10px;
      padding: 25px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    .profile-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .profile-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #d1d5db;
    }

    .profile-info h2 {
      margin: 0;
      font-size: 20px;
    }

    .profile-info p {
      margin: 2px 0 0;
      color: #6b7280;
    }

    /* SECTIONS */
    .card-section {
      margin-bottom: 40px;
    }

    .section-header {
      margin-bottom: 20px;
    }

    .section-header h3 {
      margin: 0;
      font-size: 18px;
    }

    .section-header p {
      margin: 5px 0 0;
      color: #6b7280;
      font-size: 14px;
    }

    .section-header.center {
      text-align: center;
    }

    /* OVERVIEW */
    .overview-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 30px;
      margin-bottom: 20px;
    }

    .overview-actions {
      display: flex;
      gap: 10px;
    }

    .overview-image .image-placeholder {
      width: 200px;
      height: 120px;
      border-radius: 8px;
      background: #e5e7eb;
    }

    /* BUTTONS */
    .btn-primary {
      background: #9acd32;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-secondary {
      background: #f3f4f6;
      border: 1px solid #d1d5db;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-outline {
      background: transparent;
      border: 1px solid #9acd32;
      color: #2f7d32;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    /* PROPOSAL CARDS */
    .proposal-icons {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .proposal-card {
      width: 160px;
      background: #f9fafb;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
    }

    .file-icon {
      width: 50px;
      height: 50px;
      margin: 0 auto 10px;
      background: #d1fae5;
      border-radius: 8px;
    }

    .proposal-card p {
      margin: 5px 0;
      font-weight: 600;
    }

    .proposal-card span {
      font-size: 13px;
      color: #6b7280;
    }

    /* PENDING */
    .pending-actions {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }

    /* FEEDBACK */
    .feedback-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 15px;
      margin-bottom: 15px;
    }

    .feedback-card {
      background: #f9fafb;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      padding: 15px;
      font-size: 14px;
    }

    .feedback-actions {
      display: flex;
      gap: 10px;
    }

    /* STATS */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 25px;
    }

    .stat-card {
      background: #f9fafb;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }

    .stat-card h4 {
      margin: 0 0 8px;
      font-size: 14px;
      color: #6b7280;
    }

    .stat-card p {
      margin: 0;
      font-size: 22px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-content">
      <a href="index.html" class="navbar-logo">
        <img src="logo.png" alt="SkillBridge Logo" />
        <span style="font-family: calibri; font-size: 25px; font-weight: bold">
          <span style="color: #adff2f">Skill</span><span style="color: blue">Bridge</span>
        </span>
      </a>
      <div class="navbar-links">
        <a href="index.html" class="navbar-link"><i class="fas fa-home"></i> Home</a>
        <a href="browse-projects.html" class="navbar-link"><i class="fas fa-briefcase"></i> Browse Projects</a>
        <a href="#" class="navbar-link"><i class="fas fa-info-circle"></i> About</a>
        <div class="navbar-profile">
          <div class="avatar" style="width: 32px; height: 32px; font-size: 1rem">
            ðŸ‘¤
          </div>
        </div>
      </div>
    </div>
  </nav>

  <nav class="admin-navbar">
    <div class="navbar-content">
      <div class="navbar-links">
        <a href="freelancer-dashboard.html" class="navbar-link">Dashboard</a>
        <a href="proposal-stats.html" class="navbar-link active">Proposals</a>
        <a href="client-chat.html" class="navbar-link">Chat</a>
        <a href="work-progress.html" class="navbar-link">Contracts</a>
        <a href="wallet.html" class="navbar-link">Earnings</a>
      </div>
    </div>
  </nav>

  <div class="dashboard-container">

    <!-- PROFILE / HERO SECTION -->
    <section class="profile-hero">
      <div class="profile-left">
        <div class="profile-avatar"></div>
        <div class="profile-info">
          <h2>Junaid Akram</h2>
          <p>Freelancer Profile</p>
        </div>
      </div>
      <button class="btn-outline">Log out</button>
    </section>

    <!-- PROPOSAL OVERVIEW -->
    <section class="card-section">
      <div class="section-header">
        <h3>Proposal Overview</h3>
        <p>Here you can view and approve proposals</p>
      </div>

      <div class="overview-content">
        <div class="overview-actions">
          <a href="proposal-details.html" class="btn btn-primary btn-lg">Received Proposals</a>
          <a href="proposal-overview.html" class="btn btn-outline btn-lg">View Proposals</a>
        </div>

        <div class="overview-image">
          <div class="image-placeholder"></div>
        </div>
      </div>

      <div class="proposal-icons">
        <div class="proposal-card">
          <div class="file-icon"></div>
          <p>Proposal A</p>
          <span>Due by 03/10/2025</span>
        </div>
        <div class="proposal-card">
          <div class="file-icon"></div>
          <p>Proposal B</p>
          <span>Due by 05/10/2025</span>
        </div>
      </div>
    </section>

    <!-- PENDING PROPOSALS -->
    <section class="card-section">
      <div class="section-header">
        <h3>Pending Proposals</h3>
        <p>Proposals awaiting your review</p>
      </div>

      <div class="pending-actions">
        <button class="btn-secondary">Review Later</button>
        <button class="btn-primary">Approve All</button>
      </div>

      <div class="proposal-icons">
        <div class="proposal-card">
          <div class="file-icon"></div>
          <p>Proposal C</p>
          <span>Due by 12/10/2025</span>
        </div>
      </div>
    </section>

    <!-- RECENT FEEDBACK -->
    <section class="card-section">
      <div class="section-header">
        <h3>Recent Feedback</h3>
        <p>Feedback from your completed projects</p>
      </div>

      <div class="feedback-grid">
        <div class="feedback-card">
          <strong>John Doe</strong>
          <p>Great work, very professional and responsive!</p>
        </div>
        <div class="feedback-card">
          <strong>Sarah Khan</strong>
          <p>The project was delivered on time and exceeded expectations.</p>
        </div>
      </div>
    </section>

    <!-- PROPOSAL STATISTICS -->
    <section class="card-section">
      <div class="section-header center">
        <h3>Proposal Statistics</h3>
        <p>Check the latest stats of your proposals</p>
        <button class="btn-secondary">View More</button>
      </div>

      <div class="stats-grid">
        <div class="stat-card">
          <h4>Total Proposals</h4>
          <p>50</p>
        </div>
        <div class="stat-card">
          <h4>Pending Reviews</h4>
          <p>10</p>
        </div>
        <div class="stat-card">
          <h4>Approved Proposals</h4>
          <p>35</p>
        </div>
      </div>
    </section>

  </div>


  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Column 1 -->
      <div class="footer-col">
        <h2 class="logo">SkillsBridge</h2>
        <p class="tagline">Where employment bridges skills</p>

        <h4>Address:</h4>
        <p>
          442 lorem ipsum, lorem<br />
          Dhaka, Bangladesh
        </p>

        <h4>Contact:</h4>
        <p>
          +880-1710999999<br />
          +880-1910999999<br />
          support@skillbridge.com
        </p>
      </div>

      <!-- Column 2 -->
      <div class="footer-col">
        <h4>Services:</h4>
        <ul>
          <li>Post a Job</li>
          <li>Browse Jobs</li>
        </ul>

        <h4>Find a:</h4>
        <ul>
          <li>Web Designer</li>
          <li>Photoshop designer</li>
          <li>Illustrator designer</li>
          <li>Visualizer</li>
          <li>SEO expert</li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="footer-col">
        <h4>Find a job for skills:</h4>
        <ul>
          <li>Web development</li>
          <li>Photoshop</li>
          <li>Illustrator</li>
          <li>After effects</li>
          <li>SEO</li>
          <li>Digital Marketing</li>
          <li>Social Media Management</li>
          <li>C++ developer</li>
          <li>PHP developer</li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div class="footer-col">
        <h4>Legal:</h4>
        <ul>
          <li>Contact</li>
          <li>Privacy Policy</li>
          <li>Terms and conditions</li>
        </ul>

        <div class="social-icons">
          <a href="#" class="social-link">Facebook</a>
          <a href="#" class="social-link">Instagram</a>
          <a href="#" class="social-link">Email</a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">© 2026, SkillBridge, Inc</div>
  </footer>

  <script>
    // Toggle navbar links based on role selection
    document.addEventListener('DOMContentLoaded', function () {
      const roleToggle = document.getElementById('roleToggle');
      const findProjectLink = document.getElementById('findProjectLink');
      const postProjectLink = document.getElementById('postProjectLink');
      const heroToggle = document.querySelector('.hero-toggle');
      const allToggleSpans = heroToggle ? heroToggle.querySelectorAll('span:not(.toggle-switch)') : [];

      function updateNavbar() {
        if (roleToggle && roleToggle.checked) {
          // Freelancer mode - show "Find a Project", hide "Post a Project"
          if (findProjectLink) {
            findProjectLink.style.display = 'inline-flex';
          }
          if (postProjectLink) {
            postProjectLink.style.display = 'none';
          }
        } else {
          // Hiring mode - show "Post a Project", hide "Find a Project"
          if (findProjectLink) {
            findProjectLink.style.display = 'none';
          }
          if (postProjectLink) {
            postProjectLink.style.display = 'inline-block';
          }
        }
      }

      // Update toggle label styling based on state
      function updateToggleLabels() {
        if (allToggleSpans.length >= 2) {
          if (roleToggle.checked) {
            // Freelancer mode - second span (For Freelancers) should be active
            allToggleSpans[0].classList.remove('toggle-active');
            allToggleSpans[0].style.fontWeight = '400';
            allToggleSpans[0].style.color = 'var(--gray-600)';
            allToggleSpans[1].classList.add('toggle-active');
            allToggleSpans[1].style.fontWeight = '600';
            allToggleSpans[1].style.color = 'var(--gray-900)';
          } else {
            // Hiring mode - first span (For hiring) should be active
            allToggleSpans[0].classList.add('toggle-active');
            allToggleSpans[0].style.fontWeight = '600';
            allToggleSpans[0].style.color = 'var(--gray-900)';
            allToggleSpans[1].classList.remove('toggle-active');
            allToggleSpans[1].style.fontWeight = '400';
            allToggleSpans[1].style.color = 'var(--gray-600)';
          }
        }
      }

      // Listen for toggle changes
      if (roleToggle) {
        roleToggle.addEventListener('change', function () {
          updateNavbar();
          updateToggleLabels();
        });

        // Initialize on page load (default: hiring mode - unchecked)
        updateNavbar();
        updateToggleLabels();
      }
    });
  </script>
</body>

</html>