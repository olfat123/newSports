<template id="friends-request">    
   
        <section class="players-main"> 

            <div class="container">
                <div class="row">
                    <div id="search-filtter" class="col-md-12">
                        <div class="panel panel-default shade top-bottom-border">
                            <div class="panel-heading text-center shade bottom-border">
                                <h4 style="color: #06774a;margin: 5px 0px" v-if="direction === 'ltr'">{{EN.allFriends}}</h4>
                                <h4 style="color: #06774a;margin: 5px 0px" v-else>{{AR.allFriends}}</h4>
                            </div>
                            <div class="scroll" style="background-color: #fff; height: 300px;overflow-y: scroll;margin-bottom: 20px">


                <div v-for = "friend in allFriends" :key = "friend.id" class="col-sm-3 col-xs-6 text-center">
					<a class="a-holding-divs" v-on:mouseover="encrypt(friend.id)" :href="'profile/'+encryptedID">
						<div class="Player shade border-20" style="border: 1px solid #ffa500;margin: 5px 0px;">
							<div class="row">
								<div class="col-md-4">
									<div class="profile-img-container text-center" style="padding: 5px 0px 0px 0px;">
										<div class="d-flex justify-content-center h-100">
											<div class="image_outer_container">
											
												<div class="image_inner_container">
													<img class="shade" 
														style="height: 50px;
																width: 50px;
																border: 2px solid #f89406;" 
														:src="'storage/'+friend.user_img"
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div style="margin-bottom: 10px">
										<h3 style="padding-top: 5px !important;
												margin-bottom: 5px !important;
												font-size: 12px"
										>
											{{friend.name}}
										</h3>
										
										<p style="font-size:11px;">
											<i class="fa fa-map-marker"></i>
                                            <span v-if="direction === 'ltr'" >
												{{friend.player_profile.country.c_en_name}} 
                                            </span>
                                            <span v-else>
                                                {{friend.player_profile.country.c_ar_name}}											
											</span>
                                            , 
                                            <span v-if="direction === 'ltr'">
                                                {{friend.player_profile.governorate.g_en_name}} 
                                            </span>
                                            <span v-else>
                                                {{friend.player_profile.governorate.g_ar_name}}									
                                            </span>
                                            ,
                                            <span v-if="direction === 'ltr'">
                                                {{friend.player_profile.area.a_en_name}}
                                            </span>
                                            <span v-else>
                                                {{friend.player_profile.area.a_ar_name}}
                                            </span>
											  
											
										</p>
										<span>										
                                            
												{{ friend.player_profile.averageRating  }}
													<i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
												
													<i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
											
										
										</span>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class=" col-md-6">
                    <div class="row">
                        <div id="search-filtter" class="col-md-12">
                            <div class="panel panel-default shade top-bottom-border">
                                <div class="panel-heading text-center shade bottom-border">
                                    <h4 style="color: #06774a;margin: 5px 0px" v-if="direction === 'ltr'">{{EN.friendRequests}}</h4>
                                    <h4 style="color: #06774a;margin: 5px 0px" v-else>{{AR.friendRequests}}</h4>
                                </div>
                                <div class="scroll" style="background-color: #fff; height: 300px;overflow-y: scroll;margin-bottom: 20px">


                    <div v-for = "request in filteredrequests" :key = "request.id" class="col-sm-6 col-xs-12 text-center">
                        
                        <div class="Player shade border-20" style="border: 1px solid #ffa500;margin: 5px 0px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="a-holding-divs" v-on:mouseover="encrypt(request.id)" :href="'profile/'+encryptedID">
                                        <div class="profile-img-container text-center" style="padding: 5px 0px 0px 0px;">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="image_outer_container">
                                               
                                                    <div class="image_inner_container">
                                                        <img class="shade" 
                                                            style="height: 50px;
                                                                    width: 50px;
                                                                    border: 2px solid #f89406;" 
                                                            :src="'storage/'+request.user_img"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                    <div class="col-md-8">
                                        <div style="margin-bottom: 10px">
                                            <a class="a-holding-divs" v-on:mouseover="encrypt(request.id)" :href="'profile/'+encryptedID">
                                                <h3 style="padding-top: 5px !important;
                                                    margin-bottom: 5px !important;
                                                    font-size: 12px"
                                                >
                                                    {{request.name}}
                                                </h3>
                                            </a>
                                            
                                            <p style="font-size:11px;">
                                                <i class="fa fa-map-marker"></i>
                                                <span v-if="direction === 'ltr'" >
                                                    {{request.player_profile.country.c_en_name}} 
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.country.c_ar_name}}											
                                                </span>
                                                , 
                                                <span v-if="direction === 'ltr'">
                                                    {{request.player_profile.governorate.g_en_name}} 
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.governorate.g_ar_name}}									
                                                </span>
                                                ,
                                                <span v-if="direction === 'ltr'">
                                                    {{request.player_profile.area.a_en_name}}
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.area.a_ar_name}}
                                                </span>
                                                
                                                
                                            </p>
                                            <span>										
                                                
                                                    {{ request.player_profile.averageRating  }}
                                                        <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
                                                    
                                                        <i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
                                                
                                            
                                            </span>                  
                                                                            
                                        </div>
                                        
                                    </div>
                                    <div class="text-center" style="margin-bottom:10px">
                                                <a class="btn btn-success" style="border-radius: 25px;background:orange;" v-on:click.prevent="accept(request.id)"  >          
                                                    <span v-if="direction === 'ltr'">{{EN.accept}}</span>
                                                    <span v-else>{{AR.accept}}</span>
                                                </a>
                                                <a class="btn btn-success" style="border-radius: 25px;background:orange;" v-on:click.prevent="reject(request.id)"  >          
                                                    <span v-if="direction === 'ltr'">{{EN.reject}}</span>
                                                    <span v-else>{{AR.reject}}</span>
                                                </a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        
                <div class="col-md-6">
                    <div class="row">
                        <div id="search-filtter" class="col-md-12">
                            <div class="panel panel-default shade top-bottom-border">
                                <div class="panel-heading text-center shade bottom-border">
                                    <h4 style="color: #06774a;margin: 5px 0px" v-if="direction === 'ltr'">{{EN.pendingRequests}}</h4>
                                    <h4 style="color: #06774a;margin: 5px 0px" v-else>{{AR.pendingRequests}}</h4>
                                </div>
                                <div class="scroll" style="background-color: #fff; height: 300px;overflow-y: scroll;margin-bottom: 20px">


                    <div v-for = "request in pendings" :key = "request.id" class="col-sm-6 col-xs-12 text-center">
                        <a class="a-holding-divs" v-on:mouseover="encrypt(request.id)" :href="'profile/'+encryptedID">
                            <div class="Player shade border-20" style="border: 1px solid #ffa500;margin: 5px 0px;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img-container text-center" style="padding: 5px 0px 0px 0px;">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="image_outer_container">
                                                <!-- <div class="green_icon"></div> -->
                                                    <div class="image_inner_container">
                                                        <img class="shade" 
                                                            style="height: 50px;
                                                                    width: 50px;
                                                                    border: 2px solid #f89406;" 
                                                            :src="'storage/'+request.user_img"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div style="margin-bottom: 10px">
                                            <h3 style="padding-top: 5px !important;
                                                    margin-bottom: 5px !important;
                                                    font-size: 12px"
                                            >
                                                {{request.name}}
                                            </h3>
                                            
                                            <p style="font-size:11px;">
                                                <i class="fa fa-map-marker"></i>
                                                <span v-if="direction === 'ltr'" >
                                                    {{request.player_profile.country.c_en_name}} 
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.country.c_ar_name}}											
                                                </span>
                                                , 
                                                <span v-if="direction === 'ltr'">
                                                    {{request.player_profile.governorate.g_en_name}} 
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.governorate.g_ar_name}}									
                                                </span>
                                                ,
                                                <span v-if="direction === 'ltr'">
                                                    {{request.player_profile.area.a_en_name}}
                                                </span>
                                                <span v-else>
                                                    {{request.player_profile.area.a_ar_name}}
                                                </span>
                                                
                                                
                                            </p>
                                            <span>										
                                                
                                                    {{ request.player_profile.averageRating  }}
                                                        <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
                                                    
                                                        <i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
                                                
                                            
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
        
    
    
      
    
