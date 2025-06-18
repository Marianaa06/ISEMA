<!-- <template>
    <div class="container mt-5">
        <h1 class="text-center mb-4 font-weight-bold"> Our Product </h1>
        <h2 class="text-left mb-4">Solusi Perguruan Tinggi</h2>
        <div class="row">
            <div class="col-md-4 mb-4" v-for="product in products" :key="product.id">
                <div class="card shadow-lg product-card" @mouseover="hover = product.id" @mouseleave="hover = null">
                    <img :src="product.image" class="card-img-top" alt="Produk">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">{{ product.name }}</h5>
                        <p class="text-muted">{{ product.description }}</p>


                        <button class="btn btn-success btn-block">Lihat Details</button>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
        <h2 class="text-left mb-4">Mahasiswa</h2>
        <div class="row">
            <div class="col-md-4 mb-4" v-for="product in products" :key="product.id">
                <div class="card shadow-lg product-card" @mouseover="hover = product.id" @mouseleave="hover = null">
                    <img :src="product.image" class="card-img-top" alt="Produk">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">{{ product.name }}</h5>
                        <p class="text-muted">{{ product.description }}</p>


                        <button class="btn btn-success btn-block">Lihat Details</button>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>        
    </div>
</template>

<script>
export default {
    data() {
        return {
            hover: null,
            products: [
                { id: 1, name: 'Website Pendidikan', description: 'Membantu anda untuk mengelola berbagai informasi instansi anda', image: 'https://apps.codepolitan.com/sites/learn/uploads/original/202308/airbnb.png' },
                { id: 2, name: 'Website Perusahaan', description: 'Membantu Perusahaan anda lebih mudah dikenali', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHIFaqOoAw-IL325QJmPwrkRgIFvlyO3gk2bCDx_iG7QGaOzqYTorQYPcA0CY7bXBTH6w&usqp=CAU'},
                { id: 3, name: 'Website Penjualan', description: 'Membuat product anda lebih mudah di akses',image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJlyXSbGOPD-Yg4fiQ-3HWmBJMVotKRaWqhDoqZFMsECUc6PArV3TTfGwGea4ezhj9vs0&usqp=CAU' },
                { id: 4, name: 'Website Artikel', description: 'Membantu para aktivis dalam belajar', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNdZabhpfmRGt7Jzabsf9t4VsU5Q7kgcTDk0JZf8XF5ekYx6CH5eJbkwiJK7V2mDRHlQI&usqp=CAU' },
                { id: 3, name: 'Website Kursus', description: 'Membantu menyalurkan semangat belajar generasi bangsa', image: 'https://via.placeholder.com/300' },
                { id: 3, name: 'Website Iklan', description: 'Membantu produk anda terjual dengan cepat',image: 'https://via.placeholder.com/300'},

            ]
        }
    }
}
</script>

<style scoped>
.product-card {
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
    border-radius: 10px;
}


.discount-badge {
    position: absolute;
    top: 10px;
    left: -5px;
    background-color: red;
    color: white;
    padding: 5px 15px;
    font-weight: bold;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    transform: rotate(-5deg);
}

.btn-success {
    border-radius: 25px;
    font-weight: bold;
}

.text-warning .fa {
    margin: 0 1px;
}

.pagination{
    justify-content: center;
    font-size: 20px;
    margin-top: 20px;
}
.page-item{
    margin: 3px;
    
}
.page-link{
    border-radius: 10px;
}
</style> -->



<template>
    <div class="product-container my-5">
        <div class="head row align-items-center">
            <div class="head-text col-md-6">
                <h1 class="title display-3 fw-bold">ISEMA'S <br>Products</h1>
                <p class="mt-4 fs-4"> Kami menghadirkan solusi digital lengkap untuk pengelolaan perguruan tinggi Anda. Setiap produk dirancang untuk memudahkan, mempercepat, dan meningkatkan efisiensi administrasi dan pembelajaran di kampus. Temukan produk yang sesuai dengan kebutuhan kampus Anda! 🎓 </p>
            </div>
            <div class="image-isema col-md-6 text-center">
                <img src="http://localhost:8000/assets/isemaweb.png" alt="isema" class="img-fluid rounded">
            </div>
        </div>
        <p class="type">Sistem Akademik</p>
        <div class="product-grid">
            <div class="product-card" v-for="product in products" :key="product.id" @click="goToDetail(product)">
                <img :src="product.image" alt="Product Image" class="product-image">
                <h2 class="product-name">{{ product.name }}</h2>
                <p class="product-description">{{ product.description }}</p>
            </div>
        </div>
        <p class="type">Learning Sistem Manajemen</p>
        <div class="product-grid">
            <div class="product-card" v-for="product in products_lms" :key="product.id">
                <img :src="product.image" alt="Product Image" class="product-image">
                <h2 class="product-name">{{ product.name }}</h2>
                <p class="product-description">{{ product.description }}</p>
            </div>
        </div>
        <p class="type">Modul</p>
        <div class="product-grid">
            <div class="product-card" v-for="product in products_modul" :key="product.id">
                <img :src="product.image" alt="Product Image" class="product-image">
                <h2 class="product-name">{{ product.name }}</h2>
                <p class="product-description">{{ product.description }}</p>
            </div>
        </div>
        <p class="type">Other Product</p>
        <div class="product-grid">
            <div class="product-card" v-for="product in products_other" :key="product.id">
                <img :src="product.image" alt="Product Image" class="product-image">
                <h2 class="product-name">{{ product.name }}</h2>
                <p class="product-description">{{ product.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: [
                { id: 1, name: 'SIAKAD Dosen', routeName:'SiakadDosenComponent', description: 'Sistem akademik untuk pengelolaan dosen', image: 'https://img.icons8.com/?size=100&id=lFcAshbc8BsG&format=png&color=000000' },
                { id: 2, name: 'SIAKAD Mahasiswa', routeName:'SiakadMahasiswaComponent', description: 'Sistem akademik untuk layanan mahasiswa', image: 'https://img.icons8.com/?size=100&id=ucblVF0Ow1t9&format=png&color=000000' },
                { id: 3, name: 'SIAKAD Admin', routeName:'SiakadAdminComponent', description: 'Sistem akademik untuk pengelolaan admin kampus', image: 'https://img.icons8.com/?size=100&id=68733&format=png&color=000000' },
            ],
            products_lms:[
                { id: 1, name: 'LMS Dosen', description: 'Sistem e-learning untuk dosen', image: 'https://img.icons8.com/?size=100&id=NoiEG6wf7l6N&format=png&color=000000' },
                { id: 2, name: 'LMS Mahasiswa', description: 'Sistem e-learning untuk mahasiswa', image: 'https://img.icons8.com/?size=100&id=LTodyzikmX8N&format=png&color=000000' },
            ],
            products_modul:[
                { id: 1, name: 'Modul Keuangan', description: 'Pengelolaan keuangan kampus', image: 'https://img.icons8.com/?size=100&id=66127&format=png&color=000000' },
                { id: 2, name: 'Modul Repository', description: 'Manajemen penyimpanan karya ilmiah', image: 'https://img.icons8.com/?size=100&id=T42h1yujoQQG&format=png&color=000000' },
                { id: 3, name: 'Modul Skripsi', description: 'Pengelolaan proses skripsi mahasiswa', image: 'https://img.icons8.com/?size=100&id=U59m5VfviwEC&format=png&color=000000' }
            ],
            products_other:[
                { id: 1, name: 'MBKM', description: 'Modul Merdeka Belajar Kampus Merdeka', image: 'https://img.icons8.com/?size=100&id=74374&format=png&color=000000' },
                { id: 2, name: 'Treasure Alumni', description: 'Database dan pelacakan alumni kampus', image: 'https://img.icons8.com/?size=100&id=46856&format=png&color=000000' },
                { id: 3, name: 'Jurnal', description: 'Pengelolaan jurnal penelitian kampus', image: 'https://img.icons8.com/?size=100&id=64656&format=png&color=000000' },
                { id: 4, name: 'Reporting', description: 'Pembuatan dan pengolahan laporan kampus', image: 'https://img.icons8.com/?size=100&id=vzm1EzLXxUTe&format=png&color=000000' },
            ]
        }
    },
    methods: {
    goToDetail(product) {
        let routePath = '';
        if (product.name === 'SIAKAD Dosen') {
            routePath = '/product/siakad-dosen';
        } else if (product.name === 'SIAKAD Mahasiswa') {
            routePath = '/product/siakad-mahasiswa';
        } else if (product.name === 'SIAKAD Admin') {
            routePath = '/product/siakad-admin';
        }

        this.$router.push(routePath);
}


}

}
</script>

<style scoped>
.product-container {
    /* padding: 30px; */
    font-family: 'Arial', sans-serif;
    min-height: 100vh;
    border-radius: 25px;
}

.head{

    text-align: start;
    display: flex;
    justify-content: space-between;
    background-image: url(http://localhost:8000/assets/bg.png);
    background-size: cover;
    padding: 0px;
    margin-bottom: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);


}

/* .head-text{
    width: 500px;
} */
.image-isema {
    margin: 0px;
    padding: 0px;
}

.image-isema img {
    width: 100%; /* Biar gambar penuh di kolom */
    width: 700px; /* Biar gak terlalu besar di layar lebar */
    height: 400px;
    border-radius: 15px;

}

.head p{
    font-size: 20px;
}
.title {
    display: flex;
    font-size: 70px;
    margin-bottom: 30px;
    color: #333;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}


.product-card {
    background-color: #e7c4ff;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.product-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 15px;
}

.product-name {
    font-size: 20px;
    margin-bottom: 10px;
    color: #550f7a;
}

.product-description {
    font-size: 14px;
    color: #666;
}

.type{
    margin-top: 50px;
    margin-bottom: 20px;
    font-size: 30px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    background-image: linear-gradient(rgb(141, 34, 236));
    border-radius: 15px;
    color: white;
}
</style>
