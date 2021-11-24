<template>
    <div>
        <div class="text-center border-b-2">Appointment Time And NAME HERE</div>

        <div v-if="selected.chat.messages.length > 0">
            <h1 :class="{'text-right': index % 2 === 0}" v-for="(message, index) in selected.chat.messages" :key="index">{{message}}</h1>
        </div>

        <div>
            <input type="text" v-model="message">

            <button @click="sendMessage()">Send!</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Chat',

        props: {
            selected: Object
        },

        data() {
            return {
                message: null,
            }
        },

        methods: {
            sendMessage() {
                this.selected.chat.messages.push(this.message)

                this.message = null

                this.updateMessages()
            },

            updateMessages() {
                axios.patch(route('chat.update', this.selected.chat.id), {
                    body: this.selected
                }).catch(() => {
                    console.log('Failed to update chat messages in database!')
                })
            }
        }
    }
</script>
