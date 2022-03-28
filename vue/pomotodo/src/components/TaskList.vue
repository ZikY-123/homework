<template>
<div id="taskList">
	<ul>
		<li :class="{lineOver: task.over}" v-for="(task, index) in this.$store.state.taskData.filter(task=>!task.over)" :key="index">
			<label :for="index"><span></span></label>
			<input type="checkbox" :id="index" v-model="task.over">
			{{task.content}}
		</li>
	</ul>
</div>
</template>

<script>
export default {
	name: 'TaskList',
	data() {
		return {
			msg: '这是我们的实际项目'
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#taskList{
	margin-top: 0.625rem;
}
/*taskList*/
#taskList ul li input, #taskList ul li label{
	display: inline-block;  
}
#taskList ul li input{display: none;}
#taskList ul li label span{border: 0.1875rem solid #bababa; 
	border-radius: 50%; width: 1.5rem; height: 1.5rem; 
	display: block; margin-right: 0.385rem;} 
#taskList ul li{
	color: #666;
	height: 3rem;
	border-bottom: 1px solid #eee;
	line-height: 3rem;
	font-size: 0.975rem;
	padding-left: 1rem;
	display: flex;
	align-items: center;
	/*font-weight: bold;*/
	background: #fff;
}
</style>
