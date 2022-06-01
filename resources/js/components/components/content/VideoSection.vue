<template>
  <div class="row">
    <div class="row">Featured Youtube Videos</div>
    <div class="row">
      <div class="col-md-6 col-lg-4" v-for="video in videos">
        <div class="card" style="background-color: transparent">
          <img class="card-img-top" :src="video.snippet.thumbnails.medium.url" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{video.snippet.title}}</p>
          </div>
        </div>
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
      axios.get('https://www.googleapis.com/youtube/v3/search?&part=snippet&channelId=UCrNQ0nuum9rkXKiNCBK67yQ&maxResults=2&key=AIzaSyDUnszq28_UHEI5Bu43NMb6RAB0JMHcqQ8')
        .then(response => {
          this.videos = response.data.items;
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

</style>

<!--AIzaSyDUnszq28_UHEI5Bu43NMb6RAB0JMHcqQ8-->
