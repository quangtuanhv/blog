<template>
    <div id="app">
        <vue-progress-bar></vue-progress-bar>
        <component v-if="layout" :is="layout"></component>
    </div>
</template>
<script>
import App from '../components/layout/App'
import Default from '../components/layout/Default'
const layouts = {
    app: App,
    default: Default
}

export default {
    data () {
        return {
            layout: null,
            defaultLayout: 'app'
        }
    },
    created() {
        this.$Progress.start()
        this.$router.beforeEach((to, from, next) => {
            if (to.meta.progress !== undefined) {
                let meta = to.meta.progress;
                this.$Progress.parseMeta(meta);
            }
            this.$Progress.start();
            next();
        });
        this.$router.afterEach((to, from) => {
            this.$Progress.finish();
        });
    },
    mounted() {
        this.$Progress.finish();
    },
    methods: {
        setLayout(layout) {
            if (!layout || !layouts[layout]) {
                layout = this.defaultLayout;
            }

            this.layout = layouts[layout];
        }
    },
}
</script>
