<script setup>
import { Link } from "@inertiajs/vue3";
import guessTheTechIllustration from "@/assets/images/guess-the-tech-game-illustration.png";
</script>

<template>
    <p class="text-4xl md:text-6xl text-center mb-2 mx-6">
        DevPuzzle: The daily challenge for developers.
    </p>

    <nav aria-label="Game selection" class="mx-6">
        <ul class="flex flex-col items-center gap-2">
            <!-- Guess the tech -->
            <li class="p-6 border border-neutral-200 dark:border-neutral-900">
                <Link class="flex flex-col md:flex-row items-center">
                    <div
                        class="flex justify-center pr-0 pb-6 md:pr-6 md:pb-0 shrink-0 border-b md:border-b-0 border-r-0 md:border-r border-r-neutral-200 dark:border-r-neutral-900 border-b-neutral-200 dark:border-b-neutral-900"
                    >
                        <img
                            :src="guessTheTechIllustration"
                            alt="Illustration for Guess the Tech game"
                        />
                    </div>
                    <div
                        class="flex flex-col items-center md:items-start justify-center text-center md:text-start pl-0 pt-6 md:pl-6 md:pt-0"
                    >
                        <h2 class="text-2xl">Guess the tech</h2>
                        <p
                            class="leading-tight text-neutral-400 dark:text-neutral-500"
                        >
                            Each attempt reveals how far you are from the
                            correct answer.
                        </p>
                    </div>
                </Link>
            </li>
        </ul>
    </nav>
</template>
