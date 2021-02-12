@extends('layouts.app-user')

@section('css')
<style>
  .container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 100%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.recent_heading {float: left; width:40%;}

.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 1.5%;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.chat_list:hover {
  background:#ebebeb;
}
.inbox_chat { height: 550px; overflow-y: scroll;}
.messaging { padding: 0 0 50px 0;}
#style-3::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-3::-webkit-scrollbar-thumb
{
	background-color: #000000;
}

</style>
@stop

@section('content')

<div class="messaging">
  <div class="inbox_msg">
    <div class="inbox_people">
      <div class="headind_srch">
        <div class="recent_heading">
          <h4>Recent</h4>
        </div>
        
      </div>
      <div class="inbox_chat" id="style-3">
        @php
            $chats = array();
        @endphp
        @forelse ($users as $chat)
        @php
            $client="";
            if ($chat->user->id !== Auth::id()){
                if(!in_array($chat->user->id, $chats)){
                    $client=$chat->user;
                    array_push($chats,$chat->user->id);
                }
                
            }else{
                if(!in_array($chat->distin->id, $chats)){
                    $client=$chat->distin;
                    array_push($chats,$chat->distin->id);
                }
            }
        @endphp
        @if($client !== "")
          <div class="chat_list">
            <a href="{{route("message.show",['dist'=>$client->id])}}">
              <div class="chat_people">
                <div class="chat_img"> <img src="@if($client->profile_photo_path=="https://picsum.photos/200")
                  {{$client->profile_photo_path}}
                  @else
                  http://stop-retour.com/stopretour/public{{$client->profile_photo_path}}
                  @endif
                  " alt="{{$client->name}}" style=" border-radius: 50px; width: 60px; "> </div>
                <div class="chat_ib">
                  <h4>{{$client->name}}</h4>
                </div>
              </div>
            </a>
          </div>
          @endif
        @empty
        <div class="alert alert-info" role="alert">
          pas de discussion pour afficher
        </div>
        @endforelse
        
      </div>
    </div>
    
  </div>
  
  
  
  
</div>

@stop
@section('js')
<script>
  $(document).ready(function() { 
        $("#style-3").scrollTop($("#style-3").height()); 
  }); 
</script>
@endsection