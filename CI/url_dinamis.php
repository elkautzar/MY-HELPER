Untuk mengatur konfigurasi base_url agar menjadi dinamis, silakan ganti konfigurasi default CodeIgniter:
$config['base_url'] = '';

Dengan konfigurasi di bawah ini:
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
