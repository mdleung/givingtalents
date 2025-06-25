@extends('layouts.app')

@section('title', 'Vision & Mission - Giving Talents')

@section('content')
<div class="min-h-screen py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Vision & Mission
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Discover our purpose and the movement we're building together to create positive change in the world.
            </p>
        </div>

        <!-- Video Section -->
        <div class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glass-morphism rounded-2xl p-8 hover-lift">
                    <h2 class="text-2xl font-bold text-purple-deep text-center mb-6">Our Story</h2>
                    
                    <!-- YouTube Video Embed -->
                    <div class="relative w-full" style="padding-bottom: 56.25%; /* 16:9 aspect ratio */">
                        <iframe 
                            class="absolute top-0 left-0 w-full h-full rounded-lg"
                            src="https://www.youtube.com/embed/T2HnncdYkas" 
                            title="Giving Talents Vision Video"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission Statement -->
        <div class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glass-morphism rounded-2xl p-8 hover-lift">
                    <h2 class="text-3xl font-bold text-purple-deep text-center mb-8">Our Mission</h2>
                    
                    <div class="prose prose-lg max-w-none text-purple-deep">
                        <p class="text-lg leading-relaxed mb-6">
                            So, what would it take to create a better society where everyone has a place to flourish in and could contribute to a positive impact?
                        </p>
                        
                        <p class="text-lg leading-relaxed mb-6">
                            The answer is with <strong class="text-purple-brand">YOU</strong> and <strong class="text-purple-brand">ME</strong>. Let's build a movement together where the vision is to be the <strong class="text-orange-brand">CHANGE</strong>. To be the <strong class="text-orange-brand">HOPE</strong>. The <strong class="text-orange-brand">PEACEMAKER</strong> and multiplier of <strong class="text-orange-brand">RADICAL love</strong> through the giving and receiving of <strong class="text-purple-brand">TALENTS</strong>, <strong class="text-purple-brand">SKILLS</strong>, and <strong class="text-purple-brand">TREASURE</strong>.
                        </p>
                        
                        <p class="text-xl font-semibold text-center text-purple-brand">
                            Connect with us!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Our Core Values</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Change -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-orange-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-orange-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">CHANGE</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Being the catalyst for positive transformation in our communities and beyond.
                    </p>
                </div>

                <!-- Hope -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-purple-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">HOPE</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Inspiring optimism and possibility in every interaction and initiative.
                    </p>
                </div>

                <!-- Peacemaker -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-orange-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-orange-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">PEACEMAKER</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Building bridges and fostering understanding across all communities.
                    </p>
                </div>

                <!-- Radical Love -->
                <div class="glass-morphism rounded-xl p-6 hover-lift text-center">
                    <div class="bg-purple-brand/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-purple-deep mb-3">RADICAL LOVE</h3>
                    <p class="text-purple-deep/80 text-sm">
                        Multiplying unconditional love through every act of giving and receiving.
                    </p>
                </div>
            </div>
        </div>

        <!-- The Three Pillars -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white text-center mb-8">The Three Pillars</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Talents -->
                <div class="glass-morphism rounded-xl p-8 hover-lift text-center">
                    <div class="bg-purple-brand text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-deep mb-4">TALENTS</h3>
                    <p class="text-purple-deep/80">
                        Every person has unique gifts and abilities. We believe in discovering, nurturing, and sharing these talents to create positive impact in our communities.
                    </p>
                </div>

                <!-- Skills -->
                <div class="glass-morphism rounded-xl p-8 hover-lift text-center">
                    <div class="bg-orange-brand text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-deep mb-4">SKILLS</h3>
                    <p class="text-purple-deep/80">
                        Practical abilities and knowledge that can be taught, learned, and applied to solve real-world problems and help others grow.
                    </p>
                </div>

                <!-- Treasure -->
                <div class="glass-morphism rounded-xl p-8 hover-lift text-center">
                    <div class="bg-purple-brand text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-deep mb-4">TREASURE</h3>
                    <p class="text-purple-deep/80">
                        Resources, time, and material support that enable meaningful projects and initiatives to flourish and create lasting change.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <div class="glass-morphism rounded-2xl p-8 hover-lift max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-purple-deep mb-6">Join the Movement</h2>
                <p class="text-lg text-purple-deep/80 mb-8">
                    Together, we can create a world where everyone has a place to flourish and contribute to positive change. Start by sharing your talents today.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" 
                       class="bg-purple-brand hover:bg-purple-deep text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        Share Your Talent
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="bg-orange-brand hover:bg-orange-light text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        Get Involved
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

