<!DOCTYPE html>
<?php
    include 'php_includes/connection.php';
    include 'php_includes/book.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - Dimple Star Transport</title>
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
        .form-glow:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }
        
        /* Custom Date Picker Styles */
        .calendar {
            font-family: 'Inter', sans-serif;
            font-size: 0.9em;
            background-color: #ffffff;
            color: #333;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 1.2em;
            width: 280px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .calendar .months {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            border: none;
            border-radius: 8px;
            color: #FFF;
            padding: 0.8em;
            text-align: center;
            font-weight: 600;
        }
        
        .calendar .prev-month,
        .calendar .next-month {
            padding: 0;
        }
        
        .calendar .prev-month {
            float: left;
        }
        
        .calendar .next-month {
            float: right;
        }
        
        .calendar .current-month {
            margin: 0 auto;
        }
        
        .calendar .months .prev-month,
        .calendar .months .next-month {
            color: #FFF;
            text-decoration: none;
            padding: 0.5em 0.8em;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .calendar .months .prev-month:hover,
        .calendar .months .next-month:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .calendar table {
            border-collapse: collapse;
            padding: 0;
            font-size: 0.9em;
            width: 100%;
            margin-top: 1em;
        }
        
        .calendar th {
            text-align: center;
            padding: 0.5em 0;
            font-weight: 600;
            color: #6b7280;
        }
        
        .calendar td {
            text-align: center;
            padding: 2px;
            width: 14.3%;
        }
        
        .calendar td span {
            display: block;
            color: #374151;
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            text-decoration: none;
            padding: 0.6em 0.4em;
            cursor: pointer;
            border-radius: 6px;
            transition: all 0.2s;
            font-weight: 500;
        }
        
        .calendar td span:hover {
            color: #3b82f6;
            background-color: #eff6ff;
            border: 1px solid #93c5fd;
            transform: scale(1.05);
        }
        
        .calendar td.today span {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            border: 1px solid #3b82f6;
            color: #ffffff;
            font-weight: 600;
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
                    <a href="routeschedule.php" class="text-gray-700 hover:text-blue-600 transition-colors">Routes & Schedules</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                    <a href="book.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Book Now</a>
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
                <a href="routeschedule.php" class="block text-gray-700">Routes & Schedules</a>
                <a href="contact.php" class="block text-gray-700">Contact</a>
                <a href="book.php" class="block text-blue-600 font-semibold">Book Now</a>
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
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 fade-in">Book Your Journey</h1>
                <p class="text-xl lg:text-2xl text-gray-200 fade-in">Reserve your seat for a comfortable and safe travel experience</p>
            </div>
        </div>
    </section>

    <!-- Date & Time Section -->
    <section class="bg-white py-6 border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="text-gray-600 mb-2 sm:mb-0">
                    <span class="text-green-600 font-semibold">Ready to book your trip</span>
                </div>
                <div class="flex items-center text-gray-600">
                    <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                    <span id="currentDateTime" class="font-medium"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Booking Form -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                
                <!-- Booking Form -->
                <div class="fade-in">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                        <!-- Form Header -->
                        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-8 text-center">
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center">
                                    <i class="fas fa-ticket-alt text-3xl"></i>
                                </div>
                            </div>
                            <h2 class="text-3xl font-bold mb-2">Book Your Trip</h2>
                            <p class="text-blue-100">Fill in your travel details below</p>
                        </div>

                        <!-- Form Content -->
                        <div class="p-8 lg:p-12">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="bookingForm" class="space-y-8">
                                
                                <!-- Trip Type -->
                                <div class="bg-gray-50 rounded-2xl p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                                        <i class="fas fa-route mr-2 text-blue-600"></i>Trip Type
                                    </h3>
                                    <div class="flex space-x-6">
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="way" value="1" checked onclick="document.getElementById('datepick2').disabled=true; document.getElementById('returnSection').style.opacity='0.5';" class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                                            <span class="ml-3 text-gray-700 font-medium">One Way</span>
                                        </label>
                                        <label class="flex items-center cursor-pointer">
                                            <input type="radio" name="way" value="2" onclick="document.getElementById('datepick2').disabled=false; document.getElementById('returnSection').style.opacity='1';" class="w-5 h-5 text-blue-600 focus:ring-blue-500">
                                            <span class="ml-3 text-gray-700 font-medium">Round Trip</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Origin and Destination -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-map-marker-alt mr-2 text-green-600"></i>Origin
                                        </label>
                                        <select name="Origin" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow bg-white text-gray-700">
                                            <option value="0">Select Origin</option>
                                            <option value="San Lazaro">San Lazaro</option>
                                            <option value="Espana">Espana</option>
                                            <option value="Alabang">Alabang</option>
                                            <option value="Cabuyao">Cabuyao</option>
                                            <option value="Naujan">Naujan</option>
                                            <option value="Victoria">Victoria</option>
                                            <option value="Pinamalayan">Pinamalayan</option>
                                            <option value="Gloria">Gloria</option>
                                            <option value="Bongabong">Bongabong</option>
                                            <option value="Roxas">Roxas</option>
                                            <option value="Mansalay">Mansalay</option>
                                            <option value="Bulalacao">Bulalacao</option>
                                            <option value="Magsaysay">Magsaysay</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="Pola">Pola</option>
                                            <option value="Soccoro">Socorro</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-flag-checkered mr-2 text-red-600"></i>Destination
                                        </label>
                                        <select name="Destination" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow bg-white text-gray-700">
                                            <option value="0">Select Destination</option>
                                            <option value="San Lazaro">San Lazaro</option>
                                            <option value="Espana">Espana</option>
                                            <option value="Alabang">Alabang</option>
                                            <option value="Cabuyao">Cabuyao</option>
                                            <option value="Naujan">Naujan</option>
                                            <option value="Victoria">Victoria</option>
                                            <option value="Pinamalayan">Pinamalayan</option>
                                            <option value="Gloria">Gloria</option>
                                            <option value="Bongabong">Bongabong</option>
                                            <option value="Roxas">Roxas</option>
                                            <option value="Mansalay">Mansalay</option>
                                            <option value="Bulalacao">Bulalacao</option>
                                            <option value="Magsaysay">Magsaysay</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="Pola">Pola</option>
                                            <option value="Soccoro">Socorro</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Passengers and Bus Type -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-users mr-2 text-purple-600"></i>Number of Passengers
                                        </label>
                                        <input type="number" name="no_of_pass" min="1" max="10" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow" placeholder="Enter number of passengers">
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-bus mr-2 text-orange-600"></i>Bus Type
                                        </label>
                                        <select name="bustype" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow bg-white text-gray-700">
                                            <option value="0">Select Bus Type</option>
                                            <option value="Air Conditioned">Air Conditioned</option>
                                            <option value="Ordinary">Ordinary</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Departure and Return Dates -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-calendar-day mr-2 text-blue-600"></i>Departure Date
                                        </label>
                                        <input id="datepick1" name="Departure" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow cursor-pointer" placeholder="Select departure date" readonly>
                                    </div>
                                    
                                    <div id="returnSection" style="opacity: 0.5;">
                                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                                            <i class="fas fa-calendar-check mr-2 text-green-600"></i>Return Date
                                        </label>
                                        <input id="datepick2" name="Return" disabled class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow cursor-pointer" placeholder="Select return date" readonly>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-6">
                                    <button type="submit" name="submit" id="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-xl font-semibold text-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                        <i class="fas fa-ticket-alt mr-3"></i>Book My Trip Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Booking Information -->
                <div class="mt-12 grid md:grid-cols-3 gap-6 fade-in">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Safe Travel</h3>
                        <p class="text-gray-600 text-sm">All buses are regularly maintained and sanitized for your safety</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center">
                        <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">On Time</h3>
                        <p class="text-gray-600 text-sm">We maintain strict schedules to ensure you reach on time</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 text-center">
                        <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">24/7 Support</h3>
                        <p class="text-gray-600 text-sm">Our customer service team is always ready to assist you</p>
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

    <!-- Date Picker Script -->
    <script type="text/javascript" src="js/datepickr.js"></script>
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
        
        // Form validation
        function enhanceForm() {
            const form = document.getElementById('bookingForm');
            const selects = form.querySelectorAll('select');
            const inputs = form.querySelectorAll('input');
            
            // Validate form on submit
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Check required selects
                selects.forEach(select => {
                    if (select.hasAttribute('required') && select.value === '0') {
                        select.classList.add('border-red-500');
                        isValid = false;
                    } else {
                        select.classList.remove('border-red-500');
                    }
                });
                
                // Check required inputs
                inputs.forEach(input => {
                    if (input.hasAttribute('required') && !input.value.trim()) {
                        input.classList.add('border-red-500');
                        isValid = false;
                    } else {
                        input.classList.remove('border-red-500');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });
        }
        
        // Initialize date pickers
        function initDatePickers() {
            new datepickr('datepick1', {
                'dateFormat': '20y-m-d'
            });
            
            new datepickr('datepick2', {
                'dateFormat': '20y-m-d'
            });
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDateTime();
            animateOnScroll();
            enhanceForm();
            initDatePickers();
            
            // Update time every minute
            setInterval(updateDateTime, 60000);
            
            // Animate on scroll
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
</body>
</html>