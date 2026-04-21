// assets/js/script.js

// Animasi counter untuk statistik
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter-value');
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = parseInt(counter.getAttribute('data-target'));
            const current = parseInt(counter.innerText) || 0;
            const increment = target / 50;
            
            if (current < target) {
                counter.innerText = Math.ceil(current + increment);
                setTimeout(updateCount, 30);
            } else {
                counter.innerText = target;
            }
        };
        
        // Mulai animasi jika elemen terlihat
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCount();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(counter);
    });
});

// Fungsi untuk dashboard chart (jika ada)
function initDashboardChart() {
    const ctx = document.getElementById('produksiChart');
    if (!ctx) return;
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Produksi Padi (ton)',
                data: [850, 920, 1100, 1250, 1400, 1350],
                borderColor: '#2d6a4f',
                backgroundColor: 'rgba(45, 106, 79, 0.1)',
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' }
            }
        }
    });
}

// Panggil fungsi chart
initDashboardChart();