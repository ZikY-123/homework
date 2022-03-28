<template>
<div id="toggleOverTask">
	<label for="showOverBtn" class="showOverLabel" :class="{active: this.$store.state.isShowOver}">
		<span>
			{{this.$store.state.isShowOver==false ? '显示完成的任务' : '隐藏完成的任务'}}
		</span>
		<input type="checkbox" name="" id="showOverBtn" v-model="isShowOver" @change="ToggleOverTask($event)">
	</label>
</div>
</template>

<script>
export default {
	name: 'ToggleOverTask',
	data() {
		return {
			isShowOver: this.$store.state.isShowOver
		}
	},
	methods: {
		ToggleOverTask() {
			this.$store.commit("ToggleOverTaskState", this.isShowOver);
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#showOverBtn{display: none;}
#toggleOverTask{
	display: flex;
}

#showOverBtn{display: none;}
#toggleOverTask{
	display: flex;
}
.showOverLabel{
	height: 2rem;
	border-radius: 16rem;
	background: #fff;
	width: 9.475rem;
	line-height: 2rem;
	margin: 0 auto;
	margin-top: 0.628rem;
	text-align: center;
	color: #adadad;
}
.active{
	height: 2rem;
	border-radius: 16rem;
	background: #eee;
	width: 9.475rem;
	line-height: 2rem;
	margin: 0 auto;
	margin-top: 0.628rem;
	text-align: center;
	color: #adadad;
	border: 1px solid #adadad;
}
</style>
