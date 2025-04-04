<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                @if (session()->has('errorMessage'))
                <div class="alert alert-danger text-center shadow rounded w-50">
                    {{session('errorMessage')}}
                </div>
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success text-center shadow rounded w-50">
                    {{session('message')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <main class="container-fluid text-center m-0">
        <section class="row justify-content-center align-items-center mb-5">
            <div class="col-12 d-flex justify-content-center flex-column height-custom-full bg-img">
                <h1>AmazingMart</h1>
            </div>
        </section>
        <section class="row height-custom justify-content-center align-items-center py-5 backgroundgeneral">
                <h2 class="display-3 mb-5">{{__("ui.lastArticles")}}</h2>
            @forelse($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">
                    {{__("ui.noCreate")}}
                </h3>
            </div>
            @endforelse
        </section>
    </main>
</x-layout>