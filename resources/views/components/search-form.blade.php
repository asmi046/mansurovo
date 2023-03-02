<form method="GET" action="{{route('search')}}">
    <input type="text" name="search" value="{{request()->input("search")}}" placeholder="Поиск">
    <button type="submit"></button>
</form>
