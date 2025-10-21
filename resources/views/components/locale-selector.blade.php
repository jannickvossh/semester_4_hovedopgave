<ul>
    @foreach ($availableLocales as $localeName => $availableLocale)
        <li>
            <a href="{{ route('locale', ['locale' => $availableLocale]) }}">
                {{ $localeName }}
            </a>
        </li>
    @endforeach
</ul>
