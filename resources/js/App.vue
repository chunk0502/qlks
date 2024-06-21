<template>
    <div id="app">
        <TheHeader/>
        <router-view></router-view>
        <TheFooter/>
    </div>
</template>
<script>
import TheHeader from "./Components/TheHeader.vue";
import TheFooter from "./Components/TheFooter.vue";
export default {
    components:{
        TheHeader,
        TheFooter
    }
}
</script>
