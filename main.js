// Main JavaScript functionality for O Democrata platform

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile navigation toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
    }

    // Search functionality
    const searchInput = document.querySelector('.search-input');
    const searchIcon = document.querySelector('.search-icon');
    
    if (searchInput) {
        searchInput.addEventListener('focus', function() {
            this.parentElement.classList.add('active');
        });
        
        searchInput.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('active');
            }
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch(this.value);
            }
        });
    }
    
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            const input = document.querySelector('.search-input');
            if (input && input.value) {
                performSearch(input.value);
            }
        });
    }

    // Category cards interaction
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            const category = this.querySelector('h3')?.textContent;
            if (category) {
                window.location.href = `reclamacoes.php?categoria=${encodeURIComponent(category)}`;
            }
        });
    });

    // Topic cards interaction
    const topicCards = document.querySelectorAll('.topic-card');
    topicCards.forEach(card => {
        card.addEventListener('click', function() {
            // Navigate to topic detail page
            window.location.href = 'discussao.php?id=' + Math.floor(Math.random() * 1000);
        });
    });

    // Complaint cards interaction
    const complaintCards = document.querySelectorAll('.complaint-card');
    complaintCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't navigate if clicking on action buttons
            if (e.target.closest('.complaint-stats')) return;
            
            window.location.href = 'reclamacao.php?id=' + Math.floor(Math.random() * 1000);
        });
    });

    // Proposal cards interaction
    const proposalCards = document.querySelectorAll('.proposal-card');
    proposalCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't navigate if clicking on action buttons
            if (e.target.closest('.proposal-stats')) return;
            
            window.location.href = 'proposta.php?id=' + Math.floor(Math.random() * 1000);
        });
    });

    // Institution cards interaction
    const institutionCards = document.querySelectorAll('.institution-card');
    institutionCards.forEach(card => {
        card.addEventListener('click', function() {
            const institutionName = this.querySelector('.institution-name')?.textContent;
            if (institutionName) {
                window.location.href = `instituicao.php?nome=${encodeURIComponent(institutionName)}`;
            }
        });
    });

    // Like/Dislike functionality
    const voteButtons = document.querySelectorAll('.stat-item');
    voteButtons.forEach(button => {
        if (button.querySelector('.fa-thumbs-up') || button.querySelector('.fa-thumbs-down')) {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                handleVote(this);
            });
        }
    });

    // Floating Action Button
    const fab = document.querySelector('.fab');
    if (fab) {
        // Add ripple effect
        fab.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    }

    // Notification system
    const notificationIcon = document.querySelector('.notification-icon');
    if (notificationIcon) {
        notificationIcon.addEventListener('click', function() {
            showNotifications();
        });
    }

    // Filter functionality
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            applyFilters();
        });
    });

    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Lazy loading for images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
});

// Search function
function performSearch(query) {
    if (!query.trim()) return;
    
    console.log('Searching for:', query);
    window.location.href = `busca.php?q=${encodeURIComponent(query)}`;
}

