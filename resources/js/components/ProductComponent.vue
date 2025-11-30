
<template>
  <div class="product-page">
    <div class="opening container-fluid p-0"> <div class="row g-0 min-vh-100"> 
      <div class="col-md-6 content-left d-flex align-items-center justify-content-center">
          <div class="head-text p-5"> 
            <h1 class="title display-3 fw-bold">ISEMA'S <br>Products</h1>
            <h2>Platform Digital Terintegrasi untuk Perguruan Tinggi</h2>
            <p class="mt-4 fs-5">Setiap produk dirancang untuk memudahkan, mempercepat, dan meningkatkan efisiensi administrasi dan pembelajaran di kampus.</p>
            <div class="cta-section mt-5"> <h4 class="fs-6">Tertarik dengan Sistem Kami?</h4>
              <p class="fs-6">Hubungi kami untuk penjadwalan demo atau konsultasi langsung!</p>
              <button class="btn-demo">Hubungi Kami</button>
          </div>
        </div>
      </div>

            <div class="col-md-6 image-right">
                </div>
        </div>
    </div>

    <div class="partner">
        <div class="logo">
            <img src="https://ftik.uindatokarama.ac.id/wp-content/uploads/2023/08/LOGO-UIN-DATOKARAMA-PALU-PNG-300x300.png" alt="UIN">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/Harvard_University_logo.svg" alt="UIN">
            <img src="https://logowik.com/content/uploads/images/university-of-oxford9718.jpg" alt="UIN">
            <img src="https://download.logo.wine/logo/KAIST/KAIST-Logo.wine.png" alt="UIN">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzo3KRtKR5W9_2RkSC1XoklcGjqP343307Jw&s" alt="UIN">

        </div>
    </div>

     <div class="word-category">
    <div class="word">
        <h2>Introducing Our Product</h2>
     </div>
    <!-- <div class="category-filter">
      <button v-for="(category, index) in categories" :key="index" class="category-btn" @click="filterCategory(category)">
        {{ category }}
      </button>
      <hr class="garis-samar">
    </div> -->
    </div>

    <div class="product-grid">
      <div class="product-card" v-for="(product, index) in filteredProducts" :key="index" @click="goToProduct(product.link)">
        <img :src="product.image" class="product-image" />
        <div class="product-content">
          <h2 class="product-title">{{ product.title }}</h2>
          <p class="product-subtitle">{{ product.subtitle }}</p>
        </div>
      </div>
    </div>

    <div class="testimonial-container">
    <h2 class="testimonial-title"><em>What clients say about our product</em></h2>

    <div class="testimonial-content">
      <button @click="prevTestimonial" class="nav-button">❮</button>

      <div class="testimonial-text">
        <p>{{ testimonials[currentIndex].text }}</p>

        <div class="author-info">
          <img :src="testimonials[currentIndex].image" alt="Author" class="author-image" />
          <div>
            <h4>{{ testimonials[currentIndex].name }}</h4>
            <p>{{ testimonials[currentIndex].position }}</p>
          </div>
        </div>
      </div>

      <button @click="nextTestimonial" class="nav-button">❯</button>
    </div>
  </div>

    <div class="combined-sections container-fluid p-0">
        <div class="row g-0 min-vh-100 align-items-stretch">
            <div class="col-lg-6 contact-section">
                <div class="contact-content">
                    <h2 class="contact-title">Tertarik dengan Sistem Kami?</h2>
                    <p class="contact-subtitle">Kami siap membantu Anda memulai!</p>
                    <a href="/harga-produk" class="btn-harga-produk mt-4">
                     Lihat Harga Produk >>>
                    </a>

                </div>
            </div>

            <div class="col-lg-6 faq-wrapper">
                <div class="faq-section">
                    <h2 class="faq-title">Frequently Asked Questions</h2>

                    <div id="app"> 
                        <div v-for="(faq, index) in faqs" :key="index" class="faq-item" :class="{ 'active': faq.open }">
                            <div class="faq-question" @click="toggleFAQ(index)">
                                <h4>{{ faq.question }}</h4>
                                <span>{{ faq.open ? '-' : '+' }}</span>
                            </div>
                            <div class="faq-answer">
                                <p>{{ faq.answer }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  </div>
</template>

<script>
export default {
  name: 'ProductComponent',
  data() {
    return {
        currentIndex: 0,
      selectedCategory: 'All',
      categories: ['All', 'SIAKAD', 'LMS', 'Modul', 'MBKM', 'Alumni', 'Jurnal', 'Reporting', 'CBT'],
      products: [
        { title: 'Sistem Informasi Akademik', subtitle: 'Dosen, Mahasiswa, Admin', image: 'http://localhost:8000/assets/siakad-logo.png', category: 'SIAKAD', link: '/product/siakad' },
        { title: 'Learning Manajemen System', subtitle: 'Belajar Online Efektif', image: 'http://localhost:8000/assets/lms-logo.png', category: 'LMS', link: '/product/lms' },
        { title: 'Modul Keuangan', subtitle: 'Pengelolaan Data Terintegrasi', image: 'http://localhost:8000/assets/modul-keuangan-logo.png', category: 'Modul', link: '/product/modul-keuangan' },
        { title: 'Modul Repository', subtitle: 'Pengelolaan Data Terintegrasi', image: 'http://localhost:8000/assets/modul-skripsi-logo.png', category: 'Modul', link: '/product/modul-skripsi' },
        { title: 'MBKM', subtitle: 'Merdeka Belajar Kampus Merdeka', image: 'http://localhost:8000/assets/mbkm-logo.png', category: 'MBKM', link: '/product/mbkm' },
        { title: 'Tracer Alumni', subtitle: 'Jejaring Alumni', image: 'http://localhost:8000/assets/traceralumni.png', category: 'Alumni', link: '/product/alumni' },
        { title: 'Jurnal Digital', subtitle: 'Publikasi Dosen dan Mahasiswa', image: 'http://localhost:8000/assets/jurnal-logo.png', category: 'Jurnal', link: '/product/jurnal' },
        { title: 'Reporting Visual', subtitle: 'Laporan Real-Time', image: 'http://localhost:8000/assets/reporting-logo.png', category: 'Reporting', link: '/product/reporting' },
        { title: 'CBT', subtitle: 'Computer Based Test', image: 'http://localhost:8000/assets/cbt-logo.png', category: 'CBT', link: '/product/CBT' },
        { title: 'PMB', subtitle: 'Penerimaan Mahasiswa Baru', image: 'http://localhost:8000/assets/pmb-logo.png', category: 'PMB', link: '/product/pmb' },


      ],
      testimonials: [
        {
          text: "SIAKAD ini sangat membantu pekerjaan saya dalam mengelola data akademik dengan cepat dan efisien.",
          name: "Dr. Andrew G. Tennyson",
          position: "Dosen Kimia - Universitas ABC",
          image: "https://images.squarespace-cdn.com/content/v1/64542f9c9a51d00223da291b/c7d02331-dc86-4c4f-b768-59d232c146ef/Jeff+Rosen.jpg",
        },
        {
          text: "Sistem LMS ini memudahkan mahasiswa dan dosen dalam pembelajaran jarak jauh. Luar biasa!",
          name: "Prof. Lisa M. Brown",
          position: "Kaprodi Informatika - Universitas XYZ",
          image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJLIJqXm0aH3NWm7sHFxxaU0Lzkw2qpXfc8g&s",
        },
        {
          text: "Modul MBKM-nya sangat membantu dalam administrasi magang mahasiswa secara terstruktur.",
          name: "Dr. John Smith",
          position: "Dosen Pembimbing - Universitas DEF",
          image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK4ghkUtQ_CT9RWX28kbXhcr3TrN_tKzwCUQ2EbZWDKdEsB-qmvtKVU3MjA7f7-qu3bL8&usqp=CAU",
        },

      ],
      faqs: [
    {
        question: "Apa itu SIAKAD Terintegrasi?",
        answer: "SIAKAD Terintegrasi adalah sistem yang mengelola akademik dosen, mahasiswa, dan admin dalam satu platform.",
        open: false,
    },
    {
        question: "Bagaimana cara menggunakan LMS kami?",
        answer: "Anda dapat login dengan akun terdaftar dan mengakses materi pembelajaran secara online.",
        open: false,
    },
    {
        question: "Apakah sistem ini bisa custom untuk kampus kami?",
        answer: "Tentu, kami menyediakan layanan kustomisasi sesuai kebutuhan perguruan tinggi Anda.",
        open: false,
    },
    ]

    };
    },
  computed: {
    filteredProducts() {
      if (this.selectedCategory === 'All') return this.products;
      return this.products.filter(product => product.category === this.selectedCategory);
    }
  },
  methods: {
    filterCategory(category) {
      this.selectedCategory = category;
    },
    goToProduct(link) {
      this.$router.push(link);
    },
    nextTestimonial() {
      this.currentIndex = (this.currentIndex + 1) % this.testimonials.length;
    },
    prevTestimonial() {
      this.currentIndex =
        (this.currentIndex - 1 + this.testimonials.length) % this.testimonials.length;
    },
    toggleFAQ(index) {
  this.faqs[index].open = !this.faqs[index].open;
}

  },
}
</script>

<style scoped>
.product-page {
  /* max-width: 1200px; */
  margin: 0 auto;
  padding: 80px;
}

.content-left {
    background-color: #31444d; 
    color: #fff;
}

.content-left .title { 
    color: #fff;
    line-height: 1.1; 
    font-size: 50px;
}

.content-left h2 {
    color: #fff; 
    font-size: 1.0rem; 
    margin-bottom: 15px; 
}

.content-left p {
    color: #ccc; 
    font-size: 1.120rem; 
    margin-bottom: 30px;
}


.cta-section h4,
.cta-section p {
    color: #ccc; 
    margin-bottom: 5px; 
}

.cta-section p {
    margin-bottom: 20px; 
}

.btn-demo {
    display: inline-block; 
    background-color: #e95420;
    color: #fff; 
    padding: 15px 30px;
    border: none;
    border-radius: 5px; 
    cursor: pointer;
    font-size: 1em;
    font-weight: 700;
    text-decoration: none; 
    transition: background-color 0.3s ease;
}

.btn-demo:hover {
    background-color: #d14a1a; 
}

.image-right {
    background-image: url('https://www.shutterstock.com/image-photo/successful-caucasian-young-man-student-600nw-2141124049.jpg');
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
    min-height: 500px; 
    position: relative; 
}

.image-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); 
    z-index: 1; 
}


