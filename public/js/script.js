// Ambil elemen modal dan tombol close
var modal = document.getElementById("imageModal");
var modalImg = document.getElementById("modalImage");
var captionText = document.getElementById("modalCaption");
var closeBtn = document.getElementsByClassName("close")[0];

// Dapatkan semua tombol "More"
var moreBtns = document.querySelectorAll(".more-btn");

// Tambahkan event listener untuk setiap tombol "More"
moreBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
        // Ambil URL gambar dan title yang terkait dengan tombol
        var imgSrc = this.closest('.card').querySelector('.card-img').getAttribute('data-image');
        var imgTitle = this.closest('.card').querySelector('.card-img').getAttribute('data-title');

        // Set gambar modal dan tampilkan
        modal.style.display = "flex";
        modalImg.src = imgSrc;
        captionText.innerHTML = imgTitle;  // Ganti dengan title dinamis
    });
});

// Tutup modal jika tombol close diklik
closeBtn.onclick = function () {
    modal.style.display = "none";
}

// Tutup modal jika area di luar gambar diklik
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
