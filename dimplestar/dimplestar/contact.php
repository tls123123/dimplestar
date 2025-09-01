<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Dimple Star Transport</title>
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
                    <a href="contact.php" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Contact</a>
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
                <a href="routeschedule.php" class="block text-gray-700">Routes & Schedules</a>
                <a href="contact.php" class="block text-blue-600 font-semibold">Contact</a>
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
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 fade-in">Contact Us</h1>
                <p class="text-xl lg:text-2xl text-gray-200 fade-in">Get in touch with us for any inquiries or assistance</p>
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
                
                <!-- Contact Information -->
                <div class="mb-16 fade-in">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">Get In Touch</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            We're here to help with any questions about our services, schedules, or bookings
                        </p>
                    </div>

                    <!-- Contact Cards -->
                    <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <!-- Address -->
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Our Address</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Block 1 lot 10, Southpoint Subdivision<br>
                                Brgy Banay-Banay, Cabuyao, Laguna
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-phone text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Call Us</h3>
                            <p class="text-gray-600 mb-4">
                                We're available during business hours
                            </p>
                            <a href="tel:09292090712" class="text-2xl font-bold text-green-600 hover:text-green-700 transition-colors">
                                0929 209 0712
                            </a>
                        </div>

                        <!-- Business Hours -->
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 text-center hover:shadow-xl transition-all">
                            <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-clock text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Business Hours</h3>
                            <div class="text-gray-600 space-y-2">
                                <p><span class="font-semibold">Monday - Sunday</span></p>
                                <p>5:00 AM - 9:00 PM</p>
                                <p class="text-sm text-purple-600 font-medium mt-4">Available for inquiries daily</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="fade-in">
                    <div class="grid lg:grid-cols-2 gap-12 items-start">
                        <!-- Contact Form -->
                        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
                            <div class="text-center mb-8">
                                <h3 class="text-3xl font-bold text-gray-800 mb-4">Send Us a Message</h3>
                                <p class="text-gray-600">Fill out the form below and we'll get back to you as soon as possible</p>
                            </div>

                            <form class="space-y-6" action="messageexec.php" method="POST" id="contactForm">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-user mr-2 text-blue-600"></i>Full Name *
                                    </label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow"
                                        placeholder="Enter your full name"
                                    />
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-envelope mr-2 text-blue-600"></i>Email Address *
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow"
                                        placeholder="example@email.com"
                                    />
                                </div>

                                <!-- Subject -->
                                <div>
                                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-tag mr-2 text-blue-600"></i>Subject *
                                    </label>
                                    <input 
                                        type="text" 
                                        id="subject" 
                                        name="subject" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow"
                                        placeholder="What is this regarding?"
                                    />
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-comment mr-2 text-blue-600"></i>Message *
                                    </label>
                                    <textarea 
                                        id="message" 
                                        name="message" 
                                        rows="5" 
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all form-glow resize-none"
                                        placeholder="Please provide details about your inquiry..."
                                    ></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button 
                                        type="submit" 
                                        name="Submit"
                                        class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-xl font-semibold text-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                    >
                                        <i class="fas fa-paper-plane mr-2"></i>Send Message
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Additional Info & Map -->
                        <div class="space-y-8">
                            <!-- Why Contact Us -->
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8">
                                <h3 class="text-2xl font-bold text-gray-800 mb-6">Why Contact Us?</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center mt-1">
                                            <i class="fas fa-ticket-alt text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Booking Assistance</h4>
                                            <p class="text-gray-600 text-sm">Help with reservations and ticket purchases</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center mt-1">
                                            <i class="fas fa-route text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Route Information</h4>
                                            <p class="text-gray-600 text-sm">Schedule updates and route details</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center mt-1">
                                            <i class="fas fa-headset text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Customer Support</h4>
                                            <p class="text-gray-600 text-sm">General inquiries and feedback</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center mt-1">
                                            <i class="fas fa-exclamation-triangle text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-800">Emergency Contact</h4>
                                            <p class="text-gray-600 text-sm">Urgent travel-related concerns</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Response Promise -->
                            <div class="bg-gradient-to-r from-green-600 to-teal-600 rounded-3xl p-8 text-white text-center">
                                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-clock text-3xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold mb-4">Quick Response Guarantee</h3>
                                <p class="text-green-100 mb-4">
                                    We aim to respond to all inquiries within 24 hours during business days
                                </p>
                                <div class="flex items-center justify-center space-x-6 text-sm">
                                    <div>
                                        <div class="font-bold text-2xl">24hrs</div>
                                        <div class="text-green-200">Response Time</div>
                                    </div>
                                    <div class="w-px h-12 bg-green-300"></div>
                                    <div>
                                        <div class="font-bold text-2xl">7 Days</div>
                                        <div class="text-green-200">Available</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="bg-gray-900 rounded-3xl p-8 text-center">
                                <h3 class="text-2xl font-bold text-white mb-6">Follow Us</h3>
                                <div class="flex justify-center space-x-4 mb-4">
                                    <a href="#" class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-700 transition-colors">
                                        <i class="fab fa-facebook-f text-white text-xl"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 bg-sky-500 rounded-xl flex items-center justify-center hover:bg-sky-600 transition-colors">
                                        <i class="fab fa-twitter text-white text-xl"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 bg-pink-600 rounded-xl flex items-center justify-center hover:bg-pink-700 transition-colors">
                                        <i class="fab fa-instagram text-white text-xl"></i>
                                    </a>
                                </div>
                                <p class="text-gray-400 text-sm">Stay updated with our latest news and announcements</p>
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
        
        // Form validation and enhancement
        function enhanceForm() {
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('input, textarea');
            
            // Add real-time validation feedback
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.hasAttribute('required') && !this.value.trim()) {
                        this.classList.add('border-red-500');
                        this.classList.remove('border-gray-300');
                    } else {
                        this.classList.remove('border-red-500');
                        this.classList.add('border-green-500');
                    }
                });
                
                input.addEventListener('focus', function() {
                    this.classList.remove('border-red-500', 'border-green-500');
                    this.classList.add('border-blue-500');
                });
            });
            
            // Form submission handling
            form.addEventListener('submit', function(e) {
                let isValid = true;
                inputs.forEach(input => {
                    if (input.hasAttribute('required') && !input.value.trim()) {
                        input.classList.add('border-red-500');
                        isValid = false;
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDateTime();
            initializeUserSection();
            animateOnScroll();
            enhanceForm();
            
            // Update time every minute
            setInterval(updateDateTime, 60000);
            
            // Animate on scroll
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
</body>
</html>