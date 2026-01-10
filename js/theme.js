/**
 * Theme Management System
 * Handles toggling between light and dark modes and persistence via localStorage.
 */
document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const iconElement = themeToggleBtn ? themeToggleBtn.querySelector('i') : null;

    // Check for saved theme preference or system preference
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Determine initial theme
    // Priority: Saved > System
    let currentTheme = savedTheme || (systemPrefersDark ? 'dark' : 'light');

    // Apply initial theme
    applyTheme(currentTheme);

    // Toggle event listener
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            currentTheme = currentTheme === 'light' ? 'dark' : 'light';
            applyTheme(currentTheme);
        });
    }

    // Function to apply theme
    function applyTheme(theme) {
        if (theme === 'dark') {
            htmlElement.setAttribute('data-theme', 'dark');
            if (iconElement) {
                iconElement.classList.remove('fa-moon');
                iconElement.classList.add('fa-sun');
            }
        } else {
            htmlElement.removeAttribute('data-theme');
            if (iconElement) {
                iconElement.classList.remove('fa-sun');
                iconElement.classList.add('fa-moon');
            }
        }
        
        // Save preference
        localStorage.setItem('theme', theme);
    }
});
