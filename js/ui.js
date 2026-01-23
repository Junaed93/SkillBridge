/**
 * SkillBridge - UI Components
 * Handles dropdowns, modals, tabs, filters, and role toggles
 */

/* ===== DROPDOWNS ===== */
function initDropdowns() {
    const dropdownTriggers = document.querySelectorAll('[data-dropdown-trigger]');
    
    dropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.stopPropagation();
            const targetId = this.getAttribute('data-dropdown-trigger');
            const dropdown = document.getElementById(targetId);
            
            if (dropdown) {
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu.active').forEach(menu => {
                    if (menu.id !== targetId) {
                        menu.classList.remove('active');
                    }
                });
                
                dropdown.classList.toggle('active');
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown-menu.active').forEach(menu => {
            menu.classList.remove('active');
        });
    });
}

/* ===== MODALS ===== */
function initModals() {
    // Open modal triggers
    const modalTriggers = document.querySelectorAll('[data-modal-open]');
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const modalId = this.getAttribute('data-modal-open');
            openModal(modalId);
        });
    });
    
    // Close modal triggers
    const closeTriggers = document.querySelectorAll('[data-modal-close]');
    closeTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const modal = this.closest('.modal-overlay');
            if (modal) {
                closeModal(modal.id);
            }
        });
    });
    
    // Close on overlay click
    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal(this.id);
            }
        });
    });
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const activeModal = document.querySelector('.modal-overlay:not(.hidden)');
            if (activeModal) {
                closeModal(activeModal.id);
            }
        }
    });
}

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

/* ===== TABS ===== */
function initTabs() {
    const tabContainers = document.querySelectorAll('[data-tabs]');
    
    tabContainers.forEach(container => {
        const tabs = container.querySelectorAll('[data-tab]');
        const panels = container.querySelectorAll('[data-tab-panel]');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetPanel = this.getAttribute('data-tab');
                
                // Update active tab
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Show target panel, hide others
                panels.forEach(panel => {
                    if (panel.getAttribute('data-tab-panel') === targetPanel) {
                        panel.classList.remove('hidden');
                    } else {
                        panel.classList.add('hidden');
                    }
                });
            });
        });
    });
}

/* ===== FILTER CHIPS ===== */
function initFilterChips() {
    const filterGroups = document.querySelectorAll('.filter-chips');
    
    filterGroups.forEach(group => {
        const chips = group.querySelectorAll('.filter-chip');
        const isMultiSelect = group.hasAttribute('data-multi-select');
        
        chips.forEach(chip => {
            chip.addEventListener('click', function() {
                if (isMultiSelect) {
                    // Toggle individual chip
                    this.classList.toggle('active');
                } else {
                    // Single select - deactivate others
                    chips.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    });
}

/* ===== ROLE TOGGLE (Landing Page) ===== */
function initRoleToggle() {
    const roleToggle = document.getElementById('roleToggle');
    if (!roleToggle) return;
    
    const heroTitle = document.getElementById('heroTitle');
    const heroSubtitle = document.getElementById('heroSubtitle');
    const searchInput = document.getElementById('searchInput');
    const browseBtn = document.getElementById('browseBtn');
    const heroImage = document.getElementById('heroImage');
    const heroImageOver = document.getElementById('heroImageOver');
    
    const heroToggle = document.querySelector('.hero-toggle');
    const toggleLabels = heroToggle ? heroToggle.querySelectorAll('span:not(.toggle-switch)') : [];
    
    function updateContent() {
        const isFreelancer = roleToggle.checked;
        
        if (isFreelancer) {
            // Freelancer mode
            if (heroTitle) heroTitle.textContent = "Find the best projects and grow your career.";
            if (heroSubtitle) heroSubtitle.textContent = "What kind of work are you looking for?";
            if (searchInput) searchInput.placeholder = "Search for projects, categories, or skills...";
            if (browseBtn) {
                browseBtn.textContent = "Browse Top Projects";
                browseBtn.href = "pages/freelancer/browse-projects.html";
            }
        } else {
            // Hiring mode
            if (heroTitle) heroTitle.textContent = "Connect with world-class talent and grow your business.";
            if (heroSubtitle) heroSubtitle.textContent = "What are you looking for?";
            if (searchInput) searchInput.placeholder = "Search for skills, services, or freelancers...";
            if (browseBtn) {
                browseBtn.textContent = "Browse Top Freelancers";
                browseBtn.href = "pages/client/browse-freelancers.html";
            }
        }
        
        // Update hero images
        if (heroImage && heroImageOver) {
            heroImage.style.zIndex = isFreelancer ? "1" : "2";
            heroImageOver.style.zIndex = isFreelancer ? "2" : "1";
        }
        
        // Update toggle labels
        updateToggleLabels(isFreelancer);
    }
    
    function updateToggleLabels(isFreelancer) {
        if (toggleLabels.length >= 2) {
            toggleLabels[0].style.fontWeight = isFreelancer ? '400' : '600';
            toggleLabels[0].style.color = isFreelancer ? 'var(--gray-600)' : 'var(--gray-900)';
            toggleLabels[1].style.fontWeight = isFreelancer ? '600' : '400';
            toggleLabels[1].style.color = isFreelancer ? 'var(--gray-900)' : 'var(--gray-600)';
        }
    }
    
    // Listen for toggle changes
    roleToggle.addEventListener('change', updateContent);
    
    // Initialize on load
    updateContent();
}

/* ===== UI STATE TOGGLES ===== */
function toggleActiveState(element) {
    if (element) {
        element.classList.toggle('active');
    }
}

function setActiveState(element, isActive) {
    if (element) {
        element.classList.toggle('active', isActive);
    }
}

/* ===== NAVBAR ACTIVE LINK ===== */
function setActiveNavLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.navbar-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && currentPath.includes(href.replace('../', '').replace('./', ''))) {
            link.classList.add('active');
        }
    });
}

// Auto-initialize navbar active state
document.addEventListener('DOMContentLoaded', setActiveNavLink);
