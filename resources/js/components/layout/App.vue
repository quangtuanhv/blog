<template>
    <div class="super_container">
        <header-desktop></header-desktop>
            <router-view/>
        <footer-desktop></footer-desktop>
    </div>
</template>
<script>
import HeaderDesktop from './partials/Header'
import FooterDesktop from './partials/Footer'
export default {
    components: {
        HeaderDesktop,
        FooterDesktop
    },
}
</script>