.title{
  font-family: 'Montserrat', 'Poppins', sans-serif;
  font-weight: 300px;
  color: #000000;
  font-size: 70px;
}

/* .head{
    background-image: url(https://st2.depositphotos.com/4297569/10000/i/450/depositphotos_100000524-stock-photo-self-employed-business-person-working.jpg);
    background-size: cover;
} */

.category-filter {
  display: flex;
  gap: 15px;
  /* margin-bottom: 30px; */
  flex-wrap: wrap;
}

.category-btn {
  padding: 8px 16px;
  background-color: #bebdbd;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  font-weight: 500;
}

.category-btn:hover {
  background-color: #d0d0d0;
}

.garis-samar {
    border: none; 
    border-top: 3px solid #000000; 
    width: 100%; 
    margin-left: auto; 
    margin-right: auto; 
    margin-bottom: 0;
}
.word-category{
    background-color: rgb(241, 240, 240);
    padding: 20px;
    border-radius: 20px 20px 0 0;
    margin-top: 30px;
}

.word{
    font-size: 20px;
    font-family: Impact,'Arial Narrow Bold', sans-serif;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 10px;
    letter-spacing: 1px;
}

.logo img{
    width: 10%;
    height: 10%;
    margin-top: 15px;
    margin-left: 100px;
}

