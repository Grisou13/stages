@inject("users","App\\User")

@foreach($users::students() as $user)
    @each("tasks.list",$user->logboard,'tasks.none')
@endforeach