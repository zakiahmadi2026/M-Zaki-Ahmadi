@extends('layouts.app')
@section('title', 'Dashboard | IT Student Portal')
@section('content')
<div class="dashboard-shell">
    <aside class="sidebar">
        <a class="side-link active" href="{{ route('dashboard') }}">▦ &nbsp; Dashboard</a>
        <a class="side-link" href="#add-book">▣ &nbsp; Add Book</a>
        <a class="side-link" href="#my-books">▤ &nbsp; My Books</a>
        <form method="POST" action="{{ route('logout') }}" class="side-logout">
            @csrf
            <button class="side-link" type="submit">⇥ &nbsp; Logout</button>
        </form>
    </aside>

    <main class="dashboard-content">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="status">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="portal-card mb-4" id="add-book">
            <h1 class="section-title">▣ &nbsp; Add a New Book</h1>
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="title">Title <span class="required">*</span></label>
                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" maxlength="150" required>
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="author">Author <span class="required">*</span></label>
                        <input class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}" maxlength="100" required>
                        @error('author')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="pages">Pages <span class="required">*</span></label>
                        <input class="form-control @error('pages') is-invalid @enderror" id="pages" name="pages" type="number" value="{{ old('pages') }}" min="1" max="10000" required>
                        @error('pages')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-teal w-100" type="submit">▣ &nbsp; Save Book</button>
                    </div>
                </div>
            </form>
        </section>

        <section class="portal-card" id="my-books">
            <h2 class="section-title">▤ &nbsp; My Books <span class="count-pill">{{ $books->count() }}</span></h2>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead><tr><th>No.</th><th>Title</th><th>Author</th><th>Pages</th><th>Actions</th></tr></thead>
                    <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->pages }}</td>
                            <td>
                                <form method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('Delete this book?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-secondary py-4">You have not added any books yet.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
