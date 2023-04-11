<x-profile :sharedData="$sharedData" doctitle="Who {{$sharedData['username']}} Follows">
    
    @include('profile-following-only')

</x-profile>