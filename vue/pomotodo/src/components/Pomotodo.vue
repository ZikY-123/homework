<template>
<div class="wrap">
  <Header></Header>
  <TaskInput></TaskInput>
  <TaskList></TaskList>
  <ToggleOverTask></ToggleOverTask>
  <TaskOverList></TaskOverList>
  <Footer></Footer>
</div>
</template>

<script>
import Header from './Header'
import TaskInput from './TaskInput'
import TaskList from './TaskList'
import ToggleOverTask from './ToggleOverTask'
import Footer from './Footer'
import TaskOverList from './TaskOverList'

export default {
  name: 'Pomotodo',
  components: {
    Header,
    Footer,
    TaskInput,
    TaskList,
    ToggleOverTask,
    TaskOverList
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
