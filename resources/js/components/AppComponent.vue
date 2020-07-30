<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Fizz Buzz Listing</div>

                    <div class="card-body">
                        <b-list-group>
                            <b-list-group-item v-for="fizzBuzz in fizzBuzzData" :key="fizzBuzz.id"  >{{fizzBuzz.value}}</b-list-group-item>
                        </b-list-group>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Vue from 'vue';
    import axios from 'axios';
    import { BootstrapVue } from 'bootstrap-vue'
    Vue.use(BootstrapVue);

    export default {
        data(){
            return {
                fizzBuzzData:[]
            }
        },
        created() {
            let that = this;
            axios.get('/fizzbuzz')
                .then(function (response) {
                    // handle success
                    that.fizzBuzzData = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
        }
    }
</script>
