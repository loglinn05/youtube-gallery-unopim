<x-admin::layouts>
    <x-slot:title>
        {{ __('youtube-gallery::app.youtube-gallery-page.title') }}
    </x-slot:title>

    <h1 class="yg-font-sans yg-text-xl yg-text-gray-800 dark:yg-text-red-500">
        {{ __('youtube-gallery::app.youtube-gallery-page.title') }}
    </h1>

    @if (session('errors'))
        <div class="flex yg-flex-col yg-gap-2 yg-mt-5">
            @foreach(session('errors')->all() as $error)
                <p class="yg-font-sans yg-text-base yg-font-bold yg-text-rose-600">{{$error}}</p>
            @endforeach
        </div>
    @endif

    <div class="flex flex-col">
        <x-admin::modal>
            <x-slot:toggle>
                <div class="yg-flex yg-justify-end">
                    <my-button label="{{__('youtube-gallery::app.youtube-gallery-page.addition-title')}}"/>
                </div>
            </x-slot>

            <x-slot:header>
                <h2 class="yg-text-xl yg-font-sans yg-text-gray-800 dark:yg-text-white">{{ __('youtube-gallery::app.youtube-gallery-page.addition-title') }}</h2>
            </x-slot>

            <x-slot:content>
                <form class="yg-flex yg-flex-col yg-gap-3"
                      action="{{ route('admin.youtube-gallery.store') }}"
                      method="POST">
                    <my-input name="name"
                              placeholder="{{ __('youtube-gallery::app.youtube-gallery-page.name-placeholder') }}"></my-input>
                    <my-input name="url"
                              placeholder="URL"></my-input>
                    <my-button
                        type="submit"
                        label="{{__('youtube-gallery::app.youtube-gallery-page.store-button-label')}}"
                        class="yg-w-fit yg-ml-auto"></my-button>
                    @csrf
                </form>
            </x-slot>
        </x-admin::modal>

        <x-admin::datagrid src="{{ route('admin.youtube-gallery.index') }}">
        </x-admin::datagrid>
    </div>

    @push('styles')
        @unoPimVite([
          'src/Resources/assets/css/app.css',
          'src/Resources/assets/js/app.js'
        ], 'youtube-gallery')
    @endpush
</x-admin::layouts>
