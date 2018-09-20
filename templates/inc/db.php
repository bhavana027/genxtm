<?php

$conn = mysqli_connect('localhost','root','11111','blog');

if(mysqli_connect_errno()) {
	echo 'db connecttion error: '.mysqli_connect_error();
}