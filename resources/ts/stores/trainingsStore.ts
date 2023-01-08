import { defineStore } from "pinia";

import Training from "../types/Training";
import trainings from "../data/trainings";

export const useTrainingStore = defineStore("training", {
    state: () => ({
        trainings: trainings,
    }),

    getters: {
        trainingById(state) {
            return (id: string): Array<Training> =>
                state.trainings.filter(
                    (training: Training) => training.slug === id
                ) as Array<Training>;
        },
    },
});
