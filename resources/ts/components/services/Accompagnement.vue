<script setup lang="ts">
import bg1 from "@/assets/training/facebook1.jpg";
import bg2 from "@/assets/girl1.jpg";
import bg3 from "@/assets/boy1.jpg";
import { CheckCircleIcon, BanknotesIcon } from "@heroicons/vue/24/solid";
import Accompagnement from "@/assets/services/accompagnement.png";
const items = [
    {
        image: bg1,
        name: "Standard",
        price: "100 000 XFA / mois",
        options: [
            "Une Stratégie sur <strong>1 Mois</strong>",
            "<strong>Community Management</strong>",
            "03 Conceptions graphiques par semaines",
        ],
    },
    {
        image: bg2,
        name: "V.I.P",
        price: "150 000 XFA / mois",
        options: [
            "Stratégie de communication",
            "01 Shooting pro",
            "01 Video pro",
            "<strong>Community Management</strong>",
            "03 Conceptions graphiques par semaines",
        ],
    },
    {
        image: bg3,
        name: "Prenium",
        price: "250 000 XFA / mois",
        options: [
            "Stratégie de communication",
            "03 Shooting pro",
            "02 Video pro",
            "<strong>Community Management</strong>",
            "03 Conceptions graphiques par semaines",
        ],
    },
];
</script>

<template>
    <div class="w-full pb-20">
        <div class="w-full lg:flex">
            <div
                class="flex justify-center items-center lg:h-auto h-60 lg:w-1/3 lg:shadow-lg rounded-3xl"
            >
                <div class="bg-gray-900 mx-auto p-6 rounded-full">
                    <img
                        :src="Accompagnement"
                        class="sm:w-32 sm:h-32 w-20 h-20 object-cover"
                        alt=""
                    />
                </div>
            </div>
            <div class="lg:w-2/3 lg:px-8">
                <p
                    class="leading-8 max-w-4xl sm:text-lg lg:text-left text-center"
                >
                    Pour vous accompagner dans la communication de vos produits
                    et services nous utilisons les canaux digitaux que sont les
                    réseaux sociaux et les site internet. Un accompagnement
                    motivé par un professionnalisme et une rigueur au travail
                    pour vous permettre d’atteindre vos objectifs financiers et
                    commerciaux en un temps record.
                </p>
                <div class="mt-12">
                    <h1 class="flex space-x-2 font-bold text-lg">
                        <span
                            ><CheckCircleIcon class="w-6 h-6 text-smart-blue"
                        /></span>
                        <span>
                            Pour les entreprises n’ayant aucune présence en
                            ligne :
                        </span>
                    </h1>
                    <p class="sm:px-12 mt-4 leading-7">
                        Nous créons une identité visuelle pour les entreprises.
                        Ceci implique la création d’une charte graphique, d’un
                        site web, et des pages sur les médias sociaux. Nous
                        élaborons une stratégie de communication digitale à
                        partir des objectifs de l’entreprise, ceci permettant à
                        cette dernière de de les atteindre le plus efficacement
                        possible et en moins de temps.
                    </p>
                    <h1 class="flex space-x-2 font-bold text-lg mt-4">
                        <span
                            ><CheckCircleIcon class="w-6 h-6 text-smart-blue"
                        /></span>
                        <span>
                            Pour les entreprises ayant déjà une présence en
                            ligne :
                        </span>
                    </h1>
                    <p class="sm:px-12 mt-4 leading-7">
                        Nous accompagnons ces derniers dans l’amélioration de
                        leur identité visuelle, l’accroissement de leur
                        notoriété et l’atteinte de leurs objectifs à l’aide des
                        canaux digitaux.
                    </p>
                </div>
            </div>
        </div>
        <h1
            class="mt-20 text-center text-smart-blue font-black text-3xl lg:text-4xl"
        >
            PACK D’ACCOMPAGNEMENT
        </h1>
        <div
            class="grid w-full lg:grid-cols-3 grid-cols-1 md:grid-cols-2 gap-6 mt-10"
        >
            <div
                class="w-full flex justify-center"
                v-for="(item, index) in items"
                :key="index"
            >
                <div
                    class="w-full flex justify-center items-center flex-col shadow py-4 rounded-3xl"
                >
                    <div class="sm:h-1/2">
                        <div
                            class="bg-cover rounded-full overflow-hidden h-60 w-60"
                            :style="{
                                'background-image': `url(${item.image})`,
                            }"
                        >
                            <div
                                class="bg-black/50 h-full w-full flex text-center flex-col p-8 justify-center items-center text-white"
                            >
                                <p class="text-sm">Communication</p>
                                <h1 class="text-2xl sm:text-3xl font-bold">
                                    {{ item.name }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 sm:h-1/2">
                        <div class="flex space-x-3 text-lg items-center">
                            <span
                                ><BanknotesIcon class="w-5 h-5 text-smart-blue"
                            /></span>
                            <span class="font-bold">{{ item.price }}</span>
                        </div>
                        <ul class="list-disc space-y-2 mt-4 ml-4">
                            <li
                                v-for="option in item.options"
                                v-html="option"
                                class="text-sm"
                            ></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
