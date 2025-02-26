<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Home',
        href: '/',
    },
];

const projects = [
    {
        title: "PHP MVC Application",
        description: "A simple MVC-based PHP application, available on GitHub.",
        link: "https://github.com/kykyrudza/PHP-MVC-Application"
    },
    {
        title: "Full Stack Online Shop",
        description: "An e-commerce platform built with Laravel and Vue, featuring PayPal API integration.",
        link: "https://github.com/kykyrudza/frontend-backend-onix"
    },
    {
        title: "Laravel Online Shop – Backend Only",
        description: "A backend for an online shop, built with Laravel. Currently in active development!",
        link: "https://github.com/kykyrudza/laravel-shop-backend"
    },
    {
        title: "Admin Panel for UI Library",
        description: "An admin panel for a library management system, built with Laravel.",
        link: "https://github.com/kykyrudza/Cuprite"
    },
];

const techStack = [
    {
        name: "Laravel",
        description: "My main tool. I use Laravel to build powerful and efficient backends.",
        logo: "./storage/images/laravel.png"
    },
    {
        name: "Inertia",
        description: "Laravel + Vue without API hassle. Perfect for building fast and interactive SPA apps.",
        logo: "./storage/images/inertiajs.png"
    },
    {
        name: "Tailwind CSS",
        description: "If no one wants to handle the frontend, I'll style it up quickly with Tailwind.",
        logo: "./storage/images/tailwindcss.png"
    },
    {
        name: "Vue.js",
        description: "Not a frontend dev, but I can handle the basics of Vue just fine.",
        logo: "./storage/images/vuejs.png"
    },
];

defineProps<{
    name?: string;
}>();
</script>

<template>
    <Head title="Home" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 select-none">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <div class="relative aspect-video flex">
                        <div class="p-5 overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <h1 class="text-xl font-bold">
                                Hi! I'm a Junior PHP Backend Developer 🚀
                            </h1>
                            <p class="text-lg text-gray-600 dark:text-gray-300">
                                My main tool is PHP and the Laravel framework. I confidently write backend logic, understand application architecture, and can work with both Laravel and pure PHP.
                                <br><br>
                                Besides backend development, I have some experience in frontend, so I can handle simple layouts if needed. But I'd rather leave that to professional frontend developers. 😄
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative aspect-video rounded-xl border border-sidebar-border/70 dark:border-sidebar-border overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
                    <div
                        v-for="project in projects"
                        :key="project.title"
                        class="relative flex items-center aspect-video overflow-hidden m-3 h-20 w-full"
                    >
                        <div class="relative flex items-center justify-center w-1/12">
                            <div class="absolute size-4 rounded-full bg-green-600/80 opacity-50 animate-ping"></div>
                            <div class="relative size-2 rounded-full bg-green-600/80 shadow-lg shadow-green-400 flex items-center justify-center">
                            </div>
                        </div>

                        <div class="w-11/12">
                            <a :href="project.link" class="inline-block">
                                <h3 class="text-lg font-semibold">
                                    {{ project.title }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-300">
                                    {{ project.description }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <div class="relative aspect-video flex">
                        <div class="p-5 overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <p class="text-lg text-gray-600 dark:text-gray-300">
                                I live in central Ukraine and actively improve my backend development skills.
                                I have plenty of free time, so I can start working on tasks almost immediately!
                                <br><br>
                                I’m comfortable communicating in written English, which makes it easy to collaborate with international teams.
                                <br><br>
                                Currently, I’m actively looking for a job and open to any opportunities in PHP backend development.
                                I’m interested in projects with a modern tech stack, growth potential, and a strong team.
                                If you have a job opening or a freelance task — I’d be happy to discuss the details! 😄
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min">
                <div class="relative h-full flex flex-col p-6">
                    <h2 class="text-4xl font-bold">
                        Technology stack
                    </h2>
                    <div class="mt-4 flex flex-wrap justify-between h-full gap-4">
                        <div v-for="tech in techStack" :key="tech.name" class="flex flex-col items-center">
                            <img :src="tech.logo" :alt="tech.name" class="w-full max-w-80 h-full max-h-80 aspect-video rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                            <span class="mt-2 text-gray-700 dark:text-gray-300">{{ tech.name }}</span>
                            <span class="mt-2 text-gray-700 dark:text-gray-300 max-w-[320px]">{{ tech.description }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
