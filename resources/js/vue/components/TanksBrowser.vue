<template>
    <div style="background-color: #181818;">
        <div class="container" style="height:5000px">
            <div class="row">
                <div class="col" style="background-color:yellow">
                    <h1 class="pt-10 lg:pt-0 mb-4 text-xl lg:text-4xl font-bold leading-none text-wg-heading">
                        Welcome to <span class="text-wg-accent">skill4ltu's</span> Index
                    </h1>

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
    }
}
</script>

<style scoped>

</style>
