<script setup lang="ts">
import Service from "@/components/Service.vue";
import { PhoneArrowUpRightIcon } from "@heroicons/vue/24/outline";
import { useServiceStore } from "../../stores/servicesStore";
import { ref, onMounted } from "vue";
import Serv from "../../types/Service";
const serviceStore = useServiceStore();
const items = ref<Serv[]>(serviceStore.services.slice(0, 4));
</script>
<template>
    <div>
        <div class="bg-gray-100 sm:py-32 py-10 lg:flex xl:px-36 px-6 md:px-10">
            <div class="lg:w-2/5 w-full">
                <div>
                    <div
                        class="rounded-full shadow bg-white px-4 py-2 text-gray-500 uppercase font-medium text-xs sm:text-sm inline-block"
                    >
                        Liste des services
                    </div>
                    <div class="mt-6">
                        <h1 class="font-bold lg:text-5xl text-4xl">
                            <span class="text-smart-blue">Nos Services</span>
                        </h1>
                    </div>
                    <p class="mt-6">
                        Notre objectif majeur est de rendre l’entreprise unique
                        aux yeux des consommateurs, de donner une notoriété sans
                        frontière à cette dernière ce qui la conduira plus
                        aisément à l’atteinte de ses objectifs.
                    </p>

                    <router-link
                        :to="{ name: 'service' }"
                        class="rounded-full shadow hover:shadow-lg bg-smart-blue hover:bg-smart-blue-2 px-4 py-3 mt-6 text-white uppercase font-medium text-xs sm:text-sm inline-block"
                    >
                        Plus de services
                    </router-link>
                </div>
            </div>
            <div
                class="lg:w-3/5 w-full grid-cols-1 grid sm:grid-cols-2 lg:pl-8 lg:mt-0 mt-6 gap-4"
            >
                <Service
                    v-for="(service, index) in items"
                    :key="index"
                    :data="service"
                />
            </div>
        </div>
        <div class="px-4 w-full">
            <div
                class="max-w-6xl rounded-2xl bg-smart-blue lg:h-40 text-white p-8 mx-auto sm:-mt-20 flex lg:flex-row flex-col justify-center items-center"
            >
                <div class="lg:flex items-center justify-center">
                    <div
                        class="flex items-center lg:justify-start justify-center lg:flex-row flex-col space-x-6 lg:border-r lg:border-b-0 border-b lg:pb-0 pb-6 border-white w-full pr-4"
                    >
                        <div
                            class="border border-white inline-block p-4 rounded-full"
                        >
                            <PhoneArrowUpRightIcon class="w-8 h-8" />
                        </div>
                        <div class="lg:text-left text-center">
                            <h1 class="text-xl">Contactez-nous</h1>
                            <p class="text-4xl font-bold">+237657525812</p>
                        </div>
                    </div>
                    <p class="lg:p-4 p-4 lg:text-left text-center">
                        Vous êtes une entreprise, un particulier, ou une
                        association ? Souhaitez-vous avoir une visibilité sur
                        internet? Ou augmenter vos ventes avec votre boutique en
                        ligne ? Vous voulez augmenter votre trafic et générer
                        plus de prospects ?
                    </p>
                </div>

                <div class="lg:w-1/3 w-full flex justify-center lg:p-0 p-4">
                    <a
                        target="_blank"
                        href="https://wa.me/message/LTIV7YM22E5CB1"
                        class="bg-white px-6 py-2 uppercase font-medium rounded-full text-center text-smart-blue hover:bg-smart-blue-2 hover:text-white transition-colors"
                    >
                        prennez rendez-vous
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.before-enter {
    opacity: 0;
    transform: translateY(100px);
    transition: all 2s ease-out;
}

.enter {
    opacity: 1;
    transform: translateY(0);
}
</style>
