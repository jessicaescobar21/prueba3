<template>
    <div class="mt-3">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Customer</th>
                    <th>Agent</th>
                    <th>Working Area</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order in orders.data" :key="order.ord_num">
                    <td>{{ order.ord_num }}</td>
                    <td>{{ order.ord_amount }}</td>
                    <td>{{ order.ord_date }}</td>
                    <td>{{ order.ord_description }}</td>
                    <td>{{ order.cust_name }}</td>
                    <td>{{ order.agent_name }}</td>
                    <td>{{ order.working_area }}</td>
                </tr>
            </tbody>
        </table>
        <pagination align="center" :data="orders" @pagination-change-page="mostrarOrders"></pagination>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';

export default {
    name: 'orders',
    components: {
        pagination
    },
    data(){
        return {
            orders: []
        }
    },
    mounted(){
        this.mostrarOrders()
    },
    methods: {
        async mostrarOrders(page=1){
            await axios.get('/api/order?page=' + page)
            .then(response=>{
                this.orders = response.data
                console.log(response)
            })
            .catch(error=>{
                this.orders = []
                console.log('ERROR!')
                console.log(error)
            })
        }
    }
}
</script>
