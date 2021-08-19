<template>
    <div class="container">
        <div v-if="loading" class="spinner">
            <atom-spinner
                :animation-duration="1000"
                :size="60"
                :color="'#ff1d5e'"
            />
        </div>
    </div>
</template>

<script>
import AtomSpinner from 'epic-spinners/src/components/lib/AtomSpinner'

export default {
    name: "SportsList",
    components: {
        AtomSpinner
    },
    data() {
        return {
            "sports": this.getSports,
            "loading": true
        }
    },
    computed: {
        getSports() {
            axios
                .get('/sports-list')
                .then(function (response) {
                    this.loading = false
                    console.log(response)
                })
                .catch(function (error) {
                    console.log("Error")
                })
        }
    }
}
</script>

<style scoped>

</style>
