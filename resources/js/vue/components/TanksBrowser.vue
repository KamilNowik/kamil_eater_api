<template>
    <div style="background-color: #181818;">
        <div class="container" style="height:5000px">
            <div class="row">
                <div v-for="tank in tanks.data" class="col-xl-2 col-lg-4 col-6" style="background-color:yellow">
                    {{tank.name}}
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import axios from "axios";

export default {
    name: "Content",
    data() {
      return {
          tanks: []
      }
    },
    methods: {
        getTanks() {
            axios.get('/api/get-tanks')
                .then(response => {
                    this.tanks = response.data;
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.getTanks();
    }
}
</script>

<style scoped>

</style>
