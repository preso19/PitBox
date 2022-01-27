<template>
    <jet-form-section @submitted="updateProfileCars">
        <template #title>
            Personal Vehicles
        </template>

        <template #description>
            Add or change your personal vehicles (make, model, year)
        </template>

        <template #extra>
            <div>
                <div class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" v-for="(car, index) in form.cars" :key="index">
                    Make: {{car.make}}

                    {{car.year}}

                    <br>

                    Model: {{car.model}}
                </div>
            </div>

            <button type="button" @click="formState = 'stepOne'" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                Add New Vehicle
            </button>

            <div class="grid grid-cols-6 gap-6">
                <!-- Make -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepOne'">
                    <jet-label for="make" value="Search Vehicle Make" />
                    <jet-input id="make" type="text" class="mt-1 block w-full" v-model="form.make" autocomplete="make" />
                    <jet-input-error :message="form.errors.make" class="mt-2" />

                    <jet-label value="Select" />
                    <ul>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                        <li>Audi</li>
                    </ul>
                </div>

                <!-- Model -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepTwo'">
                    <jet-label for="model" value="Search Vehicle Model" />
                    <jet-input id="model" type="text" class="mt-1 block w-full" v-model="form.model" autocomplete="model" />
                    <jet-input-error :message="form.errors.model" class="mt-2" />

                    <jet-label value="Select" />
                    <ul>
                        <li>S3</li>
                        <li>S3</li>
                    </ul>
                </div>

                <!-- Year -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepThree'">
                    <jet-label for="year" value="Search Vehicle Year" />
                    <jet-input id="year" type="text" class="mt-1 block w-full" v-model="form.year" autocomplete="year" />
                    <jet-input-error :message="form.errors.year" class="mt-2" />

                    <jet-label value="Select" />
                    <ul>
                        <li>2008</li>
                        <li>2009</li>
                    </ul>
                </div>
            </div>
        </template>
    </jet-form-section>
</template>

<script>
    import JetButton from '@/Jetstream/Button'
    import JetFormSection from '@/Jetstream/FormSection'
    import JetInput from '@/Jetstream/Input'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'
    import JetActionMessage from '@/Jetstream/ActionMessage'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton'

    export default {
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['user'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    cars: this.user.cars,
                }),

                formState: 'none',
                newCar: {},
            }
        },

        methods: {
            updateProfileCars() {

            }
        },
    }
</script>
