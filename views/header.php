<head>
    <link rel="stylesheet" href="<?= CSS ?>home.css">
</head>

<!-- navigation section for phone -->
<div class="navigation">
    <header class="header">
        <span id="close-navigation">&times;</span>
        <!-- logo sections -->
        <div class="logo">
            <div class="brands">
                <p class="brand">h</p>
                <p class="sub-brand">hobbies</p>
            </div>
        </div>

        <!-- links section -->
        <ul class="links">
            <li class="link">
                <a href="">Acceuil</a>
            </li>
            <li class="link">
                <a href="">Activite</a>
            </li>
            <li class="link">
                <a href="">Reservation</a>
            </li>
            <li class="link">
                <a href="">Contact</a>
            </li>
        </ul>
    </header>
</div>

<!-- navigation for large screen -->
<nav class="navbar">
    <!-- logo sections -->
    <div class="brands">
        <p class="brand">h</p>
        <p class="sub-brand">hobbies</p>
    </div>

    <!-- links section -->
    <ul class="links ">
        <li class="link">
            <a href="">Acceuil</a>
        </li>
        <li class="link">
            <a href="">Activite</a>
        </li>
        <li class="link">
            <a href="">Reservation</a>
        </li>
        <li class="link">
            <a href="">Contact</a>
        </li>
    </ul>

    <!-- users actions -->
    <div class="actions">
        <a class="icon-person" href="index.php?action=<?= ($connect) ? "profil" : "signIn" ?>">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
            </svg>
        </a>
        <button class="icon-cart">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
            </svg>
            <span class="badge" id="nbr_cart">0</span>
        </button>
        <button class="icon-person" id="show-navigation">
        <svg  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
        </svg>
        </button>
    </div>
</nav>
<script src="<?= JS ?>home.js"></script>