<template>
    <div>
        <button onclick="console.log('Onclicked me')">Onclick me</button>
        <button @click="handleClick">@Click me</button>
    </div>
</template>

<script>
export default {
    name: "ButtonComponent",
    methods: {
        handleClick () {
            console.log("@Clicked me");
        }
    }
}
</script>

<style scoped>

</style>
