import { createApp } from 'vue';

//import Audiojs from '../../../../Modules/Theme/Resources/js/components/audioplayer/Audiojs.vue';
//import Videojs from '../../../../Modules/Theme/Resources/js/components/videoplayer/Videojs.vue';
//import ExampleComponent                     from '../../../../Modules/Theme/Resources/js/components/ExampleComponent';
//import Noui from '../../../../Modules/Theme/Resources/js/components/slider/Noui.vue';

const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});


//app.component('videoplayer-component', Videojs);
//app.component('v-slider', Noui);
app.mount('#app');