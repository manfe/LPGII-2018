<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.nome }}</td>
                    <td>{{ product.valor }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return { 
                products: null 
            }
        },
        mounted() {
            axios.get('/api/v1/products').then(response => {
                this.products = response.data;
            });
        }
    }
</script>
