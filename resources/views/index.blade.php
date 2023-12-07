@extends('component/master')

@section('title', 'Abalone')
    
@section('content')
    <div>
        <div class="row">
            @include('filter')
        </div>

        <div class="row justify-content-center bg-light">
            <div>
                <table class="table text-center">
                    <thead>
                        <th>No.</th>
                        <th>Sex</th>
                        <th>Length(mm)</th>
                        <th>Diameter(mm)</th>
                        <th>Height(mm)</th>
                        <th>Whole Weight(grams)</th>
                        <th>Shucked Weight(grams)</th>
                        <th>Viscera Weight(grams)</th>
                        <th>Shell Weight(grams)</th>
                        <th>Rings</th>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach ($abalone_data as $data)
                            <tr>
                                <td>{{ $number }}</td>
                                <td>
                                    @if ($data->sex == 'M')
                                        Male
                                    @elseif ($data->sex == 'F')
                                        Female
                                    @else
                                        Infant
                                    @endif
                                </td>
                                <td>{{ $data->length }}</td>
                                <td>{{ $data->diameter }}</td>
                                <td>{{ $data->height }}</td>
                                <td>{{ $data->whole_weight }}</td>
                                <td>{{ $data->shucked_weight }}</td>
                                <td>{{ $data->viscera_weight }}</td>
                                <td>{{ $data->shell_weight }}</td>
                                <td>{{ $data->rings }}</td>
                            </tr>
                            <?php $number++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection