<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigHub - The Ultimate Marketplace for Freelance Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1dbf73;
            --primary-dark: #19a463;
            --secondary: #222325;
            --light-gray: #f5f5f5;
            --text-gray: #62646a;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--secondary);
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(29,191,115,0.1) 0%, rgba(29,191,115,0) 100%);
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .gig-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .rating-stars {
            color: #ffb33e;
        }
        
        .navbar {
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(29,191,115,0.2);
        }
        
        .btn-primary {
            background-color: var(--primary);
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .animated-bg {
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar bg-white sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <a href="#" class="text-2xl font-bold text-primary">
                    <span class="text-primary">Hire</span><span class="text-secondary">Market</span>
                </a>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-600 hover:text-primary transition">Explore</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition">Categories</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition">How It Works</a>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="hidden md:block relative w-64">
                    <input type="text" placeholder="Find services..." class="search-input w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-primary transition">
                    <button class="absolute right-3 top-2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="#" class="text-gray-600 hover:text-primary transition hidden md:block">Become a Seller</a>
                <a href="#" class="text-gray-600 hover:text-primary transition hidden md:block">Sign In</a>
                <button class="btn-primary text-white px-4 py-2 rounded-md">Join</button>
                <button class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Find the perfect <span class="text-primary">freelance</span> services for your business</h1>
                    <p class="text-gray-600 text-lg mb-8">GigHub connects you to talented freelancers for any project. Get quality work done faster.</p>
                    <div class="relative max-w-lg">
                        <input type="text" placeholder="What service are you looking for today?" class="w-full px-5 py-4 border border-gray-300 rounded-full focus:outline-none focus:border-primary transition">
                        <button class="btn-primary absolute right-2 top-2 px-6 py-2 rounded-full text-white font-medium">Search</button>
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-sm text-gray-600">Popular:</span>
                        <a href="#" class="text-sm text-gray-600 hover:text-primary">Website Design</a>
                        <span class="text-sm text-gray-600">•</span>
                        <a href="#" class="text-sm text-gray-600 hover:text-primary">Logo Design</a>
                        <span class="text-sm text-gray-600">•</span>
                        <a href="#" class="text-sm text-gray-600 hover:text-primary">SEO</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://thumbs.dreamstime.com/b/portrait-team-happy-professional-employees-cartoon-office-workers-corporate-clothes-group-colleagues-work-together-flat-250079873.jpg" alt="Freelance Services" class="rounded-lg shadow-xl w-full max-w-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <p class="text-center text-gray-500 mb-6">Trusted by leading brands and startups worldwide</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70">
                <img src="https://via.placeholder.com/120x40?text=Google" alt="Google" class="h-8">
                <img src="https://via.placeholder.com/120x40?text=Facebook" alt="Facebook" class="h-8">
                <img src="https://via.placeholder.com/120x40?text=Microsoft" alt="Microsoft" class="h-8">
                <img src="https://via.placeholder.com/120x40?text=Netflix" alt="Netflix" class="h-8">
                <img src="https://via.placeholder.com/120x40?text=PayPal" alt="PayPal" class="h-8">
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Browse by Category</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Find the service you need fast with our hand-picked categories</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pen-fancy text-green-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Graphics & Design</h3>
                </a>
                
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Programming & Tech</h3>
                </a>
                
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullhorn text-purple-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Digital Marketing</h3>
                </a>
                
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pen text-yellow-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Writing & Translation</h3>
                </a>
                
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-video text-red-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Video & Animation</h3>
                </a>
                
                <a href="#" class="category-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm text-center transition duration-300">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-music text-indigo-500 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Music & Audio</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Popular Gigs Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Most Popular Gigs</h2>
                    <p class="text-gray-600">Services that customers love the most</p>
                </div>
                <a href="#" class="text-primary font-medium hover:underline hidden md:block">See All Services</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Gig Card 1 -->
                <div class="gig-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 transition duration-300">
                    <div class="relative">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/1c44b4110072925.5fe3006e13057.jpg" alt="Website Design" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white p-2 rounded-full shadow-md text-gray-600 hover:text-red-500">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <img src="https://via.placeholder.com/40?text=U" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="font-medium text-sm">design_expert</p>
                                <p class="text-xs text-gray-500">Level 2 Seller</p>
                            </div>
                        </div>
                        <h3 class="font-medium mb-2 hover:text-primary transition">I will design a modern responsive website for your business</h3>
                        <div class="flex items-center mb-2">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-sm text-gray-600 ml-1">(1,243)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-heart text-red-400 mr-1 text-xs"></i>
                                <span class="text-xs text-gray-600">1.2k favorites</span>
                            </div>
                            <div>
                                <span class="text-lg font-bold text-primary">₹75</span>
                                <span class="text-sm text-gray-500 ml-1">starting at</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gig Card 2 -->
                <div class="gig-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/400x250?text=Logo+Design" alt="Logo Design" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white p-2 rounded-full shadow-md text-gray-600 hover:text-red-500">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <img src="https://via.placeholder.com/40?text=U" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="font-medium text-sm">creative_logos</p>
                                <p class="text-xs text-gray-500">Top Rated Seller</p>
                            </div>
                        </div>
                        <h3 class="font-medium mb-2 hover:text-primary transition">I will design a professional logo for your brand</h3>
                        <div class="flex items-center mb-2">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-sm text-gray-600 ml-1">(3,587)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-heart text-red-400 mr-1 text-xs"></i>
                                <span class="text-xs text-gray-600">2.7k favorites</span>
                            </div>
                            <div>
                                <span class="text-lg font-bold text-primary">$30</span>
                                <span class="text-sm text-gray-500 ml-1">starting at</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gig Card 3 -->
                <div class="gig-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/400x250?text=SEO+Service" alt="SEO Service" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white p-2 rounded-full shadow-md text-gray-600 hover:text-red-500">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <img src="https://via.placeholder.com/40?text=U" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <div>
                                <p class="font-medium text-sm">seo_master</p>
                                <p class="text-xs text-gray-500">Level 1 Seller</p>
                            </div>
                        </div>
                        <h3 class="font-medium mb-2 hover:text-primary transition">I will do on-page SEO for your website to rank higher on Google</h3>
                        <div class="flex items-center mb-2">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-sm text-gray-600 ml-1">(876)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-heart text-red-400 mr-1 text-xs"></i>
                                <span class="text-xs text-gray-600">524 favorites</span>
                            </div>
                            <div>
                                <span class="text-lg font-bold text-primary">$150</span>
                                <span class="text
