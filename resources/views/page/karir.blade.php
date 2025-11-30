@extends('layout.layout')
@section('content')

<header class="bg-header">
  <div class="container text-center">
    <h1>Karir di Techno Celebes</h1>
    <p>Bergabunglah bersama kami membangun platform penjualan yang inovatif dan berdampak.</p>
  </div>
</header>

<div class="container">
  <div class="job-list">

    <!-- Card 1 -->
    <a href="{{ url('/front') }}" class="job-card">
      <div class="job-title">Frontend Developer</div>
      <div class="job-location">Dibutuhkan: 2 orang</div>
      <div class="job-desc">Buat tampilan web yang modern dan responsif dengan teknologi terkini untuk meningkatkan pengalaman pengguna Techno Celebes.</div>
    </a>

    <!-- Card 2 -->
    <a href="{{ url('/marketing') }}" class="job-card">
      <div class="job-title">Digital Marketing</div>
      <div class="job-location">Dibutuhkan: 1 orang</div>
      <div class="job-desc">Kembangkan strategi digital kreatif untuk memperluas jangkauan Techno Celebes dan menjangkau lebih banyak audiens.</div>
    </a>

    <!-- Card 3 -->
    <a href="{{ url('/designer') }}" class="job-card">
      <div class="job-title">Content Creator</div>
      <div class="job-location">Dibutuhkan: 1 orang</div>
      <div class="job-desc">Ciptakan konten visual yang menarik dan selaras dengan identitas brand untuk memperkuat komunikasi Techno Celebes.</div>
    </a>

    <!-- Card 4: Backend Developer -->
    <a href="{{ url('/backend') }}" class="job-card">
      <div class="job-title">Backend Developer</div>
      <div class="job-location">Dibutuhkan: 3 orang</div>
      <div class="job-desc">Bangun dan optimalkan sistem backend yang andal dan aman untuk mendukung performa maksimal aplikasi Techno Celebes.</div>
    </a>

  </div>
</div>

<style>
  :root {
    --primary: #7e57c2;
  }

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f5f2ff;
  }

  header {
    padding: 150px 50px 50px;
    text-align: center;
    background: #f5f2ff;
  }

  header h1 {
    color: var(--primary);
    font-size: 36px;
  }

  header p {
    font-size: 18px;
    color: #555;
  }

  .bg-header {
    padding: 150px 50px 50px;
    background: #f5f2ff;
  }

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px;
  }

  .job-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .job-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s, box-shadow 0.3s;
  }

  .job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background-color: #f0e8ff;
  }

  .job-title {
    font-size: 20px;
    font-weight: bold;
    color: var(--primary);
  }

  .job-location {
    color: gray;
  }

  .job-desc {
    margin-top: 10px;
    color: #333;
  }

  @media (max-width: 768px) {
    .job-list {
      flex-direction: column;
      align-items: center;
    }
  }
</style>

@endsection
