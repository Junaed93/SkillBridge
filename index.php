<?php
session_start();
$pageTitle = 'SkillBridge - Professional Freelance Marketplace';
include 'header.php';

// Handle role selection via GET for now (since JS is removed)
$role = isset($_GET['role']) ? $_GET['role'] : 'hiring';
$isFreelancer = ($role === 'freelancer');
?>

<!-- Hero Section -->
<div class="hero skillbridge-hero">
  <div class="hero-blob"></div>
  <div class="container">
    <div class="hero-content-wrapper">
      <div class="hero-text-content">
        <div class="hero-toggle">
          <a href="index.php?role=hiring" class="<?php echo !$isFreelancer ? 'toggle-active' : ''; ?>" style="text-decoration: none; color: inherit; font-weight: <?php echo !$isFreelancer ? '600' : '400'; ?>">For hiring</a>
          <label class="toggle-switch">
            <input type="checkbox" id="roleToggle" <?php echo $isFreelancer ? 'checked' : ''; ?> onclick="window.location.href='index.php?role=' + (this.checked ? 'freelancer' : 'hiring')" />
            <span class="toggle-slider"></span>
          </label>
          <a href="index.php?role=freelancer" class="<?php echo $isFreelancer ? 'toggle-active' : ''; ?>" style="text-decoration: none; color: inherit; font-weight: <?php echo $isFreelancer ? '600' : '400'; ?>">For Freelancers</a>
        </div>
        <h1 class="hero-title" id="heroTitle">
          <?php echo $isFreelancer ? "Find the best projects and grow your career." : "Connect with world-class talent and grow your business."; ?>
        </h1>
        <p class="hero-subtitle" id="heroSubtitle">
          <?php echo $isFreelancer ? "What kind of work are you looking for?" : "What are you looking for?"; ?>
        </p>

        <div class="hero-search">
          <input type="text" id="searchInput" class="search-input"
            placeholder="<?php echo $isFreelancer ? "Search for projects, categories, or skills..." : "Search for skills, services, or freelancers..."; ?>" />
          <a href="browse-projects.php" class="btn btn-primary search-btn">Search</a>
        </div>

        <div class="popular-searches">
          <span class="popular-label">Popular Searches:</span>
          <div class="popular-tags">
            <button class="popular-tag">UI/UX Designer</button>
            <button class="popular-tag">Web Developer</button>
            <button class="popular-tag">Video Editor</button>
            <button class="popular-tag">Data Scientist</button>
          </div>
        </div>

        <div class="hero-cta-buttons">
          <a href="signup.php" class="btn btn-primary btn-lg">Get started</a>
          <a href="testimonials.php" class="btn btn-outline btn-lg">Testimonials</a>
          <a href="browse-projects.php" class="btn btn-outline btn-lg" id="browseBtn">
            <?php echo $isFreelancer ? "Browse Top Projects" : "Browse Top Freelancers"; ?>
          </a>
        </div>
      </div>
      <div class="hero-image-content">
        <div class="hero-image-placeholder">
          <div class="hero-person">
            <?php if ($isFreelancer): ?>
              <img id="heroImage" class="hero-img-base" src="images/Adobe Express - file (1).png" style="z-index: 1;">
              <img id="heroImageOver" class="hero-img-over" src="images/Adobe Express - file.png" style="z-index: 2; display: block;">
            <?php else: ?>
              <img id="heroImage" class="hero-img-base" src="images/Adobe Express - file (1).png" style="z-index: 2;">
              <img id="heroImageOver" class="hero-img-over" src="images/Adobe Express - file.png" style="z-index: 1; display: block;">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Our Trusted Clients Section -->
<div class="section section-white">
  <div class="container">
    <h2 class="section-title">Our trusted clients</h2>
    <div class="trusted-clients-container">
      <?php
      $clients = [
        ['name' => 'Fariha Malon', 'img' => 'testi-1.jpg'],
        ['name' => 'Kashif Khan', 'img' => 'testi-2.jpg'],
        ['name' => 'Sarah Ahmed', 'img' => 'testi-3.jpg'],
        ['name' => 'John Smith', 'img' => 'testi-4.jpg'],
        ['name' => 'Emily Davis', 'img' => 'testi-5.jpg'],
        ['name' => 'Michael Brown', 'img' => 'testi-6.jpg'],
      ];
      foreach ($clients as $client):
      ?>
        <div class="client-item">
          <div class="client-avatar" style="overflow: hidden; border: 2px solid var(--blue-600);">
            <img src="images/testis/<?php echo $client['img']; ?>" alt="<?php echo $client['name']; ?>"
              style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="client-content">
            <h3 class="client-name"><?php echo $client['name']; ?></h3>
            <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
              incididunt ut labore.</p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>