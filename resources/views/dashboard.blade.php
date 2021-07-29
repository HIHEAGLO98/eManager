<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>E-Manager | </title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
        }

    </script>

</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">E-Manager</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>

    <ul class="nav-list">
        <li>
            <a href="#">
                <i class='bx bx-search' ></i>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
            </a>
            <!--<input type="text" placeholder="Search...">-->
            <span class="tooltip">Search an event</span>
            <box-icon type="logo" name="facebook-square"></box-icon>

        </li>

        <li>
            <a href="#">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-folder"></i>
                <span class="links_name">Gérer un événement</span>
            </a>
            <span class="tooltip">Gérer un événement</span>
        </li>

        <li>
            <a href="#">
                <i class='bx bx-user' ></i>
                <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>

            <li>
              <a href="#">
                <i class='bx bx-cart-alt' ></i>
                <span class="links_name">Mes reservations</span>
              </a>
              <span class="tooltip">Mes reservations</span>
            </li>

            <li>
              <a href="#">
                <i class='bx bx-heart' ></i>
                <span class="links_name">Saved</span>
              </a>
              <span class="tooltip">Saved</span>
            </li>


        <li>
            <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="links_name">Profil</span>
            </a>
            <span class="tooltip">Profil</span>
        </li>

        <li class="profile">
            <div class="profile-details">
                <img src="image/vale.jpg" alt="profileImg">
                <div class="name_job">
                    <div class="name">Ghust H</div>
                    <div class="job">Web Developer</div>
                </div>
            </div>
            <a href="route('logout')"><i class='bx bx-log-out' id="log_out" ></i>log out</a>

        </li>
    </ul>
</div>

<main>

    <section class="home-section">
        <div class="text">Dashboard</div>
        @yield('content')
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
