<h1> lista de libros</h1>
<ul>
@foreach ($books as $book)
<li>
    <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
</li>
@andforeach
</ul>