<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes & Schedules - Dimple Star Transport</title>
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
        .route-card {
            transition: all 0.3s ease;
        }
        .route-card:hover {
            transform: translateY(-5px);
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
                    <a href="terminal.php" class="text-gray-700 hover:text-blue-600 transition-colors">Terminals</a>
                    <a href="routeschedule.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Routes & Schedules</a>
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
                <a href="terminal.php" class="block text-gray-700">Terminals</a>
                <a href="routeschedule.php" class="block text-blue-600 font-semibold">Routes & Schedules</a>
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
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 fade-in">Routes & Schedules</h1>
                <p class="text-xl lg:text-2xl text-gray-200 fade-in">Plan your journey with our convenient departure times</p>
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
                
                <!-- Route Map Section -->
                <div class="mb-16 fade-in">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Route Network</h2>
                        <p class="text-xl text-gray-600">Our comprehensive service connecting Metro Manila to Mindoro</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 overflow-hidden">
                        <!-- Placeholder for route map - replace with your actual route.png -->
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Route Network Map" 
                                 class="w-full rounded-2xl shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-2xl"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Dimple Star Route Network</h3>
                                <p class="text-gray-200">Connecting multiple terminals across Metro Manila to San Jose, Mindoro</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Notice -->
                <div class="mb-12 fade-in">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-2xl p-6 text-center">
                        <div class="flex items-center justify-center mb-3">
                            <i class="fas fa-exchange-alt text-3xl mr-3"></i>
                            <h3 class="text-2xl font-bold">Important Notice</h3>
                        </div>
                        <p class="text-xl font-medium">All trips are vice versa - Return journeys available from San Jose to all Manila terminals</p>
                    </div>
                </div>

                <!-- Schedule Table -->
                <div class="fade-in">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Daily Schedules</h2>
                        <p class="text-xl text-gray-600">Regular departure times from Metro Manila terminals to San Jose, Mindoro</p>
                    </div>

                    <!-- Mobile-friendly cards for small screens -->
                    <div class="lg:hidden space-y-6">
                        <!-- Ali Mall Cubao -->
                        <div class="route-card bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Ali Mall Cubao Terminal</h3>
                                    <p class="text-sm text-blue-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">9:00 AM</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">10:00 AM</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">1:00 PM</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Alabang Terminal -->
                        <div class="route-card bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Alabang Terminal</h3>
                                    <p class="text-sm text-green-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">6:00 AM</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">7:00 AM</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">2:00 PM</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">6:00 PM</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">10:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Cabuyao Terminal -->
                        <div class="route-card bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Cabuyao Terminal</h3>
                                    <p class="text-sm text-purple-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 AM</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">9:00 AM</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Espana Terminal -->
                        <div class="route-card bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Espana Terminal</h3>
                                    <p class="text-sm text-orange-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">4:30 AM</span>
                                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">5:30 AM</span>
                                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">12:00 PM</span>
                                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- San Lazaro Terminal -->
                        <div class="route-card bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">San Lazaro Terminal</h3>
                                    <p class="text-sm text-red-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">3:00 AM</span>
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">4:30 AM</span>
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">11:00 AM</span>
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">3:00 PM</span>
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">7:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Pasay Terminal -->
                        <div class="route-card bg-gradient-to-br from-teal-50 to-teal-100 rounded-2xl p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-teal-600 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Pasay Terminal</h3>
                                    <p class="text-sm text-teal-600">→ San Jose</p>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-4">
                                <p class="font-semibold text-gray-800 mb-2">Departure Times:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-lg text-sm font-medium">5:00 AM</span>
                                    <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-lg text-sm font-medium">6:00 AM</span>
                                    <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-lg text-sm font-medium">1:00 PM</span>
                                    <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-lg text-sm font-medium">3:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop table for larger screens -->
                    <div class="hidden lg:block">
                        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="text-center">
                                        <i class="fas fa-map-marker-alt text-2xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Origin</h3>
                                    </div>
                                    <div class="text-center">
                                        <i class="fas fa-clock text-2xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Regular Schedule</h3>
                                    </div>
                                    <div class="text-center">
                                        <i class="fas fa-flag-checkered text-2xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Destination</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="divide-y divide-gray-200">
                                <!-- Ali Mall Cubao -->
                                <div class="p-6 hover:bg-blue-50 transition-colors">
                                    <div class="grid grid-cols-3 gap-4 items-center">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-gray-800">Ali Mall Cubao Terminal</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex flex-wrap gap-2 justify-center">
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">9:00 AM</span>
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">10:00 AM</span>
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">1:00 PM</span>
                                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <span class="font-semibold text-gray-800">San Jose</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Alabang -->
                                <div class="p-6 hover:bg-green-50 transition-colors">
                                    <div class="grid grid-cols-3 gap-4 items-center">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-green-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-gray-800">Alabang Terminal</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex flex-wrap gap-2 justify-center">
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">6:00 AM</span>
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">7:00 AM</span>
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">2:00 PM</span>
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">6:00 PM</span>
                                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">10:00 PM</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <span class="font-semibold text-gray-800">San Jose</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cabuyao -->
                                <div class="p-6 hover:bg-purple-50 transition-colors">
                                    <div class="grid grid-cols-3 gap-4 items-center">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-purple-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-gray-800">Cabuyao Terminal</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex flex-wrap gap-2 justify-center">
                                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 AM</span>
                                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">9:00 AM</span>
                                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 PM</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <span class="font-semibold text-gray-800">San Jose</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Espana -->
                                <div class="p-6 hover:bg-orange-50 transition-colors">
                                    <div class="grid grid-cols-3 gap-4 items-center">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-orange-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-gray-800">Espana Terminal</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex flex-wrap gap-2 justify-center">
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">4:30 AM</span>
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">5:30 AM</span>
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">12:00 PM</span>
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">4:00 PM</span>
                                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-lg text-sm font-medium">8:00 PM</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <span class="font-semibold text-gray-800">San Jose</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- San Lazaro -->
                                <div class="p-6 hover:bg-red-50 transition-colors">
                                    <div class="grid grid-cols-3 gap-4 items-center">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-red-600 rounded-full mr-3"></div>
                                            <span class="font-semibold text-gray-800">San Lazaro Terminal</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="flex flex-wrap gap-2 justify-center">
                                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">3:00 AM</span>
                                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">4:30 AM</span>
                                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">11:00 AM</span>
                                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">3:00 PM</span>
                                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-lg text-sm font-medium">7:00 PM</span>