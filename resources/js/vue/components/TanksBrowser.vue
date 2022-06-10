<template>
    <div style="background-color: #181818; font-family: Roboto-LightItalic">
        <div class="container" style="height:5000px">
            <div class="row">
                <div v-for="tank in tanks.data" class="col-xl-2 col-lg-4 col-6">
                    <div class="tank-container">
                        <a href="/62001/m41-d/" class="tank-a flex flex-col text-center">
                            <img alt="" title="" :src="tank.image_link" class="mx-auto g-image">
                            <p class="text-sm font-extrabold text-wg-text overflow-hidden overflow-ellipsis whitespace-nowrap text-wg-playable">
                                {{ tank.name }}
                            </p>
                            <p class="mb-5 text-xs text-wg-mutted">
                                {{tank.nation}} tier VIII <span v-if="tank.is_premium">premium</span> vehicle
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import axios from "axios";

export default {
    name: "TankBrowser",
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
@font-face {
    font-family: Roboto-LightItalic;
    src: url('/fonts/Roboto/Roboto-LightItalic.ttf');
}
</style>
