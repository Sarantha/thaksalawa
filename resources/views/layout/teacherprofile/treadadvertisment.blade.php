<link rel="stylesheet" href="/css/bootstrap.css">
<div class="column displaybox">
    {{-- @include('profile.navprofile') --}}
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/myadvertisment">My Advertisment</a></li>
        </ul>
    </nav>
    <div class="">
        <div class="grayme">
            <div class="row">
                   
                 
                    @if($TeacherPost->count() > 0) 
                    @foreach ($TeacherPost as $item)
                        @include('layout.teacherprofile.myadvertisment') 
                    @endforeach 
                    {{-- @else
                        @include('profile.noresult') --}}
                    @endif
            </div>
            {{ $TeacherPost->links() }}
        </div>
        
    </div>
</div>
