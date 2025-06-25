@extends('layouts.app')

@section('title', 'Contact Us - Giving Talents')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Get in Touch
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Have questions, ideas, or want to get involved? We'd love to hear from you!
            </p>
        </div>

        <!-- Contact Information -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            
            <!-- Contact Details -->
            <div class="glass-morphism rounded-2xl p-8 hover-lift">
                <h2 class="text-2xl font-bold text-purple-deep mb-6">Contact Information</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-purple-deep">Email</h3>
                            <a href="mailto:amie@beyondtheconversation.org" class="text-purple-brand hover:text-orange-brand transition-colors">
                                amie@beyondtheconversation.org
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-purple-deep">Mission</h3>
                            <p class="text-purple-deep/80">
                                Building a movement of radical love through giving and receiving talents, skills, and treasure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Connect With Us -->
            <div class="glass-morphism rounded-2xl p-8 hover-lift">
                <h2 class="text-2xl font-bold text-purple-deep mb-6">Connect With Us</h2>
                
                <p class="text-purple-deep/80 mb-6">
                    Follow our journey and stay updated on events, stories, and opportunities to make a difference.
                </p>
                
                <div class="grid grid-cols-2 gap-4">
                    <a href="https://www.twitter.com/givingtalents" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center justify-center space-x-2 bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-3 px-4 transition-all duration-300 hover:scale-105">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                        <span class="text-sm font-medium">Twitter</span>
                    </a>
                    
                    <a href="https://www.facebook.com/givingtalents" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center justify-center space-x-2 bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-3 px-4 transition-all duration-300 hover:scale-105">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="text-sm font-medium">Facebook</span>
                    </a>
                    
                    <a href="http://instagram.com/GIVINGtalents" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center justify-center space-x-2 bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-3 px-4 transition-all duration-300 hover:scale-105">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.297-3.323C5.902 8.247 7.053 7.757 8.35 7.757s2.448.49 3.323 1.297c.897.897 1.387 2.048 1.387 3.345s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297zm7.718 0c-1.297 0-2.448-.49-3.323-1.297-.897-.897-1.387-2.048-1.387-3.345s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.897.897 1.387 2.048 1.387 3.345s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                        </svg>
                        <span class="text-sm font-medium">Instagram</span>
                    </a>
                    
                    <a href="https://www.linkedin.com/company/giving-talents/?originalSubdomain=ca" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center justify-center space-x-2 bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-3 px-4 transition-all duration-300 hover:scale-105">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        <span class="text-sm font-medium">LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <div class="glass-morphism rounded-2xl p-8 hover-lift">
                <h2 class="text-2xl font-bold text-purple-deep mb-4">Ready to Make a Difference?</h2>
                <p class="text-purple-deep/80 mb-6">
                    Join our movement and start sharing your talents with the world today.
                </p>
                <a href="{{ route('home') }}" 
                   class="inline-block bg-purple-brand hover:bg-purple-deep text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                    Share Your Talent
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

