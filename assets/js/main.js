const Bar = document.getElementById("menu");
const main = document.getElementById("main");
const logout = document.getElementById("logout");

function collapse() {
    logout.classList.toggle("d-none");
    main.classList.toggle("close");    
}
Bar.addEventListener("click", () => {
    collapse();
});

var rupiahInput = document.getElementById("rupiah-input");

rupiahInput.addEventListener("input", function() {
  formatRupiah(this);
});

function formatRupiah(input) {
  var nilai = input.value.replace(/[^\d]/g, "");

  var formattedNilai = "";
  while (nilai.length > 3) {
    formattedNilai = "." + nilai.substr(-3) + formattedNilai;
    nilai = nilai.slice(0, -3);
  }
  formattedNilai = "Rp. " + nilai + formattedNilai;

  input.value = formattedNilai;
}
