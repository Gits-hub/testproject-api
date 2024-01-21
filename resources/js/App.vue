<template>
    <div class="max-w-80 mt-24 mx-auto grid grid-rows-2">
        <h2 class="text-lg"><span class="font-light text-sky-400 text-3xl">Hi there!</span> <span class="font-bold text-slate-500">Welcome to the test site</span></h2>
        <router-link to="/TestProject/public/login" class="rounded-2xl text-white bg-sky-500 py-2 px-4 mt-4 w-fit flex justify-center justify-self-center">Get Started</router-link>
    </div>

</template>

<script>
    export default {
        name: "App",
        components: {}
    }
</script>