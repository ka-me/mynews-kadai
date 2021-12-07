@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <hr color="#c0c0c0">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="profile">
                            <h3>プロフィール</h3>
                            <p class="profile-item">氏名：<br>{{ $profile->name }}</p>
                            <p class="profile-item">性別：<br>{{ $profile->gender }}</p>
                            <p class="profile-item">趣味：<br>{{ $profile->hobby }}</p>
                            <p class="profile-item">自己紹介：<br>{{ $profile->introduction }}</p>
                        </div>
                    </div>
                </div>
                <hr color="#c0c0c0">
            </div>
        </div>
    </div>
@endsection