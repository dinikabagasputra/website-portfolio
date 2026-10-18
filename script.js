// script.js

document.addEventListener('DOMContentLoaded', () => {
    fetchProjects();

    const addForm = document.getElementById('add-project-form');
    if (addForm) {
        addForm.addEventListener('submit', handleAddProject);
    }

    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Terima kasih, Dinika telah menerima pesan Anda!');
            contactForm.reset();
        });
    }
});

// Array sementara untuk menyimpan data proyek lokal untuk preview
let globalProjects = [];

// Fetch data proyek dari backend PHP/MySQL
async function fetchProjects() {
    const container = document.getElementById('projects-list');
    try {
        const response = await fetch('api/projects.php');
        const result = await response.json();

        if (result.status === 'success' && result.data.length > 0) {
            globalProjects = result.data;
            container.innerHTML = result.data.map((p, index) => {
                const imgUrl = p.image_url && p.image_url.trim() !== '' ? p.image_url : 'https://images.unsplash.com/photo-1555066931-4365d14bab8c';
                return `
                <div class="glass-card rounded-2xl overflow-hidden border border-gray-800 hover:border-blue-500/50 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <!-- Container Foto Proyek (Bisa Diklik) -->
                        <div class="relative h-48 overflow-hidden bg-gray-950 cursor-pointer" onclick="openImageModal('${imgUrl}', '${p.title.replace(/'/g, "\\'")}', '${p.description.replace(/'/g, "\\'")}')">
                            <img src="${imgUrl}" alt="${p.title}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                <span class="bg-blue-600/90 text-white text-xs px-3 py-1.5 rounded-full font-semibold backdrop-blur-sm flex items-center gap-1.5 shadow-lg">
                                    <i class="fa-solid fa-expand"></i> Lihat Hasil Proyek
                                </span>
                            </div>
                            <span class="absolute top-3 left-3 text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 bg-blue-600/90 text-white rounded-md backdrop-blur-sm">${p.category}</span>
                        </div>
                        
                        <!-- Konten Teks Proyek -->
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-white mb-2 cursor-pointer hover:text-blue-400 transition" onclick="openImageModal('${imgUrl}', '${p.title.replace(/'/g, "\\'")}', '${p.description.replace(/'/g, "\\'")}')">${p.title}</h3>
                            <p class="text-gray-400 text-xs leading-relaxed mb-4 line-clamp-3">${p.description}</p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-0">
                        <div class="text-[11px] text-gray-400 bg-gray-900/60 p-2.5 rounded-lg border border-gray-800">
                            <span class="text-blue-400 font-semibold">Tech Stack:</span> ${p.tech_stack}
                        </div>
                    </div>
                </div>
            `}).join('');
        } else {
            container.innerHTML = `<p class="text-center text-gray-400 col-span-full py-8">Belum ada proyek ditambahkan ke database.</p>`;
        }
    } catch (error) {
        console.error("Error loading projects:", error);
        container.innerHTML = `<p class="text-center text-red-400 col-span-full py-8">Gagal terhubung ke API / Database MySQL.</p>`;
    }
}

// Tambah proyek baru
async function handleAddProject(e) {
    e.preventDefault();

    const newProject = {
        title: document.getElementById('p-title').value,
        category: document.getElementById('p-category').value,
        tech_stack: document.getElementById('p-tech').value,
        description: document.getElementById('p-desc').value,
        image_url: document.getElementById('p-image').value || 'https://images.unsplash.com/photo-1555066931-4365d14bab8c'
    };

    try {
        const response = await fetch('api/projects.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(newProject)
        });

        const result = await response.json();

        if (result.status === 'success') {
            alert('Proyek berhasil ditambahkan!');
            closeModal();
            document.getElementById('add-project-form').reset();
            fetchProjects();
        } else {
            alert('Gagal: ' + result.message);
        }
    } catch (error) {
        console.error("Error adding project:", error);
        alert('Terjadi kesalahan saat menyimpan proyek.');
    }
}

// Modal Control untuk Preview Gambar
function openImageModal(imgSrc, title, desc) {
    document.getElementById('modal-img-target').src = imgSrc;
    document.getElementById('modal-img-title').innerText = title;
    document.getElementById('modal-img-desc').innerText = desc;
    document.getElementById('image-modal').classList.remove('hidden');
}

function closeImageModal() {
    document.getElementById('image-modal').classList.add('hidden');
}

// Modal Control Form Tambah Proyek
function openModal() {
    document.getElementById('project-modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('project-modal').classList.add('hidden');
}