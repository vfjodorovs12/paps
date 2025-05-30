
@extends('web::layouts.app')

@section('page_title', 'Альянс статистика')

@section('content')
    <div class="container">
        <h1>Альянс статистика</h1>
        @if($stats->isEmpty())
            <p>Нет данных для отображения.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Форум</th>
                        <th>PAPS 90d</th>
                        <th>PAPS 60d</th>
                        <th>PAPS 30d</th>
                        <th>Last on Forums</th>
                        <th>Last on Jabber</th>
                        <th>Last on Mumble</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stats as $forum_name => $rows)
                        <tr>
                            <td>{{ $forum_name }}</td>
                            <td>{{ $rows->first()->paps_90d ?? '-' }}</td>
                            <td>{{ $rows->first()->paps_60d ?? '-' }}</td>
                            <td>{{ $rows->first()->paps_30d ?? '-' }}</td>
                            <td>{{ $rows->first()->last_on_forums ?? '-' }}</td>
                            <td>{{ $rows->first()->last_on_jabber ?? '-' }}</td>
                            <td>{{ $rows->first()->last_on_mumble ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

