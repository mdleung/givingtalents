<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Details - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .admin-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .btn-danger {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            transition: all 0.3s ease;
        }
        .btn-danger:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(238, 90, 82, 0.4);
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #5a6268);
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(108, 117, 125, 0.4);
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="admin-card rounded-2xl shadow-xl p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">Submission Details</h1>
                    <p class="text-gray-600">ID: {{ $submission->id }}</p>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('admin.index') }}" class="btn-secondary text-white px-6 py-3 rounded-lg font-medium inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Admin
                    </a>
                </div>
            </div>
        </div>

        <!-- Submission Details -->
        <div class="admin-card rounded-2xl shadow-xl p-8 {{ $submission->trashed() ? 'border-l-4 border-red-500' : '' }}">
            @if($submission->trashed())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <strong class="font-bold">This submission has been deleted!</strong>
                        <span class="block sm:inline ml-2">Deleted on {{ $submission->deleted_at->format('M j, Y \a\t g:i A') }}</span>
                    </div>
                </div>
            @endif
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Submitter Name</label>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-xl font-semibold {{ $submission->trashed() ? 'text-red-700 line-through' : 'text-purple-700' }}">{{ $submission->name }}</p>
                            </div>
                        </div>

                        <!-- Talent Description -->
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Talent Description</label>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-gray-800 leading-relaxed {{ $submission->trashed() ? 'line-through opacity-75' : '' }}">{{ $submission->talent_description }}</p>
                            </div>
                        </div>

                        <!-- Comments -->
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-2">Comments</label>
                            <div class="bg-gray-50 rounded-lg p-4">
                                @if($submission->comments)
                                    <p class="text-gray-700 {{ $submission->trashed() ? 'line-through opacity-75' : '' }}">{{ $submission->comments }}</p>
                                @else
                                    <p class="text-gray-500 italic">No comments provided</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="space-y-6">
                        <!-- Status -->
                        <div class="bg-{{ $submission->trashed() ? 'red' : 'green' }}-50 rounded-lg p-6">
                            <h3 class="text-lg font-semibold text-{{ $submission->trashed() ? 'red' : 'green' }}-800 mb-4">Status</h3>
                            <div class="flex items-center">
                                @if($submission->trashed())
                                    <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">
                                        DELETED
                                    </span>
                                @else
                                    <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">
                                        ACTIVE
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Submission Info -->
                        <div class="bg-purple-50 rounded-lg p-6">
                            <h3 class="text-lg font-semibold text-purple-800 mb-4">Submission Info</h3>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-purple-600">Submission ID</label>
                                    <p class="text-purple-800 font-mono">{{ $submission->id }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-purple-600">Submitted At</label>
                                    <p class="text-purple-800">{{ $submission->created_at->format('M j, Y') }}</p>
                                    <p class="text-purple-700 text-sm">{{ $submission->created_at->format('g:i A') }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-purple-600">Last Updated</label>
                                    <p class="text-purple-800">{{ $submission->updated_at->format('M j, Y') }}</p>
                                    <p class="text-purple-700 text-sm">{{ $submission->updated_at->format('g:i A') }}</p>
                                </div>
                                @if($submission->trashed())
                                    <div>
                                        <label class="block text-sm font-medium text-purple-600">Deleted At</label>
                                        <p class="text-purple-800">{{ $submission->deleted_at->format('M j, Y') }}</p>
                                        <p class="text-purple-700 text-sm">{{ $submission->deleted_at->format('g:i A') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Actions -->
                        @if($submission->trashed())
                            <div class="bg-green-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-green-800 mb-4">Restore Submission</h3>
                                <p class="text-green-700 text-sm mb-4">This submission has been deleted. You can restore it to make it visible again.</p>
                                
                                <form action="{{ route('admin.restore', $submission->id) }}" method="POST" class="mb-4">
                                    @csrf
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium inline-flex items-center w-full justify-center transition-all duration-300">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                        Restore Submission
                                    </button>
                                </form>
                            </div>
                            
                            <div class="bg-red-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-red-800 mb-4">Permanent Delete</h3>
                                <p class="text-red-700 text-sm mb-4">Permanently delete this submission. This action cannot be undone.</p>
                                
                                <form action="{{ route('admin.destroy', $submission->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to PERMANENTLY delete this submission? This action cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-800 hover:bg-red-900 text-white px-6 py-3 rounded-lg font-medium inline-flex items-center w-full justify-center transition-all duration-300">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Delete Forever
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="bg-red-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-red-800 mb-4">Move to Trash</h3>
                                <p class="text-red-700 text-sm mb-4">Move this submission to trash. It will be hidden from the public view but can be restored later.</p>
                                
                                <form action="{{ route('admin.destroy', $submission->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to move this submission to trash?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger text-white px-6 py-3 rounded-lg font-medium inline-flex items-center w-full justify-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Move to Trash
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

