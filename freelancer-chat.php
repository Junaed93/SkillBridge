<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat with Clients - SkillBridge</title>
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
                        👤
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
                <a href="client-chat.html" class="navbar-link active">Chat</a>
                <a href="work-progress.html" class="navbar-link">Contracts</a>
                <a href="wallet.html" class="navbar-link">Earnings</a>
            </div>
        </div>
    </nav>

    <!-- Two-Panel Chat Interface -->
    <div class="section section-gray" style="padding-top: 4rem;">
        <div class="container">
            <div style="display: flex; gap: 20px; max-width: 1200px; margin: 0 auto;">

                <!-- Left Panel: Client List -->
                <div class="card" style="width: 300px; flex-shrink: 0; padding: 20px;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem;">Messages</h3>
                    <div style="display: flex; flex-direction: column; gap: 10px;">

                        <!-- Active Client -->
                        <div
                            style="display: flex; align-items: center; gap: 12px; padding: 12px; background: linear-gradient(135deg, rgba(156, 199, 70, 0.1) 0%, rgba(49, 157, 214, 0.1) 100%); border-radius: 10px; border-left: 4px solid var(--blue-600); cursor: pointer;">
                            <div
                                style="width: 45px; height: 45px; background: linear-gradient(135deg, var(--blue-600), var(--blue-700)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">
                                JD</div>
                            <div style="flex: 1; min-width: 0;">
                                <p style="font-weight: 600; margin: 0; font-size: 0.95rem;">John Doe</p>
                                <p style="color: var(--gray-600); margin: 0; font-size: 0.85rem;">Client</p>
                            </div>
                        </div>

                        <!-- Other Clients -->
                        <div
                            style="display: flex; align-items: center; gap: 12px; padding: 12px; background: #f9f9f9; border-radius: 10px; cursor: pointer;">
                            <div
                                style="width: 45px; height: 45px; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">
                                TS</div>
                            <div style="flex: 1; min-width: 0;">
                                <p style="font-weight: 600; margin: 0; font-size: 0.95rem;">Tech Solutions</p>
                                <p style="color: var(--gray-600); margin: 0; font-size: 0.85rem;">Company</p>
                            </div>
                        </div>

                        <div
                            style="display: flex; align-items: center; gap: 12px; padding: 12px; background: #f9f9f9; border-radius: 10px; cursor: pointer;">
                            <div
                                style="width: 45px; height: 45px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">
                                IL</div>
                            <div style="flex: 1; min-width: 0;">
                                <p style="font-weight: 600; margin: 0; font-size: 0.95rem;">Innovate Ltd</p>
                                <p style="color: var(--gray-600); margin: 0; font-size: 0.85rem;">Enterprise</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Panel: Chat Area -->
                <div class="card" style="flex: 1; display: flex; flex-direction: column;">

                    <!-- Chat Header -->
                    <div
                        style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: linear-gradient(135deg, rgba(156, 199, 70, 0.1) 0%, rgba(49, 157, 214, 0.1) 100%); border-radius: 12px; margin-bottom: 20px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div
                                style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--blue-600), var(--blue-700)); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: 600;">
                                JD</div>
                            <div>
                                <h3 style="font-size: 1.3rem; font-weight: 600; margin: 0 0 0.25rem 0;">John Doe</h3>
                                <p style="color: var(--gray-600); margin: 0; font-size: 0.95rem;"><i
                                        class="fas fa-briefcase" style="margin-right: 0.5rem;"></i>Client</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary btn-sm">View Profile</a>
                    </div>

                    <!-- Messages -->
                    <div style="flex: 1; overflow-y: auto; padding: 0 20px;">
                        <div class="messages-list"
                            style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 1.5rem;">
                            <div class="message-item"
                                style="background: #f9f9f9; border-radius: 10px; padding: 16px; border-left: 4px solid var(--blue-600);">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <p style="font-weight: 600; margin: 0;">John Doe</p>
                                    <span style="font-size: 0.85rem; color: var(--gray-500);">09:15 AM</span>
                                </div>
                                <p style="color: var(--gray-600); margin: 0;">Hello, I reviewed your proposal. Are you
                                    available for a quick call?</p>
                            </div>
                            <div class="message-item"
                                style="background: linear-gradient(135deg, rgba(156, 199, 70, 0.1) 0%, rgba(49, 157, 214, 0.1) 100%); border-radius: 10px; padding: 16px; border-left: 4px solid #10b981;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <p style="font-weight: 600; margin: 0;">You</p>
                                    <span style="font-size: 0.85rem; color: var(--gray-500);">09:20 AM</span>
                                </div>
                                <p style="color: var(--gray-600); margin: 0;">Hi John! Yes, I am available. Does 2 PM
                                    work for you?</p>
                            </div>
                            <div class="message-item"
                                style="background: #f9f9f9; border-radius: 10px; padding: 16px; border-left: 4px solid var(--blue-600);">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <p style="font-weight: 600; margin: 0;">John Doe</p>
                                    <span style="font-size: 0.85rem; color: var(--gray-500);">09:25 AM</span>
                                </div>
                                <p style="color: var(--gray-600); margin: 0;">That sounds perfect. I'll send the invite.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Message Input -->
                    <div style="padding: 20px; border-top: 1px solid var(--gray-200);">
                        <div style="display: flex; gap: 1rem;">
                            <input type="text" class="form-input" placeholder="Type your message..." style="flex: 1;" />
                            <button class="btn btn-primary btn-sm">Send</button>
                        </div>
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