<template>
    <div class="row main-container">
        <!-- Tiers -->
        <div class="col-2">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">Tier:</a>
                    </li>
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">All</a>
                    </li>
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">VII</a>
                    </li>
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">IX</a>
                    </li>
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">X</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Nations -->
        <div class="col-5">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">All</a>
                    </li>
                    <li v-for="nation in nations" class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">
                            <img :src="'/images/flags/' + nation  + '-mini.png'" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Types -->
        <div class="col-3">
            <nav class="pagination-nav-container">
                <ul class="pagination pagination-sm pagination-list">
                    <li class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">All</a>
                    </li>
                    <li v-for="type in types" class="page-item pagination-list-element">
                        <a class="page-link pagination-link" href="#">
                            <img width="12px" :src="'/images/types/' + type  + '.png'" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-2">
            <button class="btn btn-success rounded">
                Wyczyść filtry
            </button>
        </div>

    </div>
</template>

<script>
export default {
    name: "PaginationBar",
    props: ['nations', 'types']
}
</script>

<style scoped>
.pagination-link {
    color: navajowhite;
    background-color: transparent;
    border: none;
}

.pagination-list-element {

}

.pagination-list {
    margin: 0;
}

.pagination-nav-container {
    display: inline-flex;
    background-color: black;
    padding: 3px;
    border-radius: 50px;
}

.main-container {
    margin-bottom: 25px;
}
</style>
