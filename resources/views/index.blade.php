<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaHub - Fresh Pizza Delivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full pizza-bg flex items-center justify-center text-white font-bold">P</div>
                    <span class="font-bold text-xl text-gray-900">PizzaHub</span>
                </div>
                <div class="nav-menu md:flex gap-8">
                    <a href="menu.html" class="text-gray-700 hover:pizza-red">Menu</a>
                    <a href="#offers" class="text-gray-700 hover:pizza-red">Offers</a>
                    <a href="#services" class="text-gray-700 hover:pizza-red">Services</a>
                    <a href="contact.html" class="text-gray-700 hover:pizza-red">Contact</a>
                </div>
                <div class="hidden md:flex gap-4 items-center">
                    <a href="login.html" class="text-gray-700 hover:pizza-red font-medium">Login</a>
                    <a href="register.html" class="px-6 py-2 rounded-lg text-white pizza-bg hover:opacity-90 font-medium">Sign Up</a>
                </div>
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Delicious Pizza,<br/>Fast Delivery</h1>
                    <p class="text-xl mb-8 opacity-90">Fresh, handmade pizzas delivered to your doorstep in 30 minutes or less. Order now and enjoy authentic Italian flavors.</p>
                    <div class="flex gap-4">
                        <a href="menu.html" class="px-8 py-3 rounded-lg bg-white text-gray-900 font-bold hover:opacity-90">Order Now</a>
                        <a href="#offers" class="px-8 py-3 rounded-lg border-2 border-white text-white font-bold hover:bg-white hover:bg-opacity-10">View Offers</a>
                    </div>
                </div>
                <div class="hidden md:flex justify-center">
                    <div class="w-64 h-64 rounded-full pizza-orange-bg opacity-20 animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-lg hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full pizza-orange-bg text-white flex items-center justify-center text-2xl">⏱️</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Super Fast Delivery</h3>
                    <p class="text-gray-600">30 minutes guaranteed delivery to your location. We track every order in real-time.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full pizza-orange-bg text-white flex items-center justify-center text-2xl">🍕</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Premium Fresh Ingredients</h3>
                    <p class="text-gray-600">We source the finest quality mozzarella cheese and fresh vegetables daily for perfect taste.</p>
                </div>
                <div class="text-center p-6 bg-gray-50 rounded-lg hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full pizza-orange-bg text-white flex items-center justify-center text-2xl">🎧</div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dedicated Support</h3>
                    <p class="text-gray-600">24/7 customer support team ready to help with any questions or special requests.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section id="offers" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Special Offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-40 pizza-bg flex items-center justify-center text-white text-5xl">🍕</div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Buy 2 Get 1 Free</h3>
                        <p class="text-gray-600 mb-4">Order any 2 pizzas and get 1 medium pizza absolutely free!</p>
                        <button class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90">Claim Offer</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-40 pizza-orange-bg flex items-center justify-center text-white text-5xl">🎁</div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">50% Off First Order</h3>
                        <p class="text-gray-600 mb-4">First-time customers get 50% discount on their first order</p>
                        <button class="w-full px-4 py-2 pizza-orange-bg text-white rounded-lg font-bold hover:opacity-90">Sign Up Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hot Pizza Meals Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Hot Pizza Meals</h2>
                <p class="text-gray-600">Fresh, delicious pizzas prepared with love and served hot to your door</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-red-300 to-orange-300 flex items-center justify-center text-white text-6xl relative">
                        🍕
                        <span class="absolute top-2 right-2 bg-orange-600 text-white px-2 py-1 rounded text-xs font-bold">Popular</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Margherita</h3>
                        <p class="text-gray-600 text-sm mb-3">Tomato sauce, mozzarella, fresh basil, olive oil</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold pizza-red">$12.99</span>
                            <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Fresh</span>
                        </div>
                        <button onclick="window.location.href='product-detail.html'" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 transition">Order Now</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-red-300 to-orange-300 flex items-center justify-center text-white text-6xl relative">
                        🍕
                        <span class="absolute top-2 right-2 bg-red-600 text-white px-2 py-1 rounded text-xs font-bold">Spicy</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Pepperoni Feast</h3>
                        <p class="text-gray-600 text-sm mb-3">Tomato sauce, mozzarella, pepperoni, spices</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold pizza-red">$14.99</span>
                            <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded">Hot</span>
                        </div>
                        <button onclick="window.location.href='product-detail.html'" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 transition">Order Now</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-red-300 to-orange-300 flex items-center justify-center text-white text-6xl relative">
                        🍕
                        <span class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 rounded text-xs font-bold">Vegan</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Veggie Supreme</h3>
                        <p class="text-gray-600 text-sm mb-3">Tomato sauce, bell peppers, onions, mushrooms, olives</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold pizza-red">$13.99</span>
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Healthy</span>
                        </div>
                        <button onclick="window.location.href='product-detail.html'" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 transition">Order Now</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-red-300 to-orange-300 flex items-center justify-center text-white text-6xl relative">
                        🍕
                        <span class="absolute top-2 right-2 bg-purple-600 text-white px-2 py-1 rounded text-xs font-bold">Premium</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Meat Lovers</h3>
                        <p class="text-gray-600 text-sm mb-3">Pepperoni, sausage, bacon, ham, mozzarella</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold pizza-red">$16.99</span>
                            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">4 Meats</span>
                        </div>
                        <button onclick="window.location.href='product-detail.html'" class="w-full px-4 py-2 pizza-bg text-white rounded-lg font-bold hover:opacity-90 transition">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="menu.html" class="px-8 py-3 rounded-lg pizza-bg text-white font-bold hover:opacity-90 inline-block">View All Pizzas</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="font-bold mb-4">PizzaHub</h3>
                    <p class="text-gray-400">Delivering happiness, one pizza at a time.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Menu</a></li>
                        <li><a href="#" class="hover:text-white">Offers</a></li>
                        <li><a href="#" class="hover:text-white">Track Order</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Support</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="contact.html" class="hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                        <li><a href="#" class="hover:text-white">Terms</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="#" class="hover:text-orange-500">Facebook</a>
                        <a href="#" class="hover:text-orange-500">Instagram</a>
                        <a href="#" class="hover:text-orange-500">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2024 PizzaHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

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
