<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="100" height="100" class="d-inline-block align-top" alt="">

        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>

    </div>
    <style>
        .navigation {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 120px;
            height: 60px;
            display: flex;
            justify-content: space-between;
            border-radius: 5px;
            background: var(--white);
            box-shadow: 0 25px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: height 0.5s, width 0.5s;
            transition-delay: 0s, 0.5s;
            z-index: 9999;
        }

        .navigation .user-box {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;

            align-items: center;
            overflow: hidden;
            transition: 0.5s;
            transition-delay: 0.5s;
        }

        .navigation .user-box .username {
            font-size: 1.2rem;
            white-space: nowrap;
            color: var(--gray);
        }

        .navigation .user-box .image-box {
            position: relative;
            min-width: 60px;
            height: 60px;
            background: var(--white);
            border-radius: 50%;
            overflow: hidden;
            border: 10px solid var(--white);

        }

        .navigation .user-box .image-box img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .navigation .menu-toggle {
            position: relative;
            background-color: aqua;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;

        }

        .navigation .menu-toggle::before {
            content: "";
            position: absolute;
            width: 32px;
            height: 2px;
            background: var(--gray);
            transform: translateY(-10px);
            box-shadow: 0 10px var(--gray);
            transition: 0.5s;
        }

        .navigation .menu-toggle::after {
            content: "";
            position: absolute;
            width: 32px;
            height: 2px;
            background: var(--gray);
            transform: translateY(10px);
            transition: 0.5s;

        }

        .menu {
            position: absolute;
            width: 100%;
            height: calc(100% - 60px);
            margin-top: 60px;
            padding: 20px;

            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .menu li {
            list-style: none;

        }

        .menu li a {
            display: flex;

            align-items: center;
            gap: 10px;
            margin: 20px 0;
            font-size: 1rem;
            text-decoration: none;
            color: var(--gray);
        }

        .menu li a ion-icon {
            font-size: 1.5rem;
        }

        .menu li a:hover {
            color: var(--purple);
        }

        .navigation.active .menu-toggle::before {
            transform: translateY(0px) rotate(45deg);
            box-shadow: none;

        }

        .navigation.active .menu-toggle::after {
            transform: translateY(0px) rotate(-45deg);
        }

        .navigation.active {
            width: 300px;
            height: 350px;
            transition: width 0.5s, height 0.5s;
            transition-delay: 0s, 0.3s;

        }

        .navigation.active .user-box {
            width: calc(100% - 60px);
            transition-delay: 0s;
        }
    </style>

    <div class="navigation">
        <div class="user-box">
            <div class="image-box">
                <img src="./img/users_profil/<?= $_SESSION['foto_profil']; ?>" alt="avatar">
            </div>
            <p class="username text-center"><?= $_SESSION['nama']; ?>

            </p>
            <br><br>






        </div>
        <div class="menu-toggle"></div>
        <ul class="menu">
            <li><a href="./user/account.php"><ion-icon name="log-out-outline"></ion-icon>Account</a></li>
            <li><a href="#"><ion-icon name="cog-outline"></ion-icon></a>Account</li>
            <li><a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a></li>
            <li><a href="#"><ion-icon name="cog-outline"></ion-icon></ion-icon>Settings</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="./controller/logout.php"><ion-icon name="log-out-outline"></ion-icon>Logout</a></li>
        </ul>
    </div>


</nav>
<script>
    let menuToggle = document.querySelector('.menu-toggle');
    let navigation = document.querySelector('.navigation');

    menuToggle.onclick = function() {
        navigation.classList.toggle('active');
    }
</script>