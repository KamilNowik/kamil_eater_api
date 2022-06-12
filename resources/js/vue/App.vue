<template>
    <div>
        <Header/>
        <TanksBrowser/>
    </div>
</template>

<script>
import Header from "./components/Header";
import TanksBrowser from "./components/TanksBrowser/TanksBrowser";

export default {
    data() {
        return {}
    },
    components: {
        Header,
        TanksBrowser
    }
}
</script>
