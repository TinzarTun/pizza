<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaHub - Fresh Pizza Delivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .pizza-red { color: #DC2626; }
        .pizza-bg { background-color: #DC2626; }
        .pizza-orange { color: #EA580C; }
        .pizza-orange-bg { background-color: #EA580C; }
        .hero-bg {
            background: linear-gradient(135deg, #DC2626 0%, #EA580C 100%);
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 6px;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #DC2626;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(10px, 10px);
        }
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: white;
                flex-direction: column;
                padding: 20px;
                gap: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .nav-menu.active {
                display: flex;
            }
        }
    </style>
</head>
<body class="bg-gray-50 @yield('body-class')">
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <script>
        // Hamburger Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when a link is clicked
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const nav = document.querySelector('nav');
            if (!nav.contains(event.target)) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>
