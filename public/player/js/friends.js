Vue.component('allfriends',{
    template:`<section class="players-main">
    <div class="container">
      <div class="row">
        <div id="search-filtter" class="col-md-12"></div>
      </div>
    </div>
    </section>`,
});

Vue.component('prefriend',{
    template:`<div class="panel panel-default shade top-bottom-border">
                    <div class="panel-heading text-center shade bottom-border">
                        <h4 style="color: #06774a;margin: 5px 0px">Friends Requests</h4>
                    </div>
                    <div class="scroll" style="background-color: #fff; height: 500px;overflow-y: scroll;margin-bottom: 20px">
                    </div>
                </div>`,
});

new Vue({
    el:'#friends',
    methods:{
        acceptFriend:function(){
            

        }
    }
});