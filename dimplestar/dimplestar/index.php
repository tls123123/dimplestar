<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimple Star Transport - Modern Bus Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .glass-effect { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.1); }
        .slide-fade { animation: slideFade 15s infinite; }
        @keyframes slideFade {
            0%, 33% { opacity: 1; }
            33.33%, 66.66% { opacity: 0; }
            66.67%, 100% { opacity: 1; }
        }
        .floating { animation: floating 3s ease-in-out infinite; }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-bus text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Dimple Star</h1>
                        <p class="text-sm text-gray-500">Transport Service</p>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="index.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-600 transition-colors">About Us</a>
                    <a href="terminal.php" class="text-gray-700 hover:text-blue-600 transition-colors">Terminals</a>
                    <a href="routeschedule.php" class="text-gray-700 hover:text-blue-600 transition-colors">Routes & Schedules</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                </nav>
                
                <!-- User Section -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div id="userSection" class="text-sm text-gray-600">
                        <a href="signlog.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            <i class="fas fa-user-plus mr-2"></i>Sign Up / Login
                        </a>
                    </div>
                    <a href="book.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition-all floating">
                        <i class="fas fa-ticket-alt mr-2"></i>Book Now
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-2xl text-gray-700"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="lg:hidden hidden bg-white border-t">
            <div class="container mx-auto px-4 py-4 space-y-4">
                <a href="index.php" class="block text-blue-600 font-semibold">Home</a>
                <a href="about.php" class="block text-gray-700">About Us</a>
                <a href="terminal.php" class="block text-gray-700">Terminals</a>
                <a href="routeschedule.php" class="block text-gray-700">Routes & Schedules</a>
                <a href="contact.php" class="block text-gray-700">Contact</a>
                <div class="pt-4 border-t space-y-3">
                    <a href="signlog.php" class="block w-full bg-blue-600 text-white py-2 rounded-lg text-center">Sign Up / Login</a>
                    <a href="book.php" class="block w-full bg-gradient-to-r from-orange-500 to-red-500 text-white py-2 rounded-lg text-center">Book Now</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
        <!-- Background Images Slider -->
        <div class="absolute inset-0">
            <div class="relative w-full h-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
                     class="absolute inset-0 w-full h-full object-cover slide-fade" style="animation-delay: 0s;" alt="Bus Service">
                <img src="https://images.unsplash.com/photo-1570125909517-53cb21c89ff2?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
                     class="absolute inset-0 w-full h-full object-cover slide-fade opacity-0" style="animation-delay: 5s;" alt="Modern Bus">
                <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
                     class="absolute inset-0 w-full h-full object-cover slide-fade opacity-0" style="animation-delay: 10s;" alt="Bus Terminal">
            </div>
        </div>
        
        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-20">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                    Your Journey<br>
                    <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        Starts Here
                    </span>
                </h1>
                <p class="text-xl lg:text-2xl mb-8 text-gray-200 max-w-2xl mx-auto">
                    Experience comfortable, safe, and reliable bus transportation across the Philippines with Dimple Star Transport.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:from-orange-600 hover:to-red-600 transition-all floating">
                        <i class="fas fa-ticket-alt mr-3"></i>Book Your Trip Now
                    </button>
                    <button class="glass-effect text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition-all">
                        <i class="fas fa-route mr-3"></i>View Routes
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
            <div class="animate-bounce">
                <i class="fas fa-chevron-down text-white text-2xl"></i>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose Dimple Star?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">We provide exceptional service with modern amenities for your comfort and safety</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Safe & Secure</h3>
                    <p class="text-gray-600">Your safety is our priority with trained drivers and well-maintained vehicles.</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">On-Time Service</h3>
                    <p class="text-gray-600">Reliable schedules you can count on for all your travel needs.</p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-violet-100 p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-wifi text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Modern Amenities</h3>
                    <p class="text-gray-600">Enjoy WiFi, comfortable seating, and air conditioning on all routes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8">Get In Touch</h2>
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Call us at:</p>
                                <h3 class="text-2xl font-bold">0929 209 0712</h3>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Visit us at:</p>
                                <p class="text-lg">Block 1 lot 10, Southpoint Subdivision<br>
                                Brgy Banay-Banay, Cabuyao, Laguna</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-calendar text-white"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Today's Date:</p>
                                <p id="currentDate" class="text-lg font-semibold"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white bg-opacity-10 p-8 rounded-2xl glass-effect">
                        <h3 class="text-2xl font-bold mb-6">Quick Contact</h3>
                        <form class="space-y-4">
                            <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-bus text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Dimple Star Transport</h3>
                        <p class="text-gray-400">Your trusted travel companion</p>
                    </div>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-sky-500 rounded-lg flex items-center justify-center hover:bg-sky-600 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center hover:bg-pink-700 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Dimple Star Transport. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Update current date
        function updateDate() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('en-US', options);
        }
        
        // Simulate user login state
        function initializeUserSection() {
            const userSection = document.getElementById('userSection');
            // Simulate checking if user is logged in
            const isLoggedIn = Math.random() > 0.7; // Random for demo
            
            if (isLoggedIn) {
                userSection.innerHTML = `
                    <span class="text-green-600 font-semibold">Welcome, user@example.com!</span>
                    <a href="#" class="ml-4 text-red-600 hover:text-red-700">Logout</a>
                `;
            }
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDate();
            initializeUserSection();
            
            // Update time every minute
            setInterval(updateDate, 60000);
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>