<script setup>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';


</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-t from-red-700 to-red-300 ">
        <div>
            <Link href="/">
                <BreezeApplicationLogo class="w-30 h-20 fill-current  text-gray-500" />
            </Link>
        </div>

        <div class="w-full bg-gray-200 sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<style>


</style>