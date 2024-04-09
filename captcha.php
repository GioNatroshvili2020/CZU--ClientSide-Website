<?php
session_start();

// Generate a random captcha string
$captcha_string = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);

// Store the captcha string in session for verification
$_SESSION['captcha'] = $captcha_string;

// Create a blank image with dimensions 120x30
$captcha_image = imagecreatetruecolor(60, 30);

// Set the background color to white
$background_color = imagecolorallocate($captcha_image, 0, 0, 0);

// Set the text color to black
$text_color = imagecolorallocate($captcha_image, 255, 255, 255);

// Write the captcha string on the image
imagestring($captcha_image, 5, 5, 5, $captcha_string, $text_color);

// Set the content type header to output the image
header('Content-Type: image/png');

// Output the captcha image as PNG
imagepng($captcha_image);

// Free up memory
imagedestroy($captcha_image);
