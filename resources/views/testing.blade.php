<h1>ini halaman testing</h1>

<form action="{{ route('testingdata') }}" method="post">
    @csrf
    <input type="date" name="date">
    {{-- <input type="text" name="nama"> --}}
    <input type="submit" value="submit">
</form>