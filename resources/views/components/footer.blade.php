<footer class="bg-primary text-white py-6">
    <div class="container mx-auto flex justify-between items-center">
        {{-- Left: Copyright Info --}}
        <p class="text-sm">© {{ date('Y') }} MyApp. All rights reserved.</p>

        {{-- Right: Social Media Links --}}
        <div class="space-x-4">
            <a href="https://facebook.com" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2l-6 6m0 0L6 8m6 6l6-6m-6 6l-6 6"></path>
                </svg>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3c3.5 0 6.5 2 6.5 2S13 3 16 6c3 3-2 7 2 9-1.5 2 0 3.5-1.5 4.5-3 0 3-2 4.5-3 6 2 1 2 3 2 4-1 1.5-4.5 0-6-1 2 2 3 4 2 6-2.5 0-5 0-7 0-2.5-2-6.5-2-7-5 1-2 0-7 2-9z"></path>
                </svg>
            </a>
            <a href="https://linkedin.com" target="_blank" class="hover:text-blue-700">
                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v4h-3v-4H9v10h4v-7h3l1-4h-4v-2c0-.7.3-1 1-1h3V4h-3c-3 0-4 1-4 4v3h-3v4h3V21h4V8h3z"></path>
                </svg>
            </a>
        </div>
    </div>
</footer>
