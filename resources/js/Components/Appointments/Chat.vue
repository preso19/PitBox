<template>
    <div>
        <div class="text-center border-b-2">Appointment Time And NAME HERE</div>

        <div v-if="selected.chat.messages.length > 0">
            <h1 :class="{'text-right': user.id != message.sender_id}" v-for="(message, index) in selected.chat.messages" :key="index">{{message.body}}</h1>
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
            selected: Object,
            user: Object
        },

        data() {
            return {
                message: null,
            }
        },

        methods: {
            sendMessage() {
                this.selected.chat.messages.push({
                    body: this.message,
                    sender_id: this.user.id,
                })

                this.message = null

                this.updateMessages()
            },

            updateMessages() {
                axios.patch(route('chat.update', this.selected.chat.id), this.selected).catch(() => {
                    console.log('Failed to update chat messages in database!')
                })
            }
        }
    }
</script>
