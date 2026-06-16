<?php 
// PHP = DAPUR BANG WKWK. SIAPIN DATA DOANG WKWK
$hasil = "Klik tombol merah bang wkwk wkwk";
$status = "Siap tempur";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Speedtest Martil RT 05 bang wkwk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS = CAT WARUNG BANG WKWK -->
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      background: #0a0a0a;
      color: #00ff41;
      font-family: 'Courier New', monospace;
      text-align: center;
      padding: 50px 20px;
      min-height: 100vh;
    }
    h1 {
      font-size: 32px;
      margin-bottom: 10px;
      text-shadow: 0 0 10px #00ff41;
    }
    .status {
      color: #888;
      margin-bottom: 40px;
    }
    #hasil {
      font-size: 48px;
      font-weight: bold;
      margin: 40px 0;
      min-height: 60px;
    }
    button {
      background: #ff0033;
      color: white;
      border: none;
      padding: 25px 50px;
      font-size: 22px;
      font-weight: bold;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 0 0 20px #ff0033;
      transition: 0.2s;
    }
    button:hover {
      background: #ff3355;
      transform: scale(1.05);
    }
    button:disabled {
      background: #444;
      cursor: not-allowed;
      box-shadow: none;
    }
    .loading {
      color: yellow;
      font-size: 18px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <!-- HTML = BATA WARUNG BANG WKWK -->
  <h1>⚡ SPEEDTEST SULTAN ⚡</h1>
  <p class="status"><?php echo $status; ?></p>
  
  <div id="hasil"><?php echo $hasil; ?></div>
  
  <button id="btn" onclick="testSpeed()">TES SPEED BANG WKWK</button>
  <div id="loading" class="loading"></div>

  <!-- JS = KIPAS OTOMATIS BANG WKWK -->
  <script>
    function testSpeed() {
      const btn = document.getElementById('btn');
      const hasil = document.getElementById('hasil');
      const loading = document.getElementById('loading');
      
      btn.disabled = true;
      hasil.innerHTML = '0.00 Mbps';
      loading.innerHTML = 'Ngedownload file 100MB... sabar bang wkwk 🗿';
      
      const start = new Date().getTime();
      const cache_buster = '?t=' + Math.random(); // Biar nggak kecache wkwk
      
      // DOWNLOAD FILE 100MB DARI INTERNET WKWK
      fetch('https://speed.hetzner.de/100MB.bin' + cache_buster)
      .then(response => response.blob())
      .then(data => {
        const end = new Date().getTime();
        const durasi_detik = (end - start) / 1000;
        const size_bit = data.size * 8;
        const speed_mbps = (size_bit / durasi_detik / 1000000).toFixed(2);
        
        hasil.innerHTML = speed_mbps + ' Mbps wkwk wkwk 🔥';
        loading.innerHTML = 'Selesai bang wkwk. Durasi: ' + durasi_detik.toFixed(2) + ' detik';
        btn.disabled = false;
      })
      .catch(err => {
        hasil.innerHTML = 'Error bang wkwk 💀';
        loading.innerHTML = 'Cek internet lu bang wkwk';
        btn.disabled = false;
      });
    }
  </script>
</body>
</html>