</template>

<script>
export default{
    data:function(){
        return {
            requests: '',
            pendings: '',
            allFriends: '',
            direction: '',
            encryptedID:'',
            EN:{
                allFriends: 'All Friends',
                friendRequests: 'Friends Requests',
                accept: 'Accept',
                reject: 'Reject',
                pendingRequests: 'Pending Requests'
                },
            AR:{
                allFriends: 'كل الأصدقاء',
                friendRequests: 'طلبات الصداقة',
                accept: 'قبول',
                reject: 'رفض',
                pendingRequests: 'طلبات الصداقه المعلقه'
                }
            };
    },
    created: function(){
        let uri = '/ApiFriendRequests';
        Axios.get(uri).then((response)=>{
            console.log(response);
            this.requests = response.data.sender;
            this.pendings = response.data.pending;
            this.direction = response.data.dir;
            this.allFriends = response.data.all;
        });
    },
    computed: {
        filteredrequests: function(){
            if(this.requests){
                return this.requests;
            }
        },       
    },
    methods:{
        encrypt: function(id) {
            let uri = '/encryptid/'+id;
            Axios.get(uri).then((response)=>{
                console.log(response);
                this.encryptedID = response.data;                
            });
        },
        accept: function(id) {
            let uri = '/acceptfriend/'+id;
            Axios.get(uri).then((response)=>{
                console.log(response);
                //this.$forceUpdate();         
            });
            let url = '/ApiFriendRequests';
            Axios.get(url).then((response)=>{
                console.log(response);
                this.requests = response.data.sender;
                this.pendings = response.data.pending;
                this.direction = response.data.dir;
                this.allFriends = response.data.all;
            });
           
        },
        reject: function(id) {
            let uri = '/rejectfriend/'+id;
            Axios.get(uri).then((response)=>{
                console.log(response);                   
            });
            let url = '/ApiFriendRequests';
            Axios.get(url).then((response)=>{
                console.log(response);
                this.requests = response.data.sender;
                this.pendings = response.data.pending;
                this.direction = response.data.dir;
                this.allFriends = response.data.all;
            });
        }
    }
}
</script>