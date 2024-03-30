<template>
    <div>
        <h1 ref="myref">Hooks template</h1>
        <h2>MY name is {{ name }}</h2>
    </div>
</template>

<script>

export default{
    data(){
        return{
            name: 'Taofeek'
        }
    },
    
    beforeCreate(){
        console.log()
    },
    created(){
        // console.log(this.$refs.myref)
        console.log("Data can show in here", this.name)
    },
    mounted(){
        console.log(this.$refs.myref)
    }
}
</script>
