<template>
    <div>
        <v-card> 
            <v-card-header>
                <v-card-header-text>
                <v-card-title>TOP 5</v-card-title>
                </v-card-header-text>
            </v-card-header>
            <v-card-text>Agencies For Hiring</v-card-text>
        </v-card>
    </div>
    <div>
        <v-card> 
            <v-card-header>
                <v-card-header-text>
                <v-card-title>{{ item.successpercentage }}</v-card-title>
                </v-card-header-text>
            </v-card-header>
            <v-card-text>Success Rate Of The Month</v-card-text>
        </v-card>
    </div>
    <div>
        <v-card> 
            <v-card-header>
                <v-card-header-text>
                <v-card-title>{{ item.conversationscount }}</v-card-title>
                </v-card-header-text>
            </v-card-header>
            <v-card-text>Recruitment Conversation</v-card-text>
        </v-card>
    </div>
</template>
<script>
export default {
    data() {
    return {
      items: [ ]
    }
  },
}
</script>