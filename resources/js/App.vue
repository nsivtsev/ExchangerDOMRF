<template>
    <div id="app">
        <CurrencyComponent></CurrencyComponent>
    </div>
</template>

<script>

import CurrencyComponent from "./components/CurrencyComponent";

export default {
    components: {
        CurrencyComponent
    },
    name: 'App',
    data() {
        return {
        }
    }
}
</script>

<style scoped>

</style>
