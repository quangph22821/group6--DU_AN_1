<?php
function booking ($full_name, $telephone, $email, $address, $total_price, $chechin, $checkout){
    $sql = "INSERT INTO booking (full_name, telephone, email, address, total_price, checkin, checkout) VALUES ('$full_name', '$telephone', '$email', '$address', '$total_price', '$chechin', '$checkout')"; 
    pdo_execute($sql);
}