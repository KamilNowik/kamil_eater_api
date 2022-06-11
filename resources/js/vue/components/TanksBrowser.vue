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
                                {{ nationLocalization(tank.nation, tank.type) }} tier VIII <span
                                v-if="tank.is_premium">premium</span> vehicle
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
        },
        nationLocalization(nation, type) {
            switch (nation) {
                case 'ussr':
                    if (type === 'SPG') {
                        return 'Radziecka';
                    }
                    return 'Radziecki';
                case 'uk':
                    if (type === 'SPG') {
                        return 'Brytyjska';
                    }
                    return 'Brytyjski';
                case 'france':
                    if (type === 'SPG') {
                        return 'Francuska';
                    }
                    return 'Francuski';
                case 'poland':
                    if (type === 'SPG') {
                        return 'Polska';
                    }
                    return 'Polski';
                case 'china':
                    if (type === 'SPG') {
                        return 'Chińska';
                    }
                    return 'Chiński';
                case 'japan':
                    if (type === 'SPG') {
                        return 'Japońska';
                    }
                    return 'Japoński';
                case 'germany':
                    if (type === 'SPG') {
                        return 'Niemiecka';
                    }
                    return 'Niemiecki';
                case 'usa':
                    if (type === 'SPG') {
                        return 'Amerykańska';
                    }
                    return 'Amerykański';
                default:
                    return 'test';
            }
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