.product-card {
  display: flex;
  align-items: center;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  padding: 10px;
  height: 120px;
  border-radius: 12px;
}

.product-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.product-image {
  width: 100px;
  height: 80px;
  object-fit: cover;
  border-radius: 8px;
  margin-right: 20px;
}

.product-content {
  flex: 1;
}


.product-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.product-subtitle {
  font-size: 14px;
  color: #555;
  margin-bottom: 10px;
}

.product-badge {
  display: inline-block;
  background-color: #bebdbd;
  color: rgb(0, 0, 0);
  padding: 5px 10px;
  border-radius: 12px;
  font-size: 12px;
}

.testimonial-container {
  text-align: center;
  padding: 50px 20px;
  margin-top: 40px;
}

.testimonial-title {
  font-size: 28px;
  margin-bottom: 40px;
}

.testimonial-content {
  display: flex;
  align-items: center;
  justify-content: center;
}

.testimonial-text {
  width: 800px;
  padding: 0 20px;
}

.author-info {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

.author-image {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 15px;
}

.nav-button {
  background: none;
  border: none;
  font-size: 40px;
  cursor: pointer;
  color: grey;
}

.nav-button:hover {
  color: black;
}
.btn-demo{
  border-radius: 15px;
  color: #000000;
  background-color: #a0a0a0;
}



.product-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 20px;
background-color: rgb(241, 240, 240);
padding: 20px;

}

