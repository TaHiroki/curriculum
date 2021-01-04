<header>
	<div class="container">
        <div class="row justify-content-between">
            <div id="logo" class="col-4">
                <h1>SNS</h1>
            </div>
            @if(Auth::user())
                <div id="user_name" class="col-4 row">
                    <p>{{ Auth::user()->name }}</p>
                    <a class="ml-5" onclick="location.href='logout'">ログアウト</a>
                </div>
            @endif
        </div>
    </div>
</header>
