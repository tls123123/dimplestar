<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminals - Dimple Star Transport</title>
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
        .map-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .map-container iframe {
            width: 100%;
            height: 300px;
            border: none;
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
                    <a href="about.php" class="text-gray-700 hover:text-blue-600 transition-colors">About Us</a>
                    <a href="terminal.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Terminals</a>
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
                <a href="about.php" class="block text-gray-700">About Us</a>
                <a href="terminal.php" class="block text-blue-600 font-semibold">Terminals</a>
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
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 fade-in">Our Terminals</h1>
                <p class="text-xl lg:text-2xl text-gray-200 fade-in">Convenient locations to start your journey</p>
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
                
                <!-- Terminals Overview -->
                <div class="text-center mb-16 fade-in">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Terminal Locations</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Find our convenient terminal locations in Manila and Mindoro for easy boarding
                    </p>
                </div>

                <!-- Terminal Cards -->
                <div class="space-y-12">
                    
                    <!-- Espana Terminal -->
                    <div class="fade-in">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl overflow-hidden shadow-xl">
                            <div class="p-8 lg:p-12">
                                <div class="grid lg:grid-cols-2 gap-8 items-start">
                                    <!-- Terminal Info -->
                                    <div class="space-y-6">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-3xl font-bold text-gray-800">Espana Terminal</h3>
                                                <p class="text-blue-600 font-medium">Manila Hub</p>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Address</h4>
                                            <p class="text-gray-600 mb-4">836B Antipolo St, Sampaloc, Manila</p>
                                            
                                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Contact Information</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-center space-x-3">
                                                    <i class="fas fa-phone text-blue-600"></i>
                                                    <span class="text-gray-600">+63.02.985.1451</span>
                                                </div>
                                                <div class="flex items-center space-x-3">
                                                    <i class="fas fa-mobile-alt text-green-600"></i>
                                                    <span class="text-gray-600">+63.908.926.9163</span>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-6 pt-4 border-t">
                                                <a href="https://www.google.com/maps/place/Dimple+Star/@14.6125312,120.9948033,770m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b60300001d5d:0xd30645794daddf84?hl=en;z=14" 
                                                   target="_blank" 
                                                   class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                                    <i class="fas fa-external-link-alt mr-2"></i>
                                                    View Larger Map
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Map -->
                                    <div class="map-container">
                                        <iframe 
                                            src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star,+836BAntipoloStSampaloc,521,Manila,&amp;aq=0&amp;oq=Metro+Manila&amp;sll=14.6125312,120.9948033&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star&amp;ll=14.6125312,120.9948033&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed"
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="flex items-center justify-center py-8">
                        <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full"></div>
                    </div>

                    <!-- San Jose Terminal -->
                    <div class="fade-in">
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-3xl overflow-hidden shadow-xl">
                            <div class="p-8 lg:p-12">
                                <div class="grid lg:grid-cols-2 gap-8 items-start">
                                    <!-- Map -->
                                    <div class="map-container lg:order-1">
                                        <iframe 
                                            src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star+Transport,+BonifacioSt,SanJose,OccidentalMindoro,&amp;aq=0&amp;oq=&amp;sll=12.3540632,121.0618653&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star+Transport&amp;ll=12.3540632,121.0618653&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed"
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                    
                                    <!-- Terminal Info -->
                                    <div class="space-y-6 lg:order-2">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-3xl font-bold text-gray-800">San Jose Terminal</h3>
                                                <p class="text-green-600 font-medium">Mindoro Hub</p>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Address</h4>
                                            <p class="text-gray-600 mb-4">Bonifacio St, San Jose, Occidental Mindoro</p>
                                            
                                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Contact Information</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-center space-x-3">
                                                    <i class="fas fa-phone text-blue-600"></i>
                                                    <span class="text-gray-600">+63.02.668.4151</span>
                                                </div>
                                                <div class="flex items-center space-x-3">
                                                    <i class="fas fa-mobile-alt text-green-600"></i>
                                                    <span class="text-gray-600">+63.921.568.6449</span>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-6 pt-4 border-t">
                                                <a href="https://www.google.com/maps/place/Dimple+Star+Transport/@14.6143711,120.9841972,458m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b5fe6f7ebf6b:0xc34baa5ed38261eb?hl=en;z=14" 
                                                   target="_blank" 
                                                   class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                                                    <i class="fas fa-external-link-alt mr-2"></i>
                                                    View Larger Map
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="mt-16 fade-in">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 lg:p-12 text-white text-center">
                        <h3 class="text-3xl font-bold mb-6">Need Assistance?</h3>
                        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                            Our friendly staff at both terminals are ready to help you with tickets, schedules, and travel information
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                            <div class="bg-white bg-opacity-20 rounded-2xl p-6 glass-effect">
                                <i class="fas fa-clock text-3xl mb-4"></i>
                                <h4 class="text-xl font-semibold mb-2">Operating Hours</h4>
                                <p class="text-blue-100">Daily: 5:00 AM - 9:00 PM</p>
                            </div>
                            
                            <div class="bg-white bg-opacity-20 rounded-2xl p-6 glass-effect">
                                <i class="fas fa-info-circle text-3xl mb-4"></i>
                                <h4 class="text-xl font-semibold mb-2">Terminal Services</h4>
                                <p class="text-blue-100">Ticketing, Waiting Areas, Restrooms</p>
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
                    </div>
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