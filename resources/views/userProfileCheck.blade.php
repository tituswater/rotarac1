<div class="col-md-12">
    @if($detail->gender == null || $detail->nickname == null )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Welcome {{ Auth::user()->nickname == null ? Auth::user()->name :
                        Auth::user()->nickname }} !</h4>
            <p>Aww yeah, it's nice having you here. Please complete your profile</p>
            {{--                        <hr>--}}
            <p class="mb-0"><a href="{{route('users.update',Auth::user()->id)}}" class="btn btn-danger">Okay</a></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if($detail->email_verified_at == null|| $detail->gender == nul)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Welcome {{ Auth::user()->nickname == null ? Auth::user()->name :
                        Auth::user()->nickname }} !</h4>
            <p>Oops! You haven't verify your email. Please do so now</p>
                {{--                        <hr>--}}
                <p  class="mb-0"> <a href="#" class="btn btn-danger">Okay</a> </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif
</div>
