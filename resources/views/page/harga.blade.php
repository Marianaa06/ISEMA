@extends('layout.layout')
@section('content')

<div class="container">
    <!-- KIRI -->
    <div class="produk-list">
        <h2>Pilih Produk</h2>

        <!-- 13 Produk -->
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="75000"><label>Siakad Dosen</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="120000"><label>Siakad Admin</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="50000"><label>Siakad Mahasiswa</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="200000"><label>LMS Dosen</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="135000"><label>LMS Mahasiswa</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="89000"><label>Modul Keuangan</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="95000"><label>Modul Repository</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="78000"><label>MBKM</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="110000"><label>Tracer Alumni</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="65000"><label>Jurnal</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="105000"><label>Reporting</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="92000"><label>CBT</label></div>
        <div class="produk-item"><input type="checkbox" class="product-check" data-price="150000"><label>PMB</label></div>
    </div>

    <!-- KANAN -->
    <div class="total-box">
        <div class="total-info">
            <h3>Total Harga</h3>
            <div class="total-amount" id="total-harga">Rp 0</div>
        </div>
        <!-- <button class="btn-checkout">Lanjut ke Pembayaran</button> -->
        <a href="https://wa.me/6282299543317?text=Halo,saya ingin bertanya" class="btn-checkout">Lanjut ke Pembayaran</a>
        <!-- <a href="{{url('/harga')}}" class="btn btn-gradient btn-sm px-4">
        Pesan Sekarang
      </a> -->
    </div>
</div>
</div>


<style>
    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background: linear-gradient(to bottom right, #f3e5f5, #ede7f6);
        padding: 150px 20px;
    }

    .container {
        max-width: 1000px;
        margin: auto;
        display: flex;
        gap: 30px;
    }

    .produk-list {
        flex: 2;
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 18px rgba(128, 0, 128, 0.08);
    }

    .produk-list h2 {
        color: #6a1b9a;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .produk-item {
        padding: 15px 20px;
        border: 1px solid #eee;
        border-radius: 12px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
        background: #faf5ff;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .produk-item:hover {
        background: #f3e5f5;
    }

    .produk-item input[type="checkbox"] {
        transform: scale(1.2);
        accent-color: #8e24aa;
    }

    .produk-item label {
        cursor: pointer;
        font-size: 16px;
        font-weight: 500;
        color: #4a148c;
        flex: 1;
    }

    .total-box {
        flex: 1;
        background: #faf5ff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 8px 18px rgba(128, 0, 128, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .total-info {
        text-align: center;
    }

    .total-info h3 {
        font-size: 18px;
        color: #6a1b9a;
        margin-bottom: 10px;
    }

    .total-amount {
        font-size: 26px;
        color: #4a148c;
        font-weight: bold;
        display: none;
    }

    .btn-checkout {
        padding: 14px;
        background: linear-gradient(135deg, #8e24aa, #6a1b9a);
        color: white;
        border: none;
        border-radius: 40px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 30px;
        transition: 0.3s ease;

        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }


    .btn-checkout:hover {
        background: linear-gradient(135deg, #6a1b9a, #4a148c);
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    }
</style>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.product-check');
        const totalDisplay = document.getElementById('total-harga');

        function updateTotal() {
            let total = 0;
            let show = false;

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total += parseInt(cb.dataset.price);
                    show = true;
                }
            });

            if (show) {
                totalDisplay.style.display = 'block';
                totalDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
            } else {
                totalDisplay.style.display = 'none';
            }
        }

        checkboxes.forEach(cb => cb.addEventListener('change', updateTotal));
    });
</script>


