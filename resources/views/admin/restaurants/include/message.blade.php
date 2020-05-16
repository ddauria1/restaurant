<style>
    .error,.success{ font-weight: bold; }
    .error{ color: red; }
    .success{ color: green; }
</style>
@if(isset($error))
    @if($error):
    <span class="error">ERROR!</span><br>
    @else
        <span class="success">SUCCESS!</span><br>
    @endif
@endif