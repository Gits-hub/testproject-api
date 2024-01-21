<template>

<div class="max-w-80 mt-24 mx-auto flex flex-col">
    <h2 class="text-lg"><span class="font-bold text-slate-500">Fill in your email ID below</span></h2>
        <form class="grid gap-y-4 mt-5" @submit.prevent="submit">
            <div>
            <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Email address</label>
            <div class="relative">
                <input type="email" id="email" v-model="email" name="email" class="py-2 px-4 block w-full border border-gray-200 rounded-md text-sm focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required aria-describedby="email-error">
            </div>
            <span class="text-xs text-gray-600 mt-2 italic">Ensure your email address is registered so as to receive a login link</span>
            </div>
            <button type="submit" class="text-white py-2 px-4 flex justify-center items-center rounded-md border border-transparent font-semibold bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-600 focus:ring-offset-2 transition-all text-sm">Login</button>
        </form>
</div>

</template>

<script>
    export default {
        name: "Login",
        components: {}
    }
</script>