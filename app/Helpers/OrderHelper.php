<?php


// namespace App\Helpers;

// class OrderHelper {

//     if (!function_exists('generateUniqueOrderNumber')) {
//         function generateUniqueOrderNumber()
//     {
//         $prefix = 'ORD'; // Prefix for the order number
//         $maxAttempts = 100; // Maximum attempts to generate a unique order number
//         $orderNumber = '';
    
//         // Generate a unique random number and append it to the prefix
//         for ($attempt = 0; $attempt < $maxAttempts; $attempt++) {
//             $randomNumber = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT); // Generate a random 3-digit number
//             $orderNumber = $prefix . $randomNumber;
    
//             // Check if the generated order number already exists in the database
//             if (!Order :: where('order_number', $orderNumber)->exists()) {
//                 return $orderNumber; // Return the unique order number
//             }
//         }
    
//         // If maximum attempts are reached and no unique order number is found, return an error or handle it as needed
//         return null; // You can handle this case based on your application's requirements
//     }
    
    
// }
?>