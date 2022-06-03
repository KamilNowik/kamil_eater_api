<template>
    <div>
        <Header/>
        <VideoSection/>
        <Content/>
    </div>
</template>

<script>
import Header from "./components/Header";
import Content from './components/Content';
import VideoSection from "./components/VideoSection";

export default {
    data() {
        return {}
    },
    components: {
        Header,
        Content,
        VideoSection
    }
}
</script>
