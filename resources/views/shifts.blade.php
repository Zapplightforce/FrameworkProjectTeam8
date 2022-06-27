<div class="card-header"><p class="card-header-title">Shifts</p></div>
<div class="table is-narrow is-hoverable is-bordered">
    <table>
        <thead>
        <tr>
            <th>Shift</th>
            <th>Output In Metres</th>
            <th>Output In Tones</th>
            <th>Availability</th>
            <th>Performance</th>
            <th>Quality</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shift)
            <tr>
                <td>{{$shift->shift}}</td>
                <td style="{{$shift->output_metres < 500 ? 'background: #F67280; color: white' : '' }}">{{$shift->output_metres}}</td>
                <td style="{{$shift->output_tones < 800 ? 'background: #F67280; color: white' : '' }}">{{$shift->output_tones}}</td>
                <td style="{{$shift->availability < 80 ? 'background: #F67280; color: white' : '' }}">{{$shift->availability}}</td>
                <td style="{{$shift->performance < 80 ? 'background: #F67280; color: white' : '' }}">{{$shift->performance}}%</td>
                <td>{{$shift->quality}}%</td>
            </tr>
        @endforeach
        <tr>
            <td>Total</td>
            <td>{{$shifts->sum('output_metres')}}</td>
            <td>{{$shifts->sum('output_tones')}}</td>
            <td>{{$shifts->sum('availability')}}</td>
            <td>{{number_format((float)$shifts->sum('performance') / $shifts->count(), 2, '.','')}}%</td>
            <td>{{number_format((float)$shifts->sum('quality') / $shifts->count(), 2, '.','')}}%</td>
        </tbody>
    </table>
</div>
