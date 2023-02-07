<template>
    <div class="w-full px-8 pt-6 pb-8 mb-4">
        <form @submit="createAppointment()">
            <div class="mb-4">
                <label
                    class="block font-medium text-sm text-gray-700"
                    for="username"
                >
                    Subject
                </label>

                <input
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    id="username"
                    type="text"
                    placeholder="Brief explanation of your appointment"
                    v-model="form.subject"
                    required
                />
            </div>

            <div class="mb-4">
                <label
                    class="block font-medium text-sm text-gray-700"
                    for="username"
                >
                    Date & Time
                </label>

                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>

                    <input
                        ref="datepicker"
                        type="text"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full pl-10"
                        placeholder="Select date"
                        required
                    />
                </div>
            </div>

            <div class="mb-4">
                <label
                    class="block font-medium text-sm text-gray-700"
                    for="username"
                >
                    Car
                </label>

                <select
                    v-model="form.car"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                >
                    <option
                        v-for="car in JSON.parse(user.cars)"
                        :key="car.model"
                        :value="car"
                    >
                        {{ car.make }} - {{ car.model }} - {{ car.year }}
                    </option>
                </select>
            </div>

            <div class="mb-4">
                <label
                    class="block font-medium text-sm text-gray-700"
                    for="username"
                >
                    Details
                </label>

                <textarea
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    id="username"
                    type="text"
                    rows="4"
                    placeholder="More detailed explanation of your request"
                    v-model="form.details"
                    required
                >
                </textarea>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="mt-4 py-2 px-4 border border-transparent shadow-sm text-sm rounded-md font-bold text-white bg-indigo-400 hover:bg-indigo-700"
                    type="button"
                    @click="createAppointment()"
                >
                    Create Appointment
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import Textarea from "../../Jetstream/Textarea.vue";
import Datepicker from "@themesberg/tailwind-datepicker/Datepicker";

export default {
    name: "Form",

    components: {
        Textarea,
        Datepicker,
    },

    props: {
        newAppointmentShop: Object,
        user: Object,
    },

    data() {
        return {
            form: this.$inertia.form({
                subject: null,
                datetime: null,
                car: null,
                details: null,
                shopId: this.newAppointmentShop.id,
            }),
        };
    },

    mounted() {
        new Datepicker(this.$refs.datepicker);
    },

    methods: {
        createAppointment() {
            this.form.datetime = this.$refs.datepicker.value;

            this.$emit("createAppointment", this.form);
        },
    },
};
</script>
