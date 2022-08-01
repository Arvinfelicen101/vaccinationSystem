<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />
 
 
    <div class="relative bg-gradient-to-t from-stone-900 to-red-400 h-screen w-full flex items-center justify-center">


        <img src="../img/philippines-vaccine-03.jpg" class="h-screen w-full object-cover mix-blend-overlay" >

 <div class=" absolute left-0 top-0 mt-4 w-1/5 h-60 pl-8" >

                 <img src="../img/vaxxsystems.png" alt=""  >  
                 </div>
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('patientProfile.index')" class="text-md text-Black-900 pr-5 font-bold">
                Patient Profile
            </Link>


            <template v-else>
                
           
                <Link :href="route('login')" class="text-lg font-bold text-black-700">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 mr-8 text-lg font-bold text-black-700">
                    Register
                </Link>
            </template>
        </div>

       
           
                          
            

        
        </div>
    
    
</template>

<style scoped>
 
</style>
