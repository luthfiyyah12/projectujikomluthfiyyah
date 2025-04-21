/* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Menambahkan box-sizing global */
}

.container-fluid {
    margin-top: 50px;
    padding: 0 20px; /* Menambahkan padding pada kontainer */
}

.card-columns {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Menambahkan shadow pada kartu */
    transition: transform 0.3s ease; /* Transisi untuk efek hover */
}

.card:hover {
    transform: scale(1.05); /* Efek zoom-in saat hover */
}

.card-img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card:hover .overlay {
    opacity: 1;
}

.title {
    font-size: 24px;
    font-weight: bold;
    text-align: center; /* Menyusun judul di tengah */
}

.more-btn {
    color: white;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase; /* Membuat teks lebih menarik */
}

.more-btn:hover {
    color: #f4a261;
}

/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    padding: 20px; /* Menambahkan padding agar konten tidak terlalu rapat dengan tepi modal */
}

.modal-content {
    width: 70%;
    max-width: 600px;
    height: auto;
    border-radius: 5px;
    background-color: white; /* Menambahkan latar belakang putih di dalam modal */
    padding: 20px;
}

.close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: #f4a261;
}
