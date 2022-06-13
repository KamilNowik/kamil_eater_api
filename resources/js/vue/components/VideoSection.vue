<template>
  <div class="container main-container">
    <div class="row">
      <div class="col-md-6" v-for="video in videos">
        <a class="card video-card" style="background-color: transparent" :href="'https://www.youtube.com/watch?v=' + video.id.videoId" target="_blank">
          <img class="card-img-top video-card-img" :src="video.snippet.thumbnails.medium.url" alt="Card image cap">
          <div class="card-body video-card-body">
            <p class="card-text video-card-text">{{video.snippet.title}}</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "VideoSection",
  data() {
    return {
      videos: []
    }
  },
  methods: {
    getVideos() {
      axios.get('/api/get-videos')
        .then(response => {
          this.videos = response.data;
          console.log(response.data);
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  mounted() {
    this.getVideos();
  }
}
</script>

<style scoped>
.main-container{
    color: navajowhite;
}
</style>

<!--AIzaSyDUnszq28_UHEI5Bu43NMb6RAB0JMHcqQ8-->
