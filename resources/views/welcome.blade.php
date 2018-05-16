
@extends('layouts.app')

@section('content')

<div class = "container" id = "search">
    <form class="form-group" action="/">
        <input v-model="keyword" type="text" class="form-control-lg input-lg col-lg-8 ml-auto" style="outline:none;border:none;border:1px solid blue;" placeholder="Search Books">
    </form>
    <ul class="list-group col-8" v-for="item in results">
        <a href="#" style="text-decoration:none;"><li class="list-group-item">@{{item}}</li></a>
    </ul>
</div>


<script>
var x = new Vue({
    el: '#search',
    data: {
        keyword: '',
        results: {},

    },
    watch:{
        keyword: function(val){
            this.search(val);
            
        }
    },
    methods:{
        search: function(val){
            axios.get('http://127.0.0.1:8000/api/search?q='+this.keyword)
        .then(function (response) {
            console.log(response);
          x.results = response.data;
        })
        .catch(function (error) {
            console.log(error);
        })
        }
    },
    

})
</script>
@endsection


