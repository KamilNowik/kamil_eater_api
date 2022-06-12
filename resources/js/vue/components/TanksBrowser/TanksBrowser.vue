<template>
    <div style="background-color: #181818; padding-top: 100px">
        <div class="container" style="height:5000px">
            <div class="row pb-5">
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                        <input
                            v-model="tankSearch"
                            @input="getTanks()"
                            type="text"
                            class="form-control"
                            :placeholder="'Nazwa czołgu (minimum 2 znaki) spośród ' + tanks.total  + ' czołgów'"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                        >
                    </div>
                    <div class="row">
                        <div class="col-2">

                            <!-- Tiers -->
                            <nav aria-label="search-tier">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled search-item">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Tier</a>
                                    </li>
                                    <li class="page-item"><a class="page-link search-item" href="#">VII</a></li>
                                    <li class="page-item"><a class="page-link search-item" href="#">IX</a></li>
                                    <li class="page-item"><a class="page-link search-item" href="#">X</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-3 offset-1">
                            <button class="btn btn-success rounded">
                                Wyczyść filtry
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img src="/images/logo2.jpeg" class="img-fluid" alt="...">
                </div>
            </div>


            <div class="row">
                <div v-for="tank in tanks.data" class="col-xl-2 col-lg-4 col-6">
                    <div class="tank-container">
                        <div class="tank-a text-center">
                            <img alt="" title="" :src="tank.image_link">
                            <p style="margin-top: 8px;">
                                <span class="tank-name-container">{{ tank.name }}</span>
                                <br>
                                <span class="tank-description-container">
                                    {{ nationLocalization(tank.nation, tank.type) }} {{ typeLocalization(tank.type) }}
                                    {{ convertTier(tank.tier) }}  tier <span
                                    v-if="tank.is_premium">premium</span></span>
                            </p>
                        </div>
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
            tanks: [],
            tankSearch: ''
        }
    },
    methods: {
        getTanks() {
            axios.get('/api/get-tanks?search=' + this.tankSearch)
                .then(response => {
                    this.tanks = response.data;
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        typeLocalization(type) {
            switch (type) {
                case 'lightTank':
                    return 'czołg lekki';
                case 'SPG':
                    return 'artyleria';
                case 'mediumTank':
                    return 'czołg średni';
                case 'heavyTank':
                    return 'czołg ciężki';
                case 'AT-SPG':
                    return 'niszczyciel czołgów';
                default:
                    return 'test';
            }
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
                case 'italy':
                    if (type === 'SPG') {
                        return 'Włoska';
                    }
                    return 'Włoski';
                case 'czech':
                    if (type === 'SPG') {
                        return 'Czeska';
                    }
                    return 'Czeski';
                case 'sweden':
                    if (type === 'SPG') {
                        return 'Szwedzka';
                    }
                    return 'Szwedzki';
                default:
                    return 'test';
            }
        },
        convertTier(tier) {
            switch (tier) {
                case 8:
                    return 'VIII';
                case 9:
                    return 'IX';
                case 10:
                    return 'X';
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
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,300&display=swap');

.tank-name-container {
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    color: navajowhite;
}

.tank-description-container {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-style: italic;
    font-size: 13px;
    color: gray;
}

.tank-container {
    position: relative;
    top: 0;
    transition: top ease 0.2s;
}

.tank-container:hover {
    top: -7px;
}

.search-item {
    color: white;
}
</style>
