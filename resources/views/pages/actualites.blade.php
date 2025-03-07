<x-layout>
    <div class="bg-gray-100">
        <article class="container mx-auto ">
            <h2 class="font-bold text-third_color uppercase pt-2 text-sm">Actualité</h2>
            <div class="grid grid-cols-6 gap-2 mb-1">
                @foreach ($news as $actualite)
                    <div class="max-w-sm bg-white  overflow-hidden lg:mt-3 p-2">
                        <a href="#">
                            <div class="">
                                <img src="assets/images/cover.jpg" alt="Logo République" class="">
                            </div>
                            <div class="p-2">
                                <p class="text-gray-500 text-xs italic">3 janvier 2025</p>
                                <h2 class="font-bold text-sm">
                                    {{ $actualite->titre_news }}
                                </h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            pagination
        </article>
    </div>
</x-layout>
