<template>
    <div class="mt-3">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Working Area</th>
                    <th>Commission</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="agent in agents.data" :key="agent.agent_code">
                    <td>{{ agent.agent_code }}</td>
                    <td>{{ agent.agent_name }}</td>
                    <td>{{ agent.working_area }}</td>
                    <td>{{ agent.commission }}</td>
                </tr>
            </tbody>
        </table>
        <pagination align="center" :data="agents" @pagination-change-page="mostrarAgents"></pagination>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';
export default {
    name: 'agents',
    components: {  
        pagination
    },
    data(){
        return {
            agents: []
        }
    },
    mounted(){
        this.mostrarAgents()
    },
    methods: {
        async mostrarAgents(page=1){
            await axios.get('/api/agent?page=' + page)
            .then(response=>{
                this.agents = response.data
                console.log(response)
            })
            .catch(error=>{
                this.agents = []
                console.log('ERROR!')
                console.log(error)
            })
        }
    }
}
</script>
