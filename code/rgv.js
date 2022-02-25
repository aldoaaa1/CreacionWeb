a = window.navigator; 
b = window.screen; 

var user = new Object(); 
user.screenWidth = b.width; 
user.screenHeight = b.height; 
user.language = a.language; 
user.vendor = a.vendor;
user.ip = "<?= $_SERVER['REMOTE_ADDR'] ?>"; 
user.paginaActual = document.URL; 
user.userAgent = a.userAgent;

// $.post('<?= base_url(); ?>rgv', {'user': user});


Windows_Chrome: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36"
Windows_Brave: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36"
Windows_Firefox: "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0"
iPhone_Safari: "Mozilla/5.0 (iPhone; CPU iPhone OS 12_5_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1"


"65.154.226.165(res:800x600)Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36"
"34.219.209.138(res:1024x1024)Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36"
Yo -> "2806:109f:14:5e2e:acf9:b87c:6308:6149(res:375x667)Mozilla/5.0 (iPhone; CPU iPhone OS 12_5_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1"
"2806:109f:14:5e2e:9878:a00a:7744:ccd8(res:498x850)Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Mobile Safari/537.36"
"2806:109f:14:5e2e:494a:5d48:4ce9:4719(res:1366x768)Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36"
Yo -> "2806:109f:14:1411:da8:f7c1:103d:23a0(res:1920x1080)Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0"
"189.198.158.4(res:320x568)Mozilla/5.0 (iPhone; CPU iPhone OS 14_7_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1"