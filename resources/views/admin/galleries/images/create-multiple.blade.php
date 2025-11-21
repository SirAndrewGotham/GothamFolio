@php
    use Illuminate\Support\Facades\Storage;
    $activeLanguages = \App\Models\Language::active()->ordered()->get();
@endphp

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('images');
            const fileListContainer = document.getElementById('file-list');
            const fileList = fileListContainer.querySelector('ul');
            const uploadButton = document.getElementById('upload-button');
            let selectedFiles = [];

            // Handle drag and drop
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            // Highlight drop zone when file is dragged over
            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight() {
                dropZone.classList.add('border-blue-400', 'bg-blue-50');
            }

            function unhighlight() {
                dropZone.classList.remove('border-blue-400', 'bg-blue-50');
            }

            // Handle dropped files
            dropZone.addEventListener('drop', handleDrop, false);

            // Handle click on drop zone
            dropZone.addEventListener('click', function () {
                fileInput.click();
            });

            // Handle file input change
            fileInput.addEventListener('change', function() {
                handleFiles(this.files);
            });

            function handleFiles(files) {
                for (let i = 0; i < files.length; i++) {
                    if (files[i].type.startsWith('image/')) {
                        addFileToList(files[i]);
                        selectedFiles.push(files[i]);
                    }
                }
                updateFileInput();
            }

            function addFileToList(file) {
                const li = document.createElement('li');
                li.className = 'flex items-center justify-between py-2 border-b';

                const fileInfo = document.createElement('div');
                fileInfo.className = 'flex items-center';

                const icon = document.createElement('div');
                icon.className = 'w-8 h-8 bg-gray-200 rounded flex items-center justify-center mr-3';
                icon.innerHTML = '<svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>';

                const text = document.createElement('div');
                text.innerHTML = `<span class="font-medium">${file.name}</span><br><span class="text-xs text-gray-500">${formatFileSize(file.size)}</span>`;

                fileInfo.appendChild(icon);
                fileInfo.appendChild(text);

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'text-red-500 hover:text-red-700';
                removeBtn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                removeBtn.onclick = function() {
                    removeFile(file, li);
                };

                li.appendChild(fileInfo);
                li.appendChild(removeBtn);
                fileList.appendChild(li);
            }

            function removeFile(file, listItem) {
                selectedFiles = selectedFiles.filter(f => f !== file);
                listItem.remove();
                updateFileInput();
            }

            function updateFileInput() {
                // Create a new DataTransfer object
                const dataTransfer = new DataTransfer();
                selectedFiles.forEach(file => dataTransfer.items.add(file));
                fileInput.files = dataTransfer.files;

                // Update UI
                if (selectedFiles.length > 0) {
                    uploadButton.disabled = false;
                    fileListContainer.classList.remove('hidden');
                } else {
                    uploadButton.disabled = true;
                    fileListContainer.classList.add('hidden');
                }
            }

            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

            // Initialize
            updateFileInput();
        });
    </script>
@endpush

<x-backend.layouts.app :title="'Upload Images - ' . $gallery->title">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Upload Multiple Images to {{ $gallery->title }}</h1>
            <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-gray">Back to List</a>
        </div>

        <form action="{{ route('admin.galleries.images.store-multiple', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-lg shadow p-6 space-y-6">
                <!-- Drag and Drop Zone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Select Images</label>

                    <div id="drop-zone" class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed rounded-lg cursor-pointer border-gray-300 hover:border-blue-400 transition-colors duration-200 bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-12 h-12 mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB each</p>
                        </div>
                        <input id="images" name="images[]" type="file" class="hidden" multiple accept="image/*" required>
                    </div>

                    <!-- File list -->
                    <div id="file-list" class="hidden mt-4 border rounded-lg p-4">
                        <h3 class="font-medium text-gray-700 mb-2">Selected Files:</h3>
                        <ul class="divide-y"></ul>
                    </div>
                </div>

                <!-- Title Prefixes -->
                @foreach($activeLanguages as $language)
                    <div class="mb-4">
                        <label for="title_prefix_{{ $language->code }}" class="block text-sm font-medium text-gray-700 mb-1">
                            Title Prefix ({{ $language->name_english }})
                        </label>
                        <input type="text" name="title_prefix[{{ $language->code }}]" id="title_prefix_{{ $language->code }}"
                               placeholder="e.g., Photo - "
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                @endforeach

                <!-- Publish checkbox -->
                <div class="flex items-center">
                    <input type="checkbox" name="is_published" id="is_published" value="1" checked
                           class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="is_published" class="ml-2 text-sm text-gray-700">Publish all images</label>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.galleries.images.index', $gallery) }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" id="upload-button" class="btn btn-primary" disabled>Upload Images</button>
                </div>
            </div>
        </form>
    </div>
</x-backend.layouts.app>
