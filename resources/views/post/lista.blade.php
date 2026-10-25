@extends('layout.layout')
@section('tytul', '- Lista postów')
@section('podtytul', 'Posty')
@section('tresc')
    {{-- @dump($posty) --}}
    <table class="table-fixed border border-gray-300 divide-y divide-gray-200 w-full rounded-lg">
        <thead>
            <tr>
                <th scope="col" class="border border-gray-300 px-4 py-2">Lp</th>
                <th scope="col" class="border border-gray-300 px-4 py-2">Tytuł</th>
                <th scope="col" class="border border-gray-300 px-4 py-2">Autor</th>
                <th scope="col" class="border border-gray-300 px-4 py-2">Data utworzenia</th>
            </tr>
        </thead>
        <tbody>
            @isset($posty)
                @if ($posty->count())
                    @foreach ($posty as $post)
                        <tr>
                            <th scope="row" class="border border-gray-300 px-4 py-2">{{$post['id']}}</th>
                            <td class="border border-gray-300 px-4 py-2">{{$post->tytul}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$post->autor}}</td>
                            {{-- <td>{{date('j F Y H:i:s', strtotime($post->created_at))}}</td> --}}
                            <td class="border border-gray-300 px-4 py-2">{{$post->created_at->locale('pl')->setTimeZone('Europe/Warsaw')->translatedFormat('j F Y')}} </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center" colspan="4">Brak postów</td>
                    </tr>
                @endif
            @endisset
        </tbody>
    </table>
@endsection