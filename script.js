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
  document.getElementById("ip").innerText = data.ip;
  document.getElementById("isp").innerText = data.connection.isp;
  document.getElementById("loc").innerText = 
    `${data.city || ''}, ${data.country || ''}`;
})
.catch(err => {
  document.getElementById("ip").innerText = "Error: " + err;
  document.getElementById("isp").innerText = "Gagal memuat";
  console.error(err);
});