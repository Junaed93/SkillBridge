<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Fund - SkillBridge</title>
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
          <span style="color: greenyellow">Skill</span><span style="color: blue">Bridge</span>
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
        <a href="proposal-stats.html" class="navbar-link">Proposals</a>
        <a href="client-chat.html" class="navbar-link">Chat</a>
        <a href="work-progress.html" class="navbar-link">Contracts</a>
        <a href="wallet.html" class="navbar-link active">Earnings</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="section section-gray" style="padding-top: 6rem; min-height: 80vh;">
    <div class="container">
      <div class="card" style="max-width: 600px; margin: 0 auto;">
        <h2 class="section-title" style="margin-bottom: 1.5rem;">Add Fund</h2>

        <form action="#" style="display: flex; flex-direction: column; gap: 20px;">
          <div class="form-group">
            <label class="form-label">Amount</label>
            <input type="number" class="form-input" placeholder="Enter amount to add" required />
          </div>

          <div class="form-group">
            <label class="form-label">Payment Method</label>
            <select class="form-input" required>
              <option value="" disabled selected>Select Payment Method</option>
              <option value="bkash">bKash</option>
              <option value="nagad">Nagad</option>
              <option value="bank">Bank Transfer</option>
            </select>
          </div>

          <div class="form-actions" style="margin-top: 1rem; display: flex; gap: 10px;">
            <a href="wallet.html" class="btn btn-secondary btn-sm">Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm">Add Funds</button>
          </div>
        </form>
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