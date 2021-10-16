@extends('layouts.admin')

@section('content')
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-12 col-xl-12 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            @foreach($messages as $message)
                                <li class="{{$message->status == 'unread'? 'active' : ''}}">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://mpng.subpng.com/20180411/rzw/kisspng-user-profile-computer-icons-user-interface-mystique-5aceb0245aa097.2885333015234949483712.jpg" class="rounded-circle user_img">
                                        </div>
                                        <div class="user_info">
                                            <a href="/admin/message_content/{{$message->id}}" style="text-decoration: none"><span>{{$message->fname}}&nbsp;{{$message->lname}}</span></a>
                                            <p>{{$message->body}}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div></div>
        </div>
    </div>
@endsection