const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");
const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const tanggalInput = document.getElementById("tanggal");

contactForm.addEventListener("submit", (event) => {
  event.preventDefault();

  formFeedback.className = "form-feedback-error";

  const nama = namaInput.value.trim();
 if (nama.length < 3 || nama.length > 50) {
 formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
 return;
 }

 const email = emailInput.value.trim();
 const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
 if (!emailPattern.test(email)) {
 formFeedback.textContent = "Masukkan alamat email yang valid.";
 return;
 }

 const tanggal = tanggalInput.value;
 if (tanggal === "") {
 formFeedback.textContent = "Tanggal kunjungan harus diisi.";
 return;
 }

  formFeedback.textContent = "Form berhasil divalidasi.";
 formFeedback.className = "form-feedback-success";
});

contactForm.addEventListener("reset", () => {
 formFeedback.textContent = "";
});

contactForm.addEventListener("input", () => {
 formFeedback.textContent = "";
});