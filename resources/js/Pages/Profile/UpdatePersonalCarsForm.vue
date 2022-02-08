<template>
    <jet-form-section @submitted="updateProfileCars">
        <template #title>
            Personal Vehicles
        </template>

        <template #description>
            Add or change your personal vehicles (make, model, year)
        </template>

        <template #extra>
            <div class="grid grid-cols-3 -ml-2 -mr-2" v-if="newCars">
                <div class="bg-gray-50 p-4 ml-2 mr-2 mb-4 border-gray-300 rounded-md shadow-sm relative" v-for="(car, index) in newCars" :key="index">
                    <div><span class="font-bold">Make:</span> {{car.make}}</div>

                    <div><span class="font-bold">Model:</span> {{car.model}}</div>

                    <div><span class="font-bold">Year:</span> {{car.year}}</div>

                    <a href="#" class="block absolute top-2 right-4" @click.prevent="removeCar(index)">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <button type="button" @click="addNewVehicle()" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                Add New Vehicle
            </button>

            <div class="grid grid-cols-6 gap-6 mt-8" v-if="formState === 'stepOne' || formState === 'stepTwo' || formState === 'stepThree'">
                <!-- Make -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepOne' && carMakes">
                    <jet-label for="make" value="Search Vehicle Make" />

                    <ul class="border mt-2 block max-h-32 overflow-x-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <li v-for="(carMake, index) in carMakes"
                            :key="index"
                            class="pl-2 pt-1 pb-1 cursor-pointer hover:bg-indigo-300"
                            :class="{'bg-gray-50': index % 2 === 0}"
                            @click="selectMake(carMake)"
                        >
                            {{carMake}}
                        </li>
                    </ul>
                </div>

                <!-- Model -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepTwo' && carModels">
                    <jet-label for="model" value="Search Vehicle Model" />

                    <ul class="border mt-2 block max-h-32 overflow-x-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <li v-for="(carModel, index) in carModels"
                            :key="index"
                            class="pl-2 pt-1 pb-1 cursor-pointer hover:bg-indigo-300"
                            :class="{'bg-gray-50': index % 2 === 0}"
                            @click="selectModel(carModel)"
                        >
                            {{carModel.model}}
                        </li>
                    </ul>
                </div>

                <!-- Year -->
                <div class="col-span-6 sm:col-span-4" v-if="formState === 'stepThree' && carYears">
                    <jet-label for="year" value="Search Vehicle Year" />

                    <ul class="border mt-2 block max-h-32 overflow-x-auto border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <li v-for="(carYear, index) in carYears"
                            :key="index"
                            class="pl-2 pt-1 pb-1 cursor-pointer hover:bg-indigo-300"
                            :class="{'bg-gray-50': index % 2 === 0}"
                            @click="selectYear(carYear)"
                        >
                            {{carYear}}
                        </li>
                    </ul>
                </div>
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <button @click.prevent="updateProfileCars()"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
                :class="{ 'opacity-25': processing }"
                :disabled="processing"
            >
                Save
            </button>
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
                formState: 'none',
                carMakes: null,
                carModels: null,
                carYears: null,
                processing: false,
                recentlySuccessful: false,
                newCars: null,
            }
        },

        mounted() {
            this.newCars = JSON.parse(this.user.cars)
        },

        methods: {
            addNewVehicle() {
                this.fetchCarMakes().then(() => {
                    this.formState = 'stepOne'
                })
            },

            selectMake(make) {
                this.fetchCarModelsByMake(make).then(() => {
                    if (this.newCars === null) {
                        this.newCars = []
                    }

                    this.newCars.push({})

                    let item = this.newCars[this.newCars.length - 1]
                    item.make = make
                    this.$set(this.newCars, this.newCars.length - 1, item)

                    this.formState = 'stepTwo'
                })
            },

            selectModel(modelData) {
                let item = this.newCars[this.newCars.length - 1]
                item.model = modelData.model
                this.$set(this.newCars, this.newCars.length - 1, item)

                this.carYears = JSON.parse(modelData.years, true).map(item => item.replace(' ', ''))

                this.formState = 'stepThree'
            },

            selectYear(year) {
                let item = this.newCars[this.newCars.length - 1]
                item.year = year
                this.$set(this.newCars, this.newCars.length - 1, item)

                this.formState = 'none'
            },

            removeCar(index) {
                this.newCars.splice(index, 1);
            },

            fetchCarMakes() {
                return axios.get(route('car.makes'))
                    .then(response => {
                        this.carMakes = Object.values(response.data).sort((a, b) => a.localeCompare(b))
                    })
                    .catch((error) => {
                        console.error(error)
                        console.log('Failed to fetch car makes!')
                    })
            },

            fetchCarModelsByMake(make) {
                return axios.get(route('car.models', { _query: { make } }))
                    .then(response => {
                        this.carModels = response.data.sort((a, b) => a.model.localeCompare(b.model))
                    })
                    .catch((error) => {
                        console.error(error)
                        console.log('Failed to fetch car models!')
                    })
            },

            updateProfileCars() {
                this.processing = true

                axios.put(route('user.cars'), this.newCars)
                    .then(() => {
                        this.processing = false

                        this.recentlySuccessful = true
                        setTimeout(() => {
                            this.recentlySuccessful = false
                        }, 3000);
                    })
                    .catch((error) => {
                        console.error(error)
                        console.log('Failed to update user cars!')
                    })
            },
        },
    }
</script>
