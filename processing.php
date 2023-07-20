<?php
require 'vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;

$open_ai_key = getenv('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');
$open_ai = new OpenAi($open_ai_key);

$detail1 = $_POST['detail1'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-002',
    'prompt' => 'Write Better text ' . $detail1,
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
]);

echo "<pre>";
print_r($complete);
exit;

// $response = json_decode($complete, true);
// $response = $response["choices"][0]["text"];

// echo $response;
?>
