@extends('layouts.app')

@section('title')
    {{ __('Chat')}} | {{ config('app.name') }}
@endsection

@section('style')
    <style>
      .chat {
        display: flex;
        flex-direction: column;
        max-height: 300px; /* Atur tinggi maksimum chat box */
        overflow-y: auto; /* Aktifkan scrollbar jika konten lebih panjang dari tinggi maksimum */
        scroll-behavior: smooth; 
      }

      .user-1, .user-2 {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
      }

      .user-1 .avatar, .user-2 .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
      }

      .user-1 .message, .user-2 .message {
        background-color: #DCF8C6; /* Warna latar belakang pesan */
        padding: 10px;
        border-radius: 10px;
        /* max-width: 70%; */
      }

      /* Gaya khusus untuk User 1 dan User 2 */
      .user-1 {
        align-self: flex-start;
      }

      .user-2 {
        align-self: flex-end;
      }

      /* Gaya khusus untuk Avatar */
      .user-1 .avatar img, .user-2 .avatar img {
        width: 100%;
        height: 100%;
      }

      .message-time {
        font-size: 12px;
        color: #888; /* Warna teks waktu */
        margin-top: 5px;
      }

    </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-header">Chat Pannel</div>
            
          </div>        
        </div>
        
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-header" style="background-color: #000000; color: #ffff;">Room Chat</div>
            <div class="card-body">
              <div class="chat">
                <div class="user-1">
                  <div class="avatar">
                    <img src="images/logo.svg" alt="User 1 Avatar">
                  </div>
                  <div class="message">
                    <p>Ini pesan dari User adalah terimakasi kepada user 1</p>
                    <span class="message-time">10:30 AM</span>
                  </div>
                </div>
                <div class="user-2">
                  <div class="message">
                    <p>Ini pesan dari User adalah terimakasi kepada user 2</p>
                    <span class="message-time">10:30 AM</span>
                  </div>
                  <div class="avatar">
                    <img src="images/logo.svg" alt="User 1 Avatar">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <form id="chat-form">
                    <div class="input-group">
                        <textarea type="text" id="message" class="form-control" placeholder="Ketik pesan..."></textarea>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>        
        </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
      $( document ).ready(function() {
          $.ajax({
              type: 'GET', //THIS NEEDS TO BE GET
              url: "{{ route('get-question-answer-openai') }}",
              success: function (data) {
                  console.log(data);
              },
          });
      });
    </script>
@endsection