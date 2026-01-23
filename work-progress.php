<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];
$error = '';
$success = '';

// Handle progress update submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['project_id'])) {
  $project_id = $_POST['project_id'];
  $percent = $_POST['percent'];
  $details = $_POST['details'];

  $stmt = $conn->prepare("INSERT INTO project_progress (project_id, progress_percent, details) VALUES (?, ?, ?)");
  $stmt->bind_param("iis", $project_id, $percent, $details);
  if ($stmt->execute()) {
    $success = "Progress update submitted!";
  } else {
    $error = "Error: " . $stmt->error;
  }
}

// Fetch active projects for the user
if ($role === 'freelancer') {
  $query = "SELECT p.*, j.title, u.full_name as other_party 
              FROM projects p 
              JOIN jobs j ON p.job_id = j.job_id 
              JOIN users u ON p.client_id = u.user_id 
              WHERE p.freelancer_id = ? AND p.status = 'active'";
} else {
  $query = "SELECT p.*, j.title, u.full_name as other_party 
              FROM projects p 
              JOIN jobs j ON p.job_id = j.job_id 
              JOIN users u ON p.freelancer_id = u.user_id 
              WHERE p.client_id = ? AND p.status = 'active'";
}

$stmt_proj = $conn->prepare($query);
$stmt_proj->bind_param("i", $user_id);
$stmt_proj->execute();
$projects = $stmt_proj->get_result();

$pageTitle = 'Work Progress - SkillBridge';
include 'header.php';
?>

<nav class="admin-navbar">
  <div class="navbar-content">
    <div class="navbar-links">
      <?php if ($role === 'client'): ?>
        <a href="client-dashboard.php" class="navbar-link">Dashboard</a>
        <a href="request-quote.php" class="navbar-link">Quotes</a>
        <a href="client-chat.php" class="navbar-link">Chat</a>
        <a href="proposal-overview.php" class="navbar-link">Proposals</a>
        <a href="work-progress.php" class="navbar-link active">Work Approval</a>
      <?php else: ?>
        <a href="freelancer-dashboard.php" class="navbar-link">Dashboard</a>
        <a href="submit-proposal.php" class="navbar-link">Proposals</a>
        <a href="client-chat.php" class="navbar-link">Chat</a>
        <a href="work-progress.php" class="navbar-link active">Contracts</a>
        <a href="wallet.php" class="navbar-link">Earnings</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<!-- Page Header -->
<div class="section section-white" style="padding-top: 4rem; padding-bottom: 2rem;">
  <div class="container">
    <h1 class="section-title">Active Projects & Progress</h1>
    <p class="section-subtitle" style="text-align: center;">Track project milestones and submit updates.</p>
  </div>
</div>

<div class="section section-gray">
  <div class="container">
    <?php if ($success): ?>
      <div class="alert alert-success" style="margin-bottom: 1rem; color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; padding: 0.75rem; border-radius: 0.25rem;">
        <?php echo $success; ?>
      </div>
    <?php endif; ?>

    <?php if ($projects->num_rows > 0): ?>
      <?php while ($proj = $projects->fetch_assoc()):
        // Fetch latest progress
        $stmt_prog = $conn->prepare("SELECT * FROM project_progress WHERE project_id = ? ORDER BY updated_at DESC LIMIT 1");
        $stmt_prog->bind_param("i", $proj['project_id']);
        $stmt_prog->execute();
        $latest_prog = $stmt_prog->get_result()->fetch_assoc();
        $percent = $latest_prog['progress_percent'] ?? 0;
      ?>
        <div class="card" style="margin-bottom: 2rem;">
          <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1.5rem;">
            <div>
              <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem;"><?php echo htmlspecialchars($proj['title']); ?></h2>
              <p style="color: var(--gray-600);"><strong><?php echo $role === 'client' ? 'Freelancer' : 'Client'; ?>:</strong> <?php echo htmlspecialchars($proj['other_party']); ?></p>
            </div>
            <span class="badge badge-info"><?php echo ucfirst($proj['status']); ?></span>
          </div>

          <div style="margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
              <span>Overall Progress</span>
              <span><?php echo $percent; ?>%</span>
            </div>
            <div style="width: 100%; background: #e5e7eb; height: 12px; border-radius: 6px; overflow: hidden;">
              <div style="width: <?php echo $percent; ?>%; background: var(--blue-600); height: 100%;"></div>
            </div>
          </div>

          <?php if ($role === 'freelancer'): ?>
            <div style="background: #f9f9f9; padding: 20px; border-radius: 8px;">
              <h4 style="margin-bottom: 1rem;">Submit Progress Update</h4>
              <form action="work-progress.php" method="post">
                <input type="hidden" name="project_id" value="<?php echo $proj['project_id']; ?>">
                <div class="grid grid-2">
                  <div class="form-group">
                    <label class="form-label">Progress Percentage (0-100)</label>
                    <input type="number" name="percent" class="form-input" min="0" max="100" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Details</label>
                    <input type="text" name="details" class="form-input" placeholder="What did you work on?" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" style="border: none; cursor: pointer;">Submit Update</button>
              </form>
            </div>
          <?php endif; ?>

          <div style="margin-top: 2rem;">
            <h4 style="margin-bottom: 1rem;">Recent History</h4>
            <div style="max-height: 200px; overflow-y: auto;">
              <?php
              $stmt_history = $conn->prepare("SELECT * FROM project_progress WHERE project_id = ? ORDER BY updated_at DESC");
              $stmt_history->bind_param("i", $proj['project_id']);
              $stmt_history->execute();
              $history = $stmt_history->get_result();
              while ($h = $history->fetch_assoc()):
              ?>
                <div style="border-bottom: 1px solid #eee; padding: 10px 0;">
                  <span style="font-weight: bold;"><?php echo $h['progress_percent']; ?>%</span> -
                  <span><?php echo htmlspecialchars($h['details']); ?></span>
                  <small style="float: right; color: #888;"><?php echo date('M d, H:i', strtotime($h['updated_at'])); ?></small>
                </div>
              <?php endwhile;
              if ($history->num_rows == 0) echo "<p style='color: #888;'>No updates yet.</p>"; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="card" style="text-align: center; padding: 50px;">
        <h3>No active projects.</h3>
        <p style="color: var(--gray-600);">Go to Browse Projects or check your Proposals to get started!</p>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php include 'footer.php'; ?>