// Adicionar toggle de tema escuro/claro
function toggleTheme() {
    const currentScheme = document.documentElement.getAttribute('data-color-scheme') || 
                         (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    const newScheme = currentScheme === 'light' ? 'dark' : 'light';
    document.documentElement.setAttribute('data-color-scheme', newScheme);
    localStorage.setItem('colorScheme', newScheme);
}

// Inicializar tema salvo
const savedScheme = localStorage.getItem('colorScheme');
if (savedScheme) {
    document.documentElement.setAttribute('data-color-scheme', savedScheme);
}


// Vote handling
function handleVote(button) {
    const isUpvote = button.querySelector('.fa-thumbs-up') !== null;
    const countSpan = button.querySelector('span');
    const currentCount = parseInt(countSpan.textContent) || 0;
    
    // Simulate vote
    if (button.classList.contains('voted')) {
        // Remove vote
        countSpan.textContent = currentCount - 1;
        button.classList.remove('voted');
        button.style.color = '#6b7280';
    } else {
        // Add vote
        countSpan.textContent = currentCount + 1;
        button.classList.add('voted');
        button.style.color = isUpvote ? '#059669' : '#dc2626';
        
        // Add animation
        button.style.transform = 'scale(1.2)';
        setTimeout(() => {
            button.style.transform = 'scale(1)';
        }, 150);
    }
}

// Show notifications
function showNotifications() {
    const notifications = [
        {
            title: 'Nova resposta',
            message: 'Sua reclamação sobre iluminação recebeu uma resposta oficial.',
            time: '2 min atrás',
            type: 'success'
        },
        {
            title: 'Proposta aprovada',
            message: 'A proposta de ciclofaixas foi aprovada na câmara municipal.',
            time: '1 hora atrás',
            type: 'info'
        },
        {
            title: 'Novo comentário',
            message: 'Ana Costa comentou na sua discussão sobre transporte público.',
            time: '3 horas atrás',
            type: 'normal'
        }
    ];
    
    // Create notification popup
    const popup = document.createElement('div');
    popup.className = 'notification-popup';
    popup.innerHTML = `
        <div class="notification-header">
            <h3>Notificações</h3>
            <button class="close-notifications">&times;</button>
        </div>
        <div class="notification-list">
            ${notifications.map(notif => `
                <div class="notification-item ${notif.type}">
                    <div class="notification-content">
                        <h4>${notif.title}</h4>
                        <p>${notif.message}</p>
                        <span class="notification-time">${notif.time}</span>
                    </div>
                </div>
            `).join('')}
        </div>
        <div class="notification-footer">
            <a href="notificacoes.php">Ver todas as notificações</a>
        </div>
    `;
    
    document.body.appendChild(popup);
    
    // Close functionality
    popup.querySelector('.close-notifications').addEventListener('click', () => {
        popup.remove();
    });
    
    // Auto close after 5 seconds
    setTimeout(() => {
        if (popup.parentElement) {
            popup.remove();
        }
    }, 5000);
}

// Apply filters
function applyFilters() {
    const filters = {};
    document.querySelectorAll('.filter-select').forEach(select => {
        if (select.value) {
            const filterName = select.previousElementSibling.textContent.toLowerCase();
            filters[filterName] = select.value;
        }
    });
    
    console.log('Applied filters:', filters);
    
    // Here you would typically make an AJAX request to filter results
    // For now, we'll just reload with filter parameters
    const params = new URLSearchParams(filters);
    if (params.toString()) {
        window.location.search = params.toString();
    }
}

// Utility functions
function formatDate(date) {
    const now = new Date();
    const diffTime = Math.abs(now - date);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    
    if (diffDays === 1) return 'ontem';
    if (diffDays < 7) return `${diffDays} dias atrás`;
    if (diffDays < 30) return `${Math.ceil(diffDays / 7)} semanas atrás`;
    if (diffDays < 365) return `${Math.ceil(diffDays / 30)} meses atrás`;
    return `${Math.ceil(diffDays / 365)} anos atrás`;
}

function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + 'M';
    }
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'k';
    }
    return num.toString();
}

function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

// Add CSS for notifications and toasts
const style = document.createElement('style');
style.textContent = `
    .notification-popup {
        position: fixed;
        top: 70px;
        right: 20px;
        width: 350px;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        animation: slideIn 0.3s ease;
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .notification-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px 20px;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .notification-header h3 {
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin: 0;
    }
    
    .close-notifications {
        background: none;
        border: none;
        font-size: 20px;
        color: #6b7280;
        cursor: pointer;
        padding: 4px;
        border-radius: 4px;
    }
    
    .close-notifications:hover {
        background: #f3f4f6;
        color: #1f2937;
    }
    
    .notification-list {
        max-height: 400px;
        overflow-y: auto;
    }
    
    .notification-item {
        padding: 16px 20px;
        border-bottom: 1px solid #f3f4f6;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    
    .notification-item:hover {
        background: #f9fafb;
    }
    
    .notification-item:last-child {
        border-bottom: none;
    }
    
    .notification-item.success {
        border-left: 3px solid #10b981;
    }
    
    .notification-item.info {
        border-left: 3px solid #3b82f6;
    }
    
    .notification-content h4 {
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
        margin: 0 0 4px 0;
    }
    
    .notification-content p {
        font-size: 13px;
        color: #6b7280;
        margin: 0 0 6px 0;
        line-height: 1.4;
    }
    
    .notification-time {
        font-size: 11px;
        color: #9ca3af;
    }
    
    .notification-footer {
        padding: 12px 20px;
        border-top: 1px solid #e5e7eb;
        text-align: center;
    }
    
    .notification-footer a {
        color: #2563eb;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }
    
    .notification-footer a:hover {
        text-decoration: underline;
    }
    
    .toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 12px 20px;
        border-radius: 8px;
        color: white;
        font-weight: 500;
        z-index: 1000;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }
    
    .toast.show {
        opacity: 1;
        transform: translateY(0);
    }
    
    .toast-info {
        background: #3b82f6;
    }
    
    .toast-success {
        background: #10b981;
    }
    
    .toast-warning {
        background: #f59e0b;
    }
    
    .toast-error {
        background: #ef4444;
    }
    
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
    
    .voted {
        color: #2563eb !important;
    }
    
    @media (max-width: 768px) {
        .notification-popup {
            right: 10px;
            left: 10px;
            width: auto;
        }
        
        .toast {
            right: 10px;
            left: 10px;
            text-align: center;
        }
    }
`;

document.head.appendChild(style);