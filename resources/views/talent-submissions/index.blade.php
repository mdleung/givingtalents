<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Submissions - Giving Talents</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-brand': '#7B2CBF',
                        'purple-deep': '#5A189A',
                        'orange-brand': '#FF6B35',
                        'orange-light': '#FF8500',
                        'gradient-start': '#7B2CBF',
                        'gradient-end': '#FF6B35'
                    },
                    fontFamily: {
                        'form': ['Poppins', 'sans-serif'],
                        'body': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #7B2CBF 0%, #FF6B35 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #7B2CBF 0%, #5A189A 50%, #FF6B35 100%);
        }
        
        .form-input {
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(123, 44, 191, 0.15);
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="min-h-screen gradient-bg font-body">
    <div class="min-h-screen py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Logo Section -->
            <div class="text-center mb-12">
                <img src="/logo.webp" alt="Giving Talents Logo" class="mx-auto h-32 w-auto mb-6 hover-lift">
            </div>
            
            <!-- Main Container -->
            <div class="glass-effect rounded-3xl p-8 md:p-12 shadow-2xl hover-lift">
                <h1 class="text-3xl md:text-4xl font-bold text-center mb-8 gradient-text">
                    What's 1 talent you can commit this month?
                </h1>
                
                @if(session('success'))
                    <div class="mb-8 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="mb-8 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="mb-8 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg shadow-md">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                
                <form action="{{ route('talent-submissions.store') }}" method="POST" class="space-y-8">
                    @csrf
                    
                    <div class="space-y-2">
                        <label for="name" class="block text-lg font-semibold text-purple-deep">Your Name <span class="text-orange-brand font-normal">(optional)</span></label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               value="{{ old('name') }}" 
                               placeholder="Leave blank to submit anonymously"
                               class="form-input w-full px-6 py-4 border-2 border-purple-brand/30 rounded-xl focus:border-purple-brand focus:ring-4 focus:ring-purple-brand/20 outline-none text-lg bg-white/80">
                    </div>
                    
                    <div class="space-y-2">
                        <label for="talent_description" class="block text-lg font-semibold text-purple-deep">Describe your talent</label>
                        <textarea id="talent_description" 
                                  name="talent_description" 
                                  required
                                  rows="6"
                                  class="form-input w-full px-6 py-4 border-2 border-purple-brand/30 rounded-xl focus:border-purple-brand focus:ring-4 focus:ring-purple-brand/20 outline-none text-lg bg-white/80 resize-none">{{ old('talent_description') }}</textarea>
                    </div>
                    
                    <div class="space-y-2">
                        <label for="comments" class="block text-lg font-semibold text-purple-deep">Email and other comments <span class="text-orange-brand font-normal">(optional, if you want us to get back to you!)</span></label>
                        <textarea id="comments" 
                                  name="comments"
                                  rows="4"
                                  class="form-input w-full px-6 py-4 border-2 border-purple-brand/30 rounded-xl focus:border-purple-brand focus:ring-4 focus:ring-purple-brand/20 outline-none text-lg bg-white/80 resize-none">{{ old('comments') }}</textarea>
                    </div>
                    
                    <div class="text-center pt-4">
                        <button type="submit" 
                                class="gradient-bg text-white font-bold py-4 px-12 rounded-xl text-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 hover-lift">
                            Use your talent ✨
                        </button>
                    </div>
                </form>
                
                <!-- Talent Board Section -->
                <div class="mt-16">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 gradient-text text-center">
                        What others have committed:
                    </h2>
                    
                    <div class="bg-white/60 rounded-2xl p-6 max-h-96 overflow-y-auto shadow-inner border border-purple-brand/20">
                        @forelse($submissions as $submission)
                            <div class="mb-6 p-4 bg-white/80 rounded-xl shadow-sm border-l-4 border-purple-brand hover-lift">
                                <div class="flex justify-between items-start">
                                    <div class="flex-1">
                                        <div class="font-bold text-purple-deep text-lg mb-2">{{ $submission->name }} says:</div>
                                        <div class="text-gray-700 leading-relaxed">{{ $submission->talent_description }}</div>
                                        <div class="text-xs text-orange-brand mt-2 font-medium">
                                            {{ $submission->created_at->format('M j, Y \a\t g:i A') }}
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <form action="{{ route('talent-submissions.destroy', $submission->id) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to remove this talent submission from the board?')" 
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-500 hover:text-red-700 hover:bg-red-50 p-2 rounded-lg transition-all duration-200 group"
                                                    title="Remove this submission">
                                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-12">
                                <div class="text-6xl mb-4">🌟</div>
                                <div class="text-xl text-purple-deep font-semibold">No submissions yet.</div>
                                <div class="text-lg text-gray-600 mt-2">Be the first to share your talent!</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="text-center mt-8 text-white/80">
                <p class="text-sm">Powered by Giving Talents • Making a difference, one talent at a time</p>
            </div>
        </div>
    </div>
</body>
</html>

