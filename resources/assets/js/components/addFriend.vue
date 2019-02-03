<template>
    <div id = "" > 
    
        <div id="unfriend" v-if="status === 'un'">
        <div class="text-center" style="">
            <a class="btn btn-success" style="border-radius: 25px;background:orange;"  v-on:click.prevent="unfriend(user)"
                    
            >    
                <span v-if="dir === 'ltr'">
                    {{EN.unFriend}}
                </span>      
                <span v-else>{{AR.unFriend}}</span>
            </a>
        </div>
        </div>
    
        <div class="text-center" style="" v-else-if="status === 'pending'">
        <span class="btn btn-success" style="border-radius: 25px;background:gray;" >          
            <span v-if="dir === 'ltr'">
                    {{EN.pendingRequest}}
            </span>      
            <span v-else>{{AR.pendingRequest}}</span>
        </span>
        </div>
    
        <div id="addfriend" v-else-if="status === 'add'">
        <div class="text-center" style="">
            <a class="btn btn-success" style="border-radius: 25px;background:orange;" v-on:click.prevent="add(user)">          
                <span v-if="dir === 'ltr'">
                    {{EN.addFriends}}
            </span>      
            <span v-else>{{AR.addFriends}}</span>
            </a>
        </div>
        </div>

        <div id="addfriend" v-else-if="status === 'respond'">            
        <div class="text-center" style="">
            <p style="color:beige" v-if="dir === 'ltr'">{{EN.userAddedYou}}</p>
            <p style="color:beige" v-else>{{AR.userAddedYou}}</p>
            <a class="btn btn-success" style="border-radius: 25px;background:orange;" v-on:click.prevent="accept(friendId)">          
                <span v-if="dir === 'ltr'">
                    {{EN.acceptRequest}}
            </span>      
            <span v-else>{{AR.acceptRequest}}</span>
            </a>
            <a class="btn btn-success" style="border-radius: 25px;background:orange;" v-on:click.prevent="deleteRequest(friendId)">          
                <span v-if="dir === 'ltr'">
                    {{EN.deleteRequest}}
            </span>      
            <span v-else>{{AR.deleteRequest}}</span>
            </a>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {            
            status: '',
            dir: '',
            friendId: '',

            EN:{
                addFriends: 'Add As Friend',                
                unFriend: 'UnFriend',
                pendingRequest: 'Pending Request',
                acceptRequest: 'Accept',
                deleteRequest: 'Reject',
                userAddedYou : 'This user sent you a friend request'
                },
            AR:{
                addFriends: 'ارسل طلب صداقة',                
                unFriend: 'حذف من الأصدقاء',
                pendingRequest: 'قيد الأنتظار',
                acceptRequest : 'قبول',
                deleteRequest: 'رفض',
                userAddedYou: 'هذا المستخدم ارسل لك طلب صداقة'
                }
            
        }           
    },
    props: ['user'],
    created: function(){
        console.log(this.user);
        let uri = '/IsFriendWith/'+this.user;
        Axios.get(uri).then((response)=>{
            console.log(response);
            this.status = response.data.friend_status; 
            this.dir = response.data.dir;  
            this.friendId = response.data.friend_id;        
        });
    },
    methods:{
        add: function(id) {
            let url = '/addfriend/'+id;
            Axios.get(url).then((response)=>{ 
                this.status = 'pending';  
                console.log(this.status);      
            });   
        },
        unfriend: function(id) {
            let url = '/unfriend/'+id;
            Axios.get(url).then((response)=>{   
                this.status = 'add';   
                console.log(this.status)   ;       
            });           
        },
        accept: function(id){
            let uri = '/acceptfriend/'+id;
            Axios.get(uri).then((response)=>{
                this.status = 'un';   
                console.log(this.status)   ;          
            });
        } ,
        reject: function(id) {
            let uri = '/rejectfriend/'+id;
            Axios.get(uri).then((response)=>{
               this.status = 'add';   
                console.log(this.status)   ;                     
            });
        }
                   
    }
}
</script>