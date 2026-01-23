/**
 * SkillBridge - Main JavaScript Entry Point
 * Initializes all UI components and shared functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize UI components
    if (typeof initDropdowns === 'function') initDropdowns();
    if (typeof initModals === 'function') initModals();
    if (typeof initTabs === 'function') initTabs();
    if (typeof initFormValidation === 'function') initFormValidation();
    
    // Initialize role toggle if present on page
    if (typeof initRoleToggle === 'function') initRoleToggle();
    
    // Initialize filter chips if present
    if (typeof initFilterChips === 'function') initFilterChips();
    
    console.log('SkillBridge initialized');
});

/**
 * Utility: Get element by selector with null check
 * @param {string} selector - CSS selector
 * @returns {Element|null}
 */
function getElement(selector) {
    return document.querySelector(selector);
}

/**
 * Utility: Get all elements by selector
 * @param {string} selector - CSS selector
 * @returns {NodeList}
 */
function getElements(selector) {
    return document.querySelectorAll(selector);
}

/**
 * Utility: Add event listener with null check
 * @param {string} selector - CSS selector
 * @param {string} event - Event type
 * @param {Function} handler - Event handler
 */
function addEvent(selector, event, handler) {
    const element = typeof selector === 'string' ? getElement(selector) : selector;
    if (element) {
        element.addEventListener(event, handler);
    }
}

/**
 * Utility: Toggle class on element
 * @param {Element} element - DOM element
 * @param {string} className - Class to toggle
 */
function toggleClass(element, className) {
    if (element) {
        element.classList.toggle(className);
    }
}

/**
 * Utility: Show/hide element
 * @param {Element} element - DOM element
 * @param {boolean} show - Whether to show or hide
 */
function setVisible(element, show) {
    if (element) {
        element.classList.toggle('hidden', !show);
    }
}
