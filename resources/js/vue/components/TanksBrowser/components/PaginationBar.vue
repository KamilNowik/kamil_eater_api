<template>
    <div class="row">
        <!-- Tiers -->
        <div class="col-3">
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
        <div class="col">
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
        <!--                        <div class="col-2">-->
        <!--                            <nav aria-label="Page navigation example">-->
        <!--                                <ul class="pagination pagination-sm">-->
        <!--                                    <li class="page-item">-->
        <!--                                        <a class="page-link" href="#" aria-label="Previous">-->
        <!--                                            <span aria-hidden="true">&laquo;</span>-->
        <!--                                        </a>-->
        <!--                                    </li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
        <!--                                    <li class="page-item">-->
        <!--                                        <a class="page-link" href="#" aria-label="Next">-->
        <!--                                            <span aria-hidden="true">&raquo;</span>-->
        <!--                                        </a>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                            </nav>-->
        <!--                        </div>-->
        <!--                        <div class="col-2">-->
        <!--                            <nav aria-label="Page navigation example">-->
        <!--                                <ul class="pagination pagination-sm">-->
        <!--                                    <li class="page-item">-->
        <!--                                        <a class="page-link" href="#" aria-label="Previous">-->
        <!--                                            <span aria-hidden="true">&laquo;</span>-->
        <!--                                        </a>-->
        <!--                                    </li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
        <!--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
        <!--                                    <li class="page-item">-->
        <!--                                        <a class="page-link" href="#" aria-label="Next">-->
        <!--                                            <span aria-hidden="true">&raquo;</span>-->
        <!--                                        </a>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                            </nav>-->
        <!--                        </div>-->
        <!--                        <div class="col-3 offset-1">-->
        <!--                            <button class="btn btn-success rounded">-->
        <!--                                Wyczyść filtry-->
        <!--                            </button>-->
        <!--                        </div>-->
    </div>
</template>

<script>
export default {
    name: "PaginationBar",
    props:['nations']
}
</script>

<style scoped>
.pagination-link {
    color: navajowhite;
    background-color: black;
    border: none;
}

.pagination-list-element {

}

.pagination-list {
    background-color: black;
    margin: 0;
}

.pagination-nav-container {
    display: inline-flex;
    background-color: black;
    padding-top: 10px;
    padding-right: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
    border-radius: 30px;
}
</style>
