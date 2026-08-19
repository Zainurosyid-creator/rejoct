if ("serviceWorker" in navigator) {
  navigator.serviceWorker.register("sw.js");
}
function toggleMenu() {
  document.getElementById("menu").classList.toggle("show");
  document.getElementById('backdrop').classList.toggle('active');
}
fetch('https://ipwho.is/')
.then(res => res.json())
.then(data => {
  document.getElementById("ip").innerText = "IP: " + data.ip;
  document.getElementById("isp").innerText = "ISP: " + data.connection.isp;
})
.catch(err => {
  document.getElementById("ip").innerText = "Error: " + err;
  document.getElementById("isp").innerText = "Gagal memuat";
  console.error(err);
});