@extends('layouts.app-user')

@section('css')
<style>
  .container{max-width:1170px; margin:auto;}

.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.incoming_msg_img img {
  max-width:100%;
  border-radius: 50px
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 100%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.msg_send_btn:hover{
  color: black;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 487px;
  overflow-y: auto;
}
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
<div class="md-col-12">
  <h4 class="ml-3">{{$dist->name}}</h4>
</div>
<div class="messaging">
  <div class="inbox_msg">
    <div class="mesgs">
      <div class="msg_history" id="style-3">
        @forelse ($messages as $msg)
          @if($msg->user_id !== $user->id)
          <div class="incoming_msg">
            <div class="incoming_msg_img"> <img src="@if($dist->profile_photo_path=="https://picsum.photos/200")
                  {{$dist->profile_photo_path}}
                  @else
                  http://stop-retour.com/stopretour/public{{$dist->profile_photo_path}}
                  @endif" alt="{{$dist->name}}"> </div>
            <div class="received_msg">
              <div class="received_withd_msg">
                <p>{{$msg->message}}</p>
                <span class="time_date"> {{date('Y-m-d h:i:s A', strtotime($msg->created_at))}}</span></div>
            </div>
          </div>
          @else
          <div class="outgoing_msg">
            <div class="sent_msg">
              <p>{{$msg->message}}</p>
              <span class="time_date"> {{date('Y-m-d h:i:s A', strtotime($msg->created_at))}}</span> </div>
          </div>
          @endif
        @empty
        <div class="alert alert-info" role="alert">
          Pas de message pour afficher
        </div>
        @endforelse
        
      </div>
      <div class="type_msg">
        <form role="form" action="{{route('message.store')}}" method="post">
          @csrf
          @method('PUT')
          <div class="input_msg_write">
            <input type="text" name ="message" class="write_msg" placeholder="Type a message" />
            <button class="msg_send_btn" type="submit"><i class="far fa-paper-plane" aria-hidden="true"></i></button>
            <input type="hidden" name="distin_id" value="{{$dist->id}}">
          </div>
        </form>
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


 