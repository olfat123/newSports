<template id="friends-request">    
    
        <section class="players-main">
            <div class="container">
                <div class="row">
                    <div id="search-filtter" class="col-md-12">
                        <div class="panel panel-default shade top-bottom-border">
                            <div class="panel-heading text-center shade bottom-border">
                                <h4 style="color: #06774a;margin: 5px 0px">Friends Requests</h4>
                            </div>
                            <div class="scroll" style="background-color: #fff; height: 500px;overflow-y: scroll;margin-bottom: 20px">


                <div v-for = "request in filteredrequests" :key = "request.id" class="col-sm-3 col-xs-6 text-center">
					<a class="a-holding-divs" href="">
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

                                    <!--<div v-for = "request in filteredrequests" :key = "request.id" class="col-sm-3 col-xs-6 text-center">                                
                                        
                                        
                                            <div class="Player shade border-20" style="border: 1px solid #ffa500;margin: 5px 0px;">

                                                <div class="profile-img-container text-center" style="padding: 5px 0px 0px 0px;">
                                                    <div class="d-flex justify-content-center h-100">
                                                        <div class="image_outer_container">
                                                       
                                                            <div class="image_inner_container">
                                                                <img class="shade" 
                                                                    style="height: 75px;
                                                                            width: 75px;
                                                                            border: 2px solid #f89406;" 
                                                                    
                                                                    :src="'storage/'+request.user_img"
                                                                   
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                                <div style="margin-bottom: 10px">
                                                    <h3 style="padding-top: 5px !important;
                                                            margin-bottom: 5px !important;
                                                            font-size: 12px"
                                                    >
                                                        {{request.name}}
                                                    </h3>                                                   
                                                   
                                                </div>

                                                <div style="margin-bottom: 10px">
                                                    <h3 style="padding-top: 5px !important;
                                                            margin-bottom: 5px !important;
                                                            font-size: 12px"
                                                    >
                                                        
                                                    </h3>
                                                    <p style="font-family: 'Roboto', sans-serif;font-size: 12px;">                                         
                                                            <a class="btn btn-primary" href="">accept</a> 
                                                            <a class="btn btn-primary" href="">delete</a>                  
                                                        
                                                    </p>
                                                    
                                                </div>
                                                
                                            </div>                                        
                                        
                                    </div>-->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="container">
                <div class="row">
                    <div id="search-filtter" class="col-md-12">
                        <div class="panel panel-default shade top-bottom-border">
                            <div class="panel-heading text-center shade bottom-border">
                                <h4 style="color: #06774a;margin: 5px 0px">Pending Requests</h4>
                            </div>
                            <div class="scroll" style="background-color: #fff; height: 500px;overflow-y: scroll;margin-bottom: 20px">


                <div v-for = "request in pendings" :key = "request.id" class="col-sm-3 col-xs-6 text-center">
					<a class="a-holding-divs" href="">
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
        </section>      
        
    
    
      
    
</template>

<script>
export default{
    data:function(){
        return {
            requests: '',
            pendings: '',
            direction: ''
            };
    },
    created: function(){
        let uri = 'http://localhost:8000/ApiFriendRequests';
        Axios.get(uri).then((response)=>{
            console.log(response);
            this.requests = response.data.sender;
            this.pendings = response.data.pending;
            this.direction = response.data.dir;
        });
    },
    computed: {
        filteredrequests: function(){
            if(this.requests.length){
                return this.requests;
            }
        },
       
    }
}
</script>