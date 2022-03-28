import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state: {
		isShowOver: true,
		taskData: [
			{
				content: 'to study',
				over: false
			},
			{
				content: 'to gym',
				over: false
			},
			{
				content: 'to play',
				over: false
			}
			
		]
	},
	mutations: {
		addNewTask(state, newTask){
			state.taskData.unshift(newTask);
		},
		ToggleOverTaskState(state, isShowOver){
			state.isShowOver = isShowOver;
		}
	}
})