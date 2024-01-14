<template>
<div class="container header_page">
    <GroupsList/>
</div>

</template>

<script>

import GroupsList from "./Groups.vue";
export default {
  name: "MainPage",
    components: {GroupsList},
    methods:{

  }
}
</script>

<style scoped>
  .container{
    margin: 0 auto;
    width: 1500px;
  }

  .header_page{
    margin-top: 1rem;
  }
</style>
