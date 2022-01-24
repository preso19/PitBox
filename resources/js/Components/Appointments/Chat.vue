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

        mounted() {
            Echo.private('chat')
                .listen('MessageSent', (e) => {
                    this.selected.chat.messages.push({
                        body: e.body,
                        sender_id: e.sender.id,
                    })
                });
        },

        methods: {
            sendMessage() {
                let newMessage = {
                    body: this.message,
                    sender_id: this.user.id,
                }

                this.selected.chat.messages.push(newMessage)

                this.message = null

                this.saveMessage(newMessage)
            },

            saveMessage(newMessage) {
                console.log('test');
                axios.patch(route('chat.update', this.selected.chat.id), newMessage)
                    .catch((error) => {
                        console.error(error)
                        console.log('Failed to save chat message in database!')
                    })
            }
        }
    }
</script>
