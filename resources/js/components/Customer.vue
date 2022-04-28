<template>
    <div class="mt-3">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Working Area</th>
                    <th>Agent</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers.data" :key="customer.cust_code">
                    <td>{{ customer.cust_code }}</td>
                    <td>{{ customer.cust_name }}</td>
                    <td>{{ customer.cust_city }}</td>
                    <td>{{ customer.working_area }}</td>
                    <td>{{ customer.agent_name }}</td>
                </tr>
            </tbody>
        </table>
        <pagination align="center" :data="customers" @pagination-change-page="mostrarCustomers"></pagination>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';

export default {
    name: 'customers',
    components: {
        pagination
    },
    data(){
        return {
            customers: []
        }
    },
    mounted(){
        this.mostrarCustomers()
    },
    methods: {
        async mostrarCustomers(page=1){
            await axios.get('api/customer?page=' + page)
            .then(response=>{
                this.customers = response.data
                console.log(response)
            })
            .catch(error=>{
                this.customers = []
                console.log('ERROR!')
                console.log(error)
            })
        }
    }
}
</script>
