@extends('layouts.app')

@section('title', 'Social Events - Giving Talents')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Social Events
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Join us for meaningful events that bring our community together and create opportunities to share talents, build connections, and make a positive impact.
            </p>
        </div>

        <!-- Upcoming Events -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Upcoming Events</h2>
            
            <div class="max-w-4xl mx-auto">
                <!-- Featured Event -->
                <div class="glass-morphism rounded-2xl p-8 hover-lift mb-8">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center space-y-6 lg:space-y-0 lg:space-x-8">
                        <div class="flex-shrink-0">
                            <div class="bg-purple-brand text-white rounded-xl p-6 text-center">
                                <div class="text-3xl font-bold">SEP</div>
                                <div class="text-xl">2025</div>
                            </div>
                        </div>
                        
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-purple-deep mb-3">Honour Walk</h3>
                            <p class="text-purple-deep/80 mb-4 leading-relaxed">
                                Join us for a special community event where we come together to honor those who have made a difference through their talents and contributions. This meaningful walk will celebrate the spirit of giving and the power of community connection.
                            </p>
                            
                            <div class="flex flex-wrap gap-4 text-sm">
                                <div class="flex items-center space-x-2 text-purple-deep">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>September 2025</span>
                                </div>
                                <div class="flex items-center space-x-2 text-purple-deep">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Location TBA</span>
                                </div>
                                <div class="flex items-center space-x-2 text-purple-deep">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                    </svg>
                                    <span>Community Event</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex-shrink-0">
                            <button class="bg-orange-brand hover:bg-orange-light text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Types -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Types of Events We Host</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Community Walks -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-purple-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">Community Walks</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Meaningful walks that bring people together to honor contributions and celebrate community spirit.
                    </p>
                </div>

                <!-- Talent Showcases -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-orange-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-orange-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">Talent Showcases</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Events where community members can demonstrate and share their unique talents and skills.
                    </p>
                </div>

                <!-- Networking Gatherings -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-purple-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">Networking Gatherings</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Informal meetups to connect like-minded individuals and build lasting relationships.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stay Updated -->
        <div class="text-center">
            <div class="glass-morphism rounded-2xl p-8 hover-lift max-w-2xl mx-auto">
                <h2 class="text-2xl font-bold text-purple-deep mb-4">Stay Updated on Events</h2>
                <p class="text-purple-deep/80 mb-6">
                    Don't miss out on upcoming events and opportunities to connect with our community. Follow us on social media for the latest updates and announcements.
                </p>
                
                <div class="flex flex-wrap justify-center gap-4 mb-6">
                    <a href="https://www.facebook.com/givingtalents" target="_blank" rel="noopener noreferrer" 
                       class="bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-2 px-4 transition-all duration-300 hover:scale-105 text-sm font-medium">
                        Follow on Facebook
                    </a>
                    <a href="https://www.twitter.com/givingtalents" target="_blank" rel="noopener noreferrer" 
                       class="bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-2 px-4 transition-all duration-300 hover:scale-105 text-sm font-medium">
                        Follow on Twitter
                    </a>
                    <a href="http://instagram.com/GIVINGtalents" target="_blank" rel="noopener noreferrer" 
                       class="bg-white/20 hover:bg-white/30 text-purple-deep rounded-lg py-2 px-4 transition-all duration-300 hover:scale-105 text-sm font-medium">
                        Follow on Instagram
                    </a>
                </div>
                
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-purple-brand hover:bg-purple-deep text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                    Contact Us About Events
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

