<template>
<footer id="footer">
		<img src="../assets/toulan.png" alt="">
	</footer>
    
</template>

<script>
export default {
  name: 'Footer',
  data () {
    return {
      msg: '这是我们的实际项目'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*footer*/
#footer{
	/*height: 3.25rem;*/
	position: fixed;
	/*display: table-cell;*/
	/*text-align: center;*/
	/*left: 0;*/
	bottom: 0;
}
#footer img{	
	width: 100%; height: 100%;
}
</style>
