<template>
	<div id="taskInput" @submit="addTask($event)">
		<form action="">
			<input type="text" placeholder="添加新任务" v-model="newTask">
		</form>
	</div>
</template>

<script>
export default {
	name: 'TaskInput',
	data() {
		return {
			newTask: ''
		}
	},
	methods: {
		addTask(ev) {
			ev.preventDefault();
			if (this.newTask.trim() == '') {
				return ;
			}
			this.$store.commit('addNewTask', {
				content: this.newTask,
				over: false
			});
			this.newTask = ''
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*taskInput*/
::placeholder{
	color: #efefef;
}
#taskInput input{
	height: 3rem;
	box-sizing: border-box;
	display: block;
	width: 100%;
	padding-left: 1rem;
	background: #fff;
	color: #666;
	font-weight: bolder;
}

</style>
