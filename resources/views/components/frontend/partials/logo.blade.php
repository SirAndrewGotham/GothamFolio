{{-- resources/views/components/logo.blade.php --}}
@props([
    'size' => 'default', // 'small', 'default', 'large'
    'theme' => 'auto', // 'light', 'dark', 'auto'
])

@php
    $sizeClasses = [
        'small' => 'w-8 h-8 text-sm',
        'default' => 'w-10 h-10 text-base',
        'large' => 'w-12 h-12 text-lg',
    ][$size] ?? 'w-10 h-10 text-base';

    $textSizes = [
        'small' => 'text-lg',
        'default' => 'text-xl',
        'large' => 'text-2xl',
    ][$size] ?? 'text-xl';
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <!-- Logo Icon -->
    <div class="logo-icon {{ $sizeClasses }} relative">
        <!-- Light Theme SVG -->
        <svg class="logo-light absolute inset-0 w-full h-full transition-opacity duration-300"
             :class="darkMode ? 'opacity-0' : 'opacity-100'"
             width="100%" height="100%" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="logoLightGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#0ea5e9" />
                    <stop offset="100%" stop-color="#8b5cf6" />
                </linearGradient>
                <pattern id="lightPattern" patternUnits="userSpaceOnUse" width="8" height="8">
                    <path d="M0 8L8 0M-2 2L2 -2M6 10L10 6" stroke="white" stroke-width="1" stroke-opacity="0.1" fill="none"/>
                </pattern>
                <radialGradient id="lightHighlight" cx="30%" cy="30%" r="70%">
                    <stop offset="0%" stop-color="white" stop-opacity="0.2"/>
                    <stop offset="100%" stop-color="white" stop-opacity="0"/>
                </radialGradient>
            </defs>
            <circle cx="20" cy="20" r="20" fill="url(#logoLightGradient)"/>
            <circle cx="20" cy="20" r="20" fill="url(#lightHighlight)"/>
            <rect width="40" height="40" fill="url(#lightPattern)"/>
            <text x="20" y="26" text-anchor="middle" fill="white" font-weight="800" font-size="16" font-family="Arial, sans-serif" letter-spacing="-1">AG</text>
        </svg>

        <!-- Dark Theme SVG -->
        <svg class="logo-dark absolute inset-0 w-full h-full transition-opacity duration-300"
             :class="darkMode ? 'opacity-100' : 'opacity-0'"
             width="100%" height="100%" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="logoDarkGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#38bdf8" />
                    <stop offset="100%" stop-color="#a78bfa" />
                </linearGradient>
                <pattern id="darkPattern" patternUnits="userSpaceOnUse" width="8" height="8">
                    <path d="M0 8L8 0M-2 2L2 -2M6 10L10 6" stroke="#cbd5e1" stroke-width="1" stroke-opacity="0.15" fill="none"/>
                </pattern>
                <radialGradient id="darkHighlight" cx="30%" cy="30%" r="70%">
                    <stop offset="0%" stop-color="#e2e8f0" stop-opacity="0.15"/>
                    <stop offset="100%" stop-color="#e2e8f0" stop-opacity="0"/>
                </radialGradient>
            </defs>
            <circle cx="20" cy="20" r="20" fill="url(#logoDarkGradient)"/>
            <circle cx="20" cy="20" r="20" fill="url(#darkHighlight)"/>
            <rect width="40" height="40" fill="url(#darkPattern)"/>
            <text x="20" y="26" text-anchor="middle" fill="white" font-weight="800" font-size="16" font-family="Arial, sans-serif" letter-spacing="-1">AG</text>
        </svg>
    </div>

    <!-- Logo Text -->
    <span class="{{ $is_rtl ?? false ? 'mr-2' : 'ml-2' }} {{ $textSizes }} font-bold logo-text transition-colors duration-300">
        AndrewGotham
    </span>
</div>

<style>
    .logo-icon {
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
    }

    .logo-text {
        background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .dark .logo-text {
        background: linear-gradient(135deg, #38bdf8 0%, #a78bfa 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>
