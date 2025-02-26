<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import {Monitor, Moon, Sun } from 'lucide-vue-next';
import {
    DropdownMenuGroup,
    DropdownMenuItem,
} from '@/components/ui/dropdown-menu';

interface Props {
    class?: string;
}

const { class: containerClass = '' } = defineProps<Props>();

const { appearance, updateAppearance } = useAppearance();

const tabs = [
    { value: 'light', Icon: Sun, label: 'Light' },
    { value: 'dark', Icon: Moon, label: 'Dark' },
    { value: 'system', Icon: Monitor, label: 'System' },
] as const;
</script>

<template>
    <DropdownMenuGroup :class="['gap-1  rounded-lg bg-neutral-100 p-1 dark:bg-neutral-800', containerClass]">
        <DropdownMenuItem :as-child="true">
            <button
                v-for="{ value, Icon, label } in tabs"
                :key="value"
                @click="updateAppearance(value)"
                :class="[
                'flex items-center justify-between w-full rounded-md px-3.5 py-1.5 transition-colors',
                appearance === value
                    ? 'bg-white shadow-sm dark:bg-neutral-700 dark:text-neutral-100'
                    : 'text-neutral-500 hover:bg-neutral-200/60 hover:text-black dark:text-neutral-400 dark:hover:bg-neutral-700/60',
            ]"
            >
                <span class="ml-1.5 text-sm">{{ label }}</span>
                <component :is="Icon" class="-ml-1 h-4 w-4" />
            </button>
        </DropdownMenuItem>
    </DropdownMenuGroup>
</template>
