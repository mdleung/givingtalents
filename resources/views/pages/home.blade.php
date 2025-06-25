@extends('layouts.app')

@section('title', 'Home - Giving Talents')

@section('content')
<div class="min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Making a difference, 
                <span class="text-orange-brand">one talent at a time</span>
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-8">
                Share your unique talents and skills with the world. Together, we can build a community where everyone has a place to flourish and contribute to positive change.
            </p>
        </div>

        <!-- Talent Submission Form -->
        <div class="max-w-2xl mx-auto mb-16">
            <div class="glass-morphism rounded-2xl p-8 hover-lift">
                <h2 class="text-2xl font-bold text-purple-deep mb-6 text-center">Share Your Talent</h2>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('talent-submissions.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-purple-deep mb-2">
                            Your Name <span class="text-orange-brand text-xs">(optional)</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            placeholder="Leave blank to submit anonymously"
                            class="w-full px-4 py-3 border border-purple-brand/30 rounded-lg focus:ring-2 focus:ring-purple-brand focus:border-transparent bg-white/80 text-purple-deep placeholder-purple-deep/60 transition-all duration-300"
                        >
                    </div>

                    <div>
                        <label for="talent_description" class="block text-sm font-medium text-purple-deep mb-2">
                            What talent would you like to share? <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="talent_description" 
                            name="talent_description" 
                            rows="4" 
                            required
                            placeholder="Describe your talent, skill, or ability that you'd like to share with others..."
                            class="w-full px-4 py-3 border border-purple-brand/30 rounded-lg focus:ring-2 focus:ring-purple-brand focus:border-transparent bg-white/80 text-purple-deep placeholder-purple-deep/60 transition-all duration-300 resize-none"
                        >{{ old('talent_description') }}</textarea>
                    </div>

                    <div>
                        <label for="comments" class="block text-sm font-medium text-purple-deep mb-2">
                            Additional Comments <span class="text-orange-brand text-xs">(optional)</span>
                        </label>
                        <textarea 
                            id="comments" 
                            name="comments" 
                            rows="3"
                            placeholder="Any additional information you'd like to share..."
                            class="w-full px-4 py-3 border border-purple-brand/30 rounded-lg focus:ring-2 focus:ring-purple-brand focus:border-transparent bg-white/80 text-purple-deep placeholder-purple-deep/60 transition-all duration-300 resize-none"
                        >{{ old('comments') }}</textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-purple-brand hover:bg-purple-deep text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
                    >
                        Share My Talent
                    </button>
                </form>
            </div>
        </div>

        <!-- Talent Board -->
        @if($submissions->count() > 0)
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-white text-center mb-8">
                What Others Have Committed
            </h2>
            
            <div class="space-y-6">
                @foreach($submissions as $submission)
                    <div class="glass-morphism rounded-xl p-6 hover-lift">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-purple-deep">
                                    {{ $submission->name ?: 'Anonymous' }} says:
                                </h3>
                                <p class="text-sm text-purple-deep/70">
                                    {{ $submission->created_at->format('M j, Y \a\t g:i A') }}
                                </p>
                            </div>
                            
                            <!-- Delete Button -->
                            <form action="{{ route('talent-submissions.destroy', $submission->id) }}" method="POST" class="ml-4">
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit" 
                                    onclick="return confirm('Are you sure you want to remove this talent submission?')"
                                    class="text-red-500 hover:text-red-700 text-sm font-medium transition-colors"
                                >
                                    Remove
                                </button>
                            </form>
                        </div>
                        
                        <div class="mb-4">
                            <p class="text-purple-deep leading-relaxed">
                                {{ $submission->talent_description }}
                            </p>
                        </div>
                        
                        @if($submission->comments)
                            <div class="border-t border-purple-brand/20 pt-4">
                                <p class="text-sm text-purple-deep/80 italic">
                                    "{{ $submission->comments }}"
                                </p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="max-w-2xl mx-auto text-center">
            <div class="glass-morphism rounded-xl p-8">
                <h2 class="text-2xl font-bold text-purple-deep mb-4">Be the First to Share!</h2>
                <p class="text-purple-deep/80">
                    No talents have been shared yet. Be the first to inspire others by sharing your unique abilities!
                </p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

