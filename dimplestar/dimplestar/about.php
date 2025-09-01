<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Dimple Star Transport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .glass-effect { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.1); }
        .floating { animation: floating 3s ease-in-out infinite; }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .fade-in { animation: fadeInUp 0.6s ease-out forwards; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
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
                    <a href="index.php" class="text-gray-700 hover:text-blue-600 transition-colors">Home</a>
                    <a href="about.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">About Us</a>
                    <a href="terminal.php" class="text-gray-700 hover:text-blue-600 transition-colors">Terminals</a>
                    <a href="routeschedule.php" class="text-gray-700 hover:text-blue-600 transition-colors">Routes & Schedules</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                    <a href="book.php" class="text-gray-700 hover:text-blue-600 transition-colors">Book Now</a>
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
                <a href="index.php" class="block text-gray-700">Home</a>
                <a href="about.php" class="block text-blue-600 font-semibold">About Us</a>
                <a href="terminal.php" class="block text-gray-700">Terminals</a>
                <a href="routeschedule.php" class="block text-gray-700">Routes & Schedules</a>
                <a href="contact.php" class="block text-gray-700">Contact</a>
                <a href="book.php" class="block text-gray-700">Book Now</a>
                <div class="pt-4 border-t space-y-3">
                    <a href="signlog.php" class="block w-full bg-blue-600 text-white py-2 rounded-lg text-center">Sign Up / Login</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="hero-gradient py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 fade-in">About Us</h1>
                <p class="text-xl lg:text-2xl text-gray-200 fade-in">Discover our journey and commitment to excellence in transportation</p>
            </div>
        </div>
    </section>

    <!-- User Status & Date -->
    <section class="bg-white py-6 border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div id="userWelcome" class="text-gray-600 mb-2 sm:mb-0">
                    <a href="signlog.php" class="text-blue-600 hover:text-blue-700">Sign Up / Login</a>
                </div>
                <div class="flex items-center text-gray-600">
                    <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                    <span id="currentDateTime" class="font-medium"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                
                <!-- Historical Photo Section -->
                <div class="mb-16 fade-in">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 lg:p-12">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Our History</h2>
                                <div class="space-y-4 text-gray-700 text-lg">
                                    <p class="leading-relaxed">
                                        Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963 
                                        (fleet No 800) going to Alabang and jeepneys under the Light Rail Line in Taft Ave near 
                                        United Nations Avenue, Ermita, Manila, Philippines.
                                    </p>
                                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-blue-600">2004 Transformation</span>
                                        </div>
                                        <p>
                                            In May 2004, significant changes were made as Napat Transit evolved into 
                                            <span class="font-bold text-gray-800">Dimple Star Transport</span>, 
                                            marking a new era in our commitment to excellence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="relative">
                                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                                    <!-- Placeholder for historical bus image -->
                                    <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                         alt="Historical Bus Photo" 
                                         class="w-full h-80 object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 text-white">
                                        <p class="text-sm opacity-90">October 16, 1993</p>
                                        <p class="font-semibold">Fleet No. 800 - NVR-963</p>
                                    </div>
                                </div>
                                
                                <!-- Decorative Elements -->
                                <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20"></div>
                                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-purple-400 rounded-full opacity-15"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission & Vision Section -->
                <div class="mb-16 fade-in">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Purpose</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Driven by excellence and guided by our commitment to serve
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Mission -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mr-4">
                                    <i class="fas fa-bullseye text-white text-2xl"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-800">Mission</h3>
                            </div>
                            <p class="text-gray-700 text-lg leading-relaxed">
                                To provide superior transport service to Metro Manila and Mindoro Province commuters, 
                                ensuring safety, comfort, and reliability in every journey we undertake.
                            </p>
                            <div class="mt-6 flex items-center text-green-600">
                                <i class="fas fa-check-circle mr-2"></i>
                                <span class="font-medium">Superior Service Excellence</span>
                            </div>
                        </div>

                        <!-- Vision -->
                        <div class="bg-gradient-to-br from-purple-50 to-violet-100 rounded-3xl p-8 hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mr-4">
                                    <i class="fas fa-eye text-white text-2xl"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-800">Vision</h3>
                            </div>
                            <p class="text-gray-700 text-lg leading-relaxed">
                                To lead the bus transport industry through innovative service to the riding public, 
                                setting new standards for excellence and customer satisfaction.
                            </p>
                            <div class="mt-6 flex items-center text-purple-600">
                                <i class="fas fa-star mr-2"></i>
                                <span class="font-medium">Industry Leadership</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Integration -->
                <div class="text-center mb-16 fade-in">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Connect With Us</h3>
                        <p class="mb-6 text-blue-100">Stay updated with our latest news and journey updates</p>
                        
                        <div class="flex justify-center space-x-6">
                            <a href="#" class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <i class="fab fa-facebook-f text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <i class="fab fa-twitter text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <i class="fab fa-instagram text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <i class="fab fa-youtube text-white text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Timeline Section -->
                <div class="mb-16 fade-in">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Journey</h2>
                        <p class="text-xl text-gray-600">Key milestones in our transportation legacy</p>
                    </div>

                    <div class="relative">
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-600 to-purple-600 rounded-full"></div>
                        
                        <div class="space-y-12">
                            <!-- 1993 -->
                            <div class="flex items-center">
                                <div class="flex-1 text-right pr-8">
                                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">1993</h4>
                                        <p class="text-gray-600">Operating as Napat Transit, serving the Manila-Alabang route</p>
                                    </div>
                                </div>
                                <div class="w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                                <div class="flex-1 pl-8"></div>
                            </div>
                            
                            <!-- 2004 -->
                            <div class="flex items-center">
                                <div class="flex-1 pr-8"></div>
                                <div class="w-6 h-6 bg-purple-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                                <div class="flex-1 text-left pl-8">
                                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">2004</h4>
                                        <p class="text-gray-600">Transformation to Dimple Star Transport, expanding our services</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Present -->
                            <div class="flex items-center">
                                <div class="flex-1 text-right pr-8">
                                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-2xl p-6 shadow-lg">
                                        <h4 class="text-xl font-bold mb-2">Present</h4>
                                        <p>Leading transportation service to Metro Manila and Mindoro Province</p>
                                    </div>
                                </div>
                                <div class="w-6 h-6 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full border-4 border-white shadow-lg z-10"></div>
                                <div class="flex-1 pl-8"></div>
                            </div>
                        </div>
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
        
        // Update current date and time
        function updateDateTime() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('currentDateTime').textContent = now.toLocaleDateString('en-US', options);
        }
        
        // Simulate user login state
        function initializeUserSection() {
            const userWelcome = document.getElementById('userWelcome');
            // Simulate checking if user is logged in
            const isLoggedIn = Math.random() > 0.7; // Random for demo
            
            if (isLoggedIn) {
                userWelcome.innerHTML = `
                    <span class="text-green-600 font-semibold">Welcome, user@example.com!</span>
                    <a href="logout.php" class="ml-4 text-red-600 hover:text-red-700">Logout</a>
                `;
            }
        }
        
        // Fade in animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDateTime();
            initializeUserSection();
            animateOnScroll();
            
            // Update time every minute
            setInterval(updateDateTime, 60000);
            
            // Animate on scroll
            window.addEventListener('scroll', animateOnScroll);
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