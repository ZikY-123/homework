<template>
<header id="header">
		<div id="timer">25:00</div>
		<div id="logo"><img src="../../static/logo.png" alt=""></div>
		<div id="setting"><img src="../assets/setting.png" alt=""></div>
	</header>
    
</template>

<script>
export default {
  name: 'Header',
  data () {
    return {
      msg: '这是我们的实际项目'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*header*/
#header{
	background: #fb4c3a;
	height: 2.6875rem;
	line-height: 2.6875rem;
	display: flex;
	justify-content: space-between;
	align-items: center;	
	color: #fff; 
	font-size: 1rem;
}
#header #timer{
	padding-left: 1rem;
}
#header #setting{
	padding-right: 1rem;
}
#header #logo, #header #setting{
	height: 100%;
	display: flex; 
	justify-content: space-between;
	align-items: center;
}
#header #logo img{width: 1.4375rem;}
#header #setting img{width: 1.375rem;}
</style>
