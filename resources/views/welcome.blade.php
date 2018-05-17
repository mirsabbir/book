
@extends('layouts.app')

@section('content')

<div class = "container" id = "search">
    <div class="row">
        <div class="col-md-7">
            <form class="form-group" action="/">
            <input v-model="keyword" type="text" class="form-control-lg input-lg col-lg ml-auto" style="outline:none;border:none;border:1px solid blue;" placeholder="Search Books">
            </form>
        </div>
        <div class="col mr-auto">
            <button class="btn btn-primary">search</button>
        </div>
    </div>

    
    <ul class="list-group col-7" v-for="item in results">
       
        <a href="" style="text-decoration:none;">
        <li class="list-group-item">
            <div class="container">
                <div class="row">
                    
                    <div class="col"><img :src="item.cover" alt="" height="75" width="75"></div>
                    <div class="col">@{{item.name}}</div>
                    <div class="col">@{{item.publisher}}</div>
                    
                </div>
            </div>
        </li></a>
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
        keyword: function(){
            if(this.keyword.length>=2)
                x.search();
            else {
                this.results = {};
                // console.log(this.keyword);
            }
           
        }
    },
    methods:{
        search: _.debounce(function(){
            
            axios.get('http://127.0.0.1:8000/api/search?q='+this.keyword)
        .then(function (response) {
            // console.log(response);
           x.results = response.data;
        })
        .catch(function (error) {
            console.log(error);
        })
        },300)
    },
    

})
</script>
@endsection


