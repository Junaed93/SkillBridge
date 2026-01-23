<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proposal Overview - SkillBridge</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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
        <a href="post-project.html" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i> Post a Project</a>
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
        <a href="client-dashboard.html" class="navbar-link">Dashboard</a>
        <a href="request-quote.html" class="navbar-link">Quotes</a>
        <a href="client-chat.html" class="navbar-link">Chat</a>
        <a href="proposal-overview.html" class="navbar-link active">Proposals</a>
        <a href="work-progress.html" class="navbar-link">Work Approval</a>
        <a href="client-feedback.html" class="navbar-link">Ratings & Reviews</a>
      </div>
    </div>
  </nav>

  <!-- Proposal Overview Header -->
  <div class="section section-white" style="padding-top: 4rem; padding-bottom: 2rem;">
    <div class="container">
      <div class="card">
        <div class="proposal-header" style="display: flex; align-items: center; gap: 20px; padding: 20px;">
          <div
            style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--blue-600), var(--blue-700)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: 600;">
            AK</div>
          <div>
            <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 0.5rem;">Amelia Katherine</h2>
            <p style="color: var(--gray-600); font-weight: 500;"><i class="fas fa-briefcase"
                style="margin-right: 0.5rem;"></i>Freelancer</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Proposals -->
  <div class="section section-gray">
    <div class="container">
      <div class="card">
        <h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Pending Proposals</h2>
        <div class="proposals-grid"
          style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;">
          <div class="proposal-card"
            style="background: #ffffff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 20px; display: flex; flex-direction: column; gap: 12px;">
            <h3 style="font-size: 1.1rem; font-weight: 600; margin: 0;">Proposal A</h3>
            <p style="color: var(--gray-600); font-size: 0.95rem; margin: 0;"><i class="fas fa-calendar"
                style="margin-right: 0.5rem;"></i>Due by 01/10/2026</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span class="badge badge-warning">Pending</span>
              <a href="proposal-details.html" class="btn btn-primary btn-sm">Review</a>
            </div>
          </div>
          <div class="proposal-card"
            style="background: #ffffff; border: 1px solid var(--gray-200); border-radius: 12px; padding: 20px; display: flex; flex-direction: column; gap: 12px;">
            <h3 style="font-size: 1.1rem; font-weight: 600; margin: 0;">Proposal B</h3>
            <p style="color: var(--gray-600); font-size: 0.95rem; margin: 0;"><i class="fas fa-calendar"
                style="margin-right: 0.5rem;"></i>Due by 05/10/2026</p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span class="badge badge-warning">Pending</span>
              <a href="proposal-details.html" class="btn btn-primary btn-sm">Review</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Recent Feedback -->
  <div class="section section-white">
    <div class="container">
      <div class="card">
        <h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Recent Feedback</h2>
        <div class="feedback-grid"
          style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
          <div class="feedback-card" style="background: #f9f9f9; border-radius: 12px; padding: 20px;">
            <div style="display: flex; gap: 1px; margin-bottom: 0.75rem;">
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
            </div>
            <p style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">5.0 / 5.0</p>
            <p style="color: var(--gray-600); margin-bottom: 1rem; font-size: 0.95rem;">Excellent work quality and
              professionalism.</p>
            <p style="color: var(--gray-500); font-size: 0.85rem;"><i class="fas fa-calendar-alt"
                style="margin-right: 0.5rem;"></i>2026-01-15</p>
          </div>
          <div class="feedback-card" style="background: #f9f9f9; border-radius: 12px; padding: 20px;">
            <div style="display: flex; gap: 1px; margin-bottom: 0.75rem;">
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star" style="color: #fbbf24;"></i>
              <i class="fas fa-star-half-alt" style="color: #fbbf24;"></i>
            </div>
            <p style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">4.8 / 5.0</p>
            <p style="color: var(--gray-600); margin-bottom: 1rem; font-size: 0.95rem;">Great communication and timely
              delivery.</p>
            <p style="color: var(--gray-500); font-size: 0.85rem;"><i class="fas fa-calendar-alt"
                style="margin-right: 0.5rem;"></i>2026-01-10</p>
          </div>
        </div>
        <div style="text-align: center; margin-top: 1.5rem;">
          <a href="client-feedback.html" class="btn btn-primary btn-sm">View All</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Proposal Statistics -->
  <div class="section section-gray">
    <div class="container">
      <div class="card">
        <h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Proposal Statistics</h2>

        <div class="stats-grid"
          style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">

          <!-- Total Proposals -->
          <div class="stat-card"
            style="background: linear-gradient(135deg, var(--blue-600) 0%, var(--blue-700) 100%); border-radius: 12px; padding: 20px; color: white; text-align: center;">
            <p style="opacity: 0.9; margin-bottom: 0.5rem; font-size: 0.95rem;">Total Proposals</p>
            <p style="font-size: 2.2rem; font-weight: 700;">50</p>
          </div>

          <!-- Accepted -->
          <div class="stat-card"
            style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; padding: 20px; color: white; text-align: center;">
            <p style="opacity: 0.9; margin-bottom: 0.5rem; font-size: 0.95rem;">Accepted</p>
            <p style="font-size: 2.2rem; font-weight: 700;">10</p>
          </div>

          <!-- Rejected -->
          <div class="stat-card"
            style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border-radius: 12px; padding: 20px; color: white; text-align: center;">
            <p style="opacity: 0.9; margin-bottom: 0.5rem; font-size: 0.95rem;">Rejected</p>
            <p style="font-size: 2.2rem; font-weight: 700;">35</p>
          </div>

          <!-- Pending -->
          <div class="stat-card"
            style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border-radius: 12px; padding: 20px; color: white; text-align: center;">
            <p style="opacity: 0.9; margin-bottom: 0.5rem; font-size: 0.95rem;">Pending</p>
            <p style="font-size: 2.2rem; font-weight: 700;">5</p>
          </div>

        </div>
      </div>
    </div>
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

    <div class="footer-bottom">&copy; 2026, SkillBridge, Inc</div>
  </footer>
</body>

</html>