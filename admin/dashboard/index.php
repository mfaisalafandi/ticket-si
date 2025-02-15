<?php
    require_once "../../config/Database.php";

    session_start();
    if(!isset($_SESSION['username'])) { 
        header('location: ../../login.php');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <title>Selamat Datang!</title>
    <script>
      // Disable right-click on sidebar links
      document.addEventListener("DOMContentLoaded", function () {
        var sidebarLinks = document.querySelectorAll(".menu-item a");

        sidebarLinks.forEach(function (link) {
          link.addEventListener("contextmenu", function (event) {
            event.preventDefault();
          });
        });
      });
    </script>
  </head>
  <body>
    <div class="dashboard-container">
      <div class="sidebar">
        <div class="logo">
          <img src="../../assets/img/Logo Sidebar.png" alt="logo" />
          <div class="line"></div>
        </div>
        <ul class="menu">
          <li class="menu-item active">
            <a href="paket">Buat Paket</a>
          </li>
          <li class="menu-item">
            <a href="paket">Kelola Paket</a>
          </li>
          <li class="menu-item">
            <a href="tiket">Kelola Event</a>
          </li>
          <li class="menu-item">
            <a href="verif_paket">Verifikasi Paket</a>
          </li>
          <li class="menu-item">
            <a href="verif_tiket">Verifikasi Tiket</a>
          </li>
          <li class="menu-item logout">
            <a href="../../index.php">Kembali ke Halaman Utama</a>
          </li>
        </ul>
      </div>
      <div class="main-content">
        <div class="navbar">
          <h2 class="title" id="navbar-title">Menu Paket</h2>
          <div class="search">
            <input
              type="text"
              id="search-input"
              placeholder="Cari"
              class="search-input"
              oninput="search()"
              autocomplete="off"
            />
            <button class="search-button" onclick="search()">
              <img src="../../assets/img/search.svg" alt="search" />
            </button>
          </div>
        </div>
        <div class="content"></div>
      </div>
    </div>
    <div id="alert-msg" class="alert-msg" aria-disabled="true"></div>
    <script src="js/tiket.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="js/img-preview.js"></script>
    <script src="js/alert.js"></script>
  </body>
</html>
