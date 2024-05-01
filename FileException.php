<?php 

require_once 'exception/ValidationException.php';
require_once 'helper/Validation.php';
require_once 'data/LoginRequest.php';

$login = new LoginRequest();
$login->username = '';
$login->password = '';

// coba sesuatu, jika error maka masuk ke catch
try
{
    validateLoginRequest($login);
}
// dari pada membuat 2 catch untuk menangkap error, lebih baik menggunakan 2 dengan or |
catch(ValidationException | Exception $e)
{
    echo "Error : {$e->getMessage()}\n";

    // sebagai array
    var_dump($e->getTrace());

    // sebagai string
    echo $e->getTraceAsString();
}
// finally akan selalu dijalankan ketika hanya try nya saja, atau saat masuk ke catch, finally tetap dijalankan
finally
{
    echo "Tutup Koneksi Database\n";
}

echo "INI AKHIR CODE\n";