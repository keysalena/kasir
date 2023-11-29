<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
      // Beranda

      //data masakan
    case 'data_masakan':
      include 'pages/masakan/data_masakan.php';
      break;
    case 'tambah_masakan':
      include 'pages/masakan/tambah_masakan.php';
      break;
    case 'ubah_masakan';
      include 'pages/masakan/ubah_masakan.php';
      break;

      //data level
    case 'data_level':
      include 'pages/level/data_level.php';
      break;
    case 'tambah_level':
      include 'pages/level/tambah_level.php';
      break;
    case 'ubah_level';
      include 'pages/level/ubah_level.php';
      break;

      //data user
    case 'data_user':
      include 'pages/user/data_user.php';
      break;
    case 'tambah_user':
      include 'pages/user/tambah_user.php';
      break;
    case 'ubah_user';
      include 'pages/user/ubah_user.php';
      break;

      //data order
    case 'data_order':
      include 'pages/order/data.php';
      break;
    case 'tambah_order':
      include 'pages/order/tambah.php';
      break;
    case 'ubah_order';
      include 'pages/order/ubah.php';
      break;

      //data transaksi
    case 'data_transaksi':
      include 'pages/transaksi/data.php';
      break;
    case 'tambah_transaksi':
      include 'pages/transaksi/tambah.php';
      break;
    case 'ubah_transaksi';
      include 'pages/transaksi/ubah.php';
      break;

      //data pesan
    case 'data_pesan':
      include 'pages/pesan/data.php';
      break;
    case 'tambah_pesan':
      include 'pages/pesan/tambah.php';
      break;
    case 'pesan';
      include 'pages/pesan/pesan.php';
      break;

      //data detail
    case 'data_detail':
      include 'pages/detail/data.php';
      break;
    case 'tambah_detail':
      include 'pages/detail/tambah.php';
      break;
    case 'detail_order';
      include 'pages/detail/detail.php';
      break;
  }
} else {
  include "pages/beranda.php";
}
