<template>
    <div class="row main-container">
        <!-- Tiers -->
        <div class="col-2">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link inactive-pagination-link" >Tier:</a>
                    </li>
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link"  @click="selectAll('tiers')">All</a>
                    </li>
                    <li v-for="(tierValue, tierName) in tiers" class="page-item pagination-list-element">
                        <a class="page-link pagination-link"

                           :class="{ active: checkState('tiers', tierName) }"
                           @click="toggleState('tiers', tierName)"
                        >
                            {{ tierValue }}
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Nations -->
        <div class="col-5">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link"  @click="selectAll('nations')">All</a>
                    </li>
                    <li v-for="nation in nations" class="page-item pagination-list-element">
                        <a class="page-link pagination-link"

                           :class="{ active: checkState('nations', nation) }"
                           @click="toggleState('nations', nation)"
                        >
                            <img :src="'/images/flags/' + nation  + '-mini.png'" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Types -->
        <div class="col-2">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link"  @click="selectAll('types')">All</a>
                    </li>
                    <li v-for="type in types" class="page-item pagination-list-element">
                        <a class="page-link pagination-link"

                           :class="{ active: checkState('types', type) }"
                           @click="toggleState('types', type)"
                        >
                            <img width="12px" :src="'/images/types/' + type  + '.png'" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-3">
            <button class="btn btn-success rounded clear-all-button" @click="clearAll()">
                Wyczyść filtry
            </button>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            parameters: {
                tiers: [],
                nations: [],
                types: []
            }
        }
    },
    name: "PaginationBar",
    props: ['nations', 'types', 'tiers'],
    methods: {
        toggleState(category, value) {
            const index = this.parameters[category].indexOf(value);
            (index !== -1) ? this.parameters[category].splice(index, 1) : this.parameters[category].push(value);

            this.$emit('changeState', this.parameters);
        },
        checkState(category, value) {
            return this.parameters[category].indexOf(value) !== -1
        },
        selectAll(category) {
            this.parameters[category] = [];
            this.$emit('changeState', this.parameters);
        },
        clearAll(){
            this.parameters["nations"] = [];
            this.parameters["tiers"] = [];
            this.parameters["types"] = [];
            this.$emit('changeState', this.parameters);
        }
    }
}
</script>

<style scoped>
.pagination-link {
    color: navajowhite;
    background-color: transparent;
    border: none;
    margin: 3px;
}

.pagination-list-element {

}

.pagination-list {
    margin: 0;
}

.pagination-nav-container {
    display: inline-flex;
    background-color: black;
    padding: 4px 4px;
    border-radius: 13px;
}

.main-container {
    margin-bottom: 25px;
}

.active {
    background-color: rgba(242, 83, 34, 1);
}

.inactive-pagination-link {
    pointer-events: none;
}

.clear-all-button {
    background-color: rgba(27, 94, 32, 1);
    border-radius: 15px!important;
    color: antiquewhite;
    padding: 10px;
}
</style>
