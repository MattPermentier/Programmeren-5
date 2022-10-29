<form action="{{ "/category" }}" method="get">
    @csrf
    <input class="btn btn-primary" type="submit" value="All-Road" name="category">
    <input class="btn btn-primary" type="submit" value="Naked" name="category">
    <input class="btn btn-primary" type="submit" value="Sport" name="category">
    <input class="btn btn-primary" type="submit" value="Super-Sport" name="category">
    <input class="btn btn-primary" type="submit" value="Tour" name="category">
    <input class="btn btn-primary" type="submit" value="Sport-Tour" name="category">
</form>

<form action="{{ route('bikes.index') }}" type="get" class="input-group" style="margin-top: 10px">
    <input type="search" name="search">
    <input type="submit" class="btn btn-primary" value="Search">
</form>
