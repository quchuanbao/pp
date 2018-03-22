@if (count($log))
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">操作日志</span>
                </div>

            </div>
            <div class="portlet-body">

                <div class="table-scrollable">
                    <table class="table table-hover table-bordered ">
                        <thead>
                        <tr>
                            <th> 操作人员 </th>
                            <th> 动作 </th>
                            <th> 描述 </th>
                            {{--<th> 数据 </th>--}}
                            <th> 操作时间 </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($log as $row)
                            <tr>
                                <td> {{ $row->userInfo['name'] }} </td>
                                <td> {{ $row->action }} </td>
                                <td> {{ $row->description }} </td>
                                {{--<td> {{ $row->data }} </td>--}}
                                <td> {{ $row->updated_at }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="text-align: center;">
                        @if (count($log))
                        {{ $log->links() }}
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>
@endif