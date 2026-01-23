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

/* ===== SEARCH & FILTERS ===== */
function initSearchAndFilters() {
    const searchForm = document.getElementById('searchForm');
    const filterButtons = document.querySelectorAll('[data-action="apply-filters"]');
    const clearButtons = document.querySelectorAll('[data-action="clear-filters"]');

    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const query = this.querySelector('input').value;
            console.log('Searching for:', query);
            // API connection point
            // fetch(`${this.getAttribute('data-api-endpoint')}?q=${query}`)...
        });
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const panel = this.closest('.filter-panel');
            if (panel) {
                const endpoint = panel.getAttribute('data-api-endpoint');
                const formData = new FormData();
                
                // Collect all inputs, selects, and checkboxes in the panel
                panel.querySelectorAll('input, select').forEach(input => {
                    if (input.type === 'checkbox') {
                        if (input.checked) formData.append(input.name, input.value);
                    } else {
                        formData.append(input.name, input.value);
                    }
                });
                
                console.log('Applying filters to:', endpoint, Object.fromEntries(formData));
                // API connection point
                // fetch(endpoint, { method: 'POST', body: formData })...
            }
        });
    });

    clearButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const panel = this.closest('.filter-panel');
            if (panel) {
                panel.querySelectorAll('input, select').forEach(input => {
                    if (input.type === 'checkbox') input.checked = false;
                    else if (input.tagName === 'SELECT') input.selectedIndex = 0;
                    else input.value = '';
                });
                console.log('Filters cleared');
            }
        });
    });
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

/* ===== NAVBAR RESPONSIVE TOGGLE ===== */
function initNavbar() {
    // Select all navbar content containers (e.g. main navbar and admin navbar)
    const navbars = document.querySelectorAll('.navbar-content');
    
    navbars.forEach(navbarContent => {
        const navbarLinks = navbarContent.querySelector('.navbar-links');
        
        // Only proceed if we have links but no existing toggle
        if (navbarLinks && !navbarContent.querySelector('.navbar-toggle')) {
            // Create Toggle Button
            const toggleBtn = document.createElement('button');
            toggleBtn.className = 'navbar-toggle';
            toggleBtn.innerHTML = '<i class="fas fa-bars" style="font-size: 1.25rem;"></i>';
            toggleBtn.ariaLabel = 'Toggle navigation';
            
            // Insert before navbarLinks
            navbarContent.insertBefore(toggleBtn, navbarLinks);
            
            // Add Click Handler
            toggleBtn.addEventListener('click', function() {
                navbarLinks.classList.toggle('active');
                const icon = this.querySelector('i');
                if (navbarLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        }
    });
}

// Auto-initialize components
document.addEventListener('DOMContentLoaded', () => {
    initDropdowns();
    initModals();
    initTabs();
    initFilterChips();
    initRoleToggle();
    initSearchAndFilters();
    setActiveNavLink();
    initNavbar();
});
