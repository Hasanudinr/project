<?php 

function  koneksi () 
{

$conn = mysqli_connect('localhost', 'root', '', 'db_pembinaan');

}

function Query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
}

?>