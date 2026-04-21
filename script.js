// assets/js/script.js

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Grafik Produksi
    const ctx = document.getElementById('produksiChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Produksi Padi (ton)',
                    data: [850, 920, 1100, 1250, 1400, 1350],
                    borderColor: '#2d6a4f',
                    backgroundColor: 'rgba(45, 106, 79, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: '#2d6a4f',
                    pointBorderColor: '#fff',
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: { font: { size: 12 } }
                    },
                    tooltip: { backgroundColor: '#2d6a4f' }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: '#e5e7eb' },
                        title: { display: true, text: 'Ton', color: '#6b7280' }
                    },
                    x: {
                        grid: { display: false },
                        title: { display: true, text: 'Bulan', color: '#6b7280' }
                    }
                }
            }
        });
    }
    
    // 2. Animasi Counter untuk Statistik
    const counters = document.querySelectorAll('.counter-value');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        if (isNaN(target)) return;
        
        let current = 0;
        const increment = Math.ceil(target / 50);
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.innerText = current;
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    };
    
    // Intersection Observer untuk memulai animasi saat elemen terlihat
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
    
    // 3. Smooth Scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== "#" && href !== "#0") {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
    
    // 4. Navbar scroll effect
    let lastScroll = 0;
    const navbar = document.querySelector('nav');
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 100) {
            navbar.classList.add('shadow-md');
        } else {
            navbar.classList.remove('shadow-md');
        }
        lastScroll = currentScroll;
    });
});