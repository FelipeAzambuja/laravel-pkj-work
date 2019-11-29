@extends('layouts.site')

@section('content')

<div id="app">
    <form load="init">
        <div class="container">
            <section class="section">

                <b-field label="Nome">
                    <b-input placeholder="Teste" required v-model="name" expanded></b-input>
                    <b-button v-on:click.prevent="adicionar" type="is-primary">Click Me</b-button>
                </b-field>

                <hr>

                <b-field v-for="(item,i) in nomes">
                    <b-input placeholder="Teste" v-model="nomes[i]" expanded></b-input>
                    <b-button v-on:click.prevent="nomes.splice(i,1)" type="is-danger">Remove</b-button>
                </b-field>

            </section>
        </div>
    </form>
</div>

<script>
    vue = new Vue({
    el:'#app',
    data:{
        name:'',
        nomes:[]
    },
    methods:{
        adicionar:function(){
            this.nomes.push(this.name);
            this.name = '';
        }
    }
})
</script>
@endsection
