<template>
    <div>
        <Header/>
        <VideoSection/>
        <TanksBrowser/>
    </div>
</template>

<script>
import Header from "./components/Header";
import TanksBrowser from "./components/TanksBrowser";
import VideoSection from "./components/VideoSection";

export default {
    data() {
        return {}
    },
    components: {
        Header,
        TanksBrowser,
        VideoSection
    }
}
</script>
