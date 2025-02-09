<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include "../../php/connect.php";
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Support</title>
  <!-- Font Awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />


  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="customer.css" />
</head>

<body>
  <?php
  include "../parts/header/index.php";
  ?>

  <!-- navigasi -->


  <section>

    <div class="container">
      <div class="row title-heading">
        <h2 class="section-heading">Customer Support</h2>
      </div>
      <div class="row card-list">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-shield"></i>
            </div>
            <h3>Privacy Policy</h3>
            <p>
              Mengecek informasi privacy policy
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-question"></i>
            </div>
            <h3>FAQ</h3>
            <p>
              Melihat pertanyaan yang sudah pernah kami jawab
            </p>
          </div>
        </div>
        <div class="column" onclick="location.href='../Contact/index.html';">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa-solid fa-phone"></i>
            </div>
            <h3>Contact Us</h3>
            <p>
              Silahkan mengontak kami apabila terjadi kendala
            </p>
          </div>
        </div>

      </div>
    </div>

  </section>

  <script>
    const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

    sidebarOpen.addEventListener("click", () => {
      nav.classList.add("active");
    });

    body.addEventListener("click", e => {
      let clickedElm = e.target;

      if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active");
      }
    });
  </script>
</body>

</html>