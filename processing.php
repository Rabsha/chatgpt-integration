<?php

require 'vendor/autoload.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Retrieve user details from the form
//     $detail1 = $_POST['detail1'];
//     // $detail2 = $_POST['detail2'];
//     // Add more variables for the other details as needed

//     // Function to interact with ChatGPT
//     function generate_chat_response($message) {
//         // Replace 'YOUR_OPENAI_API_KEY' with your actual API key
//         $openai_api_key = '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';
//         $gpt3_endpoint = 'https://api.openai.com/v1/engines/davinci-codex/completions';

//         $headers = [
//             'Authorization' => 'Bearer ' . $openai_api_key,
//             'Content-Type' => 'application/json',
//         ];

//         $data = [
//             'prompt' => $message,
//             'max_tokens' => 100, // Adjust the response length as needed
//         ];

//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $gpt3_endpoint);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_POST, 1);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
//         $response = curl_exec($ch);
//         curl_close($ch);

//         echo "<pre>";
//         print_r($response);
//         exit;

//         $result = json_decode($response, true);
//         return $result['choices'][0]['text'];
//     }

//     // Generate responses for user details using ChatGPT
//     $generated_detail1 = generate_chat_response($detail1);

//     print_r($generated_detail1);
//     exit;
//     // $generated_detail2 = generate_chat_response($detail2);
//     // Add more variables for the other details as needed

//     // Save the generated responses to the database (example using MySQLi)
//     $servername = 'localhost';
//     $username = 'root';
//     $password = 'root';
//     $dbname = 'careplan';

//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Check connection
//     if ($conn->connect_error) {
//         die('Connection failed: ' . $conn->connect_error);
//     }

//     $sql = "INSERT INTO user_responses (user_response, generated_response) VALUES ('$detail1', '$generated_detail1')";
//     // Add more columns and variables for the other details as needed

//     if ($conn->query($sql) === TRUE) {
//         echo 'Data inserted successfully!';
//     } else {
//         echo 'Error: ' . $sql . '<br>' . $conn->error;
//     }

//     $conn->close();
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user details from the form
    $detail1 = $_POST['detail1'];
    $detail2 = $_POST['detail2'];
    // Add more variables for the other details as needed

    // Function to interact with ChatGPT
    function generate_chat_response($message) {
        // Replace 'YOUR_OPENAI_API_KEY' with your actual API key
        $openai_api_key = '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';
        $gpt3_endpoint = 'https://api.openai.com/v1/engines/gpt-3.5-turbo/completions';

        $headers = [
            'Authorization: Bearer ' . $openai_api_key,
            'Content-Type: application/json',
        ];

        $data = [
            'prompt' => $message,
            'max_tokens' => 1000, // Adjust the response length as needed
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $gpt3_endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        // Display the API response for debugging
        echo 'API Response: ' . $response;

        $result = json_decode($response, true);
        return $result['choices'][0]['text'];
    }

    // Generate responses for user details using ChatGPT
    $generated_detail1 = generate_chat_response($detail1);
    $generated_detail2 = generate_chat_response($detail2);
    // Add more variables for the other details as needed
}

?>
