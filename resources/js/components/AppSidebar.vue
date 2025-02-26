<script setup lang="ts">
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
    useSidebar
} from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import { ChevronsUpDown, Folder, LayoutGrid, LayoutPanelLeft, Github , Send , Instagram} from 'lucide-vue-next';
import AppLogo from './AppLogo.vue';
import AppearanceTabs from '@/components/AppearanceTabs.vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuTrigger
} from '@/components/ui/dropdown-menu';
import AppearanceMenu from '@/components/AppearanceMenu.vue';

const { open } = useSidebar();

const mainNavItems: NavItem[] = [
    { title: 'Home', href: '/', icon: LayoutGrid },
    { title: 'About', href: '/about', icon: LayoutPanelLeft },
    { title: 'Projects', href: '/projects', icon: Folder },
    { title: 'Contacts', href: '/contact', icon: Send },
];

const footerNavItems: NavItem[] = [
    { title: 'Instagram', href: 'https://www.instagram.com/ilyukha._/', icon: Instagram },
    { title: 'Telegram', href: 'https://t.me/kykyrudza', icon: Send },
    { title: 'GitHub', href: 'https://github.com/kykyrudza', icon: Github },
    { title: 'Github Repo', href: 'https://github.com/kykyrudza/portfolio', icon: Folder },
];

</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="route('home')">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <SidebarMenu>
                <SidebarMenuItem>
                    <DropdownMenu>
                        <AppearanceTabs v-if="open" />

                        <DropdownMenuTrigger as-child v-if="!open">
                            <SidebarMenuButton size="lg">
                                <ChevronsUpDown class="mx-auto size-4" />
                            </SidebarMenuButton>
                        </DropdownMenuTrigger>

                        <DropdownMenuContent class="w-[--radix-dropdown-menu-trigger-width] min-w-56 rounded-lg" side="bottom" align="end" :side-offset="4">
                            <AppearanceMenu />
                        </DropdownMenuContent>
                    </DropdownMenu>
                </SidebarMenuItem>

            </SidebarMenu>
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
