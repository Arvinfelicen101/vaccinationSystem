<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />
 
 
    <div class="relative bg-gradient-to-t from-stone-900 to-red-400 h-screen w-full flex items-center justify-center ">


        <img src="../img/philippines-vaccine-03.jpg" class="h-screen w-full object-cover mix-blend-overlay" >

 <div class=" absolute left-0 top-0 mt-4" >

                 <img src="../img/vaxxsystems.png" alt="" class="block h-9 w-auto pl-5" >  
                 
             </div> 
             
             <!-- <div class=" absolute flex justify-center mt-4" >

                <h1 class="text-white text-2xl font-black uppercase ">What is yout Vaccination Status?</h1>
                 
             </div>  -->
        <div v-if="canLogin" class="fixed top-0 right-0 px-6 py-4 sm:text-black">
            <Link v-if="$page.props.auth.user" :href="route('patientProfile.index')" class="text-md text-Black-900 pr-5 font-bold">
                Patient Profile
            </Link>


            <template v-else>
                
        
                    <!-- <div class="pt-2 pb-3 space-y-1">
                       
                         <BreezeResponsiveNavLink :href="route('patientProfile.index')" :active="route().current('patientProfile.index')">
                            Patient Profile
                        </BreezeResponsiveNavLink>
                    </div>

                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ $page.props.auth.user.name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <BreezeResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </BreezeResponsiveNavLink>
                        </div>
                    </div> -->
                
                <Link :href="route('login')" class="text-lg font-bold  top-0 right-0  py-4 text-black-700">
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
