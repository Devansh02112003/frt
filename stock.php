<?php
    require("alert.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body style="background-color:black;">
    <div style="background-color:black;" class="sidebar">
        <div style="background-color:black;" class="logo-details">
            <i class='bx bx-user'></i>
            <span class="logo_name">Admin</span>
        </div>
        <b style="background-color:black;" class="nav-links">
            <li>
                <a href="Admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="profile.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="analytics.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
            </li>
            <li>
                <a href="stock.php" class="active">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Stock</span>
                </a>
            </li>
            <li>
                <a href="adduser.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Team</span>
                </a>
            </li>
            <li>
                <a href="messages.php">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="settings.php">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#" onclick="logout()">
                    <i class='bx bx-log-out'></i>
                    <span id="logout" class="links_name">Log out</span>
                </a>
            </li>
        </b>
    </div>
    <section style="background-color:black;" class="home-section text-white body-font">
        <nav style="background-color:black;">
            <div class="sidebar-button text-white-600 body-font">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Stock</span>
            </div>
            <div class="search-box text-white-600 body-font">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name"><?php
                    session_start();
                    error_reporting(0);
                    echo $_SESSION['hname']?></span>
            </div>
        </nav>

        <div style="background-color:black;" class="home-content">
            <div class="overview-boxes">
              <div style="background-color:black;" class="box">
                <div class="right-side">
                  <div class="box-topic">Total Cases</div>
                  <div class="number">4440,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart'></i>
              </div>
              <div style="background-color:black;" class="box">
                <div class="right-side">
                  <div class="box-topic">Total Recovered</div>
                  <div class="number">4438,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart two'></i>
              </div>
              <div style="background-color:black;" class="box">
                <div class="right-side">
                  <div class="box-topic">UnderTreatment</div>
                  <div class="number">12,876</div>
                  <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                  </div>
                </div>
                <i class='bx bxs-user cart three'></i>
              </div>
              <div style="background-color:black;" class="box">
                <div class="right-side">
                  <div class="box-topic">Total Deceased</div>
                  <div class="number">6,086</div>
                  <div class="indicator">
                    <i class='bx bx-down-arrow-alt down'></i>
                    <span class="text">Down From Today</span>
                  </div>
                </div>
                <i class='bx bxs-user cart four'></i>
              </div>
            </div>
        </div>
        <section style="background-color:black;" class="text-white-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white-900">Medical Equipments Stock</h1>
                </div>
                <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://4.imimg.com/data4/EP/PX/MY-13475247/000-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Ventilator</h2>
                        <p class="text-white-500">85</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://cpimg.tistatic.com/05317448/b/4/Digital-ECG-Machine.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">ECG Machines</h2>
                        <p class="text-white-500">25</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://5.imimg.com/data5/UN/MV/FM/SELLER-43233253/x-ray-machine-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">X-ray Machine</h2>
                        <p class="text-white-500">10</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://image.made-in-china.com/2f0j00AIwfmUkywNbY/Stainless-Steel-Medical-Instrument-Table.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Instrument table</h2>
                        <p class="text-white-500">40</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://mcdmag.com/wp-content/uploads/2018/01/Jan18_MCDeNews_Projects_Baptist5-1000x600.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Surgical unit </h2>
                        <p class="text-white-500">10</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://5.imimg.com/data5/SELLER/Default/2021/5/FG/KE/YH/108698/fingertip-pulse-oximeter-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Pulse oximeter</h2>
                        <p class="text-white-500">90</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://5.imimg.com/data5/SH/WW/VW/SELLER-1842956/93a-icu-bed-500x500.png">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">ICU bed</h2>
                        <p class="text-white-500">85</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://3.imimg.com/data3/TC/OE/MY-3288250/medical-refrigerator-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Refrigerator</h2>
                        <p class="text-white-500">5</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://5.imimg.com/data5/SELLER/Default/2020/8/OB/TM/UQ/103816007/doctor-stethoscope-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Stethoscope</h2>
                        <p class="text-white-500">100</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://pioneerinstitute.org/wp-content/uploads/MRI-495x400.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">MRI Machines</h2>
                        <p class="text-white-500">10</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://s3.ap-south-1.amazonaws.com/content.alphalearn.com/b2JpQnRyZWlKMUk9/ZEZUcFVkMmFDZU09/thumbnail.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Laboratory</h2>
                        <p class="text-white-500">5</p>
                    </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-white-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-white-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://4.imimg.com/data4/NW/CD/ETO-19105393/patient-trolley-500x500.jpg">
                    <div class="flex-grow">
                        <h2 class="text-white-900 title-font font-medium">Patient trolley</h2>
                        <p class="text-white-500">20</p>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </section>
        <style>
            /* Googlefont Poppins CDN Link */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            .sidebar {
                position: fixed;
                height: 100%;
                width: 240px;
                --tw-bg-opacity: 1;
                background: rgba(139, 92, 246, var(--tw-bg-opacity));
                ;
                transition: all 0.5s ease;
            }

            .sidebar.active {
                width: 60px;
            }

            .sidebar .logo-details {
                height: 80px;
                display: flex;
                align-items: center;
            }

            .sidebar .logo-details i {
                font-size: 28px;
                font-weight: 500;
                color: #fff;
                min-width: 60px;
                text-align: center
            }

            .sidebar .logo-details .logo_name {
                color: #fff;
                font-size: 24px;
                font-weight: 500;
            }

            .sidebar .nav-links {
                margin-top: 10px;
            }

            .sidebar .nav-links li {
                position: relative;
                list-style: none;
                height: 50px;
            }

            .sidebar .nav-links li a {
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                text-decoration: none;
                transition: all 0.4s ease;
            }

            .sidebar .nav-links li a.active {
                background: rgb(0, 255, 255);
            }

            .sidebar .nav-links li a:hover {
                background: rgb(0, 255, 255);
            }

            .sidebar .nav-links li i {
                min-width: 60px;
                text-align: center;
                font-size: 18px;
                color: #fff;
            }

            .sidebar .nav-links li a .links_name {
                color: #fff;
                font-size: 15px;
                font-weight: 400;
                white-space: nowrap;
            }

            .sidebar .nav-links .log_out {
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            .home-section {
                position: relative;
                background: #f5f5f5;
                min-height: 100vh;
                width: calc(100% - 240px);
                left: 240px;
                transition: all 0.5s ease;
            }

            .sidebar.active~.home-section {
                width: calc(100% - 60px);
                left: 60px;
            }

            .home-section nav {
                display: flex;
                justify-content: space-between;
                height: 80px;
                background: #fff;
                display: flex;
                align-items: center;
                position: fixed;
                width: calc(100% - 240px);
                left: 240px;
                z-index: 100;
                padding: 0 20px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                transition: all 0.5s ease;
            }

            .sidebar.active~.home-section nav {
                left: 60px;
                width: calc(100% - 60px);
            }

            .home-section nav .sidebar-button {
                display: flex;
                align-items: center;
                font-size: 24px;
                font-weight: 500;
            }

            nav .sidebar-button i {
                font-size: 35px;
                margin-right: 10px;
            }

            .home-section nav .search-box {
                position: relative;
                height: 50px;
                max-width: 550px;
                width: 100%;
                margin: 0 20px;
            }

            nav .search-box input {
                height: 100%;
                width: 100%;
                outline: none;
                background: #F5F6FA;
                border: 2px solid #EFEEF1;
                border-radius: 6px;
                font-size: 18px;
                padding: 0 15px;
            }

            nav .search-box .bx-search {
                position: absolute;
                height: 40px;
                width: 40px;
                background: #2697FF;
                right: 5px;
                top: 50%;
                transform: translateY(-50%);
                border-radius: 4px;
                line-height: 40px;
                text-align: center;
                color: #fff;
                font-size: 22px;
                transition: all 0.4 ease;
            }

            .home-section nav .profile-details {
                display: flex;
                align-items: center;
                background: #F5F6FA;
                border: 2px solid #EFEEF1;
                border-radius: 6px;
                height: 50px;
                min-width: 190px;
                padding: 0 15px 0 2px;
            }

            nav .profile-details img {
                height: 40px;
                width: 40px;
                border-radius: 6px;
                object-fit: cover;
            }

            nav .profile-details .admin_name {
                font-size: 15px;
                font-weight: 500;
                color: #333;
                margin: 0 10px;
                white-space: nowrap;
            }

            nav .profile-details i {
                font-size: 25px;
                color: #333;
            }

            .home-section .home-content {
                position: relative;
                padding-top: 104px;
            }

            .home-content .overview-boxes {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                padding: 0 20px;
                margin-bottom: 26px;
            }

            .overview-boxes .box {
                display: flex;
                align-items: center;
                justify-content: center;
                width: calc(100% / 4 - 15px);
                background: #fff;
                padding: 15px 14px;
                border-radius: 12px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .overview-boxes .box-topic {
                font-size: 20px;
                font-weight: 500;
            }

            .home-content .box .number {
                display: inline-block;
                font-size: 35px;
                margin-top: -6px;
                font-weight: 500;
            }

            .home-content .box .indicator {
                display: flex;
                align-items: center;
            }

            .home-content .box .indicator i {
                height: 20px;
                width: 20px;
                background: #8FDACB;
                line-height: 20px;
                text-align: center;
                border-radius: 50%;
                color: #fff;
                font-size: 20px;
                margin-right: 5px;
            }

            .box .indicator i.down {
                background: #e87d88;
            }

            .home-content .box .indicator .text {
                font-size: 12px;
            }

            .home-content .box .cart {
                display: inline-block;
                font-size: 32px;
                height: 50px;
                width: 50px;
                background: #cce5ff;
                line-height: 50px;
                text-align: center;
                color: #66b0ff;
                border-radius: 12px;
                margin: -15px 0 0 6px;
            }

            .home-content .box .cart.two {
                color: #2BD47D;
                background: #C0F2D8;
            }

            .home-content .box .cart.three {
                color: #ffc233;
                background: #ffe8b3;
            }

            .home-content .box .cart.four {
                color: #e05260;
                background: #f7d4d7;
            }

            .home-content .total-order {
                font-size: 20px;
                font-weight: 500;
            }

            .home-content .sales-boxes {
                display: flex;
                justify-content: space-between;
                /* padding: 0 20px; */
            }
            /* Responsive Media Query */
              @media (max-width: 1240px) {
                .sidebar {
                    width: 60px;
                }

                .sidebar.active {
                    width: 220px;
                }

                .home-section {
                   width: calc(100% - 60px);
                    left: 60px;
                }

                .sidebar.active~.home-section {
                    /* width: calc(100% - 220px); */
                    overflow: hidden;
                    left: 220px;
                }

                .home-section nav {
                    width: calc(100% - 60px);
                    left: 60px;
                }

                .sidebar.active~.home-section nav {
                    width: calc(100% - 220px);
                    left: 220px;
                }
            }

            @media (max-width: 1150px) {
                .home-content .sales-boxes {
                    flex-direction: column;
                }

                .home-content .sales-boxes .box {
                    width: 100%;
                    overflow-x: scroll;
                    margin-bottom: 30px;
                }

                .home-content .sales-boxes .top-sales {
                    margin: 0;
                }
            }

            @media (max-width: 1000px) {
                .overview-boxes .box {
                    width: calc(100% / 2 - 15px);
                    margin-bottom: 15px;
                }
            }

            @media (max-width: 700px) {

                nav .sidebar-button .dashboard,
                nav .profile-details .admin_name,
                nav .profile-details i {
                    display: none;
                }

                .home-section nav .profile-details {
                    height: 50px;
                    min-width: 40px;
                }

                .home-content .sales-boxes .sales-details {
                    width: 560px;
                }
            }

            @media (max-width: 550px) {
                .overview-boxes .box {
                    width: 100%;
                    margin-bottom: 15px;
                }

                .sidebar.active~.home-section nav .profile-details {
                    display: none;
                }
            }
        </style>
        <script>
            function logout() {
                swal({
                    title: "Are you sure?",
                    text: "You want to Logout",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Logout Sucessfull", {
                        icon: "success",
                    });
                        window.location = "frt.php";
                        
                    } else {
                    }
                    });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function () {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>
    </section>
</body>
</html>