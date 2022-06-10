<template>
    <div style="background-color: #181818; font-family: Roboto-LightItalic">
        <div class="container" style="height:5000px">
            <div class="row">
                <div v-for="tank in tanks.data" class="col-xl-2 col-lg-4 col-6">
                    <div>
                        <a href="#"
                           style="background-image: url(&quot;https://stefanisarie.photography/assets/images/flags/flag-china.png&quot;);">
                            <img
                                alt="" title=""
                                :src="tank.image_link"
                                class="mx-auto g-image"></a><a href="/62001/m41-d/" class="flex flex-col text-center">
                        <p class="text-sm font-extrabold text-wg-text overflow-hidden overflow-ellipsis whitespace-nowrap text-wg-playable">
                            {{tank.name}}
                        </p>
                        <p class="mb-5 text-xs text-wg-mutted">
                            China tier VIII <span class="text-wg-altaccent">premium</span> vehicle
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
