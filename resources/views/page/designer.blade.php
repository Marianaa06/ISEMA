@extends('layout.layout')
@section('content')

<header class="bg-header">
  <div class="container text-center">
    <h1>Content Creator</h1>
    <p>Jadilah bagian dari tim content kami untuk menciptakan konten-konten yang luar biasa di Techno Celebes.</p>
  </div>
</header>

<div class="container">
  <div class="form-box">
    {{-- Tampilkan notifikasi sukses jika ada --}}
    @if(session('success'))
    <div style="background: #e0ffe0; padding: 10px; border-radius: 5px; margin-bottom: 15px; color: #2e7d32;">
      {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('job.apply') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <input type="hidden" name="posisi" value="Content Creator">

      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="no_hp">No. HP</label>
      <input type="text" id="no_hp" name="no_hp" required>

      <label for="cv">Upload CV (PDF)</label>
      <input type="file" id="cv" name="cv" accept=".pdf" required>
      <small>Hanya file PDF. Maksimal 2MB.</small>

      <label for="pesan">Pesan / Alasan Melamar</label>
      <textarea id="pesan" name="message" rows="4" required></textarea>

      <input type="submit" value="Kirim Lamaran">
    </form>
  </div>
</div>

<style>
  :root {
    --primary: #7e57c2;
  }

  .bg-header {
    padding: 150px 50px 50px;
    background: #f5f2ff;
  }

  .container {
    max-width: 1200px;
    /* biarkan container besar default */
    margin: 0 auto;
    padding: 50px 20px;
  }

  .form-box {
    max-width: 700px;
    margin: 0 auto;
    background: #fff;
    padding: 50px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
  }

  h2 {
    color: var(--primary);
    text-align: center;
    margin-bottom: 30px;
  }

  label {
    font-weight: bold;
    display: block;
    margin-top: 15px;
  }

  input,
  textarea {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  small {
    color: gray;
    display: block;
    margin-top: 4px;
  }

  input[type="submit"] {
    background-color: var(--primary);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px;
  }

  input[type="submit"]:hover {
    background-color: #5e3ea1;
  }
</style>

@endsection