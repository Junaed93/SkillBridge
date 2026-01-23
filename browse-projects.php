<?php
session_start();
require_once 'db.php';

$pageTitle = 'Browse Projects - SkillBridge';
include 'header.php';

// Fetch open jobs
$query = "SELECT j.*, u.full_name as client_name 
          FROM jobs j 
          JOIN users u ON j.client_id = u.user_id 
          WHERE j.status = 'open' 
          ORDER BY j.created_at DESC";
$result = $conn->query($query);
?>

<?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'freelancer'): ?>
  <nav class="admin-navbar">
    <div class="navbar-content">
      <div class="navbar-links">
        <a href="freelancer-dashboard.php" class="navbar-link">Dashboard</a>
        <a href="submit-proposal.php" class="navbar-link">Proposals</a>
        <a href="client-chat.php" class="navbar-link">Chat</a>
        <a href="work-progress.php" class="navbar-link">Contracts</a>
        <a href="wallet.php" class="navbar-link">Earnings</a>
      </div>
    </div>
  </nav>
<?php endif; ?>

<!-- Page Title -->
<div class="section section-white">
  <div class="container">
    <h1 class="section-title">Browse Projects</h1>
    <p class="section-subtitle">Explore the latest job opportunities</p>
  </div>
</div>

<!-- Projects Grid -->
<div class="section section-gray">
  <div class="container">

    <div class="projects-grid">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($job = $result->fetch_assoc()): ?>
          <div class="project-card">
            <h3 class="project-title"><?php echo htmlspecialchars($job['title']); ?></h3>
            <span class="project-skills">Budget: $<?php echo number_format($job['budget'], 2); ?></span>
            <p class="project-description"><?php echo htmlspecialchars(substr($job['description'], 0, 150)) . (strlen($job['description']) > 150 ? '...' : ''); ?></p>
            <div class="project-tags">
              <span class="badge">Deadline: <?php echo date('M d, Y', strtotime($job['deadline'])); ?></span>
              <?php if (strtotime($job['deadline']) - time() < 86400 * 3): ?>
                <span class="badge urgent">Urgent</span>
              <?php endif; ?>
            </div>
            <div class="project-client">Client: <strong><?php echo htmlspecialchars($job['client_name']); ?></strong></div>
            <div class="project-actions">
              <a href="view-project-details.php?id=<?php echo $job['job_id']; ?>" class="btn btn-secondary btn-sm">Details</a>
              <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'freelancer'): ?>
                <a href="submit-proposal.php?job_id=<?php echo $job['job_id']; ?>" class="btn btn-primary btn-sm">Apply</a>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <div class="card" style="grid-column: 1 / -1; text-align: center; padding: 50px;">
          <h3>No projects found.</h3>
          <p style="color: var(--gray-600);">Check back later for new opportunities!</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>