.partner{
    background-color: #f8f8f8;
    
}

.combined-sections .row {
            min-height: 100vh; 
        }

.contact-section {
            background-color: #2F4F4F;

            color: #fff;
            min-height: 400px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            padding: 60px 30px; 
            position: relative; 
            box-sizing: border-box; 
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); 
            z-index: 1;
        }

        .contact-content {
            position: relative;
            z-index: 2;
            max-width: 600px; 
            margin: 0 auto;
        }

        .contact-title {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
            line-height: 1.2;
        }

        .contact-subtitle {
            font-size: 1.2em;
            color: #eee;
            margin-bottom: 30px;
        }

        .btn-contact-us {
            display: inline-block;
            background-color: #e95420; 
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 700;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-contact-us:hover {
            background-color: #d14a1a;
        }


        .faq-wrapper {

            padding: 30px; 
            display: flex; 
            align-items: center;
            justify-content: center; 
            background-color: #f0f2f5; 
            box-sizing: border-box;
        }
        .faq-section {
            padding: 60px 30px; 
            background-color: #f0f2f5; 
            border-radius: 12px;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); */
            flex-grow: 1; 
            min-height: fit-content; 
            max-width: 600px; 
        }

        .faq-title {
            text-align: center;
            font-size: 2.8em;
            font-weight: 700;
            margin-bottom: 50px;
            color: #343a40;
        }

        .faq-item {
            background-color: #ffffff;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:last-child {
            margin-bottom: 0;
        }

        .faq-item:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 25px;
            cursor: pointer;
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.3s ease;
        }

        .faq-item.active .faq-question {
            background-color: #e9ecef;
            border-bottom: none;
        }

        .faq-question h4 {
            margin: 0;
            font-size: 1.25em;
            font-weight: 600;
            color: #333;
            flex-grow: 1;
        }

        .faq-question span {
            font-size: 1.8em;
            font-weight: 700;
            color: #555;
            width: 30px;
            text-align: center;
            line-height: 1;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question span {
            transform: rotate(180deg);
            color: #555;
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out, padding 0.5s ease-out;
            background-color: #fdfdfd;
            color: #555;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding: 15px 25px 25px;
        }

        .faq-answer p {
            margin: 0;
            font-size: 1em;
            line-height: 1.8;
        }

.btn-harga-produk {
  background-color: #ffffff;
  color: #2c7a7b;
  border: 2px solid #2c7a7b;
  padding: 10px 24px;
  font-weight: 600;
  border-radius: 8px;
  font-size: 1rem;
  transition: all 0.3s ease;
  text-decoration: none;
  display: inline-block;
}

.btn-harga-produk:hover {
  background-color: #2c7a7b;
  color: #ffffff;
  border-color: #2c7a7b;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {

  .product-page{
    padding: 0px;
  }
  .product-grid {
    grid-template-columns: 1fr;
  }
    .content-left {
        padding: 40px 20px;
        text-align: center; 
    }
    .image-right {
        min-height: 300px; 
    }
    .content-left h1 {
        font-size: 2.5rem; 
    }
           .combined-sections .row {
                flex-direction: column; 
                min-height: auto; 
            }
            .contact-section, .faq-wrapper {
                min-height: 60vh; 
                padding: 40px 20px; 
            }
            .contact-title {
                font-size: 2.5em;
            }
            .contact-subtitle {
                font-size: 1em;
            }
            .btn-contact-us {
                padding: 12px 25px;
                font-size: 0.9em;
            }
            .faq-wrapper {
                padding: 20px; 
            }
            .faq-section {
                max-width: 100%; 
                margin: 0; 
                padding: 30px 20px; 
            }
            .faq-title {
                font-size: 2.2em;
                margin-bottom: 30px;
            }
            .faq-question {
                padding: 15px 20px;
            }
            .faq-question h4 {
                font-size: 1.1em;
            }
            .faq-question span {
                font-size: 1.5em;
            }
            .faq-answer {
                padding: 0 20px;
            }
            .faq-item.active .faq-answer {
                padding: 10px 20px 20px;
            }
  }
</style>


