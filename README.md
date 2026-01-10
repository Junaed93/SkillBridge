# SkillBridge

SkillBridge is a modern web platform designed to bridge the gap between skilled freelancers and clients looking for talent. This repository contains the complete frontend implementation of the application, featuring a responsive design, role-based dashboards, and a clean, user-friendly interface.

## 🚀 Features

### Core
*   **Modern Landing Page**: Dynamic hero section and trusted client showcase.
*   **Authentication**: Login and Signup pages with role-selection logic (Freelancer, Client, Admin).
*   **Responsive Design**: Optimized for desktop, tablet, and mobile devices using Flexbox and CSS Grid.

### 👨‍💻 For Freelancers
*   **Dashboard**: Overview of active projects, earnings, and proposals.
*   **Project Browsing**: Browse and search for available jobs.
*   **Proposal System**: Submit proposals with bid amounts and cover letters.
*   **Wallet**: Track earnings, transaction history, and withdraw funds.
*   **Chat**: Real-time messaging interface with clients.

### 💼 For Clients
*   **Dashboard**: Manage posted projects and view incoming notes.
*   **Post Projects**: Detailed form to create new job listings.
*   **Proposal Management**: Review, accept, or reject freelancer proposals.
*   **Freelancer Browsing**: Search for talent by skills and ratings.
*   **Feedback**: Rate and review freelancers.

### 🛡️ For Admins
*   **Master Dashboard**: Platform-wide statistics and oversight.
*   **User Management**: Approve or reject new freelancer and client accounts.
*   **Verification**: Review identity documents and user credentials.

## 🛠️ Technology Stack
*   **HTML5**: Semantic and accessible markup.
*   **CSS3**: Custom styling using a modular architecture (`base`, `layout`, `components`, `pages`). No external CSS frameworks used.
*   **JavaScript**: Vanilla JS for navigation toggles, role redirection, and basic interactivity.
*   **Icons**: Font Awesome 6.

## 📂 Project Structure

```text
SkillBridge/
├── assets/                 # Images, logos, and icons
├── css/                    # Stylesheets
│   ├── pages/              # Page-specific styles (dashboard, wallet, etc.)
│   ├── base.css           # Reset, variables, and typography
│   ├── components.css     # Reusable UI components (cards, buttons, forms)
│   └── layout.css         # Navbar, footer, and grid layouts
├── pages/                  # Application pages by role
│   ├── admin/             # Admin-specific pages
│   ├── auth/              # Login and Signup pages
│   ├── client/            # Client-specific pages
│   └── freelancer/        # Freelancer-specific pages
├── index.html             # Main landing page
└── testimonials.html      # Customer success stories
```

## 📦 Setup & Usage

1.  Clone the repository or download the source code.
2.  Navigate to the project root directory.
3.  Open `index.html` in your preferred web browser.
4.  Navigate through the app using the navigation links.
    *   **Login**: Use the login page to "simulate" logging in as different roles (redirection is handled via simple JS).

## 📝 Backend Integration Notes
The frontend is designed with backend integration in mind:
*   **Empty States**: Lists (projects, testimonials) use empty containers ready for API data injection.
*   **Forms**: Standard `<form>` elements with appropriate `name` attributes are ready for POST requests.
*   **IDs**: Critical elements have unique IDs for easy DOM manipulation.

## 📄 License
This project is proprietary software of SkillBridge, Inc. &copy; 2026.